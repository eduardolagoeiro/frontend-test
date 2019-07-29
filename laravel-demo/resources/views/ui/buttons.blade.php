@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Buttons
    </h4>

    <div class="row">
        <div class="col-lg-12">

            <div class="card mb-4">
                <div class="row no-gutters row-bordered">
                    <div class="col-xl-6 p-4">

                        <small class="text-light font-weight-semibold">Default</small>
                        <div class="demo-inline-spacing mt-3">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-default">Default</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-link">Link</button>
                        </div>

                    </div>
                    <div class="col-xl-6 p-4">

                        <small class="text-light font-weight-semibold">Rounded</small>
                        <div class="demo-inline-spacing mt-3">
                            <button type="button" class="btn rounded-pill btn-primary">Primary</button>
                            <button type="button" class="btn rounded-pill btn-secondary">Secondary</button>
                            <button type="button" class="btn rounded-pill btn-default">Default</button>
                            <button type="button" class="btn rounded-pill btn-success">Success</button>
                            <button type="button" class="btn rounded-pill btn-warning">Warning</button>
                            <button type="button" class="btn rounded-pill btn-info">Info</button>
                            <button type="button" class="btn rounded-pill btn-danger">Danger</button>
                            <button type="button" class="btn rounded-pill btn-dark">Dark</button>
                        </div>

                    </div>
                    <div class="col-xl-6 p-4">

                        <small class="text-light font-weight-semibold">Outline</small>
                        <div class="demo-inline-spacing mt-3">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-default">Default</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                        </div>

                    </div>
                    <div class="col-xl-6 p-4">

                        <small class="text-light font-weight-semibold">Rounded outline</small>
                        <div class="demo-inline-spacing mt-3">
                            <button type="button" class="btn rounded-pill btn-outline-primary">Primary</button>
                            <button type="button" class="btn rounded-pill btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn rounded-pill btn-outline-default">Default</button>
                            <button type="button" class="btn rounded-pill btn-outline-success">Success</button>
                            <button type="button" class="btn rounded-pill btn-outline-warning">Warning</button>
                            <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
                            <button type="button" class="btn rounded-pill btn-outline-danger">Danger</button>
                            <button type="button" class="btn rounded-pill btn-outline-dark">Dark</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="material-style-only col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Flat (Material only)
                </h6>
                <div class="card-body demo-inline-spacing">
                    <button type="button" class="btn btn-primary md-btn-flat">Primary</button>
                    <button type="button" class="btn btn-secondary md-btn-flat">Secondary</button>
                    <button type="button" class="btn btn-default md-btn-flat">Default</button>
                    <button type="button" class="btn btn-success md-btn-flat">Success</button>
                    <button type="button" class="btn btn-warning md-btn-flat">Warning</button>
                    <button type="button" class="btn btn-info md-btn-flat">Info</button>
                    <button type="button" class="btn btn-danger md-btn-flat">Danger</button>
                    <button type="button" class="btn btn-dark md-btn-flat">Dark</button>
                </div>
            </div>
        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Sizes
                </h6>
                <div class="card-body">
                    <small class="text-light font-weight-semibold">Extra large</small>
                    <div class="demo-paragraph-spacing mt-3">
                        <p>
                            <button type="button" class="btn btn-xl btn-primary">Primary</button>
                            <button type="button" class="btn btn-xl btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-xl btn-default">Default</button>
                            <button type="button" class="btn btn-xl btn-success">Success</button>
                            <button type="button" class="btn btn-xl btn-warning">Warning</button>
                            <button type="button" class="btn btn-xl btn-info">Info</button>
                            <button type="button" class="btn btn-xl btn-danger">Danger</button>
                            <button type="button" class="btn btn-xl btn-dark">Dark</button>
                        </p>

                        <!-- Outline -->
                        <p>
                            <button type="button" class="btn btn-xl btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-xl btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-xl btn-outline-default">Default</button>
                            <button type="button" class="btn btn-xl btn-outline-success">Success</button>
                            <button type="button" class="btn btn-xl btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-xl btn-outline-info">Info</button>
                            <button type="button" class="btn btn-xl btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-xl btn-outline-dark">Dark</button>
                        </p>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <small class="text-light font-weight-semibold">Large</small>
                    <div class="demo-paragraph-spacing mt-3">
                        <p>
                            <button type="button" class="btn btn-lg btn-primary">Primary</button>
                            <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-lg btn-default">Default</button>
                            <button type="button" class="btn btn-lg btn-success">Success</button>
                            <button type="button" class="btn btn-lg btn-warning">Warning</button>
                            <button type="button" class="btn btn-lg btn-info">Info</button>
                            <button type="button" class="btn btn-lg btn-danger">Danger</button>
                            <button type="button" class="btn btn-lg btn-dark">Dark</button>
                        </p>

                        <!-- Outline -->
                        <p>
                            <button type="button" class="btn btn-lg btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-lg btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-lg btn-outline-default">Default</button>
                            <button type="button" class="btn btn-lg btn-outline-success">Success</button>
                            <button type="button" class="btn btn-lg btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-lg btn-outline-info">Info</button>
                            <button type="button" class="btn btn-lg btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-lg btn-outline-dark">Dark</button>
                        </p>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <small class="text-light font-weight-semibold">Small</small>
                    <div class="demo-paragraph-spacing mt-3">
                        <p>
                            <button type="button" class="btn btn-sm btn-primary">Primary</button>
                            <button type="button" class="btn btn-sm btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-sm btn-default">Default</button>
                            <button type="button" class="btn btn-sm btn-success">Success</button>
                            <button type="button" class="btn btn-sm btn-warning">Warning</button>
                            <button type="button" class="btn btn-sm btn-info">Info</button>
                            <button type="button" class="btn btn-sm btn-danger">Danger</button>
                            <button type="button" class="btn btn-sm btn-dark">Dark</button>
                        </p>

                        <!-- Outline -->
                        <p>
                            <button type="button" class="btn btn-sm btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-sm btn-outline-default">Default</button>
                            <button type="button" class="btn btn-sm btn-outline-success">Success</button>
                            <button type="button" class="btn btn-sm btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                            <button type="button" class="btn btn-sm btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-sm btn-outline-dark">Dark</button>
                        </p>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <small class="text-light font-weight-semibold">Extra small</small>
                    <div class="demo-paragraph-spacing mt-3">
                        <p>
                            <button type="button" class="btn btn-xs btn-primary">Primary</button>
                            <button type="button" class="btn btn-xs btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-xs btn-default">Default</button>
                            <button type="button" class="btn btn-xs btn-success">Success</button>
                            <button type="button" class="btn btn-xs btn-warning">Warning</button>
                            <button type="button" class="btn btn-xs btn-info">Info</button>
                            <button type="button" class="btn btn-xs btn-danger">Danger</button>
                            <button type="button" class="btn btn-xs btn-dark">Dark</button>
                        </p>

                        <!-- Outline -->
                        <p>
                            <button type="button" class="btn btn-xs btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-xs btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-xs btn-outline-default">Default</button>
                            <button type="button" class="btn btn-xs btn-outline-success">Success</button>
                            <button type="button" class="btn btn-xs btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-xs btn-outline-info">Info</button>
                            <button type="button" class="btn btn-xs btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-xs btn-outline-dark">Dark</button>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    With icon
                </h6>
                <div class="card-body demo-inline-spacing">
                    <button type="button" class="btn btn-lg btn-primary"><span class="far fa-paper-plane"></span>&nbsp;&nbsp;Primary</button>
                    <button type="button" class="btn btn-lg btn-secondary"><span class="oi oi-cloud-download"></span>&nbsp;&nbsp;Secondary</button>
                    <button type="button" class="btn btn-lg btn-default"><span class="pe-7s-users"></span>&nbsp;&nbsp;Default</button>
                    <button type="button" class="btn btn-lg btn-success"><span class="ion ion-md-bulb"></span>&nbsp;&nbsp;Success</button>
                    <button type="button" class="btn btn-lg btn-warning"><span class="lnr lnr-map"></span>&nbsp;&nbsp;Warning</button>
                    <button type="button" class="btn btn-lg btn-info"><span class="far fa-paper-plane"></span>&nbsp;&nbsp;Info</button>
                    <button type="button" class="btn btn-lg btn-danger"><span class="oi oi-cloud-download"></span>&nbsp;&nbsp;Danger</button>
                    <button type="button" class="btn btn-lg btn-dark"><span class="pe-7s-users"></span>&nbsp;&nbsp;Dark</button>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Icon-buttons
                </h6>
                <div class="card-body demo-paragraph-spacing">
                    <!-- Extra-large -->
                    <p>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-primary">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-secondary">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-default">
                            <span class="pe-7s-users"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-success">
                            <span class="ion-md-bulb"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-warning">
                            <span class="lnr lnr-map"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-info">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-danger">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xl btn-outline-dark">
                            <span class="pe-7s-users"></span>
                        </button>
                    </p>

                    <!-- Large -->
                    <p>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-primary">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-secondary">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-default">
                            <span class="pe-7s-users"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-success">
                            <span class="ion-md-bulb"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-warning">
                            <span class="lnr lnr-map"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-info">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-danger">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-dark">
                            <span class="pe-7s-users"></span>
                        </button>
                    </p>

                    <!-- Default -->
                    <p>
                        <button type="button" class="btn icon-btn btn-outline-primary">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-secondary">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-default">
                            <span class="pe-7s-users"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-success">
                            <span class="ion-md-bulb"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-warning">
                            <span class="lnr lnr-map"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-info">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-danger">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-dark">
                            <span class="pe-7s-users"></span>
                        </button>
                    </p>

                    <!-- Small -->
                    <p>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-primary">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-secondary">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-default">
                            <span class="pe-7s-users"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-success">
                            <span class="ion-md-bulb"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-warning">
                            <span class="lnr lnr-map"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-info">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-danger">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-dark">
                            <span class="pe-7s-users"></span>
                        </button>
                    </p>

                    <!-- Extra-small -->
                    <p>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-primary">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-secondary">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-default">
                            <span class="pe-7s-users"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-success">
                            <span class="ion-md-bulb"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-warning">
                            <span class="lnr lnr-map"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-info">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-danger">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-dark">
                            <span class="pe-7s-users"></span>
                        </button>
                    </p>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <small class="text-light font-weight-semibold">Borderless</small>
                    <div class="demo-inline-spacing mt-3">
                        <button type="button" class="btn icon-btn btn-xl btn-outline-primary borderless">
                            <span class="far fa-paper-plane"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-lg btn-outline-secondary borderless">
                            <span class="oi oi-cloud-download"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-outline-success borderless">
                            <span class="pe-7s-users"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-sm btn-outline-info borderless">
                            <span class="lnr lnr-map"></span>
                        </button>
                        <button type="button" class="btn icon-btn btn-xs btn-outline-warning borderless">
                            <span class="ion-md-bulb"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">

            <div class="card mb-4">
                <h6 class="card-header">
                    Toggle
                </h6>
                <div class="row row-bordered no-gutters">
                    <div class="col-xl-6 p-4">
                        <div class="text-light small font-weight-semibold mb-3">Single</div>

                        <button type="button" class="btn btn-primary" data-toggle="button">
                            Single toggle
                        </button>
                    </div>
                    <div class="col-xl-6 p-4">
                        <div class="text-light small font-weight-semibold mb-3">Checkbox and radio</div>

                        <div class="demo-vertical-spacing-sm">
                            <!-- Checkbox -->
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="checkbox" checked> Checkbox 1 (pre-checked)
                                </label>
                                <label class="btn btn-primary">
                                    <input type="checkbox"> Checkbox 2
                                </label>
                                <label class="btn btn-primary">
                                    <input type="checkbox"> Checkbox 3
                                </label>
                            </div>

                            <br>

                            <!-- Radio -->
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="btn-radio" checked> Radio 1 (preselected)
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="btn-radio"> Radio 2
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="btn-radio"> Radio 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection