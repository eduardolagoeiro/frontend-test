@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Spinners
    </h4>

    <div class="card mb-4">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Border</div>

            <div class="demo-inline-spacing">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-secondary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-info" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-light" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border text-dark" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Growing</div>

            <div class="demo-inline-spacing">
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-secondary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-info" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-dark" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Small</div>

            <div class="demo-inline-spacing">
                <div class="spinner-border spinner-border-sm" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-secondary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-info" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-light" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-border spinner-border-sm text-dark" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <div class="demo-inline-spacing">
                <div class="spinner-grow spinner-grow-sm" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-info" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-light" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow spinner-grow-sm text-dark" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Within buttons</div>

            <div class="demo-inline-spacing">
                <!-- Extra small -->
                <button class="btn btn-xs btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-xs btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Small -->
                <button class="btn btn-sm btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-sm btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Default -->
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Large -->
                <button class="btn btn-lg btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-lg btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Extra large -->
                <button class="btn btn-xl btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-xl btn-primary" type="button" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>

            <div class="demo-inline-spacing">
                <!-- Extra small -->
                <button class="btn btn-xs btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-xs btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Small -->
                <button class="btn btn-sm btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-sm btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Default -->
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Large -->
                <button class="btn btn-lg btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-lg btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <!-- Extra large -->
                <button class="btn btn-xl btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-xl btn-primary" type="button" disabled>
                    <span class="spinner-grow" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </div>
    </div>
@endsection