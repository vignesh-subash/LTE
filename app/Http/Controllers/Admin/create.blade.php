@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.sharonite.title_singular') }}
    </div>

    <div class="card-body" >
        <form action="{{ route("admin.sharonites.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="width: 60%; float: left; padding-right: 1%;" class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.empName') }}*</label>
                <input type="text" id="empName" name="empName" class="form-control" placeholder="Employee Name*" value="{{ old('empName', isset($sharonite) ? $sharonite->empName : '') }}" required>
                @if($errors->has('empName'))
                    <p class="help-block">
                        {{ $errors->first('empName') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.empName_helper') }}
                </p>
            </div>

            <div style="width: 39%; float: right; " class="form-group {{ $errors->has('designation') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.designation') }}*</label>
                <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation*" value="{{ old('designation', isset($sharonite) ? $sharonite->designation : '') }}" required>
                @if($errors->has('designation'))
                    <p class="help-block">
                        {{ $errors->first('designation') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.designation_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left; padding-right: 1%;" class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.dob') }}*</label>
                <input type="date" id="dob" name="dob" class="form-control" placeholder="Date of Birth*" value="{{ old('dob', isset($sharonite) ? $sharonite->dob : '') }}" required>
                @if($errors->has('dob'))
                    <p class="help-block">
                        {{ $errors->first('dob') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.dob_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left;" class="form-group {{ $errors->has('anniversary') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.anniversary') }}</label>
                <input type="text" id="anniversary" name="anniversary" class="form-control" placeholder="Anniversary" value="{{ old('anniversary', isset($sharonite) ? $sharonite->anniversary : '') }}">
                @if($errors->has('anniversary'))
                    <p class="help-block">
                        {{ $errors->first('anniversary') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.anniversary_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: right;" class="form-group {{ $errors->has('bloodGrooup') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.bloodGrooup') }}</label>
                <input type="text" id="bloodGrooup" name="bloodGrooup" class="form-control" placeholder="Blood Group" value="{{ old('anniversary', isset($sharonite) ? $sharonite->anniversary : '') }}" required>
                @if($errors->has('bloodGrooup'))
                    <p class="help-block">
                        {{ $errors->first('bloodGrooup') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.bloodGrooup_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left; padding-right: 1%;" class="form-group {{ $errors->has('officeNumber') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.officeNumber') }}</label>
                <input type="text" id="officeNumber" name="officeNumber" class="form-control" placeholder="Official Number" value="{{ old('officeNumber', isset($sharonite) ? $sharonite->officeNumber : '') }}" required>
                @if($errors->has('officeNumber'))
                    <p class="help-block">
                        {{ $errors->first('officeNumber') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.officeNumber_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left;" class="form-group {{ $errors->has('personalNumber') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.personalNumber') }}</label>
                <input type="text" id="personalNumber" name="personalNumber" class="form-control" placeholder="Personal Number" value="{{ old('personalNumber', isset($sharonite) ? $sharonite->personalNumber : '') }}" required>
                @if($errors->has('personalNumber'))
                    <p class="help-block">
                        {{ $errors->first('personalNumber') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.personalNumber_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: right; " class="form-group {{ $errors->has('officeEmail') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.officeEmail') }}</label>
                <input type="email" id="officeEmail" name="officeEmail" class="form-control" placeholder="Official Email" value="{{ old('officeEmail', isset($sharonite) ? $sharonite->officeEmail : '') }}" required>
                @if($errors->has('officeEmail'))
                    <p class="help-block">
                        {{ $errors->first('officeEmail') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.officeEmail_helper') }}
                </p>
            </div>

            <div style="width: 50%; float: left; padding-right: 1%;" class="form-group {{ $errors->has('add1') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.add1') }}</label>
                <input type="text" id="add1" name="add1" class="form-control" placeholder="Address 1" value="{{ old('add1', isset($sharonite) ? $sharonite->add1 : '') }}" required>
                @if($errors->has('add1'))
                    <p class="help-block">
                        {{ $errors->first('add1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.add1_helper') }}
                </p>
            </div>

            <div style="width: 50%; float: right; " class="form-group {{ $errors->has('add2') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.add2') }}</label>
                <input type="text" id="add2" name="add2" class="form-control" placeholder="Address 2" value="{{ old('add2', isset($sharonite) ? $sharonite->add2 : '') }}" required>
                @if($errors->has('add2'))
                    <p class="help-block">
                        {{ $errors->first('add2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.add2_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left; padding-right: 1%;" class="form-group {{ $errors->has('locality') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.locality') }}</label>
                <input type="text" id="locality" name="locality" class="form-control" placeholder="Locality" value="{{ old('locality', isset($sharonite) ? $sharonite->locality : '') }}" required>
                @if($errors->has('locality'))
                    <p class="help-block">
                        {{ $errors->first('locality') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.locality_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left;" class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.city') }}</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="City" value="{{ old('city', isset($sharonite) ? $sharonite->city : '') }}" required>
                @if($errors->has('city'))
                    <p class="help-block">
                        {{ $errors->first('city') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.city_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: right; " class="form-group {{ $errors->has('pincode') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.pincode') }}</label>
                <input type="text" id="pincode" name="pincode" class="form-control" placeholder="Pincode" value="{{ old('pincode', isset($sharonite) ? $sharonite->pincode : '') }}" required>
                @if($errors->has('pincode'))
                    <p class="help-block">
                        {{ $errors->first('pincode') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.pincode_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left; padding-right: 1%;" class="form-group {{ $errors->has('cp1') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.cp1') }}</label>
                <input type="text" id="cp1" name="cp1" class="form-control" placeholder="Contact Person 1" value="{{ old('cp1', isset($sharonite) ? $sharonite->cp1 : '') }}" required>
                @if($errors->has('cp1'))
                    <p class="help-block">
                        {{ $errors->first('cp1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.cp1_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left;" class="form-group {{ $errors->has('relationship1') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.relationship1') }}</label>
                <input type="text" id="relationship1" name="relationship1" class="form-control" placeholder="Relationship 1" value="{{ old('relationship1', isset($sharonite) ? $sharonite->relationship1 : '') }}" required>
                @if($errors->has('relationship1'))
                    <p class="help-block">
                        {{ $errors->first('relationship1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.relationship1_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: right; " class="form-group {{ $errors->has('cd1') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.cd1') }}</label>
                <input type="text" id="cd1" name="cd1" class="form-control" placeholder="Contact Details 1" value="{{ old('cd1', isset($sharonite) ? $sharonite->cd1 : '') }}" required>
                @if($errors->has('cd1'))
                    <p class="help-block">
                        {{ $errors->first('cd1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.cd1_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left; padding-right: 1%;" class="form-group {{ $errors->has('cp2') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.cp2') }}</label>
                <input type="text" id="cp2" name="cp2" class="form-control" placeholder="Contact Person 2" value="{{ old('cp2', isset($sharonite) ? $sharonite->cp2 : '') }}" required>
                @if($errors->has('cp2'))
                    <p class="help-block">
                        {{ $errors->first('cp2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.cp2_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: left; " class="form-group {{ $errors->has('relationship2') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.relationship2') }}</label>
                <input type="text" id="relationship2" name="relationship2" class="form-control" placeholder="Relationship 2" value="{{ old('relationship2', isset($sharonite) ? $sharonite->relationship2 : '') }}" required>
                @if($errors->has('relationship2'))
                    <p class="help-block">
                        {{ $errors->first('relationship2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.relationship2_helper') }}
                </p>
            </div>

            <div style="width: 33%; float: right; " class="form-group {{ $errors->has('cd2') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.sharonite.fields.cd2') }}</label>
                <input type="text" id="cd2" name="cd2" class="form-control" placeholder="Contact Details 2" value="{{ old('cd2', isset($sharonite) ? $sharonite->cd2 : '') }}" required>
                @if($errors->has('cd2'))
                    <p class="help-block">
                        {{ $errors->first('cd2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.sharonite.fields.cd2_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
