@extends('layouts.master')
@section('title') {{__('users.edit_user')}} @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
@endsection

@section('content')

{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
        @slot('li_1') {{__('header.page_title')}} @endslot
            @slot('title') {{__('users.edit_user')}} @endslot
        @endcomponent
    @endsection

<form method="POST" action="{{route('user-update',$user->id)}}" class="mt-4 pt-2">
    @csrf
    <div class="form-floating form-floating-custom mb-3">
        <input type="text" id="input-username" placeholder="Enter User Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
        <label for="input-username">{{ __('users.fullname') }}</label>
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
        <input type="email" id="input-email" placeholder="Enter Email" required="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">
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

        <select class="form-control" name="role" id="role">
        <option disabled>{{__('global.select')}} {{__('users.department')}}</option>
        @foreach($departments as $department)
            <option>{{$department->title}}</option>
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
