@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/quill/typography.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/quill/editor.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/dragula/dragula.css') }}">
    
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/products.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/select2/select2.js') }}"></script>
    <script>
        // Quill does not support IE 10 and below so don't load it to prevent console errors
        if (typeof document.documentMode !== 'number' || document.documentMode > 10) {
            document.write('\x3Cscript src="{{ mix('/vendor/libs/quill/quill.js') }}">\x3C/script>');
        }
    </script>
    <script src="{{ mix('/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ mix('/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ mix('/vendor/libs/dragula/dragula.js') }}"></script>
    
    <script src="{{ mix('/js/pages_e-commerce_product-edit.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Edit product <span class="text-muted">#3455632</span>
    </h4>

    <div class="nav-tabs-top nav-responsive-sm">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#item-info">Basic info</a>
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
            <!-- Basic info -->
            <div class="tab-pane fade show active" id="item-info">

                <div class="card-body">

                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" value="Samsung Galaxy S7 Edge">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="text" class="form-control" value="1049.00">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Items in stock</label>
                        <input type="text" class="form-control" value="123">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tax</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="25">
                            <div class="input-group-append">
                                <div class="input-group-text">%</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="custom-select">
                            <option selected>Published</option>
                            <option>Out of stock</option>
                            <option>Pending</option>
                            <option>Hidden</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <select class="custom-select">
                            <option>Computers</option>
                            <option>Portable tech</option>
                            <option selected>Mobile phones</option>
                            <option>Audio</option>
                            <option>Photo and video</option>
                            <option>Video game consoles</option>
                        </select>
                    </div>

                </div>
                <hr class="m-0">

                <div class="card-body">
                    <h6 class="small font-weight-semibold mb-4">Options <span class="text-muted font-weight-normal">(depending on category)</span></h6>

                    <div class="form-group">
                        <label class="form-label">Brand</label>
                        <select class="custom-select">
                            <option>Apple</option>
                            <option>Blueberry</option>
                            <option selected>Samsung</option>
                            <option>LG</option>
                            <option>Asus</option>
                            <option>Sony</option>
                            <option>Honor</option>
                            <option>Huawei</option>
                            <option>Xiaomi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Storages</label>
                        <select multiple class="product-edit-multiselect form-control w-100">
                            <option>8GB</option>
                            <option>16GB</option>
                            <option selected>32GB</option>
                            <option selected>64GB</option>
                            <option>128GB</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Colors</label>
                        <select multiple class="product-edit-multiselect form-control w-100">
                            <option selected>Black</option>
                            <option>White</option>
                            <option>Silver</option>
                            <option>Gray</option>
                            <option selected>Green</option>
                            <option selected>Gold</option>
                            <option>Pink</option>
                            <option>Red</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Warranties</label>
                        <select multiple class="product-edit-multiselect form-control w-100">
                            <option selected>Standard - 1 year</option>
                            <option selected>Extended - 2 years | $99</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Ships from</label>
                        <select multiple class="product-edit-multiselect form-control w-100">
                            <option selected>USA</option>
                            <option selected>China</option>
                            <option>France</option>
                            <option selected>Germany</option>
                            <option>UK</option>
                        </select>
                    </div>

                </div>
                <hr class="m-0">

                <div class="card-body">
                    <h6 class="small font-weight-semibold mb-4">Meta</h6>

                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" value="Samsung Galaxy S7 Edge">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3">Buy Samsung Galaxy S7 Edge!</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Keywords</label>
                        <input type="text" class="form-control" value="Mobile, Smartphone, Samsung, Galaxy, S3, Edge">
                    </div>

                </div>

            </div>
            <!-- / Basic info -->

            <!-- Description -->
            <div class="tab-pane fade" id="item-description">
                <div class="card-body">

                    <div id="product-editor-toolbar">
                        <span class="ql-formats">
                            <select class="ql-font"></select>
                            <select class="ql-size"></select>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            <button class="ql-strike"></button>
                        </span>
                        <span class="ql-formats">
                            <select class="ql-color"></select>
                            <select class="ql-background"></select>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-script" value="sub"></button>
                            <button class="ql-script" value="super"></button>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-header" value="1"></button>
                            <button class="ql-header" value="2"></button>
                            <button class="ql-blockquote"></button>
                            <button class="ql-code-block"></button>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-list" value="ordered"></button>
                            <button class="ql-list" value="bullet"></button>
                            <button class="ql-indent" value="-1"></button>
                            <button class="ql-indent" value="+1"></button>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-direction" value="rtl"></button>
                            <select class="ql-align"></select>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-link"></button>
                            <button class="ql-image"></button>
                            <button class="ql-video"></button>
                        </span>
                        <span class="ql-formats">
                            <button class="ql-clean"></button>
                        </span>
                    </div>
                    <div id="product-editor" style="height: 600px"></div>
                    <textarea id="product-editor-fallback" class="form-control d-none" style="height: 600px"></textarea>
                </div>

            </div>
            <!-- / Description -->

            <!-- Discounts -->
            <div class="tab-pane fade" id="item-discounts">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table product-discounts-edit">
                            <thead>
                                <tr>
                                    <th>Discount</th>
                                    <th>Type</th>
                                    <th>Code</th>
                                    <th>Quantity</th>
                                    <th>Period</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="5">
                                            <div class="input-group-append">
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>General</option>
                                            <option>Code</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" value="" disabled></td>
                                    <td><input type="text" class="form-control" value="100"></td>
                                    <td><input type="text" class="product-discount-period form-control" value=""></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-default md-btn-flat icon-btn btn-sm"><i class="ion ion-md-close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="10">
                                            <div class="input-group-append">
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>General</option>
                                            <option>Code</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" value="" disabled></td>
                                    <td><input type="text" class="form-control" value=""></td>
                                    <td><input type="text" class="product-discount-period form-control" value="02/01/2018 - 03/01/2018"></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-default md-btn-flat icon-btn btn-sm"><i class="ion ion-md-close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="20">
                                            <div class="input-group-append">
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option>General</option>
                                            <option selected>Code</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" value="G446DJ"></td>
                                    <td><input type="text" class="form-control" value="100"></td>
                                    <td><input type="text" class="product-discount-period form-control" value="02/12/2018 - 03/05/2018"></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-default md-btn-flat icon-btn btn-sm"><i class="ion ion-md-close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="15">
                                            <div class="input-group-append">
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option>General</option>
                                            <option selected>Code</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" value="HDA56D"></td>
                                    <td><input type="text" class="form-control" value="30"></td>
                                    <td><input type="text" class="product-discount-period form-control" value="02/23/2018 - 04/06/2018"></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-default md-btn-flat icon-btn btn-sm"><i class="ion ion-md-close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="10">
                                            <div class="input-group-append">
                                                <div class="input-group-text">%</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>General</option>
                                            <option>Code</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" value="" disabled></td>
                                    <td><input type="text" class="form-control" value=""></td>
                                    <td><input type="text" class="product-discount-period form-control" value="05/14/2018 - 05/30/2018"></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-default md-btn-flat icon-btn btn-sm"><i class="ion ion-md-close"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <button type="button" class="btn btn-outline-primary"><i class="ion ion-md-add"></i>&nbsp; Add discount</button>

                </div>
            </div>
            <!-- / Discounts -->

            <!-- Images -->
            <div class="tab-pane fade" id="item-images">
                <div class="card-body">

                    <div id="product-images">

                        <div class="media align-items-center bg-white ui-bordered py-3 mb-2">
                            <div class="product-image-move ion ion-ios-move text-muted text-big p-4"></div>
                            <a href="javascript:void(0)" class="d-block ui-w-100 mr-4">
                                <img src="/img/uikit/s7edge-1.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="media-body">
                                <input type="text" value="example.com/assets/img/products/s7edge-1.jpg" class="form-control form-control-sm bg-transparent border-light mb-2" readonly>
                                <label class="switcher switcher-sm">
                                    <input type="radio" name="product-primary-image" class="switcher-input" checked>
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Primary image</span>
                                </label>
                            </div>
                            <button type="button" class="btn btn-outline-danger borderless icon-btn d-block mx-4"><i class="ion ion-md-close"></i></button>
                        </div>


                        <div class="media align-items-center bg-white ui-bordered py-3 mb-2">
                            <div class="product-image-move ion ion-ios-move text-muted text-big p-4"></div>
                            <a href="javascript:void(0)" class="d-block ui-w-100 mr-4">
                                <img src="/img/uikit/s7edge-2.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="media-body">
                                <input type="text" value="example.com/assets/img/products/s7edge-2.jpg" class="form-control form-control-sm bg-transparent border-light mb-2" readonly>
                                <label class="switcher switcher-sm">
                                    <input type="radio" name="product-primary-image" class="switcher-input">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Primary image</span>
                                </label>
                            </div>
                            <button type="button" class="btn btn-outline-danger borderless icon-btn d-block mx-4"><i class="ion ion-md-close"></i></button>
                        </div>


                        <div class="media align-items-center bg-white ui-bordered py-3 mb-2">
                            <div class="product-image-move ion ion-ios-move text-muted text-big p-4"></div>
                            <a href="javascript:void(0)" class="d-block ui-w-100 mr-4">
                                <img src="/img/uikit/s7edge-3.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="media-body">
                                <input type="text" value="example.com/assets/img/products/s7edge-3.jpg" class="form-control form-control-sm bg-transparent border-light mb-2" readonly>
                                <label class="switcher switcher-sm">
                                    <input type="radio" name="product-primary-image" class="switcher-input">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Primary image</span>
                                </label>
                            </div>
                            <button type="button" class="btn btn-outline-danger borderless icon-btn d-block mx-4"><i class="ion ion-md-close"></i></button>
                        </div>


                        <div class="media align-items-center bg-white ui-bordered py-3 mb-2">
                            <div class="product-image-move ion ion-ios-move text-muted text-big p-4"></div>
                            <a href="javascript:void(0)" class="d-block ui-w-100 mr-4">
                                <img src="/img/uikit/s7edge-4.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="media-body">
                                <input type="text" value="example.com/assets/img/products/s7edge-4.jpg" class="form-control form-control-sm bg-transparent border-light mb-2" readonly>
                                <label class="switcher switcher-sm">
                                    <input type="radio" name="product-primary-image" class="switcher-input">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Primary image</span>
                                </label>
                            </div>
                            <button type="button" class="btn btn-outline-danger borderless icon-btn d-block mx-4"><i class="ion ion-md-close"></i></button>
                        </div>

                    </div>

                    <button type="button" class="btn btn-outline-primary mt-3"><i class="ion ion-md-cloud-upload"></i>&nbsp; Upload images</button>

                </div>
            </div>
            <!-- / Images -->

        </div>
    </div>

    <div class="text-right mt-3">
        <button type="button" class="btn btn-default">Cancel</button> &nbsp;
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
@endsection