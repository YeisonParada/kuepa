<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\estudiante;
use Illuminate\Http\Request;

class estudiantesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $estudiantes = estudiante::where('Nombres', 'LIKE', "%$keyword%")
                ->orWhere('Apellidos', 'LIKE', "%$keyword%")
                ->orWhere('Email', 'LIKE', "%$keyword%")
                ->orWhere('Telefono', 'LIKE', "%$keyword%")
                ->orWhere('Programa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $estudiantes = estudiante::latest()->paginate($perPage);
        }

        return view('estudiantes.index', compact('estudiantes'));
        //return view('estudiantes.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        estudiante::updateOrCreate(
            [
                'Email' => $requestData["Email"]
            ],
            [
                'Nombres' => $requestData["Nombres"],
                'Apellidos' => $requestData["Apellidos"],
                'Telefono' => $requestData["Telefono"],
                'Programa' => $requestData["Programa"],
                'Contacto' => 1
            ]
        );

        return redirect('estudiantes/create')->with('flash_message', '¡Gracias por registrarte!, pronto estaremos en contacto contigo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id)
    {

        estudiante::where('id', $id)->update(['Contacto' => 0]);
        return redirect('estudiantes')->with('flash_message', '¡Estudiante actualizado!');
    }
}
