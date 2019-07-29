@extends('layouts.layout-blank')

@section('styles')
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/authentication.css') }}">
@endsection

@section('content')
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('/img/bg/1.jpg');">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="card-body p-sm-5">

                    <div class="media align-items-center">
                        <img src="/img/avatars/1.png" alt="" class="d-block ui-w-60 rounded-circle">
                        <div class="media-body ml-3">
                            <div class="text-light small font-weight-semibold line-height-1 mb-1">LOGGED IN AS</div>
                            <div class="text-large font-weight-bolder line-height-1">Mike Greene</div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <!-- Form -->
                    <form>
                        <p class="text-muted small">Your session is timed out. Please enter your password to proceed.</p>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Enter your password">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary icon-btn"><i class="ion ion-md-arrow-forward"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- / Form -->

                </div>
                <div class="card-footer text-center text-muted small px-sm-5">
                    Not you? <a href="javascript:void(0)">Login as a different user</a>
                </div>
            </div>

        </div>
    </div>
@endsection