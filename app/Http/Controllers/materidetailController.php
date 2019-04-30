<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemateridetailRequest;
use App\Http\Requests\UpdatemateridetailRequest;
use App\Repositories\materidetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class materidetailController extends AppBaseController
{
    /** @var  materidetailRepository */
    private $materidetailRepository;

    public function __construct(materidetailRepository $materidetailRepo)
    {
        $this->materidetailRepository = $materidetailRepo;
    }

    /**
     * Display a listing of the materidetail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $materidetails = $this->materidetailRepository->all();

        return view('materidetails.index')
            ->with('materidetails', $materidetails);
    }

    /**
     * Show the form for creating a new materidetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('materidetails.create');
    }

    /**
     * Store a newly created materidetail in storage.
     *
     * @param CreatemateridetailRequest $request
     *
     * @return Response
     */
    public function store(CreatemateridetailRequest $request)
    {
        $input = $request->all();

        $materidetail = $this->materidetailRepository->create($input);

        Flash::success('Materidetail saved successfully.');

        return redirect(route('materidetails.index'));
    }

    /**
     * Display the specified materidetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materidetail = $this->materidetailRepository->find($id);

        if (empty($materidetail)) {
            Flash::error('Materidetail not found');

            return redirect(route('materidetails.index'));
        }

        return view('materidetails.show')->with('materidetail', $materidetail);
    }

    /**
     * Show the form for editing the specified materidetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materidetail = $this->materidetailRepository->find($id);

        if (empty($materidetail)) {
            Flash::error('Materidetail not found');

            return redirect(route('materidetails.index'));
        }

        return view('materidetails.edit')->with('materidetail', $materidetail);
    }

    /**
     * Update the specified materidetail in storage.
     *
     * @param int $id
     * @param UpdatemateridetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemateridetailRequest $request)
    {
        $materidetail = $this->materidetailRepository->find($id);

        if (empty($materidetail)) {
            Flash::error('Materidetail not found');

            return redirect(route('materidetails.index'));
        }

        $materidetail = $this->materidetailRepository->update($request->all(), $id);

        Flash::success('Materidetail updated successfully.');

        return redirect(route('materidetails.index'));
    }

    /**
     * Remove the specified materidetail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materidetail = $this->materidetailRepository->find($id);

        if (empty($materidetail)) {
            Flash::error('Materidetail not found');

            return redirect(route('materidetails.index'));
        }

        $this->materidetailRepository->delete($id);

        Flash::success('Materidetail deleted successfully.');

        return redirect(route('materidetails.index'));
    }
}
