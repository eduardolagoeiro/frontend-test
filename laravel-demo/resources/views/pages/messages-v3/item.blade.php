@extends('layouts.layout-2')

@section('styles')
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/messages.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/pages_messages.js') }}"></script>
@endsection

@section('content')
    <div class="row">

        <!-- Messages sidebox -->
        <div class="messages-sidebox col mb-4">

            <button type="button" class="btn btn-primary btn-block mt-md-4">Compose</button>
            <hr class="border-light my-4">

            <!-- Mail boxes -->
            <a href="javascript:void(0)" class="text-body d-flex justify-content-between align-items-center font-weight-bold py-2">
                <div>
                    <i class="ion ion-ios-filing"></i> &nbsp; Inbox
                </div>
                <div class="badge badge-primary">15</div>
            </a>
            <a href="javascript:void(0)" class="d-flex justify-content-between align-items-center text-muted py-2">
                <div>
                    <i class="ion ion-ios-mail"></i> &nbsp; Sent
                </div>
            </a>
            <a href="javascript:void(0)" class="d-flex justify-content-between align-items-center text-muted py-2">
                <div>
                    <i class="ion ion-md-create"></i> &nbsp; Drafts
                </div>
            </a>
            <a href="javascript:void(0)" class="d-flex justify-content-between align-items-center text-muted py-2">
                <div>
                    <i class="ion ion-md-folder-open"></i> &nbsp; Spam
                </div>
            </a>
            <a href="javascript:void(0)" class="d-flex justify-content-between align-items-center text-muted py-2">
                <div>
                    <i class="ion ion-md-trash"></i> &nbsp; Trash
                </div>
            </a>
            <!-- / Mail boxes -->

            <hr class="border-light my-4">

            <!-- Labels -->
            <h6 class="text-tiny font-weight-bold">LABELS</h6>
            <a href="javascript:void(0)" class="d-block text-muted py-1">
                <span class="badge badge-dot badge-success"></span> &nbsp; Clients
            </a>
            <a href="javascript:void(0)" class="d-block text-muted py-1">
                <span class="badge badge-dot badge-danger"></span> &nbsp; Important
            </a>
            <a href="javascript:void(0)" class="d-block text-muted py-1">
                <span class="badge badge-dot badge-info"></span> &nbsp; Social
            </a>
            <a href="javascript:void(0)" class="d-block text-muted py-1">
                <span class="badge badge-dot badge-warning"></span> &nbsp; Other
            </a>
            <!-- / Labels -->

        </div>
        <!-- / Messages sidebox -->

        <div class="col">
            <div class="card">

                <!-- Header -->
                <div class="media p-4">
                    <!-- Sender photo -->
                    <img src="/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle mt-1" alt="">
                    <div class="media-body pl-3">
                        <!-- Sender & date -->
                        <div class="mb-1">
                            Mae Gibson &lt;<a href="javascrip:void(0)">mgibson@mail.com</a>&gt;
                            <span class="text-muted ml-2">3 days ago</span>
                        </div>

                        <!-- Subject -->
                        <h5 class="line-height-inherit m-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                        </h5>
                    </div>
                </div>
                <hr class="border-light m-0">
                <!-- / Header -->

                <!-- Controls -->
                <div class="media flex-wrap align-items-center py-1 px-2">
                    <div class="media-body d-flex flex-wrap flex-basis-100 flex-basis-sm-auto">
                        <button type="button" class="btn btn-default borderless md-btn-flat icon-btn messages-tooltip text-muted mr-3" title="Back"><i class="ion ion-md-arrow-back"></i></button>
                        <button type="button" class="btn btn-default borderless md-btn-flat icon-btn messages-tooltip text-muted" title="Mark as unread"><i class="ion ion-md-mail-unread"></i></button>
                        <button type="button" class="btn btn-default borderless md-btn-flat icon-btn messages-tooltip text-muted" title="Mark as important"><i class="ion ion-md-alert"></i></button>
                        <button type="button" class="btn btn-default borderless md-btn-flat icon-btn messages-tooltip text-muted" title="Move to spam"><i class="ion ion-md-folder-open"></i></button>
                        <button type="button" class="btn btn-default borderless md-btn-flat icon-btn messages-tooltip text-muted" title="Move to trash"><i class="ion ion-md-trash"></i></button>
                    </div>

                    <div class="d-flex flex-wrap align-items-center ml-auto">
                        <button type="button" class="btn btn-default borderless md-btn-flat text-muted px-3"><i class="ion ion-ios-undo"></i>&nbsp; Reply</button>
                        <div class="text-lighter">|</div>
                        <button type="button" class="btn btn-default borderless md-btn-flat text-muted px-3">Forward &nbsp;<i class="ion ion-ios-redo"></i></button>
                    </div>
                </div>
                <hr class="border-light m-0">
                <!-- / Controls -->

                <!-- Message content -->
                <div class="p-4">

                    <p>Hi Mike,</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <blockquote class="blockquote">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
                <hr class="border-light m-0">
                <!-- / Message content -->

                <!-- Message attachments -->
                <div class="px-4 pt-4 pb-2">
                    <h6 class="small font-weight-semibold mb-4">Attachements</h6>

                    <div class="row">
                        <div class="col-sm-6 col-lg-12 col-xl-4">

                            <div class="message-attachment ui-bordered p-2 mr-3 mb-3">
                                <div class="message-attachment-img" style="background-image: url(/img/bg/5.jpg)"></div>
                                <div class="media-body ml-3">
                                    <strong class="message-attachment-filename">image_1.jpg</strong>
                                    <div class="text-muted small">527KB</div>
                                    <div>
                                        <a href="javascript:void(0)">View</a> &nbsp;
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-12 col-xl-4">

                            <div class="message-attachment ui-bordered p-2 mr-3 mb-3">
                                <div class="message-attachment-img" style="background-image: url(/img/bg/6.jpg)"></div>
                                <div class="media-body ml-3">
                                    <strong class="message-attachment-filename">image_2.jpg</strong>
                                    <div class="text-muted small">269KB</div>
                                    <div>
                                        <a href="javascript:void(0)">View</a> &nbsp;
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-12 col-xl-4">

                            <div class="message-attachment ui-bordered p-2 mr-3 mb-3">
                                <div class="message-attachment-file display-4"><i class="far fa-file-pdf"></i></div>
                                <div class="media-body ml-3">
                                    <strong class="message-attachment-filename">assignment_letter.pdf</strong>
                                    <div class="text-muted small">156KB</div>
                                    <div>
                                        <a href="javascript:void(0)">View</a> &nbsp;
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-12 col-xl-4">

                            <div class="message-attachment ui-bordered p-2 mr-3 mb-3">
                                <div class="message-attachment-file display-4"><i class="far fa-file-archive"></i></div>
                                <div class="media-body ml-3">
                                    <strong class="message-attachment-filename">app_update.zip</strong>
                                    <div class="text-muted small">1.35MB</div>
                                    <div>
                                        <a href="javascript:void(0)">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <hr class="border-light m-0">
                <!-- / Message attachments -->

                <!-- Footer -->
                <div class="text-right p-4">
                    <button type="button" class="btn btn-primary"><i class="ion ion-ios-undo"></i>&nbsp; Reply</button>
                    &nbsp;
                    <button type="button" class="btn btn-default">Forward &nbsp;<i class="ion ion-ios-redo"></i></button>
                </div>
                <!-- / Footer -->

            </div>
        </div>

    </div>
@endsection