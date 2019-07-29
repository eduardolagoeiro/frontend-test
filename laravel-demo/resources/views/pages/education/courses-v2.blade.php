@extends('layouts.layout-2')

@section('content')
    <h4 class="d-flex flex-wrap justify-content-between align-items-center w-100 font-weight-bold pt-2 mb-4">
        <div class="col-12 col-md px-0 pb-2">Courses</div>
        <div class="col-12 col-md-3 px-0 pb-2">
            <input type="text" class="form-control" placeholder="Search...">
        </div>
    </h4>

    <ul class="nav container-m-nx bg-lighter container-p-x py-1 mb-4">
        <li class="nav-item">
            <a class="nav-link text-body font-weight-bold pl-0" href="javascript:void(0)">Development</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)">Web Development</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)">Mobile Apps</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)">Programming Languages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)">Databases</a>
        </li>
    </ul>

    <div class="card mb-4">
        <ul class="list-group list-group-flush">

            <li class="list-group-item py-4">
                <div class="media flex-wrap">
                    <div class="d-none d-sm-block ui-w-140">
                        <a href="javascript:void(0)" class="d-block ui-rect-67 ui-bg-cover" style="background-image: url('/img/bg/1.jpg');"></a>
                    </div>
                    <div class="media-body ml-sm-4">
                        <h5 class="mb-2">
                            <div class="float-right font-weight-semibold ml-3">$15.99</div>
                            <a href="javascript:void(0)" class="text-body">Complete Java Masterclass</a>&nbsp;
                        </h5>
                        <div class="d-flex flex-wrap align-items-center mb-2">
                            <div class="text-muted small">
                                <i class="ion ion-md-time text-primary"></i>
                                <span>12h</span>
                            </div>
                            <div class="ui-stars ml-3">
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
                            <a href="javascript:void(0)" class="text-muted small">55</a>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio ligula, rhoncus scelerisque ullamcorper iaculis.</div>
                        <div class="mt-2">
                            <span class="badge badge-outline-default text-muted font-weight-normal">Java</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item py-4">
                <div class="media flex-wrap">
                    <div class="d-none d-sm-block ui-w-140">
                        <a href="javascript:void(0)" class="d-block ui-rect-67 ui-bg-cover" style="background-image: url('/img/bg/2.jpg');"></a>
                    </div>
                    <div class="media-body ml-sm-4">
                        <h5 class="mb-2">
                            <div class="float-right font-weight-semibold ml-3">$44.00</div>
                            <a href="javascript:void(0)" class="text-body">The Complete Web Developer Course 2.0</a>&nbsp;
                        </h5>
                        <div class="d-flex flex-wrap align-items-center mb-2">
                            <div class="text-muted small">
                                <i class="ion ion-md-time text-primary"></i>
                                <span>34h</span>
                            </div>
                            <div class="ui-stars ml-3">
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
                            <a href="javascript:void(0)" class="text-muted small">55</a>
                        </div>
                        <div>Pellentesque at sodales tortor, eu volutpat metus.</div>
                        <div class="mt-2">
                            <span class="badge badge-outline-default text-muted font-weight-normal">Backend</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item py-4">
                <div class="media flex-wrap">
                    <div class="d-none d-sm-block ui-w-140">
                        <a href="javascript:void(0)" class="d-block ui-rect-67 ui-bg-cover" style="background-image: url('/img/bg/3.jpg');"></a>
                    </div>
                    <div class="media-body ml-sm-4">
                        <h5 class="mb-2">
                            <div class="float-right font-weight-semibold ml-3">$56.99</div>
                            <a href="javascript:void(0)" class="text-body">Python for Beginners: Learn Python Programming</a>&nbsp;
                        </h5>
                        <div class="d-flex flex-wrap align-items-center mb-2">
                            <div class="text-muted small">
                                <i class="ion ion-md-time text-primary"></i>
                                <span>44h</span>
                            </div>
                            <div class="ui-stars ml-3">
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
                            <a href="javascript:void(0)" class="text-muted small">55</a>
                        </div>
                        <div>Nulla lorem, placerat in ultricies sed, aliquet eu eros. In lacinia porttitor enim vel commodo.</div>
                        <div class="mt-2">
                            <span class="badge badge-outline-default text-muted font-weight-normal">Backend</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">Python</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item py-4">
                <div class="media flex-wrap">
                    <div class="d-none d-sm-block ui-w-140">
                        <a href="javascript:void(0)" class="d-block ui-rect-67 ui-bg-cover" style="background-image: url('/img/bg/4.jpg');"></a>
                    </div>
                    <div class="media-body ml-sm-4">
                        <h5 class="mb-2">
                            <div class="float-right font-weight-semibold ml-3">FREE</div>
                            <a href="javascript:void(0)" class="text-body">Become a Web Developer from Scratch</a>&nbsp;
                        </h5>
                        <div class="d-flex flex-wrap align-items-center mb-2">
                            <div class="text-muted small">
                                <i class="ion ion-md-time text-primary"></i>
                                <span>16h</span>
                            </div>
                            <div class="ui-stars ml-3">
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
                            <a href="javascript:void(0)" class="text-muted small">55</a>
                        </div>
                        <div>Donec gravida id neque nec faucibus. Nam congue leo quis ligula dignissim, id scelerisque ipsum condimentum.</div>
                        <div class="mt-2">
                            <span class="badge badge-outline-default text-muted font-weight-normal">HTML5</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">CSS3</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">JS</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item py-4">
                <div class="media flex-wrap">
                    <div class="d-none d-sm-block ui-w-140">
                        <a href="javascript:void(0)" class="d-block ui-rect-67 ui-bg-cover" style="background-image: url('/img/bg/5.jpg');"></a>
                    </div>
                    <div class="media-body ml-sm-4">
                        <h5 class="mb-2">
                            <div class="float-right font-weight-semibold ml-3">$14.99</div>
                            <a href="javascript:void(0)" class="text-body">Become a Certified Web Developer</a>&nbsp;
                        </h5>
                        <div class="d-flex flex-wrap align-items-center mb-2">
                            <div class="text-muted small">
                                <i class="ion ion-md-time text-primary"></i>
                                <span>17h</span>
                            </div>
                            <div class="ui-stars ml-3">
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
                            <a href="javascript:void(0)" class="text-muted small">55</a>
                        </div>
                        <div>Vestibulum eget magna eget turpis imperdiet finibus. Maecenas mi velit, varius vel sapien sed, sodales dignissim risus.</div>
                        <div class="mt-2">
                            <span class="badge badge-outline-default text-muted font-weight-normal">HTML5</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">CSS3</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">JS</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item py-4">
                <div class="media flex-wrap">
                    <div class="d-none d-sm-block ui-w-140">
                        <a href="javascript:void(0)" class="d-block ui-rect-67 ui-bg-cover" style="background-image: url('/img/bg/6.jpg');"></a>
                    </div>
                    <div class="media-body ml-sm-4">
                        <h5 class="mb-2">
                            <div class="float-right font-weight-semibold ml-3">$66.99</div>
                            <a href="javascript:void(0)" class="text-body">Full stack Universal React with Redux, Node js and MongoDB</a>&nbsp;
                        </h5>
                        <div class="d-flex flex-wrap align-items-center mb-2">
                            <div class="text-muted small">
                                <i class="ion ion-md-time text-primary"></i>
                                <span>25h</span>
                            </div>
                            <div class="ui-stars ml-3">
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
                                <div class="ui-star filled">
                                    <i class="ion ion-md-star"></i>
                                    <i class="ion ion-md-star"></i>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="text-muted small">55</a>
                        </div>
                        <div>Integer fringilla varius vestibulum. Quisque efficitur tempor nisl vitae rutrum. Vestibulum et iaculis arcu, vitae placerat lacus.</div>
                        <div class="mt-2">
                            <span class="badge badge-outline-default text-muted font-weight-normal">React</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">Redux</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">MongoDB</span>
                            <span class="badge badge-outline-default text-muted font-weight-normal">NodeJS</span>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
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
@endsection