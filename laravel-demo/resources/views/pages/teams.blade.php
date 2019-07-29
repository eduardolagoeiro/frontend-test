@extends('layouts.layout-2')

@section('scripts')
    <script src="{{ mix('/js/pages_teams.js') }}"></script>
@endsection

@section('content')
    <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
        <div>Teams</div>
        <button type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Add team</button>
    </h4>

    <div class="row">
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">Frontend</a>
                            <span class="badge badge-danger align-text-bottom ml-1">Busy</span>
                        </div>
                        <div class="btn-group team-actions">
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
                    <div class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
                    </div>
                </div>
                <div class="card-body pt-3 pb-0">
                    <div class="text-muted small mb-2">Leaders</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/2-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Members</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/3-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/4-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/5-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/6-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="text-muted small">Current project</div>
                    <div class="mb-3"><a href="javascript:void(0)" class="text-body font-weight-semibold">Frontend Development</a></div>
                    <div class="d-flex justify-content-between align-items-center small">
                        <div class="font-weight-bold">33%</div>
                        <div class="text-muted">5 / 15 tasks completed</div>
                    </div>
                    <div class="progress mt-1" style="height: 3px;">
                        <div class="progress-bar" style="width: 33%;"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="small font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="small font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">Backend</a>
                            <span class="badge badge-danger align-text-bottom ml-1">Busy</span>
                        </div>
                        <div class="btn-group team-actions">
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
                    <div class="mt-3">
                        Aliquam sem elit, semper sed ante ut, aliquam molestie risus.
                    </div>
                </div>
                <div class="card-body pt-3 pb-0">
                    <div class="text-muted small mb-2">Leaders</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/7-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/8-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Members</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/9-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/10-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/11-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/12-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/1-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/2-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/3-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/4-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="text-muted small">Current project</div>
                    <div class="mb-3"><a href="javascript:void(0)" class="text-body font-weight-semibold">Website</a></div>
                    <div class="d-flex justify-content-between align-items-center small">
                        <div class="font-weight-bold">67%</div>
                        <div class="text-muted">29 / 44 tasks completed</div>
                    </div>
                    <div class="progress mt-1" style="height: 3px;">
                        <div class="progress-bar" style="width: 67%;"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="small font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="small font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">Design</a>
                            <span class="badge badge-success align-text-bottom ml-1">Available</span>
                        </div>
                        <div class="btn-group team-actions">
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
                    <div class="mt-3">
                        Etiam venenatis varius lectus sed fermentum. Nullam hendrerit, massa sed tincidunt sagittis, leo nibh semper sapien, vitae interdum nisl erat ut sapien.
                    </div>
                </div>
                <div class="card-body pt-3 pb-0">
                    <div class="text-muted small mb-2">Leaders</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/5-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Members</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/6-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/7-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/8-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/9-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="text-lighter">No current project</div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">Marketing</a>
                            <span class="badge badge-danger align-text-bottom ml-1">Busy</span>
                        </div>
                        <div class="btn-group team-actions">
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
                    <div class="mt-3">
                        Suspendisse scelerisque nisi ac semper ornare.
                    </div>
                </div>
                <div class="card-body pt-3 pb-0">
                    <div class="text-muted small mb-2">Leaders</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/7-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Members</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/8-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/9-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/10-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="text-muted small">Current project</div>
                    <div class="mb-3"><a href="javascript:void(0)" class="text-body font-weight-semibold">example.com SEO</a></div>
                    <div class="d-flex justify-content-between align-items-center small">
                        <div class="font-weight-bold">64%</div>
                        <div class="text-muted">45 / 70 tasks completed</div>
                    </div>
                    <div class="progress mt-1" style="height: 3px;">
                        <div class="progress-bar" style="width: 64%;"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="text-muted small">Created</div>
                            <div class="small font-weight-bold">02/01/2018</div>
                        </div>
                        <div class="col">
                            <div class="text-muted small">Deadline</div>
                            <div class="small font-weight-bold">03/12/2018</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-4">

            <div class="card mb-4">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <a href="javascript:void(0)" class="text-body text-big font-weight-semibold">Graphic</a>
                            <span class="badge badge-success align-text-bottom ml-1">Available</span>
                        </div>
                        <div class="btn-group team-actions">
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
                    <div class="mt-3">
                        Pellentesque imperdiet nunc quis fringilla euismod. Nunc iaculis eu augue sit amet faucibus.
                    </div>
                </div>
                <div class="card-body pt-3 pb-0">
                    <div class="text-muted small mb-2">Leaders</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/11-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="text-muted small mb-2">Members</div>
                    <div class="d-flex flex-wrap">
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/12-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/1-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/2-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                        <a href="javascript:void(0)" class="d-block mr-1 mb-1"><img src="/img/avatars/3-small.png" alt="" class="ui-w-30 rounded-circle"></a>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="text-lighter">No current project</div>
                </div>
            </div>

        </div>
    </div>
@endsection