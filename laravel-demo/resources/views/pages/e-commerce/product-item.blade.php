@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/blueimp-gallery/gallery.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/blueimp-gallery/gallery-indicator.css') }}">
    
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/products.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-fullscreen.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-indicator.js') }}"></script>
    
    <script src="{{ mix('/js/pages_e-commerce_product-item.js') }}"></script>
@endsection

@section('content')
    <div class="media align-items-center py-3 mb-4">
        <img src="/img/uikit/s7edge-1.jpg" alt="" class="d-block ui-w-80 ui-bordered">
        <div class="media-body ml-4">
            <h4 class="font-weight-bold mb-2">Samsung Galaxy S7 Edge <span class="text-muted">#3455632</span></h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-sm">Edit</a>&nbsp;
            <a href="javascript:void(0)" class="btn btn-default btn-sm">Show item page</a>
        </div>
    </div>

    <div class="nav-tabs-top nav-responsive-sm">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#item-overview">Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#item-description">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#item-discounts">Discounts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#item-images">Images</a>
            </li>
        </ul>
        <div class="tab-content">

            <!-- Overview -->
            <div class="tab-pane fade show active" id="item-overview">

                <div class="row no-gutters row-bordered">
                    <div class="d-flex col-md-6 col-lg align-items-center">

                        <div class="card-body d-flex align-items-center">
                            <div>
                                <div class="ui-stars text-large text-nowrap">
                                    <div class="ui-star filled">
                                        <i class="ion ion-md-star"></i>
                                        <i class="ion ion-md-star"></i>
                                    </div>
                                    <div class="ui-star filled">
                                        <i class="ion ion-md-star"></i>
                                        <i class="ion ion-md-star"></i>
                                    </div>
                                    <div class="ui-star filled">
                                        <i class="ion ion-md-star"></i>
                                        <i class="ion ion-md-star"></i>
                                    </div>
                                    <div class="ui-star filled">
                                        <i class="ion ion-md-star"></i>
                                        <i class="ion ion-md-star"></i>
                                    </div>
                                    <div class="ui-star half-filled">
                                        <i class="ion ion-md-star"></i>
                                        <i class="ion ion-md-star"></i>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="d-block text-muted small">123 reviews</a>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex col-md-6 col-lg align-items-center">

                        <div class="card-body d-flex align-items-center">
                            <div class="lnr lnr-cart display-4 text-secondary"></div>
                            <div class="ml-3">
                                <div class="text-muted small line-height-1">Sales</div>
                                <div class="text-xlarge">1,045</div>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex col-md-6 col-lg align-items-center">

                        <div class="card-body d-flex align-items-center">
                            <div class="lnr lnr-earth display-4 text-secondary"></div>
                            <div class="ml-3">
                                <div class="text-muted small line-height-1">Views</div>
                                <div class="text-xlarge">65,326</div>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex col-md-6 col-lg align-items-center">

                        <div class="card-body d-flex align-items-center">
                            <div class="lnr lnr-gift display-4 text-secondary"></div>
                            <div class="ml-3">
                                <div class="text-muted small line-height-1">Wished</div>
                                <div class="text-xlarge">3,671</div>
                            </div>
                        </div>

                    </div>
                </div>
                <hr class="m-0">

                <div class="card-body">
                    <h6 class="small font-weight-semibold mb-4">Basic info</h6>

                    <table class="table product-item-table">
                        <tbody>
                            <tr>
                                <td>Price:</td>
                                <td><strong>$1049.00</strong></td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>Mobile phones</td>
                            </tr>
                            <tr>
                                <td>Items in stock:</td>
                                <td>123</td>
                            </tr>
                            <tr>
                                <td>Tax:</td>
                                <td>25%</td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td><span class="badge badge-success">Published</span></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <hr class="m-0">

                <div class="card-body">
                    <h6 class="small font-weight-semibold mb-4">Options</h6>

                    <table class="table product-item-table">
                        <tbody>
                            <tr>
                                <td>Brand:</td>
                                <td>Samsung</td>
                            </tr>
                            <tr>
                                <td>Storages:</td>
                                <td>32GB, 64GB</td>
                            </tr>
                            <tr>
                                <td>Colors:</td>
                                <td>
                                    <span class="ui-product-color align-middle" style="background:#000;"></span> <span class="align-middle">Black</span> &nbsp;
                                    <span class="ui-product-color align-middle" style="background:#5f9ea0;"></span> <span class="align-middle">Green</span> &nbsp;
                                    <span class="ui-product-color align-middle" style="background:#c5baab;"></span> <span class="align-middle">Gold</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Warranties:</td>
                                <td>Standard - 1 year, Extended - 2 years | $99</td>
                            </tr>
                            <tr>
                                <td>Ships from:</td>
                                <td>USA, China, Germany</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <hr class="m-0">

                <div class="card-body product-item-table">
                    <h6 class="small font-weight-semibold mb-4">Meta</h6>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Title:</td>
                                <td>Samsung Galaxy S7 Edge</td>
                            </tr>
                            <tr>
                                <td>Description:</td>
                                <td>Buy Samsung Galaxy S7 Edge!</td>
                            </tr>
                            <tr>
                                <td>Keywords:</td>
                                <td>Mobile, Smartphone, Samsung, Galaxy, S3, Edge</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- / Overview -->

            <!-- Description -->
            <div class="tab-pane fade" id="item-description">
                <div class="card-body p-5">

                    <div class="row">
                        <div class="col-md">
                            <p>
                                <span class="text-muted">Dimension:</span>&nbsp; 150.9 x 72.6 x 7.7mm</p>
                            <p>
                                <span class="text-muted">Weight:</span>&nbsp; 157g</p>
                            <p>
                                <span class="text-muted">Camera Resolution (Rear):</span>&nbsp; Dual Pixel 12.0 MP</p>
                            <p>
                                <span class="text-muted">Camera Resolution (Front):</span>&nbsp; CMOS 5MP</p>
                            <p>
                                <span class="text-muted">Battery, Talk Time:</span>&nbsp; 3G CDMA: Up to 36 hours</p>
                            <p>
                                <span class="text-muted">Battery Type and Size:</span>&nbsp; 3600 mAh</p>
                            <p>
                                <span class="text-muted">Music Play Time:</span>&nbsp; Up to 66 hours</p>
                            <p>
                                <span class="text-muted">Video Play Time:</span>&nbsp; Up to 19 hours</p>
                            <p>
                                <span class="text-muted">Internet Use Time:</span>&nbsp; 3G: Up to 13 hours; LTE: Up to 15 hours; Wi-Fi: Up to 15 hours</p>
                            <p>
                                <span class="text-muted">Music Play Time:</span>&nbsp; Up to 66 hours</p>
                        </div>
                        <div class="col-md">
                            <p>
                                <span class="text-muted">Internal Memory:</span>&nbsp; 32GB</p>
                            <p>
                                <span class="text-muted">External Memory:</span>&nbsp; MicroSD (Up to 256GB)</p>
                            <p>
                                <span class="text-muted">Wi-Fi:</span>&nbsp; 802.11 a/b/g/n/ac 2.4G+5GHz, VHT80 MU-MIMO</p>
                            <p>
                                <span class="text-muted">USB:</span>&nbsp; USB 2.0</p>
                            <p>
                                <span class="text-muted">Bluetooth:</span>&nbsp; Bluetooth v4.2</p>
                            <p>
                                <span class="text-muted">ANT+:</span>&nbsp; Yes</p>
                            <p>
                                <span class="text-muted">Location Technology:</span>&nbsp; GPS, Glonass</p>
                            <p>
                                <span class="text-muted">Wi-Fi Direct:</span>&nbsp; Yes</p>
                            <p>
                                <span class="text-muted">NFC:</span>&nbsp; Yes</p>
                            <p>
                                <span class="text-muted">Processor Speed, Type:</span>&nbsp; 2.15GHz, 1.6GHz, Quad-Core</p>
                        </div>
                        <div class="col-md">
                            <p>
                                <span class="text-muted">Main Display Resolution:</span>&nbsp; 2560 x 1440 (Quad HD)</p>
                            <p>
                                <span class="text-muted">Main Display Size:</span>&nbsp; 5.5” (139.5mm)</p>
                            <p>
                                <span class="text-muted">Main Display Technology:</span>&nbsp; Dual edge Super AMOLED®</p>
                            <p>
                                <span class="text-muted">Color Depth:</span>&nbsp; 16M</p>
                            <p>
                                <span class="text-muted">Audio Playing Format:</span>&nbsp; MP3, M4A, 3GA, AAC, OGG, OGA, WAV, WMA, AMR, AWB, FLAC, MID, MIDI, XMF, MXMF, IMY, RTTTL, RTX, OTA</p>
                            <p>
                                <span class="text-muted">Video Playing Format:</span>&nbsp; MP4, M4V, 3GP, 3G2, WMV, ASF, AVI, FLV, MKV, WEBM</p>
                            <p>
                                <span class="text-muted">Video Playing Resolution:</span>&nbsp; UHD 4K (3840 x 2160) @60fps</p>
                            <p>
                                <span class="text-muted">S-Voice:</span>&nbsp; Yes</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- / Description -->

            <!-- Discounts -->
            <div class="tab-pane fade" id="item-discounts">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table product-item-discounts-table">
                            <thead>
                                <tr>
                                    <th>Discount</th>
                                    <th>Type</th>
                                    <th>Code</th>
                                    <th>Quantity</th>
                                    <th>Done</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>5%</th>
                                    <td>General</td>
                                    <td>-</td>
                                    <td>100</td>
                                    <td>65</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>10%</th>
                                    <td>General</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>02/01/2018</td>
                                    <td>03/01/2018</td>
                                </tr>
                                <tr>
                                    <th>20%</th>
                                    <td>Code</td>
                                    <td>G446DJ</td>
                                    <td>100</td>
                                    <td>-</td>
                                    <td>02/12/2018</td>
                                    <td>03/05/2018</td>
                                </tr>
                                <tr>
                                    <th>15%</th>
                                    <td>Code</td>
                                    <td>HDA56D</td>
                                    <td>30</td>
                                    <td>-</td>
                                    <td>02/23/2018</td>
                                    <td>04/06/2018</td>
                                </tr>
                                <tr>
                                    <th>10%</th>
                                    <td>General</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>05/14/2018</td>
                                    <td>05/30/2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- / Discounts -->

            <!-- Images -->
            <div class="tab-pane fade" id="item-images">
                <div class="card-body">

                    <div class="mb-4">
                        <span class="badge badge-dot badge-primary"></span> Primary image
                    </div>

                    <!-- Lightbox template -->
                    <div id="product-item-lightbox" class="blueimp-gallery blueimp-gallery-controls">
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <ol class="indicator"></ol>
                    </div>

                    <div id="product-item-images" class="row">

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
                            <a href="/img/uikit/s7edge-1.jpg" class="d-block border-primary ui-bordered">
                                <img src="/img/uikit/s7edge-1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
                            <a href="/img/uikit/s7edge-2.jpg" class="d-block ui-bordered">
                                <img src="/img/uikit/s7edge-2.jpg" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
                            <a href="/img/uikit/s7edge-3.jpg" class="d-block ui-bordered">
                                <img src="/img/uikit/s7edge-3.jpg" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4">
                            <a href="/img/uikit/s7edge-4.jpg" class="d-block ui-bordered">
                                <img src="/img/uikit/s7edge-4.jpg" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- / Images -->

        </div>
    </div>
@endsection