@extends('layouts.layout-2')

@section('styles')
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/search.css') }}">
@endsection

@section('content')
    <div class="py-1 mb-2">
        <div class="input-group">
            <input type="text" class="form-control" value="Advertisers embrace rich media format">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="ion ion-ios-search"></i>&nbsp; Search</button>
            </div>
        </div>
    </div>

    <ul class="search-nav nav nav-tabs tabs-alt container-m-nx container-p-x mb-4">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#search-pages"><i class="ion ion-md-copy"></i>&nbsp; Website</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#search-people"><i class="ion ion-ios-people"></i>&nbsp; People</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#search-images"><i class="ion ion-md-images"></i>&nbsp; Images</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#search-videos"><i class="ion ion-md-film"></i>&nbsp; Videos</a>
        </li>
    </ul>

    <div class="tab-content">

        <!-- Pages -->
        <div class="tab-pane fade show active" id="search-pages">
            <div class="card">
                <ul class="list-group list-group-flush">

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                        <div class="small mt-1">
                            <a href="javascript:void(0)" class="text-success">http://example.com/pages/234</a>
                            &nbsp; <span class="text-muted">·</span> &nbsp;
                            <div class="ui-stars">
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
                                <div class="ui-star">
                                    <i class="ion ion-md-star"></i>
                                    <i class="ion ion-md-star"></i>
                                </div>
                            </div>
                            &nbsp;
                            <span class="text-muted">36 votes</span>
                        </div>
                        <div class="mt-2">
                            Etiam diam tellus, mattis eget dui ac, consequat lobortis erat. Sed convallis, justo nec congue luctus, sapien massa egestas ligula, sed bibendum mi nibh eu dolor. Nullam purus arcu, iaculis ac ligula ut, rutrum facilisis ex.
                        </div>
                        <div class="ui-bordered px-3 pt-3 mt-3">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 pb-3">
                                    <a href="javascript:void(0)" class="text-big">Morbi maximus justo</a>
                                    <div class="mt-1">
                                        Nam velit nulla, mollis eu malesuada at, tempus ut libero.
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pb-3">
                                    <a href="javascript:void(0)" class="text-big">Quisque imperdiet</a>
                                    <div class="mt-1">
                                        Phasellus suscipit aliquet risus, molestie ornare tellus.
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pb-3">
                                    <a href="javascript:void(0)" class="text-big">Ligula ante</a>
                                    <div class="mt-1">
                                        Fusce rhoncus lectus auctor.
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pb-3">
                                    <a href="javascript:void(0)" class="text-big">Sit amet</a>
                                    <div class="mt-1">
                                        Interdum eros eu.
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pb-3">
                                    <a href="javascript:void(0)" class="text-big">Suscipit velit</a>
                                    <div class="mt-1">
                                        Tempor dui eget finibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">Morbi porta efficitur mauris, eu porttitor tortor rutrum viverra.</a>
                        <div class="small mt-1">
                            <a href="javascript:void(0)" class="text-success">http://example.com/pages/456</a>
                            &nbsp; <span class="text-muted">·</span> &nbsp;
                            <div class="ui-stars">
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
                            &nbsp;
                            <span class="text-muted">68 votes</span>
                        </div>
                        <div class="mt-2">
                            Aliquam finibus enim sit amet tellus maximus convallis. Quisque dignissim, augue et hendrerit congue, nisl ante dignissim lectus, a condimentum felis quam eu justo.
                        </div>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">Nulla condimentum felis quis scelerisque luctus.</a>
                        <div class="mt-2">
                            Nam et velit at odio interdum vehicula vel quis ex. Pellentesque egestas, urna cursus fringilla finibus, massa quam viverra elit, nec placerat diam purus eget dui.
                        </div>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">Donec vestibulum nulla at est fermentum, quis consectetur lectus dapibus.</a>
                        <div class="small mt-1">
                            <a href="javascript:void(0)" class="text-success">http://example.com/pages/789</a>
                        </div>
                        <div class="mt-2">
                            Sed et urna egestas metus viverra convallis at ac lectus. Nam sodales, lacus ut venenatis pulvinar, felis velit posuere tortor, imperdiet dapibus justo ipsum a mi.
                        </div>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">Sed mattis quam ut tellus auctor, sit amet facilisis libero porta.</a>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">In hac habitasse platea dictumst. Maecenas eu varius enim, eget faucibus massa.</a>
                        <div class="small mt-1">
                            <a href="javascript:void(0)" class="text-success">http://example.com/pages/561</a>
                        </div>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">Donec nec sapien id neque accumsan faucibus sed at lorem.</a>
                        <div class="small mt-1">
                            <a href="javascript:void(0)" class="text-success">http://example.com/pages/783</a>
                        </div>
                        <div class="mt-2">
                            Morbi ultricies fermentum tortor a tristique. Proin porta nibh in fermentum fermentum. Sed aliquet dui tempor orci aliquet, in egestas sapien porta. In sollicitudin dui nec nulla dapibus consequat.
                        </div>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">In sollicitudin dui nec nulla dapibus consequat.</a>
                        <div class="small mt-1">
                            <a href="javascript:void(0)" class="text-success">http://example.com/pages/1246</a>
                        </div>
                        <div class="mt-2">
                            Phasellus vehicula nibh at nunc sagittis, a gravida purus tincidunt. Nulla tempus augue odio, nec mollis nunc vehicula eget.
                        </div>
                    </li>

                    <li class="list-group-item py-4">
                        <a href="javascript:void(0)" class="text-big">Donec gravida erat quis odio convallis imperdiet.</a>
                        <div class="small mt-1">
                            <a href="javascript:void(0)" class="text-success">http://example.com/pages/444</a>
                        </div>
                        <div class="mt-2">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam laoreet turpis sed leo gravida interdum. Aliquam efficitur tempor enim ac pretium. Integer scelerisque dui sed ex laoreet congue.
                        </div>
                    </li>

                </ul>
            </div>

            <nav class="mt-3">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">«</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">»</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- / Pages -->

        <!-- People -->
        <div class="tab-pane fade" id="search-people">
            <div class="row">

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/1-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Mike Greene</a>
                                <div class="text-muted small">@mgreene</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/2-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Leon Wilson</a>
                                <div class="text-muted small">@lwilson</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-success rounded-pill btn-sm md-btn-flat d-block">Following</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/3-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Allie Rodriguez</a>
                                <div class="text-muted small">@arodriguez</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/4-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Kenneth Frazier</a>
                                <div class="text-muted small">@kfrazier</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/5-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Nellie Maxwell</a>
                                <div class="text-muted small">@nmaxwell</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/6-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Mae Gibson</a>
                                <div class="text-muted small">@mgibson</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-success rounded-pill btn-sm md-btn-flat d-block">Following</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/7-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Alice Hampton</a>
                                <div class="text-muted small">@ahampton</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/8-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Hallie Lewis</a>
                                <div class="text-muted small">@hlewis</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/9-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Amanda Warner</a>
                                <div class="text-muted small">@awarner</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/10-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Wayne Morgan</a>
                                <div class="text-muted small">@wmorgan</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-success rounded-pill btn-sm md-btn-flat d-block">Following</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/11-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Belle Ross</a>
                                <div class="text-muted small">@bross</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card card-condenced mb-4">
                        <div class="card-body media align-items-center">
                            <img src="/img/avatars/12-small.png" alt="" class="ui-w-40 rounded-circle">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-body font-weight-semibold mb-2">Arthur Duncan</a>
                                <div class="text-muted small">@aduncan</div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill btn-sm md-btn-flat d-block">Follow</a>
                        </div>
                    </div>
                </div>

            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">«</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">»</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- / People -->

        <!-- Images -->
        <div class="tab-pane fade" id="search-images">
            <div class="form-row">

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/1.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Lorem ipsum dolor sit amet</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/2.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Proin finibus commodo vestibulum</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/3.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Proin bibendum id ante et commodo</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/4.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Sed sollicitudin felis et urna posuere, ut euismod velit facilisis</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/5.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Lorem ipsum dolor sit amet</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/6.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Fusce rhoncus lectus auctor</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/7.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Pellentesque ullamcorper tempor dui eget finibus</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/8.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Donec vestibulum nulla at est fermentum</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/9.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Nulla condimentum felis quis scelerisque luctus</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/10.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Nam et velit at odio interdum vehicula vel quis ex</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/11.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">Pellentesque egestas, urna cursus fringilla finibus, massa quam viverra elit</div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 mb-2">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover ui-bg-overlay-container text-white" style="background-image: url('/img/bg/12.jpg');">
                        <div class="ui-bg-overlay bg-dark opacity-25"></div>

                        <div class="d-flex align-items-end ui-rect-content p-3">
                            <div class="flex-shrink-1 font-weight-semibold">In hac habitasse platea dictumst</div>
                        </div>
                    </a>
                </div>

            </div>
            <nav>
                <ul class="pagination mt-3">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">«</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">»</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- / Images -->

        <!-- Search -->
        <div class="tab-pane fade" id="search-videos">
            <div class="row">

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/1.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Lorem ipsum dolor sit amet
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/2.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Proin finibus commodo vestibulum
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/3.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Proin bibendum id ante et commodo
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/4.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Sed sollicitudin felis et urna posuere, ut euismod velit facilisis
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/5.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Lorem ipsum dolor sit amet
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/6.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Fusce rhoncus lectus auctor
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/7.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Pellentesque ullamcorper tempor dui eget finibus
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/8.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Donec vestibulum nulla at est fermentum
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/9.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Nulla condimentum felis quis scelerisque luctus
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/10.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Nam et velit at odio interdum vehicula vel quis ex
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/11.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        Pellentesque egestas, urna cursus fringilla finibus, massa quam viverra elit
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="javascript:void(0)" class="ui-rect-60 ui-bg-cover text-white" style="background-image: url('/img/bg/12.jpg');">
                        <div class="d-flex justify-content-end align-items-end ui-rect-content p-2">
                            <div class="bg-dark rounded text-white small font-weight-semibold line-height-1 p-1">12:34</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-body d-block mt-2">
                        In hac habitasse platea dictumst
                    </a>
                    <div>
                        <span class="text-muted small"> 1,342 views</span> &nbsp;
                        <a href="javascript:void(0)" class="text-muted small"> 256 likes</a> &nbsp;
                        <span class="text-muted small"> 32 reposts</span>
                    </div>
                </div>

            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">«</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">»</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- / Search -->

    </div>
@endsection