@extends('layouts.master')
@section('title') {{__('projects.create_title')}} @endsection
@section('css')

<!-- dropzone css -->
<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<!-- flatpickr css -->
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') {{__('header.page_title')}} @endslot
            @slot('title') {{__('projects.create_title')}} @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <ul class="wizard-nav mb-5">
                        <li class="wizard-list-item">
                            <div class="list-item">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="{{__('projects.basic_info')}}">
                                    <i class="uil uil-clipboard-notes"></i>
                                </div>
                            </div>
                        </li>
                        <li class="wizard-list-item">
                            <div class="list-item">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="{{__('projects.assignee')}}">
                                    <i class="uil uil-users-alt"></i>
                                </div>
                            </div>
                        </li>

                       
                    </ul>
                    <!-- wizard-nav -->

                    <div class="wizard-tab">
                        <div class="text-center mb-4">
                            <h5>{{__('projects.info')}}</h5>
                            <p class="card-title-desc">{{__('projects.info_desc')}}</p>
                        </div>
                        <form>
                            <div>
                                <div class="mb-3">
                                    <label for="projectname" class="form-label">{{__('projects.project_title')}}</label>
                                    <input id="projectname" type="text" name="title" class="form-control" placeholder="{{__('projects.enter_project_title')}}">
                                </div>

                                <div class="mb-3">
                                    <label for="projectdesc" class="form-label">{{__('projects.project_description')}}</label>
                                    <textarea class="form-control" name="description" id="projectdesc" rows="3" placeholder="{{__('projects.enter_project_description')}}"></textarea>
                                </div>

                                <div class="mb-3">
                                            <label for="formFile" class="form-label">{{__('projects.project_photo')}}</label>
                                            <input class="form-control" name="photo" type="file" id="formFile">
                                        </div>
                            </div>
                        </form>
                    </div>
                    <!-- wizard-tab -->

                    <div class="wizard-tab">

                        <div class="text-center mb-4">
                            <h5>{{__('projects.assign_to')}}</h5>
                            <p class="card-title-desc">{{__('projects.select_member')}}</p>
                        </div>
                        <form>
                            <div>
                                <div class="mb-4">
                                    <label>{{__('projects.assign_to')}} {{__('projects.roles.project_manager')}}</label>
                                    <div class="mb-3">
                                        <button class="btn btn-light w-100" type="button" data-bs-toggle="modal" data-bs-target="#selectmembermodal">
                                        {{__('projects.select_member')}}
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="selectmembermodal" tabindex="-1" aria-labelledby="selectmembermodalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="selectmembermodalLabel">{{__('projects.select_member')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="p-3">
                                                        <div class="avatar-group align-items-center">
                                                            <div class="me-4">{{__('projects.team')}} :</div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Janna Johnson">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="p-3">
                                                        <div class="input-group border rounded">
                                                            <span class="input-group-text bg-transparent border-0 pr-1">
                                                                <i class="uil uil-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control border-0" placeholder="{{__('global.search_placeholder_2')}}">

                                                            <button class="btn btn-primary" type="button">{{__('global.search_btn')}}</button>
                                                        </div>
                                                    </div>

                                                    <div data-simplebar style="max-height: 200px;">
                                                        <div>
                                                            <div class="p-3 fw-semibold font-size-12 text-muted">
                                                                A
                                                            </div>

                                                            <ul class="list-group list-group-flush contact-list">
                                                                <li class="list-group-item">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="memberCheck1" checked>
                                                                        <label class="form-check-label" for="memberCheck1">
                                                                            Albert Rodarte
                                                                        </label>
                                                                    </div>
                                                                </li>

                                                                <li class="list-group-item">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="memberCheck2">
                                                                        <label class="form-check-label" for="memberCheck2">
                                                                            Allison Etter
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul><!-- end ul -->
                                                        </div>

                                                        <div>
                                                            <div class="p-3 fw-semibold font-size-12 text-muted">
                                                                B
                                                            </div>

                                                            <ul class="list-group list-group-flush contact-list">
                                                                <li class="list-group-item">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="memberCheck3">
                                                                        <label class="form-check-label" for="memberCheck3">
                                                                            Bobby Gaffney
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul><!-- end ul -->
                                                        </div>

                                                        <div>
                                                            <div class="p-3 fw-semibold font-size-12 text-muted">
                                                                C
                                                            </div>

                                                            <ul class="list-group list-group-flush contact-list">
                                                                <li class="list-group-item">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="memberCheck4" checked>
                                                                        <label class="form-check-label" for="memberCheck4">
                                                                            Charles Willis
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="memberCheck5" checked>
                                                                        <label class="form-check-label" for="memberCheck5">
                                                                            Christi
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul><!-- end ul -->
                                                        </div>
                                                    </div>
                                                    <!-- end simplebar -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light w-sm" data-bs-dismiss="modal">{{__('global.close')}}</button>
                                                    <button type="button" class="btn btn-primary w-sm">{{__('global.save')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- wizard-tab -->

                   

                    <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">{{__('global.prev')}}</button>
                        <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">{{__('global.next')}}</button>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<!-- flatpickr js -->
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<!-- dropzone plugin -->
<script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
<!-- init js -->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script>
// flatpickr
flatpickr('#datepicker-range', {
    mode: "range"
});


// form step wizard
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("wizard-tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "{{__('global.submit')}}";
    } else {
        document.getElementById("nextBtn").innerHTML = "{{__('global.next')}}";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("wizard-tab");

    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        currentTab = currentTab - n;
        x[currentTab].style.display = "block";
    }
    // Otherwise, display the correct tab:
    showTab(currentTab)
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("list-item");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

    </script>
@endsection
