@extends('layouts.layout-2-flex')

@section('styles')
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/chat.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/pages_chat.js') }}"></script>
@endsection

@section('content')
    <!-- `.chat-wrapper` fills all available space of container -->
    <div class="chat-wrapper container-p-x container-p-y">

        <!-- Make card full height of `.chat-wrapper` -->
        <div class="card flex-grow-1 position-relative overflow-hidden">

            <!-- Make row full height of `.card` -->
            <div class="row no-gutters h-100">
                <div class="chat-sidebox col">

                    <!-- Chat contacts header -->
                    <div class="flex-grow-0 px-4">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <input type="text" class="form-control chat-search my-3" placeholder="Search...">
                            </div>
                            <a href="javascript:void(0)" class="chat-sidebox-toggler d-lg-none d-block text-muted text-large font-weight-light pl-3">&times;</a>
                        </div>
                        <hr class="border-light m-0">
                    </div>
                    <!-- / Chat contacts header -->

                    <!-- Wrap `.chat-scroll` to properly position scroll area. Remove this wtapper if you don't need scroll -->
                    <div class="flex-grow-1 position-relative">
                        <div class="chat-contacts list-group chat-scroll py-3">

                            <!-- Online -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                <img src="/img/avatars/2-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    Leon Wilson
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                </div>
                                <div class="badge badge-outline-success">5</div>
                            </a>

                            <!-- Online -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                <img src="/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    Allie Rodriguez
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                </div>
                            </a>

                            <!-- Online & Active -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action online active">
                                <img src="/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    Kenneth Frazier
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                </div>
                            </a>

                            <!-- Online -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                <img src="/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    Nellie Maxwell
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                </div>
                                <div class="badge badge-outline-success">2</div>
                            </a>

                            <!-- Online -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action online">
                                <img src="/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    Mae Gibson
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Online</div>
                                </div>
                            </a>

                            <!-- Offline -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                <img src="/img/avatars/7-small.png" class="d-block ui-w-40 rounded-circle" alt=""> 
                                <div class="media-body ml-3">
                                    Alice Hampton
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                </div>
                            </a>

                            <!-- Offline -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                <img src="/img/avatars/8-small.png" class="d-block ui-w-40 rounded-circle" alt=""> 
                                <div class="media-body ml-3">
                                    Hallie Lewis
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                </div>
                                <div class="badge badge-outline-success">1</div>
                            </a>

                            <!-- Offline -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                <img src="/img/avatars/9-small.png" class="d-block ui-w-40 rounded-circle" alt=""> 
                                <div class="media-body ml-3">
                                    Amanda Warner
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                </div>
                            </a>

                            <!-- Offline -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                <img src="/img/avatars/10-small.png" class="d-block ui-w-40 rounded-circle" alt=""> 
                                <div class="media-body ml-3">
                                    Wayne Morgan
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                </div>
                            </a>

                            <!-- Offline -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                <img src="/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt=""> 
                                <div class="media-body ml-3">
                                    Belle Ross
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                </div>
                            </a>

                            <!-- Offline -->
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                <img src="/img/avatars/12-small.png" class="d-block ui-w-40 rounded-circle" alt=""> 
                                <div class="media-body ml-3">
                                    Arthur Duncan
                                    <div class="chat-status small"><span class="badge badge-dot"></span>&nbsp; Offline</div>
                                </div>
                            </a>

                        </div><!-- / .chat-contacts -->
                    </div>

                </div>
                <div class="d-flex col flex-column">

                    <!-- Chat header -->
                    <div class="flex-grow-0 py-3 pr-4 pl-lg-4">

                        <div class="media align-items-center">
                            <a href="javascript:void(0)" class="chat-sidebox-toggler d-lg-none d-block text-muted text-large px-4 mr-2"><i class="ion ion-md-more"></i></a>

                            <div class="position-relative">
                                <span class="badge badge-dot badge-success indicator"></span>
                                <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt="">
                            </div>
                            <div class="media-body pl-3">
                                <strong>Kenneth Frazier</strong>
                                <div class="text-muted small"><em>Typing...</em></div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary rounded-pill icon-btn mr-1"><i class="ion ion-ios-call"></i></button>
                                <button type="button" class="btn btn-secondary rounded-pill icon-btn mr-1"><i class="ion ion-md-videocam"></i></button>
                                <button type="button" class="btn btn-default rounded-pill icon-btn"><i class="ion ion-ios-more"></i></button>
                            </div>
                        </div>

                    </div>
                    <hr class="flex-grow-0 border-light m-0">
                    <!-- / Chat header -->

                    <!-- Wrap `.chat-scroll` to properly position scroll area. Remove this wtapper if you don't need scroll -->
                    <div class="flex-grow-1 position-relative">

                        <!-- Remove `.chat-scroll` and add `.flex-grow-1` if you don't need scroll -->
                        <div class="chat-messages chat-scroll p-4">

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                    <div class="font-weight-semibold mb-1">You</div>
                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                </div>
                            </div>

                            <div class="chat-message-left mb-4">
                                <div>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                    <div class="font-weight-semibold mb-1">You</div>
                                    Cum ea graeci tractatos.
                                </div>
                            </div>

                            <div class="chat-message-left mb-4">
                                <div>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                    Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                </div>
                            </div>

                            <div class="chat-message-left mb-4">
                                <div>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                    Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                    <div class="font-weight-semibold mb-1">You</div>
                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                </div>
                            </div>

                            <div class="chat-message-left mb-4">
                                <div>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:39 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:40 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                    <div class="font-weight-semibold mb-1">You</div>
                                    Cum ea graeci tractatos.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:41 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                    <div class="font-weight-semibold mb-1">You</div>
                                    Morbi finibus, lorem id placerat ullamcorper, nunc enim ultrices massa, id dignissim metus urna eget purus.
                                </div>
                            </div>

                            <div class="chat-message-left mb-4">
                                <div>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:42 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                    Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="/img/avatars/1-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 mr-3">
                                    <div class="font-weight-semibold mb-1">You</div>
                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                </div>
                            </div>

                            <div class="chat-message-left mb-4">
                                <div>
                                    <img src="/img/avatars/4-small.png" class="ui-w-40 rounded-circle" alt>
                                    <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-lighter rounded py-2 px-3 ml-3">
                                    <div class="font-weight-semibold mb-1">Kenneth Frazier</div>
                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                </div>
                            </div>

                        </div><!-- / .chat-messages -->
                    </div>

                    <!-- Chat footer -->
                    <hr class="border-light m-0">
                    <div class="flex-grow-0 py-3 px-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type your message">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </div>
                    <!-- / Chat footer -->

                </div>
            </div><!-- / .row -->

        </div><!-- / .card -->

    </div><!-- / .chat-wrapper -->
@endsection