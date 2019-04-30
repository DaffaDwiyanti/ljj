<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepenugasanRequest;
use App\Http\Requests\UpdatepenugasanRequest;
use App\Repositories\penugasanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\materi;
use Flash;
use Response;

class penugasanController extends AppBaseController
{
    /** @var  penugasanRepository */
    private $penugasanRepository;

    public function __construct(penugasanRepository $penugasanRepo)
    {
        $this->penugasanRepository = $penugasanRepo;
    }

    /**
     * Display a listing of the penugasan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $penugasans = $this->penugasanRepository->all();

        return view('penugasans.index')
            ->with('penugasans', $penugasans);
    }

    /**
     * Show the form for creating a new penugasan.
     *
     * @return Response
     */
    public function create()
    {
        $materis = materi::all();
        return view('penugasans.create', compact('materis'));
    }

    /**
     * Store a newly created penugasan in storage.
     *
     * @param CreatepenugasanRequest $request
     *
     * @return Response
     */
    public function store(CreatepenugasanRequest $request)
    {
        $input = $request->all();

        $penugasan = $this->penugasanRepository->create($input);

        Flash::success('Penugasan saved successfully.');

        return redirect(route('penugasans.index'));
    }

    /**
     * Display the specified penugasan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $penugasan = $this->penugasanRepository->find($id);

        if (empty($penugasan)) {
            Flash::error('Penugasan not found');

            return redirect(route('penugasans.index'));
        }

        return view('penugasans.show')->with('penugasan', $penugasan);
    }

    /**
     * Show the form for editing the specified penugasan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $penugasan = $this->penugasanRepository->find($id);

        if (empty($penugasan)) {
            Flash::error('Penugasan not found');

            return redirect(route('penugasans.index'));
        }

        $materis = materi::all();
        return view('penugasans.edit', compact('materis'))->with('penugasan', $penugasan);
    }

    /**
     * Update the specified penugasan in storage.
     *
     * @param int $id
     * @param UpdatepenugasanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepenugasanRequest $request)
    {
        $penugasan = $this->penugasanRepository->find($id);

        if (empty($penugasan)) {
            Flash::error('Penugasan not found');

            return redirect(route('penugasans.index'));
        }

        $penugasan = $this->penugasanRepository->update($request->all(), $id);

        Flash::success('Penugasan updated successfully.');

        return redirect(route('penugasans.index'));
    }

    /**
     * Remove the specified penugasan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $penugasan = $this->penugasanRepository->find($id);

        if (empty($penugasan)) {
            Flash::error('Penugasan not found');

            return redirect(route('penugasans.index'));
        }

        $this->penugasanRepository->delete($id);

        Flash::success('Penugasan deleted successfully.');

        return redirect(route('penugasans.index'));
    }
}
