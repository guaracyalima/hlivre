<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Laboratorio;
use Illuminate\Http\Request;
use Session;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $laboratorio = Laboratorio::paginate(25);

        return view('admin.laboratorio.index', compact('laboratorio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.laboratorio.create');
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
        
        Laboratorio::create($requestData);

        Session::flash('flash_message', 'Laboratorio added!');

        return redirect('admin/laboratorio');
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
        $laboratorio = Laboratorio::findOrFail($id);

        return view('admin.laboratorio.show', compact('laboratorio'));
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
        $laboratorio = Laboratorio::findOrFail($id);

        return view('admin.laboratorio.edit', compact('laboratorio'));
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
        
        $laboratorio = Laboratorio::findOrFail($id);
        $laboratorio->update($requestData);

        Session::flash('flash_message', 'Laboratorio updated!');

        return redirect('admin/laboratorio');
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
        Laboratorio::destroy($id);

        Session::flash('flash_message', 'Laboratorio deleted!');

        return redirect('admin/laboratorio');
    }
}
