@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Order <span class="text-muted">#3455632</span>
    </h4>

    <div class="card">

        <!-- Status -->
        <div class="card-body">
            <strong class="mr-2">Status:</strong>
            <span class="text-big"><span class="badge badge-success">Shipped</span></span>
            <span class="text-muted small ml-1">02/25/2018</span>
        </div>
        <hr class="m-0">
        <!-- / Status -->

        <!-- Info -->
        <div class="card-body pb-1">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="text-muted small">Date</div>
                    02/17/2018 16:23
                </div>
                <div class="col-md-4 mb-3">
                    <div class="text-muted small">Items</div>
                    4
                </div>
                <div class="col-md-4 mb-3">
                    <div class="text-muted small">Amount</div>
                    $1184.65
                </div>
            </div>
        </div>
        <hr class="m-0">
        <!-- / Info -->

        <!-- Billing -->
        <div class="card-body">
            <h6 class="small font-weight-semibold">
                Billing Info
            </h6>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="text-muted small">Name</div>
                    John Doe
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">Phone</div>
                    123-456-7891
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">Email</div>
                    jdoe@email.com
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">Country</div>
                    USA
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">State / Region</div>
                    California
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">City</div>
                    San Francisco
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">ZIP Code</div>
                    94108
                </div>
                <div class="col-12">
                    <div class="text-muted small">Address</div>
                    950 Mason St, San Francisco, CA 94108, USA
                </div>
            </div>
        </div>
        <hr class="m-0">
        <!-- / Billing -->

        <!-- Shipping -->
        <div class="card-body">
            <h6 class="small font-weight-semibold">
                Shipping Info
            </h6>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="text-muted small">Name</div>
                    John Doe
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">Phone</div>
                    123-456-7891
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">Email</div>
                    jdoe@email.com
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">Country</div>
                    USA
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">State / Region</div>
                    California
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">City</div>
                    San Francisco
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-muted small">ZIP Code</div>
                    94108
                </div>
                <div class="col-12">
                    <div class="text-muted small">Address</div>
                    950 Mason St, San Francisco, CA 94108, USA
                </div>
            </div>
        </div>
        <hr class="m-0">
        <!-- / Shipping -->

        <!-- Items -->
        <div class="card-body">
            <h6 class="small font-weight-semibold">
                Items
            </h6>

            <div class="table-responsive">
                <table class="table table-bordered m-0" style="min-width:550px;">
                    <tbody>

                        <tr>
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="/img/uikit/nike-1.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="text-body d-block">Nike Men Black Liteforce III Sneakers <span class="text-muted">#3455632</span></a>
                                        <small>
                                            <span class="text-muted">Color:</span>
                                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                                            <span class="text-muted">Size: </span> EU 37 &nbsp;
                                            <span class="text-muted">Ships from: </span> China
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <!-- Set column width -->
                            <td class="align-middle p-4" style="width: 66px;">
                                x2
                            </td>
                            <!-- Set column width -->
                            <td class="text-right font-weight-semibold align-middle p-4" style="width: 100px;">
                                $115.10
                            </td>
                        </tr>

                        <tr>
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="/img/uikit/s7edge-1.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="text-body d-block">Samsung Galaxy S7 Edge <span class="text-muted">#3455644</span></a>
                                        <small>
                                            <span class="text-muted">Color:</span>
                                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#000;"></span> &nbsp;
                                            <span class="text-muted">Storage: </span> 32GB &nbsp;
                                            <span class="text-muted">Warranty: </span> Standard - 1 year &nbsp;
                                            <span class="text-muted">Ships from: </span> China
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle p-4">
                                x1
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">
                                $1049.00
                            </td>
                        </tr>

                        <tr>
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="/img/uikit/sunglasses.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="text-body d-block">WALKING 400 BLUE CAT3 <span class="text-muted">#3455601</span></a>
                                        <small>
                                            <span class="text-muted">Ships from: </span> Germany
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle p-4">
                                x1
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">
                                $20.55
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- / Items -->

    </div>
@endsection