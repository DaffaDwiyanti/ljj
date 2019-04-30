<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepenggunaRequest;
use App\Http\Requests\UpdatepenggunaRequest;
use App\Repositories\penggunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class penggunaController extends AppBaseController
{
    /** @var  penggunaRepository */
    private $penggunaRepository;

    public function __construct(penggunaRepository $penggunaRepo)
    {
        $this->penggunaRepository = $penggunaRepo;
    }

    /**
     * Display a listing of the pengguna.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $penggunas = $this->penggunaRepository->all();

        return view('penggunas.index')
            ->with('penggunas', $penggunas);
    }

    /**
     * Show the form for creating a new pengguna.
     *
     * @return Response
     */
    public function create()
    {
        return view('penggunas.create');

    }

    /**
     * Store a newly created pengguna in storage.
     *
     * @param CreatepenggunaRequest $request
     *
     * @return Response
     */
    public function store(CreatepenggunaRequest $request)
    {
        $input = $request->all();

        $pengguna = $this->penggunaRepository->create($input);

        Flash::success('Pengguna saved successfully.');

        return redirect(route('penggunas.index'));
    }

    /**
     * Display the specified pengguna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        return view('penggunas.show')->with('pengguna', $pengguna);
    }

    /**
     * Show the form for editing the specified pengguna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        return view('penggunas.edit')->with('pengguna', $pengguna);
    }

    /**
     * Update the specified pengguna in storage.
     *
     * @param int $id
     * @param UpdatepenggunaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepenggunaRequest $request)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        $pengguna = $this->penggunaRepository->update($request->all(), $id);

        Flash::success('Pengguna updated successfully.');

        return redirect(route('penggunas.index'));
    }

    /**
     * Remove the specified pengguna from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        $this->penggunaRepository->delete($id);

        Flash::success('Pengguna deleted successfully.');

        return redirect(route('penggunas.index'));
    }
}
