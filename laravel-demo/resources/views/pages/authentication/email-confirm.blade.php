@extends('layouts.layout-blank')

@section('styles')
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/authentication.css') }}">
@endsection

@section('content')
    <div class="authentication-wrapper authentication-2 px-4">
        <div class="authentication-inner py-5">

            <!-- Form -->
            <div class="card">
                <div class="p-4 p-sm-5">

                    <div class="display-1 lnr lnr-checkmark-circle text-center text-success mb-4"></div>

                    <p class="text-center text-big mb-4">Your email address has been successfully confirmed.</p>

                    <button type="button" class="btn btn-primary btn-block">Proceed to your account</button>

                </div>
            </div>
            <!-- / Form -->

        </div>
    </div>
@endsection