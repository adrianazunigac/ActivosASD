<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Activo;
use App\TipoActivo;
use App\EstadoActivo;
use Illuminate\Http\Request;
use Session;

class ActivoController extends Controller
{
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
            $activo = Activo::where('numero', 'LIKE', "%$keyword%")
				->orWhere('nombre', 'LIKE', "%$keyword%")
				->orWhere('descripcion', 'LIKE', "%$keyword%")
				->orWhere('tipo', 'LIKE', "%$keyword%")
				->orWhere('peso', 'LIKE', "%$keyword%")
				->orWhere('talla', 'LIKE', "%$keyword%")
				->orWhere('ancho', 'LIKE', "%$keyword%")
				->orWhere('largo', 'LIKE', "%$keyword%")
				->orWhere('fechacompra', 'LIKE', "%$keyword%")
				->orWhere('fechabaja', 'LIKE', "%$keyword%")
				->orWhere('estado', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {

            $estado = new EstadoActivo();
            $tipo = new TipoActivo();
            $activo = Activo::paginate($perPage);
        }

        return view('admin.activo.index', compact('activo'),['estado'=>$estado->all(),'tipo'=>$tipo->all()]);

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.activo.create');
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
        
        Activo::create($requestData);

        Session::flash('flash_message', 'Activo added!');

        return redirect('admin/activo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $activo = Activo::findOrFail($id);

        return view('admin.activo.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

        $activo = Activo::findOrFail($id);
        $estado = new EstadoActivo();
        $tipo = new TipoActivo();

      
       return view('admin.activo.edit', compact('activo'),['estado'=>$estado->all(),'tipo'=>$tipo->all()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $activo = Activo::findOrFail($id);
        $activo->update($requestData);

        Session::flash('flash_message', 'Activo actualizado con Exito!');

        return redirect('admin/activo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Activo::destroy($id);

        Session::flash('flash_message', 'Activo Eliminado con Exito!');

        return redirect('admin/activo');
    }

    public function getActivo()
    {

        return response()->json(['status'=>'ok','data'=>Activo::all()],200);
        

    }


}
