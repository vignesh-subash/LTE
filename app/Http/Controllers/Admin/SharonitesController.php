<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySharoniteRequest;
use App\Http\Requests\StoreSharoniteRequest;
use App\Http\Requests\UpdateSharoniteRequest;
use App\Sharonite;


class SharonitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('sharonite_access'), 403);

        $sharonites = Sharonite::all();

        return view('admin.sharonites.index', compact('sharonites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(\Gate::allows('sharonite_create'), 403);

        return view('admin.sharonites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSharoniteRequest $request)
    {
        abort_unless(\Gate::allows('sharonite_create'), 403);

        $sharonite = Sharonite::create($request->all());

        return redirect()->route('admin.sharonites.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sharonite  $sharonite
     * @return \Illuminate\Http\Response
     */
    public function show(Sharonite $sharonite)
    {
        abort_unless(\Gate::allows('sharonite_show'), 403);

        return view('admin.sharonites.show', compact('sharonite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sharonite  $sharonite
     * @return \Illuminate\Http\Response
     */
    public function edit(Sharonite $sharonite)
    {
        abort_unless(\Gate::allows('sharonite_edit'), 403);

        return view('admin.sharonites.edit', compact('sharonite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sharonite  $sharonite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sharonite $sharonite)
    {
        abort_unless(\Gate::allows('sharonite_edit'), 403);

        $sharonite->update($request->all());

        return redirect()->route('admin.sharonites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sharonite  $sharonite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sharonite $sharonite)
    {
        abort_unless(\Gate::allows('sharonite_delete'), 403);

        $sharonite->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Sharonite::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
