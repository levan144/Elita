@extends('layouts.master')
@section('title') {{__('users.add_user')}} @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
@endsection

@section('content')

{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
        @slot('li_1') {{__('header.page_title')}} @endslot
            @slot('title') {{__('users.add_user')}} @endslot
        @endcomponent
    @endsection

<form method="POST" action="{{route('users.store')}}" class="mt-4 pt-2">
    @csrf
    <div class="form-floating form-floating-custom mb-3">
        <input type="text" id="input-fullname" placeholder="Enter User Name" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
        <label for="input-fullname">{{ __('users.fullname') }}</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="form-floating-icon">
            <i class="uil uil-users-alt"></i>
        </div>
    </div>

    <div class="form-floating form-floating-custom mb-3">
        <input type="text" id="input-username" placeholder="Enter User Name" class="form-control @error('username') is-invalid @enderror" name="username"  required>
        <label for="input-username">{{ __('users.username') }}</label>
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="form-floating-icon">
            <i class="uil uil-users-alt"></i>
        </div>
    </div>

    <div class="form-floating form-floating-custom mb-3">
        <input type="number" id="input-sid" placeholder="Enter Personal ID" class="form-control @error('sid') is-invalid @enderror" name="sid">
        <label for="input-sid">{{ __('users.sid') }}</label>
        @error('sid')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="form-floating-icon">
            <i class="uil uil-user"></i>
        </div>
    </div>
    
    <div class="form-floating form-floating-custom mb-3">
        <input type="text" id="input-phone" placeholder="Enter Phone" class="form-control @error('phone') is-invalid @enderror" name="phone">
        <label for="input-phone">{{ __('users.phone') }}</label>
        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="form-floating-icon">
            <i class="uil uil-phone"></i>
        </div>
    </div>

    


    <div class="form-floating form-floating-custom mb-3">
        <input type="email" id="input-email" placeholder="Enter Email" required="" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
        <div class="invalid-feedback">
            Please Enter Email
        </div>
        <label for="input-email">{{ __('users.email') }}</label>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="form-floating-icon">
            <i class="uil uil-envelope-alt"></i>
        </div>
    </div>
    <div class="form-floating form-floating-custom mb-3">
        <input type="password" id="input-password" placeholder="Enter password" required="" class="form-control @error('password') is-invalid @enderror" name="password" required>
        <div class="invalid-feedback">
            Please Enter password
        </div>
        <label for="input-email">{{ __('users.password') }}</label>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="form-floating-icon">
            <i class="uil uil-lock"></i>
        </div>
    </div>

    <div class="mb-3">
        <label for="role">{{ __('users.role') }}</label>

        <select class="form-control" name="role" id="role">
        <option disabled>{{__('global.select')}} {{__('users.role')}}</option>

        @foreach($roles as $role)
            <option>{{$role}}</option>
        @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="role">{{ __('users.department') }}</label>

        <select class="form-control" name="department_id" id="department">
        <option disabled>{{__('global.select')}} {{__('users.department')}}</option>
        @foreach($departments as $department)
            <option value="{{$department->id}}">{{$department->title}}</option>
        @endforeach
        </select>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">{{__('global.submit')}}</button>
    </div>
</form><!-- end form -->
@endsection
@section('script')
<!-- plugin js -->
<script src="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/calendar.init.js') }}"></script>
@endsection
