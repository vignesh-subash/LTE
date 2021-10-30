<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Salutation;
use Illuminate\Http\Request;

class SalutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('salutation_access'), 403);

        $salutations = Sharonite::all();

        return view('admin.salutations.index', compact('salutations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(\Gate::allows('salutation_create'), 403);

        return view('admin.salutations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_unless(\Gate::allows('salutation_create'), 403);

        $salutation = Salutation::create($request->all());

        return redirect()->route('admin.salutations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function show(Salutation $salutation)
    {
        abort_unless(\Gate::allows('sharonite_show'), 403);

        return view('admin.sharonites.show', compact('sharonite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function edit(Salutation $salutation)
    {
        abort_unless(\Gate::allows('sharonite_edit'), 403);

        return view('admin.sharonites.edit', compact('sharonite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salutation $salutation)
    {
        abort_unless(\Gate::allows('sharonite_edit'), 403);

        $sharonite->update($request->all());

        return redirect()->route('admin.sharonites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salutation $salutation)
    {
        abort_unless(\Gate::allows('sharonite_delete'), 403);

        $sharonite->delete();

        return back();
    }
}
