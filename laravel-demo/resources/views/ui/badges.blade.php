@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Badges
    </h4>

    <div class="bg-lighter rounded p-4 mb-4 clearfix">
        <h1>Example heading
            <span class="badge badge-default">New</span>
        </h1>
        <h2>Example heading
            <span class="badge badge-default">New</span>
        </h2>
        <h3>Example heading
            <span class="badge badge-default">New</span>
        </h3>
        <h4>Example heading
            <span class="badge badge-default">New</span>
        </h4>
        <h5>Example heading
            <span class="badge badge-default">New</span>
        </h5>
        <h6>Example heading
            <span class="badge badge-default">New</span>
        </h6>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Variations
                </h6>
                <div class="row row-bordered no-gutters">
                    <div class="col-xl-4 p-4">
                        <div class="text-light small font-weight-semibold mb-3">Default</div>

                        <div class="demo-inline-spacing">
                            <a href="javascript:void(0)" class="badge badge-default">Default</a>
                            <a href="javascript:void(0)" class="badge badge-primary">Primary</a>
                            <a href="javascript:void(0)" class="badge badge-secondary">Secondary</a>
                            <a href="javascript:void(0)" class="badge badge-success">Success</a>
                            <a href="javascript:void(0)" class="badge badge-info">Info</a>
                            <a href="javascript:void(0)" class="badge badge-warning">Warning</a>
                            <a href="javascript:void(0)" class="badge badge-danger">Danger</a>
                            <a href="javascript:void(0)" class="badge badge-dark">Dark</a>
                        </div>
                    </div>
                    <div class="col-xl-4 p-4">
                        <div class="text-light small font-weight-semibold mb-3">Pills</div>

                        <div class="demo-inline-spacing">
                            <a href="javascript:void(0)" class="badge badge-pill badge-default">Default</a>
                            <a href="javascript:void(0)" class="badge badge-pill badge-primary">Primary</a>
                            <a href="javascript:void(0)" class="badge badge-pill badge-secondary">Secondary</a>
                            <a href="javascript:void(0)" class="badge badge-pill badge-success">Success</a>
                            <a href="javascript:void(0)" class="badge badge-pill badge-info">Info</a>
                            <a href="javascript:void(0)" class="badge badge-pill badge-warning">Warning</a>
                            <a href="javascript:void(0)" class="badge badge-pill badge-danger">Danger</a>
                            <a href="javascript:void(0)" class="badge badge-pill badge-dark">Dark</a>
                        </div>
                    </div>
                    <div class="col-xl-4 p-4">
                        <div class="text-light small font-weight-semibold mb-3">Outline</div>

                        <div class="demo-inline-spacing">
                            <a href="javascript:void(0)" class="badge badge-outline-default">Default</a>
                            <a href="javascript:void(0)" class="badge badge-outline-primary">Primary</a>
                            <a href="javascript:void(0)" class="badge badge-outline-secondary">Secondary</a>
                            <a href="javascript:void(0)" class="badge badge-outline-success">Success</a>
                            <a href="javascript:void(0)" class="badge badge-outline-info">Info</a>
                            <a href="javascript:void(0)" class="badge badge-outline-warning">Warning</a>
                            <a href="javascript:void(0)" class="badge badge-outline-danger">Danger</a>
                            <a href="javascript:void(0)" class="badge badge-outline-dark">Dark</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Button badges
                </h6>
                <div class="card-body demo-paragraph-spacing">
                    <p>
                        <button type="button" class="btn btn-primary">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-secondary">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-default">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-success">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-warning">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-info">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-danger">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-dark">Messages
                            <span class="badge">4</span>
                        </button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-outline-primary">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-outline-default">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-outline-success">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-outline-warning">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-outline-info">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-outline-danger">Messages
                            <span class="badge">4</span>
                        </button>
                        <button type="button" class="btn btn-outline-dark">Messages
                            <span class="badge">4</span>
                        </button>
                    </p>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Dots
                </h6>
                <div class="card-body">
                    <span class="badge badge-dot badge-default"></span> Default&nbsp;&nbsp;
                    <span class="badge badge-dot badge-primary"></span> Primary&nbsp;&nbsp;
                    <span class="badge badge-dot badge-success"></span> Success&nbsp;&nbsp;
                    <span class="badge badge-dot badge-info"></span> Info&nbsp;&nbsp;
                    <span class="badge badge-dot badge-warning"></span> Warning&nbsp;&nbsp;
                    <span class="badge badge-dot badge-danger"></span> Danger
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Indicators
                </h6>
                <div class="card-body demo-inline-spacing">
                    <button type="button" class="btn btn-default text-nowrap">Badge
                        <span class="badge badge-primary indicator">12</span>
                    </button>
                    <button type="button" class="btn btn-default text-nowrap">Outlined badge
                        <span class="badge badge-outline-success indicator">12</span>
                    </button>
                    <button type="button" class="btn btn-default text-nowrap">Pill
                        <span class="badge badge-pill badge-info indicator">12</span>
                    </button>
                    <button type="button" class="btn btn-default text-nowrap">Outlined pill
                        <span class="badge badge-pill badge-outline-danger indicator">12</span>
                    </button>
                    <button type="button" class="btn btn-default text-nowrap">Dot
                        <span class="badge badge-dot badge-danger indicator"></span>
                    </button>
                    <button type="button" class="btn btn-default text-nowrap">Outlined dot
                        <span class="badge badge-dot badge-outline-success indicator"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection