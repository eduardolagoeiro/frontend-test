@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/dragula/dragula.css') }}">
    
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/tasks.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/dragula/dragula.js') }}"></script>
    
    <script src="{{ mix('/js/pages_task-list.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Tasks
    </h4>

    <div class="row">
        <div class="col-md-4 col-lg-4 col-xl-3">

            <div class="ui-bordered mb-4">
                <div class="d-flex align-items-center w-100 bg-lighter font-weight-bold py-2 px-3">
                    <i class="ion ion-ios-filing ui-w-20 mr-1"></i>
                    <a href="javascript:void(0)" class="text-body d-block">Inbox</a>
                </div>
                <div class="d-flex align-items-center w-100 py-2 px-3">
                    <i class="ion ion-md-calendar ui-w-20 mr-1"></i>
                    <a href="javascript:void(0)" class="text-body d-block">Today</a>
                </div>
                <div class="d-flex align-items-center w-100 py-2 px-3">
                    <i class="ion ion-ios-calendar ui-w-20 mr-1"></i>
                    <a href="javascript:void(0)" class="text-body d-block">Next 7 days</a>
                </div>

                <ul class="nav nav-sm nav-tabs tabs-alt nav-justified mt-3">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tasks-projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tasks-tags">Tags</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tasks-projects">
                        <div class="py-3">
                            <div class="py-2 px-3">
                                <a href="javascript:void(0)" class="text-body">Website design</a>
                            </div>
                            <div class="py-2 px-3">
                                <a href="javascript:void(0)" class="text-body">SEO improvement</a>
                            </div>
                            <div class="py-2 px-3">
                                <a href="javascript:void(0)" class="text-body">example.com redesign</a>
                            </div>
                            <a href="javascript:void(0)" class="d-block text-light small py-2 px-3"><i class="ion ion-md-add"></i>&nbsp; Add project</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tasks-tags">
                        <div class="py-3">
                            <div class="py-2 px-3">
                                <a href="javascript:void(0)" class="text-body"><span class="badge badge-dot badge-success"></span> &nbsp; Clients</a>
                            </div>
                            <div class="py-2 px-3">
                                <a href="javascript:void(0)" class="text-body"><span class="badge badge-dot badge-danger"></span> &nbsp; Important</a>
                            </div>
                            <div class="py-2 px-3">
                                <a href="javascript:void(0)" class="text-body"><span class="badge badge-dot badge-info"></span> &nbsp; Social</a>
                            </div>
                            <div class="py-2 px-3">
                                <a href="javascript:void(0)" class="text-body"><span class="badge badge-dot badge-warning"></span> &nbsp; Other</a>
                            </div>
                            <a href="javascript:void(0)" class="d-block text-light small py-2 px-3"><i class="ion ion-md-add"></i>&nbsp; Add tag</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col">

            <div class="card">
                <div class="card-header py-3">
                    <button type="button" class="btn btn-primary"><i class="ion ion-md-add"></i>&nbsp; Add task</button>&nbsp;
                    <button type="button" class="btn btn-default md-btn-flat"><i class="ion ion-md-close"></i>&nbsp; Clear</button>
                </div>
                <div class="card-body">
                    <p class="text-muted small">Today</p>
                    <div class="task-list custom-controls-stacked">

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Buy products</span>
                                <span class="badge badge-warning font-weight-normal ml-2">Other</span>
                                <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">58 mins left</span>
                            </label>
                            <div class="d-flex align-items-center float-right">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Reply to emails</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Write blog post</span>
                                <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">20 hours left</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label">Wash my car</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
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
                    <p class="text-muted small">Tomorrow</p>
                    <div class="task-list custom-controls-stacked">

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Buy antivirus</span>
                                <span class="badge badge-warning font-weight-normal ml-2">Other</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Jane's Happy Birthday</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Call mom</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
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
                    <p class="text-muted small">Next week</p>
                    <div class="task-list custom-controls-stacked">

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">New blog layout</span>
                                <span class="badge badge-success font-weight-normal ml-2">Clients</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Create UI design model</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">New icons set for an iOS app</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Create ad campaign banners set</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Edit the draft for the icons</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Fix validation issues and commit</span>
                                <span class="badge badge-danger font-weight-normal ml-2">Important</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Support tickets list doesn't support commas</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
                                    <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="task-list-item">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Help Web devs with HTML integration</span>
                            </label>
                            <div class="d-flex align-items-center">
                                <div class="task-list-handle ion ion-ios-move text-lightest small mr-3"></div>
                                <div class="task-list-actions btn-group">
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
            </div>

        </div>
    </div>
@endsection