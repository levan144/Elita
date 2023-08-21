@extends('layouts.master')
@section('title')SweetAlert 2 @endsection
@section('css')
<!-- Sweet Alert-->
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Extended UI @endslot
            @slot('title') SweetAlert 2 @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Examples</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 50%;">
                                    Sweet Alert Type
                                </th>
                                <th scope="col" class="text-center">
                                    Sweet Alert Examples
                                </th>
                            </tr>
                        </thead>
                        <!-- end thead -->
                        <tbody>

                            <tr>
                                <th scope="row">
                                    A Basic Message
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-basic">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    A Title with a Text Under
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-title">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    A success message!
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-success">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    A warning message, with a function attached to the "Confirm"-button...
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-warning">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    By passing a parameter, you can execute something else for "Cancel".
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-params">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    A message with custom Image Header
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-image">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    A message with auto close timer
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-close">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    Custom HTML description and buttons
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="custom-html-alert">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    A custom positioned dialog
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-position">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    A message with custom width, padding and background
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="custom-padding-width-alert">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    Ajax request example
                                </th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary btn-sm" id="ajax-alert">Click me</button>
                                </td>
                            </tr>
                            <!-- end tr -->
                        </tbody>
                        <!-- end tbody -->
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')

<!-- Sweet Alerts js -->
<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Sweet alert init js-->
<script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
