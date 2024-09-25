@extends('vendor.dashboard.layouts.master')

@section('content')
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">Account Details</div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- page-cart -->
    <section class="flat-spacing-11">
        <div class="container">
            <div class="row">
                @include('vendor.dashboard.layouts.sidebar')
                @include('vendor.dashboard.profile-content')
            </div>
        </div>
    </section>
    <!-- page-cart -->
@endsection
