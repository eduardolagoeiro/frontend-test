@extends('layouts.layout-2')

@section('styles')
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/contacts.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/pages_contacts.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Contacts
    </h4>

    <div class="d-flex flex-wrap justify-content-between ui-bordered px-3 pt-3 mb-4">
        <div>

            <!-- View toggle -->
            <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                <label class="btn btn-default icon-btn md-btn-flat active">
                    <input type="radio" name="contacts-view" value="contacts-col-view" checked> <span class="ion ion-md-apps"></span>
                </label>
                <label class="btn btn-default icon-btn md-btn-flat">
                    <input type="radio" name="contacts-view" value="contacts-row-view"> <span class="ion ion-md-menu"></span>
                </label>
            </div>
            <!-- / View toggle -->

            <button type="button" class="btn btn-outline-primary mb-3 ml-3"><span class="ion ion-md-add"></span>&nbsp; Add contact</button>
        </div>
        <input type="text" class="form-control mb-3" placeholder="Search..." style="max-width: 200px;">
    </div>

    <!-- Set `.contacts-col-view` or '.contacts-row-view' to control view mode -->
    <div class="row contacts-col-view">
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/9.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Amanda Warner</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@awarner</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/5.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Nelle Maxwell</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@nmaxwell</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/4.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Kenneth Frazier</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@kfrazier</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/6.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Mae Gibson</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@mgibson</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/12.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Arthur Duncan</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@aduncan</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/11.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Belle Ross</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@bross</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/3.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Allie Rodriguez</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@arodriguez</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="contacts-col col-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="contacts-dropdown btn-group">
                        <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i class="ion ion-ios-more"></i>
                        </button>
                        <div class="contacts-dropdown-menu dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                        </div>
                    </div>

                    <div class="contact-content">
                        <img src="/img/avatars/7.png" class="contact-content-img rounded-circle" alt="">
                        <div class="contact-content-about">
                            <h5 class="contact-content-name mb-1"><a href="javascript:void(0)" class="text-body">Alice Hampton</a></h5>
                            <div class="contact-content-user text-muted small mb-2">@ahampton</div>
                            <div class="small">
                                Company Inc. <br>
                                +0 (123) 456 7891
                            </div>
                            <hr class="border-light">
                            <div>
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-md-mail"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-secondary"><span class="ion ion-ios-chatbubbles"></span></a> &nbsp;&nbsp;
                                <span class="text-lighter">|</span> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-twitter"><span class="ion ion-logo-twitter"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-facebook"><span class="ion ion-logo-facebook"></span></a> &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="text-instagram"><span class="ion ion-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div><!-- / .row -->
@endsection