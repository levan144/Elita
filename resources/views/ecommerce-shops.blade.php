@extends('layouts.master')
@section('title')Shops @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Ecommerce @endslot
            @slot('title') Shops @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered align-middle table-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Brand</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">Product</th>
                                <th scope="col">Current Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                            M
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-15"> Nedick's</h5>
                                    <p class="text-muted mb-0">
                                        <i class="mdi mdi-account me-1"></i> Wayne McClain
                                    </p>
                                </td>
                                <td>WayneMcclain@gmail.com</td>
                                <td>07/10/2020</td>
                                <td>86</td>
                                <td>
                                    $12,456
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-warning text-warning font-size-16 rounded-circle">
                                            B
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-15"> Brendle's</h5>
                                    <p class="text-muted mb-0">
                                        <i class="mdi mdi-account me-1"></i> David Marshall
                                    </p>
                                </td>
                                <td> Davidmarshall@gmail.com</td>
                                <td>12/10/2020</td>
                                <td>72</td>
                                <td>
                                    $10,352
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-success text-success font-size-16 rounded-circle">
                                            K
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-15"> Tech Hifi</h5>
                                    <p class="text-muted mb-0">
                                        <i class="mdi mdi-account me-1"></i> Katia Stapleton
                                    </p>
                                </td>
                                <td> Katiastapleton@gmail.com</td>
                                <td>14/10/2020</td>
                                <td>75</td>
                                <td>
                                    $9,963
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-danger text-danger font-size-16 rounded-circle">
                                            P
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-15"> Packer</h5>
                                    <p class="text-muted mb-0">
                                        <i class="mdi mdi-account me-1"></i> Mae Rankin
                                    </p>
                                </td>
                                <td> Maerankingmail.com</td>
                                <td>15/10/2020</td>
                                <td>72</td>
                                <td>
                                    $10,352
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-info text-info font-size-16 rounded-circle">
                                            L
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-15"> Lafayette</h5>
                                    <p class="text-muted mb-0">
                                        <i class="mdi mdi-account me-1"></i> Andrew Bivens
                                    </p>
                                </td>
                                <td>Andrewbivens@gmail.com</td>
                                <td>20/11/2020</td>
                                <td>65</td>
                                <td>
                                    $14,568
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-warning text-warning font-size-16 rounded-circle">
                                            T
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-15"> Tech Hifi</h5>
                                    <p class="text-muted mb-0">
                                        <i class="mdi mdi-account me-1"></i> John McLeroy
                                    </p>
                                </td>
                                <td> JohnmcLeroy@gmail.com</td>
                                <td>30/31/2020</td>
                                <td>58</td>
                                <td>
                                    $14,654
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-success text-success font-size-16 rounded-circle">
                                            K
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-15"> Tech Hifi</h5>
                                    <p class="text-muted mb-0">
                                        <i class="mdi mdi-account me-1"></i> Katia Stapleton
                                    </p>
                                </td>
                                <td> Katiastapleton@gmail.com</td>
                                <td>14/10/2020</td>
                                <td>75</td>
                                <td>
                                    $9,963
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
