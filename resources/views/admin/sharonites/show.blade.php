@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.sharonite.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.empName')}}
                    </th>
                    <td>
                        {{ $sharonite->empName }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.designation') }}
                    </th>
                    <td>
                        {{ $sharonite->designation }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.dob') }}
                    </th>
                    <td>
                        {{ $sharonite->dob }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.anniversary') }}
                    </th>
                    <td>
                        {{ $sharonite->anniversary }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.bloodGrooup') }}
                    </th>
                    <td>
                        {{ $sharonite->bloodGrooup }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.officeNumber') }}
                    </th>
                    <td>
                        {{ $sharonite->officeNumber }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.personalNumber') }}
                    </th>
                    <td>
                        {{ $sharonite->personalNumber }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.officeEmail') }}
                    </th>
                    <td>
                        {{ $sharonite->officeEmail }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.add1') }}
                    </th>
                    <td>
                        {{ $sharonite->add1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.add2') }}
                    </th>
                    <td>
                        {{ $sharonite->add2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.locality') }}
                    </th>
                    <td>
                        {{ $sharonite->locality }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.city') }}
                    </th>
                    <td>
                        {{ $sharonite->city }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.pincode') }}
                    </th>
                    <td>
                        {{ $sharonite->pincode }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.cp1') }}
                    </th>
                    <td>
                        {{ $sharonite->cp1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.relationship1') }}
                    </th>
                    <td>
                        {{ $sharonite->relationship1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.cd1') }}
                    </th>
                    <td>
                        {{ $sharonite->cd1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.cp2') }}
                    </th>
                    <td>
                        {{ $sharonite->cp2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.relationship2') }}
                    </th>
                    <td>
                        {{ $sharonite->relationship2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.sharonite.fields.cd2') }}
                    </th>
                    <td>
                        {{ $sharonite->cd2 }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
