@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/dragula/dragula.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/dragula/dragula.js') }}"></script>
    
    <script src="{{ mix('/js/pages_kanban-board.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Kanban board
    </h4>

    <div class="form-row">
        <div class="col-md">

            <div class="card mb-3">
                <h6 class="card-header text-center">New</h6>
                <div class="kanban-box px-2 pt-2">
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        New blog layout
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Create UI design model
                        <span class="badge badge-success ml-1">Clients</span>
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Another icon set
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        iOS application design mockups
                    </div>
                </div>
                <div class="card-footer text-center py-2">
                    <a href="javascript:void(0)"><i class="ion ion-md-add"></i>&nbsp; Add task</a>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="card border-info mb-3">
                <h6 class="card-header text-center text-info">In progress</h6>
                <div class="kanban-box px-2 pt-2">
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        New icons set for an iOS app
                        <span class="badge badge-warning ml-1">Other</span>
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Create ad campaign banners set
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="card border-warning mb-3">
                <h6 class="card-header text-center text-warning">Test</h6>
                <div class="kanban-box px-2 pt-2">
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Help Web devs with HTML integration
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        UI/UX design review
                        <span class="badge badge-danger ml-1">Important</span>
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Marketing campaign review
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Fix website issues on mobile
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Create landing page for a new app
                        <span class="badge badge-info ml-1">Social</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="card border-success mb-3">
                <h6 class="card-header text-center text-success">Done</h6>
                <div class="kanban-box px-2 pt-2">
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Edit the draft for the icons
                        <span class="badge badge-danger ml-1">Important</span>
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Edit the draft for the icons
                    </div>
                    <div class="ui-bordered p-2 mb-2">
                        <div class="kanban-board-actions btn-group float-right ml-2">
                            <button type="button" class="btn btn-default btn-xs rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                            </div>
                        </div>
                        Edit the draft for the icons
                    </div>
                </div>
                <div class="card-footer text-center py-2">
                    <a href="javascript:void(0)"><i class="ion ion-md-close"></i>&nbsp; Clear completed tasks</a>
                </div>
            </div>

        </div>
    </div>
@endsection