@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/dragula/dragula.css') }}">
    
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/projects.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/dragula/dragula.js') }}"></script>
    
    <script src="{{ mix('/js/pages_projects_item.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 mb-4">
        <ol class="breadcrumb font-weight-bold m-0">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Projects</a></li>
            <li class="breadcrumb-item active">Website development</small></li>
        </ol>
    </h4>

    <!-- Header -->
    <div class="container-m-nx border-right-0 border-left-0 ui-bordered mb-4">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
                <div class="media-body container-p-x py-4">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <div><strong class="text-primary text-large">67%</strong> completed</div>
                        <div class="text-muted small">15 opened tasks, 29 tasks completed</div>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar" style="width: 67%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container-p-x py-4">
                    <div class="text-muted small">Status</div>
                    <strong class="text-success text-big">Active</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- / Header -->

    <div class="row">
        <div class="col">

            <!-- Description -->
            <div class="card mb-4">
                <h6 class="card-header">Description</h6>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque magna augue, euismod at tortor et, laoreet maximus risus. Ut neque felis, luctus ut rhoncus id, elementum vitae lorem. Ut ac turpis sit amet lorem volutpat tincidunt. Vestibulum dui sapien, porttitor eget pellentesque id, ultrices id ipsum. Nam augue mi, maximus ut tortor et, fermentum efficitur diam. Suspendisse eget urna lorem. Fusce ligula augue, malesuada ullamcorper est nec, commodo laoreet tellus.</p>
                    <p>Proin imperdiet purus et lectus luctus, rutrum fermentum lorem molestie. Nam urna felis, elementum elementum placerat id, fermentum ac urna. Etiam libero sem, porttitor ultrices efficitur condimentum, lobortis sit amet enim. Sed vitae orci nulla.</p>
                    <p>Cras ultrices, dui id vulputate laoreet, diam orci semper ipsum, a aliquet nunc quam vitae turpis. Donec cursus tortor nec turpis semper, ac luctus mauris sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <p>Aliquam ornare nisl semper nisl porttitor commodo vel vel libero. Pellentesque faucibus, nisl vel luctus porttitor, leo felis pellentesque augue, dignissim tempus risus odio sed lorem. Nunc nec malesuada nunc, ut mollis dui. Vestibulum ac lacinia massa. Phasellus eget purus nisi. Quisque sodales, tortor et elementum dapibus, nisl urna hendrerit metus, a rhoncus magna sem in libero. Aliquam mattis erat ut diam viverra, quis iaculis sem pulvinar. Vivamus ut mi vitae arcu finibus convallis. Nulla turpis lacus, tempor et sagittis non, egestas nec ante.</p>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque pharetra turpis non aliquet ornare. Duis euismod ultricies est sed auctor. Sed luctus accumsan enim ut efficitur.</p>
                </div>
            </div>
            <!-- / Description -->

            <!-- Attached files -->
            <div class="card mb-4">
                <h6 class="card-header">Attached files</h6>
                <div class="card-body p-3">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-12 col-xl-6 p-1">

                            <div class="project-attachment ui-bordered p-2">
                                <div class="project-attachment-img" style="background-image: url(/img/bg/5.jpg)"></div>
                                <div class="media-body ml-3">
                                    <strong class="project-attachment-filename">image_1.jpg</strong>
                                    <div class="text-muted small">527KB</div>
                                    <div>
                                        <a href="javascript:void(0)">View</a> &nbsp;
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 p-1">

                            <div class="project-attachment ui-bordered p-2">
                                <div class="project-attachment-img" style="background-image: url(/img/bg/6.jpg)"></div>
                                <div class="media-body ml-3">
                                    <strong class="project-attachment-filename">image_2.jpg</strong>
                                    <div class="text-muted small">269KB</div>
                                    <div>
                                        <a href="javascript:void(0)">View</a> &nbsp;
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 p-1">

                            <div class="project-attachment ui-bordered p-2">
                                <div class="project-attachment-file display-4">
                                    <i class="far fa-file-pdf"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <strong class="project-attachment-filename">assignment_letter.pdf</strong>
                                    <div class="text-muted small">156KB</div>
                                    <div>
                                        <a href="javascript:void(0)">View</a> &nbsp;
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 p-1">

                            <div class="project-attachment ui-bordered p-2">
                                <div class="project-attachment-file display-4">
                                    <i class="far fa-file-archive"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <strong class="project-attachment-filename">app_update.zip</strong>
                                    <div class="text-muted small">1.35MB</div>
                                    <div>
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- / Attached files -->

            <!-- Tabs -->
            <div class="nav-tabs-top mb-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#project-tasks">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#project-discussion">Discussion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#project-activity">Activity</a>
                    </li>
                </ul>
                <div class="tab-content">

                    <!-- Tasks -->
                    <div class="tab-pane fade show active" id="project-tasks">

                        <div class="card-body">
                            <p class="text-muted small">Frontend</p>
                            <div class="project-task-list custom-controls-stacked">

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Update User profile page</span>
                                        <span class="badge badge-warning font-weight-normal ml-2">Other</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Add images to the product gallery</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Create invoice template</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <p class="text-muted small">Backend</p>
                            <div class="project-task-list custom-controls-stacked">

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">New blog layout</span>
                                        <span class="badge badge-success font-weight-normal ml-2">Clients</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Create UI design model</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">New icons set for an iOS app</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Create ad campaign banners set</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Edit the draft for the icons</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Fix validation issues and commit</span>
                                        <span class="badge badge-danger font-weight-normal ml-2">Important</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Support tickets list doesn't support commas</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-task-item">
                                    <label class="ui-todo-item custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Help Web devs with HTML integration</span>
                                    </label>
                                    <div class="d-flex align-items-center">
                                        <div class="project-task-handle ion ion-ios-move text-lightest small mr-3"></div>
                                        <div class="project-task-actions btn-group">
                                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer py-3">
                            <button type="button" class="btn btn-primary"><i class="ion ion-md-add"></i>&nbsp; Add task</button>&nbsp;
                            <button type="button" class="btn btn-default md-btn-flat"><i class="ion ion-md-close"></i>&nbsp; Clear</button>
                        </div>

                    </div>
                    <!-- / Tasks -->

                    <!-- Discussion -->
                    <div class="tab-pane fade" id="project-discussion">
                        <div class="card-body">

                            <div class="media mb-3">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                </div>
                                <div class="media-body bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Mike Greene</div>
                                    Pellentesque faucibus, nisl vel luctus porttitor, leo felis pellentesque augue, dignissim tempus risus odio sed lorem. Nunc nec malesuada nunc, ut mollis dui.
                                </div>
                            </div>

                            <div class="media mb-3">
                                <div>
                                    <img src="/img/avatars/5-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                </div>
                                <div class="media-body bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Nelle Maxwell</div>
                                    Quisque sodales, tortor et elementum dapibus, nisl urna hendrerit metus, a rhoncus magna sem in libero.
                                </div>
                            </div>

                            <div class="media mb-3">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                </div>
                                <div class="media-body bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Mike Greene</div>
                                    Cum ea graeci tractatos.
                                </div>
                            </div>

                            <div class="media mb-3">
                                <div>
                                    <img src="/img/avatars/2-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                </div>
                                <div class="media-body bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Leon Wilson</div>
                                    Cras ultrices, dui id vulputate laoreet, diam orci semper ipsum, a aliquet nunc quam vitae turpis. Donec cursus tortor nec turpis semper, ac luctus mauris sagittis.
                                </div>
                            </div>

                            <div class="media mb-3">
                                <div>
                                    <img src="/img/avatars/3-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                </div>
                                <div class="media-body bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Allie Rodriguez</div>
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                </div>
                            </div>

                            <div class="media mb-3">
                                <div>
                                    <img src="/img/avatars/5-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                </div>
                                <div class="media-body bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                    Aliquam ornare nisl semper nisl porttitor commodo vel vel libero.
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type your message">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Discussion -->

                    <!-- Activity -->
                    <div class="tab-pane fade" id="project-activity">
                        <div class="card-body">

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-add bg-primary text-white"></span>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Mike Greene</a> added new task <strong>Create invoice template</strong>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-code text-body bg-warning"></span>
                                    <img src="/img/avatars/2-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Leon Wilson</a> pushed commit <strong>#950458</strong>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-code text-body bg-warning"></span>
                                    <img src="/img/avatars/3-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Allie Rodriguez</a> pushed commit <strong>#950457</strong>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-code text-body bg-warning"></span>
                                    <img src="/img/avatars/5-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Nellie Maxwell</a> pushed commit <strong>#950456</strong>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-checkmark bg-success text-white"></span>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Kenneth Frazier</a> completed task <strong>Google AdWords campain graphics</strong>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-code text-body bg-warning"></span>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Kenneth Frazier</a> pushed commit <strong>#950455</strong>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-add bg-primary text-white"></span>
                                    <img src="/img/avatars/5-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Nellie Maxwell</a> added new task <strong>Edit the draft for the icons</strong>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                            <div class="media pb-1 mb-3">
                                <div class="ui-feed-icon-container">
                                    <span class="ui-icon ui-feed-icon ion ion-md-contact bg-info text-white"></span>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                </div>
                                <div class="media-body align-self-center ml-3">
                                    <a href="javascript:void(0)">Mike Greene</a> assigned new participant <a href="javascript:void(0)"><strong>Nellie Maxwell</strong></a>
                                    <div class="text-muted small">2 hours ago</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- / Activity -->

                </div>
            </div>
            <!-- / Tabs -->

        </div>
        <div class="col-md-4 col-xl-3">

            <!-- Project details -->
            <div class="card mb-4">
                <h6 class="card-header">Project details</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Client</div>
                        <div><a href="javascript:void(0)">Company Ltd.</a></div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Created by</div>
                        <div><a href="javascript:void(0)">Mae Gibson</a></div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Created at</div>
                        <div>02/01/2018</div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Last update</div>
                        <div>02/18/2018</div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Deadline</div>
                        <div><strong>03/12/2018</strong></div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Priority</div>
                        <div class="project-priority btn-group">
                            <button type="button" class="btn btn-xs md-btn-flat dropdown-toggle btn-danger" data-toggle="dropdown">High</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item active" href="javascript:void(0)">High</a>
                                <a class="dropdown-item" href="javascript:void(0)">Medium</a>
                                <a class="dropdown-item" href="javascript:void(0)">Low</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Hour rate</div>
                        <div>$35/h</div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Total hours</div>
                        <div>74</div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="text-muted">Total cost</div>
                        <div><strong>$2590</strong></div>
                    </li>
                    <li class="list-group-item">
                        <div class="text-muted small">Tags</div>
                        <div class="d-flex flex-wrap">
                            <div class="badge badge-default mt-1 mr-1">Development</div>
                            <div class="badge badge-default mt-1 mr-1">Frontend</div>
                            <div class="badge badge-default mt-1 mr-1">Backend</div>
                            <div class="badge badge-default mt-1 mr-1">Design</div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- / Project details -->

            <!-- Leaders -->
            <div class="card mb-4">
                <h6 class="card-header with-elements">
                    <span class="card-header-title">Leaders</span>
                    <div class="card-header-elements ml-auto">
                        <button type="button" class="btn btn-xs btn-outline-primary">
                            <span class="ion ion-md-add"></span> Add
                        </button>
                    </div>
                </h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="/img/avatars/1-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                            <div class="media-body px-2">
                                <a href="javascript:void(0)" class="text-body">Mike Greene</a>
                            </div>
                            <a href="javascript:void(0)" class="d-block text-light text-large font-weight-light">&times;</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- / Leaders -->

            <!-- Participants -->
            <div class="card mb-4">
                <h6 class="card-header with-elements">
                    <span class="card-header-title">Participants</span>
                    <div class="card-header-elements ml-auto">
                        <button type="button" class="btn btn-xs btn-outline-primary">
                            <span class="ion ion-md-add"></span> Add
                        </button>
                    </div>
                </h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="/img/avatars/2-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                            <div class="media-body px-2">
                                <a href="javascript:void(0)" class="text-body">Leon Wilson</a>
                            </div>
                            <a href="javascript:void(0)" class="d-block text-light text-large font-weight-light">&times;</a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="/img/avatars/3-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                            <div class="media-body px-2">
                                <a href="javascript:void(0)" class="text-body">Allie Rodriguez</a>
                            </div>
                            <a href="javascript:void(0)" class="d-block text-light text-large font-weight-light">&times;</a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="/img/avatars/4-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                            <div class="media-body px-2">
                                <a href="javascript:void(0)" class="text-body">Kenneth Frazier</a>
                            </div>
                            <a href="javascript:void(0)" class="d-block text-light text-large font-weight-light">&times;</a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <img src="/img/avatars/5-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                            <div class="media-body px-2">
                                <a href="javascript:void(0)" class="text-body">Nellie Maxwell</a>
                            </div>
                            <a href="javascript:void(0)" class="d-block text-light text-large font-weight-light">&times;</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- / Participants -->

        </div>
    </div>
@endsection