<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySharoniteRequest;
use App\Http\Requests\StoreSharoniteRequest;
use App\Http\Requests\UpdateSharoniteRequest;
use App\Http\Requests\ImportSharoniteRequest;
use App\Sharonite;

use App\Imports\SharonitesImport;
use Maatwebsite\Excel\Facades\Excel;


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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sharonite  $sharonite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSharoniteRequest $request, Sharonite $sharonite)
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

    //public function importSharonite(ImportSharoniteRequest $request)
    public function importSharonite(Request $request)
    {
    //  abort_unless(\Gate::allows('sharonite_import'), 403);

    //   $sharonites = Excel::import(new SharonitesImport, $request->file('file'));
    //
    //   foreach ($sharonites[0] as $row) {
    //     // code...
    //
    //     $arr[] = [
    //       'empName' => $row[1],
    //       'designation' => $row[2],
    //       'dob' => $row[3],
    //       'anniversary' => $row[4],
    //       'bloodGrooup' => $row[5],
    //       'officeNumber' => $row[6],
    //       'personalNumber' => $row[7],
    //       'officeEmail' => $row[8],
    //       'add1' => $row[9],
    //       'add2' => $row[10],
    //       'locality' => $row[11],
    //       'city' => $row[12],
    //       'pincode' => $row[13],
    //       'cp1' => $row[14],
    //       'relationship1' => $row[15],
    //       'cd1' => $row[16],
    //       'cp2' => $row[17],
    //       'relationship2' => $row[18],
    //       'cd2' => $row[19],
    //     ];
    //   }
    //
    //   if(!empty($arr))
    //   {
    //     DB::table('sharonites')->insert($arr);
    //   }
    //
    //
    //
    //   return redirect()->route('admin.sharonites.index');
    // }

    $this->validate($request, [
      'select_file' => 'required|mimes:xls,xlsx'
    ]);

    $path = $request->file('select_file')->getRealPath();

    $data = Excel::load($path)->get();

    if($data->count() > 0)
    {
      foreach($data->toArray() as $key => $value)
      {
        foreach($value as $row)
        {
          $insert_data[] = array(
            'empName' => $row['empName'],
            'designation' => $row['designation'],
            'dob' => $row['dob'],
            'anniversary' => $row['anniversary'],
            'bloodGrooup' => $row['bloodGrooup'],
            'officeNumber' => $row['officeNumber'],
            'personalNumber' => $row['personalNumber'],
            'officeEmail' => $row['officeEmail'],
            'add1' => $row['add1'],
            'add2' => $row['add2'],
            'locality' => $row['locality'],
            'city' => $row['city'],
            'pincode' => $row['pincode'],
            'cp1' => $row['cp1'],
            'relationship1' => $row['relationship1'],
            'cd1' => $row['cd1'],
            'cp2' => $row['cp2'],
            'relationship2' => $row['relationship2'],
            'cd2' => $row['cd2'],
          );
        }
      }
      if(!empty($insert_data))
      {
        DB::table('sharonites')->insert($insert_data);
      }
    }
    return back()->with('success', 'Excel Data Imported Successfully');
  }
}
