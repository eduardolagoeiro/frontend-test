@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/growl/growl.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/toastr/toastr.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/growl/growl.js') }}"></script>
    <script src="{{ mix('/vendor/libs/toastr/toastr.js') }}"></script>
    
    <script src="{{ mix('/js/ui_notifications.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Notifications
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Alerts
        </h6>
        <div class="row no-gutters row-bordered">
            <div class="demo-vertical-spacing-sm col-sm-6 p-4">
                <div class="text-light small font-weight-semibold mb-3">Default</div>

                <div class="alert alert-primary alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a primary alert — check it out!
                </div>

                <div class="alert alert-secondary alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a secondary alert — check it out!
                </div>

                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a success alert — check it out!
                </div>

                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a danger alert — check it out!
                </div>

                <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a warning alert — check it out!
                </div>

                <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is an info alert — check it out!
                </div>

                <div class="alert alert-dark alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a dark alert — check it out!
                </div>
            </div>

            <div class="demo-vertical-spacing-sm col-sm-6 p-4">
                <div class="text-light small font-weight-semibold mb-3">Dark</div>

                <div class="alert alert-dark-primary alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a primary alert — check it out!
                </div>

                <div class="alert alert-dark-secondary alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a secondary alert — check it out!
                </div>

                <div class="alert alert-dark-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a success alert — check it out!
                </div>

                <div class="alert alert-dark-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a danger alert — check it out!
                </div>

                <div class="alert alert-dark-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a warning alert — check it out!
                </div>

                <div class="alert alert-dark-info alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is an info alert — check it out!
                </div>

                <div class="alert alert-dark-dark alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a dark alert — check it out!
                </div>
            </div>
        </div>

    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap 4 toasts
        </h6>
        <div class="row no-gutters">
            <div class="col-md-6 p-4">
                <div class="text-light small font-weight-semibold mb-3">Default</div>

                <div class="bs4-toast toast show">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-primary">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-secondary">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-success">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-warning">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-info">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-danger">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-dark">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

            </div>
            <div class="col-md-6 ui-bg-cover ui-bg-overlay-container p-4" style="background-image: url('/img/bg/1.jpg');">
                <div class="ui-bg-overlay bg-dark opacity-50"></div>
                <div class="text-white small font-weight-semibold mb-3">Translucent</div>

                <div class="bs4-toast toast show">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-primary">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-secondary">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-success">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-warning">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-info">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-danger">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

                <div class="bs4-toast toast show bg-dark">
                    <div class="toast-header">
                        <img src="/img/avatars/1.png" class="d-block ui-w-20 rounded mr-2" alt="">
                        <div class="mr-auto font-weight-bold">Bootstrap</div>
                        <div class="d-block small">11 mins ago</div>
                        <button type="button" class="d-block close mb-1 ml-2" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Growl
        </h6>
        <div class="card-body">
            <button id="growl-default" class="btn btn-default">Default</button>
            <button id="growl-notice" class="btn btn-info">Notice</button>
            <button id="growl-warning" class="btn btn-warning">Warning</button>
            <button id="growl-error" class="btn btn-danger">Error</button>
            <button id="growl-static" class="btn btn-default">Static</button>
            <button id="growl-small" class="btn btn-default">Small</button>
            <button id="growl-large" class="btn btn-default">Large</button>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Toastr
        </h6>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <div class="form-group">
                        <label class="form-label" for="toastr-title">Title</label>
                        <input id="toastr-title" name="toastr-title" type="text" class="form-control" placeholder="Enter a title...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="toastr-message">Message</label>
                        <input id="toastr-message" name="toastr-message" type="text" class="form-control" placeholder="Enter a message...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="toastr-type">Type</label>
                        <select class="custom-select form-control" id="toastr-type" name="toastr-type">
                            <option value="success" selected>Success</option>
                            <option value="info">Info</option>
                            <option value="warning">Warning</option>
                            <option value="error">Error</option>
                        </select>
                    </div>
                    <div class="form-group custom-controls-stacked">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="toastr-close-button">
                            <span class="custom-control-label">Close button</span>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="toastr-progress-bar">
                            <span class="custom-control-label">Progress bar</span>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="toastr-prevent-duplicates">
                            <span class="custom-control-label">Prevent duplicates</span>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="toastr-newest-on-top">
                            <span class="custom-control-label">Newest on top</span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="form-group custom-controls-stacked">
                        <label class="form-label mb-2">Position</label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-top-right" checked>
                            <span class="custom-control-label">Top Right</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-bottom-right">
                            <span class="custom-control-label">Bottom Right</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-bottom-left">
                            <span class="custom-control-label">Bottom Left</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-top-left">
                            <span class="custom-control-label">Top Left</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-top-full-width">
                            <span class="custom-control-label">Top Full Width</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-bottom-full-width">
                            <span class="custom-control-label">Bottom Full Width</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-top-center">
                            <span class="custom-control-label">Top Center</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" name="toastr-position" class="custom-control-input" value="toast-bottom-center">
                            <span class="custom-control-label">Bottom Center</span>
                        </label>
                    </div>
                </div>
            </div>

            <hr>

            <button class="btn btn-primary mr-1" id="toastr-show">Show toast</button>
            <button class="btn btn-default mr-1" id="toastr-clear">Clear toasts</button>
        </div>
    </div>
@endsection