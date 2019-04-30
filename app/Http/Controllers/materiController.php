<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemateriRequest;
use App\Http\Requests\UpdatemateriRequest;
use App\Repositories\materiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\User;
use Flash;
use Response;

class materiController extends AppBaseController
{
    /** @var  materiRepository */
    private $materiRepository;

    public function __construct(materiRepository $materiRepo)
    {
        $this->materiRepository = $materiRepo;

    }

    /**
     * Display a listing of the materi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $materis = $this->materiRepository->all();

        return view('materis.index')
            ->with('materis', $materis);


        $pengguna = pengguna::pluck('role','userid');
    }

    /**
     * Show the form for creating a new materi.
     *
     * @return Response
     */
    public function create()
    {
        $admins = User::where('role_id', 2)->get();
        $tutors = User::where('role_id', 3)->get();
        return view('materis.create', compact('admins', 'tutors'));
        // $pengguna = pengguna::orderBy('role')->pluck('role', 'userid');
    }

    /**
     * Store a newly created materi in storage.
     *
     * @param CreatemateriRequest $request
     *
     * @return Response
     */
    public function store(CreatemateriRequest $request)
    {
        $input = $request->all();

        $materi = $this->materiRepository->create($input);

        Flash::success('Materi saved successfully.');

        return redirect(route('materis.index'));
    }

    /**
     * Display the specified materi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materi = $this->materiRepository->find($id);

        if (empty($materi)) {
            Flash::error('Materi not found');

            return redirect(route('materis.index'));
        }

        return view('materis.show')->with('materi', $materi);
    }

    /**
     * Show the form for editing the specified materi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materi = $this->materiRepository->find($id);

        if (empty($materi)) {
            Flash::error('Materi not found');

            return redirect(route('materis.index'));
        }

        $admins = User::where('role_id', 2)->get();
        $tutors = User::where('role_id', 3)->get();
        return view('materis.edit', compact('admins','tutors'))->with('materi', $materi);
    }

    /**
     * Update the specified materi in storage.
     *
     * @param int $id
     * @param UpdatemateriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemateriRequest $request)
    {
        $materi = $this->materiRepository->find($id);

        if (empty($materi)) {
            Flash::error('Materi not found');

            return redirect(route('materis.index'));
        }

        $materi = $this->materiRepository->update($request->all(), $id);

        Flash::success('Materi updated successfully.');

        return redirect(route('materis.index'));
    }

    /**
     * Remove the specified materi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materi = $this->materiRepository->find($id);

        if (empty($materi)) {
            Flash::error('Materi not found');

            return redirect(route('materis.index'));
        }

        $this->materiRepository->delete($id);

        Flash::success('Materi deleted successfully.');

        return redirect(route('materis.index'));
    }
}
