@extends('layouts.master')
@section('title')Rating @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Extended UI @endslot
            @slot('title') Rating @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Examples</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-sm-6">
                        <div class="p-4 text-center border h-100">
                            <h5 class="font-size-15 mb-4">Basic Rater</h5>
                            <div id="basic-rater" dir="ltr"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-4 text-center border h-100">
                            <h5 class="font-size-15 mb-4">Rater with Step</h5>
                            <div id="rater-step" dir="ltr"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-4 text-center border h-100">
                            <h5 class="font-size-15 mb-4">Custom Messages</h5>
                            <div id="rater-message" dir="ltr"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-4 text-center border h-100">
                            <h5 class="font-size-15 mb-4">Example with unlimited number of stars. readOnly option is set to true.</h5>
                            <div id="rater-unlimitedstar" dir="ltr"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-4 text-center border h-100">
                            <h5 class="font-size-15 mb-4">On Hover Event</h5>
                            <div dir="ltr">
                                <div id="rater-onhover" class="align-middle"></div>
                                <span class="ratingnum badge bg-info align-middle ms-2"></span>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-4 text-center border h-100">
                            <h5 class="font-size-15 mb-4">Clear/Reset Rater</h5>
                            <div dir="ltr">
                                <div id="raterreset" class="align-middle"></div>
                                <span class="clear-rating"></span>
                                <button id="raterreset-button" class="btn btn-outline-light btn-sm ms-2">Reset</button>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div><!-- end row -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<!-- rater-js plugin -->
<script src="{{ URL::asset('assets/libs/rater-js/index.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/rating.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
