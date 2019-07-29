@extends('layouts.layout-2')

@section('content')
    <h4 class="d-flex flex-wrap justify-content-between align-items-center pt-3 mb-4">
        <ol class="breadcrumb font-weight-bold mb-3">
            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="ion ion-ios-chatbubbles"></i></a></li>
            <li class="breadcrumb-item active">Getting started</li>
        </ol>
        <div class="col-12 col-md-3 p-0 mb-3">
            <input type="text" class="form-control" placeholder="Search...">
        </div>
    </h4>

    <div class="mb-4">
        <button type="button" class="btn btn-primary"><i class="ion ion-md-add"></i>&nbsp; New thread</button>
    </div>

    <div class="card mb-3">
        <div class="card-header d-none d-md-block">
            <div class="row no-gutters align-items-center">
                <div class="col"></div>
                <div class="col-4 text-muted">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">Replies</div>
                        <div class="col-8">Last update</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Aliquam et velit vel nisi egestas pulvinar sit amet ac tellus</a>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Leon Wilson</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">12</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/2-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Leon Wilson</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Sed scelerisque justo elit, sed maximus arcu fringilla at</a>
                    <span class="badge badge-success align-text-bottom ml-1">Solved</span>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Allie Rodriguez</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">43</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/3-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Allie Rodriguez</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Donec lobortis molestie sem, ac consectetur turpis egestas quis</a>
                    <span class="badge badge-default align-text-bottom ml-1">Locked</span>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Kenneth Frazier</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">42</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/4-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Kenneth Frazier</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Donec tellus nibh, efficitur a interdum id, vulputate ultrices mi</a>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Nellie Maxwell</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">632</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/5-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Nellie Maxwell</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Pellentesque in consequat erat</a>
                    <span class="badge badge-secondary align-text-bottom ml-1">Closed</span>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Mae Gibson</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">53</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/6-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Mae Gibson</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Vivamus maximus lectus sed finibus pellentesque</a>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Alice Hampton</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">33</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/7-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Alice Hampton</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Nullam luctus eget odio in bibendum</a>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Hallie Lewis</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">58</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/8-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Hallie Lewis</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Donec rutrum metus mi, eget consequat metus posuere non</a>
                    <span class="badge badge-success align-text-bottom ml-1">Solved</span>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Amanda Warner</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">134</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/9-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Amanda Warner</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Integer eu tortor purus</a>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Wayne Morgan</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">32</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/12-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Wayne Morgan</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body py-3">

            <div class="row no-gutters align-items-center">
                <div class="col">
                    <a href="javascript:void(0)" class="text-big">Nullam luctus eget odio in bibendum</a>
                    <span class="badge badge-danger align-text-bottom ml-1">Hot!</span>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Belle Ross</a></div>
                </div>
                <div class="d-none d-md-block col-4">

                    <div class="row no-gutters align-items-center">
                        <div class="col-4">12</div>
                        <div class="media col-8 align-items-center">
                            <img src="/img/avatars/11-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div>
                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Belle Ross</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <nav>
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">«</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">»</a></li>
        </ul>
    </nav>
@endsection