<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSharoniteRequest;
use App\Http\Requests\UpdateSharoniteRequest;
use App\Sharonite;

class SharoniteApiController extends Controller
{
    public function index()
    {
        $sharonites = Sharonite::all();

        return $sharonites;
    }

    public function store(StoreSharoniteRequest $request)
    {
        return Sharonite::create($request->all());
    }

    public function update(UpdateSharoniteRequest $request, Sharonite $sharonite)
    {
        return $sharonite->update($request->all());
    }

    public function show(Sharonite $sharonite)
    {
        return $sharonite;
    }

    public function destroy(Sharonite $sharonite)
    {
        return $sharonite->delete();
    }
}
