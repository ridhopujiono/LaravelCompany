<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCeoRequest;
use App\Http\Requests\UpdateCeoRequest;
use App\Repositories\CeoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CeoController extends AppBaseController
{
    /** @var  CeoRepository */
    private $ceoRepository;

    public function __construct(CeoRepository $ceoRepo)
    {
        $this->ceoRepository = $ceoRepo;
    }

    /**
     * Display a listing of the Ceo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ceos = $this->ceoRepository->all();

        return view('ceos.index')
            ->with('ceos', $ceos);
    }

    /**
     * Show the form for creating a new Ceo.
     *
     * @return Response
     */
    public function create()
    {
        return view('ceos.create');
    }

    /**
     * Store a newly created Ceo in storage.
     *
     * @param CreateCeoRequest $request
     *
     * @return Response
     */
    public function store(CreateCeoRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_ceo'), $imageName);

            $path = "foto_ceo/" . $imageName;
        }

        $input['foto'] = $path;

        $ceo = $this->ceoRepository->create($input);

        Flash::success('Ceo saved successfully.');

        return redirect(route('ceos.index'));
    }

    /**
     * Display the specified Ceo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ceo = $this->ceoRepository->find($id);

        if (empty($ceo)) {
            Flash::error('Ceo not found');

            return redirect(route('ceos.index'));
        }

        return view('ceos.show')->with('ceo', $ceo);
    }

    /**
     * Show the form for editing the specified Ceo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ceo = $this->ceoRepository->find($id);

        if (empty($ceo)) {
            Flash::error('Ceo not found');

            return redirect(route('ceos.index'));
        }

        return view('ceos.edit')->with('ceo', $ceo);
    }

    /**
     * Update the specified Ceo in storage.
     *
     * @param int $id
     * @param UpdateCeoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCeoRequest $request)
    {
        $ceo = $this->ceoRepository->find($id);

        if (empty($ceo)) {
            Flash::error('Ceo not found');

            return redirect(route('ceos.index'));
        }
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_employee'), $imageName);

            $path = "foto_employee/" . $imageName;
            $input['foto'] = $path;
        }
        $ceo = $this->ceoRepository->update($input, $id);

        Flash::success('Ceo updated successfully.');

        return redirect(route('ceos.index'));
    }

    /**
     * Remove the specified Ceo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ceo = $this->ceoRepository->find($id);

        if (empty($ceo)) {
            Flash::error('Ceo not found');

            return redirect(route('ceos.index'));
        }

        $this->ceoRepository->delete($id);

        Flash::success('Ceo deleted successfully.');

        return redirect(route('ceos.index'));
    }
}
