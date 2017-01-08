<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Farmacium;
use Illuminate\Http\Request;
use Session;

class FarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $farmacia = Farmacium::paginate(25);

        return view('admin.farmacia.index', compact('farmacia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.farmacia.create');
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
        
        Farmacium::create($requestData);

        Session::flash('flash_message', 'Farmacium added!');

        return redirect('admin/farmacia');
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
        $farmacium = Farmacium::findOrFail($id);

        return view('admin.farmacia.show', compact('farmacium'));
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
        $farmacium = Farmacium::findOrFail($id);

        return view('admin.farmacia.edit', compact('farmacium'));
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
        
        $farmacium = Farmacium::findOrFail($id);
        $farmacium->update($requestData);

        Session::flash('flash_message', 'Farmacium updated!');

        return redirect('admin/farmacia');
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
        Farmacium::destroy($id);

        Session::flash('flash_message', 'Farmacium deleted!');

        return redirect('admin/farmacia');
    }
}
