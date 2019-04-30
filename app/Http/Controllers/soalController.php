<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesoalRequest;
use App\Http\Requests\UpdatesoalRequest;
use App\Repositories\soalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\materi;
use Flash;
use Response;

class soalController extends AppBaseController
{
    /** @var  soalRepository */
    private $soalRepository;

    public function __construct(soalRepository $soalRepo)
    {
        $this->soalRepository = $soalRepo;
    }

    /**
     * Display a listing of the soal.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $soals = $this->soalRepository->all();

        return view('soals.index')
            ->with('soals', $soals);
    }

    /**
     * Show the form for creating a new soal.
     *
     * @return Response
     */
    public function create()
    {
        $materis = materi::all();
        return view('soals.create', compact('materis'));
    }

    /**
     * Store a newly created soal in storage.
     *
     * @param CreatesoalRequest $request
     *
     * @return Response
     */
    public function store(CreatesoalRequest $request)
    {
        $input = $request->all();

        $soal = $this->soalRepository->create($input);

        Flash::success('Soal saved successfully.');

        return redirect(route('soals.index'));
    }

    /**
     * Display the specified soal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $soal = $this->soalRepository->find($id);

        if (empty($soal)) {
            Flash::error('Soal not found');

            return redirect(route('soals.index'));
        }

        return view('soals.show')->with('soal', $soal);
    }

    /**
     * Show the form for editing the specified soal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $soal = $this->soalRepository->find($id);

        if (empty($soal)) {
            Flash::error('Soal not found');

            return redirect(route('soals.index'));
        }
        $materis = materi::all();

        return view('soals.edit', compact('materis'))->with('soal', $soal);
    }

    /**
     * Update the specified soal in storage.
     *
     * @param int $id
     * @param UpdatesoalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesoalRequest $request)
    {
        $soal = $this->soalRepository->find($id);

        if (empty($soal)) {
            Flash::error('Soal not found');

            return redirect(route('soals.index'));
        }

        $soal = $this->soalRepository->update($request->all(), $id);

        Flash::success('Soal updated successfully.');

        return redirect(route('soals.index'));
    }

    /**
     * Remove the specified soal from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $soal = $this->soalRepository->find($id);

        if (empty($soal)) {
            Flash::error('Soal not found');

            return redirect(route('soals.index'));
        }

        $this->soalRepository->delete($id);

        Flash::success('Soal deleted successfully.');

        return redirect(route('soals.index'));
    }
}
