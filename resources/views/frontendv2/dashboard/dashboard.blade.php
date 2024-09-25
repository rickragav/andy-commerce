@extends('frontendv2.dashboard.layouts.master')

@section('content')
    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">My Account</div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- page-cart -->
    <section class="flat-spacing-11">
        <div class="container">
            <div class="row">
                @include('frontendv2.dashboard.layouts.sidebar')

            </div>
        </div>
    </section>
    <!-- page-cart -->
@endsection
