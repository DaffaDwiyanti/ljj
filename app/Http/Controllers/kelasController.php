<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatekelasRequest;
use App\Http\Requests\UpdatekelasRequest;
use App\Repositories\kelasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class kelasController extends AppBaseController
{
    /** @var  kelasRepository */
    private $kelasRepository;

    public function __construct(kelasRepository $kelasRepo)
    {
        $this->kelasRepository = $kelasRepo;
    }

    /**
     * Display a listing of the kelas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $kelas = $this->kelasRepository->all();

        return view('kelas.index')
            ->with('kelas', $kelas);
    }

    /**
     * Show the form for creating a new kelas.
     *
     * @return Response
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created kelas in storage.
     *
     * @param CreatekelasRequest $request
     *
     * @return Response
     */
    public function store(CreatekelasRequest $request)
    {
        $input = $request->all();

        $kelas = $this->kelasRepository->create($input);

        Flash::success('Kelas saved successfully.');

        return redirect(route('kelas.index'));
    }

    /**
     * Display the specified kelas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kelas = $this->kelasRepository->find($id);

        if (empty($kelas)) {
            Flash::error('Kelas not found');

            return redirect(route('kelas.index'));
        }

        return view('kelas.show')->with('kelas', $kelas);
    }

    /**
     * Show the form for editing the specified kelas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kelas = $this->kelasRepository->find($id);

        if (empty($kelas)) {
            Flash::error('Kelas not found');

            return redirect(route('kelas.index'));
        }

        return view('kelas.edit')->with('kelas', $kelas);
    }

    /**
     * Update the specified kelas in storage.
     *
     * @param int $id
     * @param UpdatekelasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatekelasRequest $request)
    {
        $kelas = $this->kelasRepository->find($id);

        if (empty($kelas)) {
            Flash::error('Kelas not found');

            return redirect(route('kelas.index'));
        }

        $kelas = $this->kelasRepository->update($request->all(), $id);

        Flash::success('Kelas updated successfully.');

        return redirect(route('kelas.index'));
    }

    /**
     * Remove the specified kelas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kelas = $this->kelasRepository->find($id);

        if (empty($kelas)) {
            Flash::error('Kelas not found');

            return redirect(route('kelas.index'));
        }

        $this->kelasRepository->delete($id);

        Flash::success('Kelas deleted successfully.');

        return redirect(route('kelas.index'));
    }
}
