<?php

namespace App\Http\Controllers;
//use App\Models\Incidente;

use App\Incidente;
use Illuminate\Http\Request;


/**
 * Class IncidenteController
 * @package App\Http\Controllers
 */
class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidentes = Incidente::paginate();

        return view('incidente.index', compact('incidente'))
            ->with('i', (request()->input('page', 1) - 1) * $incidentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incidente = new Incidente();
        return view('incidente.create', compact('incidente'));
        //return 'Crear incidente';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Incidente::$rules);

        $incidente = Incidente::create($request->all());

        return redirect()->route('incidentes.index')
            ->with('success', 'Incidente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incidente = Incidente::find($id);

        return view('incidente.show', compact('incidente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incidente = Incidente::find($id);

        return view('incidente.edit', compact('incidente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Incidente $incidente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidente $incidente)
    {
        request()->validate(Incidente::$rules);

        $incidente->update($request->all());

        return redirect()->route('incidentes.index')
            ->with('success', 'Incidente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $incidente = Incidente::find($id)->delete();

        return redirect()->route('incidentes.index')
            ->with('success', 'Incidente deleted successfully');
    }
}
