@extends('layouts.layout-2-flex')

@section('styles')
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/clients.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/pages_clients.js') }}"></script>
@endsection

@section('content')
    <!-- `.clients-wrapper` fills all available space of container -->
    <div class="clients-wrapper clients-sidebox-open">

        <!-- `.clients-content` fills all available space of `clients-wrapper` -->
        <div class="clients-content clients-scroll container-p-x container-p-y">

            <!-- Header -->
            <h4 class="d-flex flex-wrap justify-content-between align-items-center font-weight-bold pt-2 mb-4">
                <div class="mb-2">Clients</div>
                <div class="mb-2" style="max-width: 200px;">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </h4>
            <!-- / Header -->

            <!-- Clients list -->
            <div class="table-responsive ui-bordered">
                <table class="clients-table table table-hover m-0">

                    <tbody>
                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Nelle Maxwell</div>
                                        <div class="text-muted small">@nmaxwell</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                nmaxwell@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                            </td>
                        </tr>

                        <tr class="bg-light">
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/9-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Amanda Warner</div>
                                        <div class="text-muted small">@awarner</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                awarner@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                                <span class="badge badge-success">Active</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Kenneth Frazier</div>
                                        <div class="text-muted small">@kfrazier</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                kfrazier@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                                <span class="badge badge-warning">Pending</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Mae Gibson</div>
                                        <div class="text-muted small">@mgibson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                mgibson@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/12-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Arthur Duncan</div>
                                        <div class="text-muted small">@aduncan</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                aduncan@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                                <span class="badge badge-info">In progress</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Belle Ross</div>
                                        <div class="text-muted small">@bross</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                bross@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Allie Rodriguez</div>
                                        <div class="text-muted small">@arodriguez</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                bross@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                                <span class="badge badge-success">Active</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/7-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Alice Hampton</div>
                                        <div class="text-muted small">@ahampton</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                ahampton@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                                <span class="badge badge-warning">Pending</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/8-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Hallie Lewis</div>
                                        <div class="text-muted small">@hlewis</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                hlewis@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                                <span class="badge badge-info">In progress</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle py-3">
                                <div class="media align-items-center">
                                    <img src="/img/avatars/2-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body flex-basis-auto pl-3">
                                        <div>Leon Wilson</div>
                                        <div class="text-muted small">@lwilson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle py-3">
                                Company Inc.
                            </td>
                            <td class="align-middle py-3">
                                lwilson@mail.com <br>
                                +0 (123) 456 7891
                            </td>
                            <td class="align-middle py-3">
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <!-- / Clients list -->

        </div><!-- / .clients-content -->

        <!-- Clients sidebox -->
        <div class="clients-sidebox bg-body border-left">
            <a href="javascript:void(0)" class="clients-sidebox-close text-muted text-xlarge font-weight-light">&times;</a>

            <div class="clients-scroll container-p-y">

                <!-- Client info -->
                <div class="text-center p-4">
                    <img src="/img/avatars/9.png" class="ui-w-100 rounded-circle mb-4" alt="">
                    <h5 class="mb-1"><a href="javascript:void(0)" class="text-body">Amanda Warner</a></h5>
                    <div class="text-muted small mb-2">@awarner</div>
                    <div class="small mb-4">
                        Company Inc. <br>
                        +0 (123) 456 7891
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                        <span class="text-lighter">|</span> &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                    </div>
                </div>
                <!-- / Client info -->

                <hr class="border-light m-0">

                <!-- Messages -->
                <div class="p-4">
                    <h6 class="mb-3">Messages</h6>

                    <div class="ui-bordered py-2 px-3 mb-3">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                        <div class="text-muted small mt-1">1 day ago &nbsp; | &nbsp; <a href="javascript:void(0)" class="text-muted">Reply</a></div>
                    </div>

                    <div class="ui-bordered py-2 px-3 mb-3">
                        Vivendum torquatos ut nec, sit audiam deterruisset ei, cu sed nibh autem scriptorem. Ea quo vidit deleniti constituto, ex qui malis mollis iudicabit, viris fabellas id has.
                        <div class="text-muted small mt-1">2 day ago &nbsp; | &nbsp; <a href="javascript:void(0)" class="text-muted">Reply</a></div>
                    </div>

                    <div class="ui-bordered py-2 px-3 mb-3">
                        Eam facilis laboramus reprehendunt ei, ex esse fastidii per.
                        <div class="text-muted small mt-1">3 day ago &nbsp; | &nbsp; <a href="javascript:void(0)" class="text-muted">Reply</a></div>
                    </div>

                    <div class="ui-bordered py-2 px-3">
                        Ea inani epicurei mea. No docendi antiopam quo, ad dicant viderer cotidieque vix. Ea mea dicat ludus, utroque explicari conclusionemque ius eu, in scaevola tractatos persecuti per.
                        <div class="text-muted small mt-1">3 day ago &nbsp; | &nbsp; <a href="javascript:void(0)" class="text-muted">Reply</a></div>
                    </div>
                </div>
                <!-- / Messages -->

            </div>
        </div>
        <!-- / Clients sidebox -->

    </div>
    <!-- / Clients wrapper -->
@endsection