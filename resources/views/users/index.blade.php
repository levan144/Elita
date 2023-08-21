@extends('layouts.master')
@section('title'){{__('users.title')}} @endsection
@section('content')

{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') {{__('header.page_title')}} @endslot
            @slot('title') {{__('users.page_title')}} @endslot
        @endcomponent
    @endsection
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="pull-right">

    <a class="btn btn-primary" href="{{ route('users.create') }}"> {{__('users.button.add_new')}}</a>

    <!-- {{-- @can('role-create') --}}
    <a class="btn btn-success" href="{{ route('roles') }}"> Create New Role</a>
    {{-- @endcan --}}
    {{-- @can('role-show') --}}
    <a class="btn btn-success" href="roles"> Show Role</a>
    {{-- @endcan --}} -->
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">{{__('users.name')}}</th>
            <th scope="col">{{__('users.email')}}</th>
            <th scope="col">{{__('users.department')}}</th>
            <th scope="col">{{__('users.role')}}</th>
            <th scope="col">{{__('users.last_login')}}</th>
            <th scope="col">{{__('users.action')}}</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $id = 1;
        ?>
        @foreach($user as $key => $data)
        <tr>
            <th scope="row">{{$id++}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td></td>
            <td>
                
               {{$data->role->name ?? '-'}}
        
            </td>
            <td></td>
            <td>
                <a class="btn btn-secondary" href="{{ route('users-edit',$data->id) }}">{{__('users.actions.edit')}}</a>
                <a class="btn btn-danger" href="{{ route('delete-user',$data->id) }}">{{__('users.actions.block')}}</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}" class="mt-4 pt-2">

                    @csrf

                    <div class="form-floating form-floating-custom mb-3">
                        <input type="text" id="input-username" placeholder="Enter User Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>
                        <label for="input-username">{{ __('Name') }}</label>
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
                        <input type="email" id="input-email" placeholder="Enter Email" required="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}" required autocomplete="email">
                        <div class="invalid-feedback">
                            Please Enter Email
                        </div>
                        <label for="input-email">{{ __('Email Address') }}</label>
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
                      <select class="form-control" name="role" id="role">
                        <option>New Delhi</option>
                      </select>
                    </div>

                </form><!-- end form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
