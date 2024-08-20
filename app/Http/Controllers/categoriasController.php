<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecategoriasRequest;
use App\Http\Requests\UpdatecategoriasRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\categoriasRepository;
use Illuminate\Http\Request;
use Flash;

class categoriasController extends AppBaseController
{
    /** @var categoriasRepository $categoriasRepository*/
    private $categoriasRepository;

    public function __construct(categoriasRepository $categoriasRepo)
    {
        $this->categoriasRepository = $categoriasRepo;
        $this->middleware('can:Crear categoria')->only('create');
    }

    /**
     * Display a listing of the categorias.
     */
    public function index(Request $request)
    {
        $categorias = $this->categoriasRepository->paginate(10);

        return view('categorias.index')
            ->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new categorias.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created categorias in storage.
     */
    public function store(CreatecategoriasRequest $request)
    {
        $input = $request->all();

        $categorias = $this->categoriasRepository->create($input);

        Flash::success('Categoria guardada exitosamente.');

        return redirect(route('categorias.index'));
    }

    /**
     * Display the specified categorias.
     */
    public function show($id)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        return view('categorias.show')->with('categorias', $categorias);
    }

    /**
     * Show the form for editing the specified categorias.
     */
    public function edit($id)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        return view('categorias.edit')->with('categorias', $categorias);
    }

    /**
     * Update the specified categorias in storage.
     */
    public function update($id, UpdatecategoriasRequest $request)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        $categorias = $this->categoriasRepository->update($request->all(), $id);

        Flash::success('Categorias updated successfully.');

        return redirect(route('categorias.index'));
    }

    /**
     * Remove the specified categorias from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        $this->categoriasRepository->delete($id);

        Flash::success('Categorias deleted successfully.');

        return redirect(route('categorias.index'));
    }
}
