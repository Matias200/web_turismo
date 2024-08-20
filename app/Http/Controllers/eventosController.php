<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateeventosRequest;
use App\Http\Requests\UpdateeventosRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\eventosRepository;
use Illuminate\Http\Request;
use Flash;
use App\models\user;
use App\models\categorias;

use App\Models\eventos;
use Illuminate\Support\Facades\DB;



class eventosController extends AppBaseController
{
    /** @var eventosRepository $eventosRepository*/
    private $eventosRepository;

    public function __construct(eventosRepository $eventosRepo)
    {
        $this->eventosRepository = $eventosRepo;
        $this->middleware('can:Crear evento')->only('create');
        $this->middleware('can:Eliminar evento')->only('destroy');
    }

    /**
     * Display a listing of the eventos.
     */
    public function index(Request $request)
    {
        // $eventos = $this->eventosRepository->paginate(10);

        // return view('eventos.index')
        //     ->with('eventos', $eventos);

        $eventos = eventos::paginate(10); // ajusta el número según tus necesidades
        $cats = categorias::pluck ('descripcion', 'id');

        return view('eventos.index', compact('eventos', 'cats'));
    }

    /**
     * Show the form for creating a new eventos.
     */
    public function create()
    {
        $users = User::pluck ('name', 'id');
        $cats = categorias::pluck ('descripcion', 'id');
        $eventos = new eventos;
    

        return view('eventos.create', compact ('users','cats', 'eventos'));

    }

    /**
     * Store a newly created eventos in storage.
     */
    public function store(CreateeventosRequest $request)
    {

        $input = $request->all();
        $input['autor'] = auth()->user()->name;

        $eventos = $this->eventosRepository->create($input);

        Flash::success('Evento guardado exitosamente.');

        return redirect(route('eventos.index'));
    }

    /**
     * Display the specified eventos.
     */
    public function show($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error('Eventos not found');

            return redirect(route('eventos.index'));
        }

        return view('eventos.show')->with('eventos', $eventos);
    }

    /**
     * Show the form for editing the specified eventos.
     */
    public function edit($id)
    {
        $users = User::pluck('name', 'id');
        $cats = Categorias::pluck('descripcion', 'id');
        $eventos = Eventos::find($id);
        $currentUser = auth()->user();
        
        return view ('eventos.edit', compact ('eventos', 'users', 'cats'));
        
        // $eventos = $this->eventosRepository->find($id);

        // if (empty($eventos)) {
        //     Flash::error('Eventos not found');

        //     return redirect(route('eventos.index'));
        // }

        // return view('eventos.edit')->with('eventos', $eventos);
    }

    /**
     * Update the specified eventos in storage.
     */
    public function update($id, UpdateeventosRequest $request)
    {
        // $eventos = $this->eventosRepository->find($id);
        // $input['autor'] = auth()->user()->name;
        // $currentUser = auth()->user();
        $eventos = Eventos::findOrFail($id);
        // $eventos->fill($validation);
        $eventos->autor = auth()->user()->name;
        $eventos->save();



        if (empty($eventos)) {
            Flash::error('Eventos not found');

            return redirect(route('eventos.index'));
        }

        $eventos = $this->eventosRepository->update($request->all(), $id);

            Flash::success('Eventos modificado exitosamente.');

        return redirect(route('eventos.index'));

        $eventos = $this->eventosRepository->find($id);

    }

    /**
     * Remove the specified eventos from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error('Eventos not found');

            return redirect(route('eventos.index'));
        }

        $this->eventosRepository->delete($id);

        Flash::success('Eventos eliminado exitosamente.');

        return redirect(route('eventos.index'));
    }

    
}
