@extends('layouts.layout-2')

@section('scripts')
    <script src="{{ mix('/js/pages_projects_list.js') }}"></script>
@endsection

@section('content')
    <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
        <div>Projects</div>
        <button type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Create project</button>
    </h4>

    <div class="row">
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-start pb-3">
                    <div>
                        <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">Frontend Development</a>
                        <span class="badge badge-success align-text-bottom ml-1">Active</span>
                        <div class="text-muted small mt-1">10 opened tasks, 5 tasks completed</div>
                    </div>
                    <div class="btn-group project-actions">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">View</a>
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="progress rounded-0" style="height: 3px;">
                    <div class="progress-bar" style="width: 33%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                    <strong>33%</strong> completed
                </div>
                <div class="card-body pb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Team</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/2-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/3-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/4-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/5-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/6-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-start pb-3">
                    <div>
                        <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">Website</a>
                        <span class="badge badge-success align-text-bottom ml-1">Active</span>
                        <div class="text-muted small mt-1">15 opened tasks, 29 tasks completed</div>
                    </div>
                    <div class="btn-group project-actions">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">View</a>
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="progress rounded-0" style="height: 3px;">
                    <div class="progress-bar" style="width: 67%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                    <strong>67%</strong> completed
                </div>
                <div class="card-body pb-3">
                    Aliquam sem elit, semper sed ante ut, aliquam molestie risus.
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Team</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/7-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/8-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/9-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-start pb-3">
                    <div>
                        <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">UI update</a>
                        <span class="badge badge-success align-text-bottom ml-1">Active</span>
                        <div class="text-muted small mt-1">6 opened tasks, 48 tasks completed</div>
                    </div>
                    <div class="btn-group project-actions">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">View</a>
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="progress rounded-0" style="height: 3px;">
                    <div class="progress-bar" style="width: 89%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                    <strong>89%</strong> completed
                </div>
                <div class="card-body pb-3">
                    Etiam venenatis varius lectus sed fermentum. Nullam hendrerit, massa sed tincidunt sagittis, leo nibh semper sapien, vitae interdum nisl erat ut sapien.
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Team</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/10-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/11-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/12-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-start pb-3">
                    <div>
                        <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">SEO</a>
                        <span class="badge badge-warning align-text-bottom ml-1">Pending</span>
                        <div class="text-muted small mt-1">25 opened tasks, 45 tasks completed</div>
                    </div>
                    <div class="btn-group project-actions">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">View</a>
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="progress rounded-0" style="height: 3px;">
                    <div class="progress-bar" style="width: 64%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                    <strong>64%</strong> completed
                </div>
                <div class="card-body pb-3">
                    Suspendisse scelerisque nisi ac semper ornare.
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Team</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/2-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/3-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/4-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-start pb-3">
                    <div>
                        <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">example.com design</a>
                        <span class="badge badge-success align-text-bottom ml-1">Active</span>
                        <div class="text-muted small mt-1">56 opened tasks, 28 tasks completed</div>
                    </div>
                    <div class="btn-group project-actions">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">View</a>
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="progress rounded-0" style="height: 3px;">
                    <div class="progress-bar" style="width: 33%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                    <strong>33%</strong> completed
                </div>
                <div class="card-body pb-3">
                    Pellentesque imperdiet nunc quis fringilla euismod. Nunc iaculis eu augue sit amet faucibus.
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Team</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/5-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/6-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/7-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/8-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection