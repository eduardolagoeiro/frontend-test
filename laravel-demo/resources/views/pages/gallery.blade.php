@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/blueimp-gallery/gallery.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/blueimp-gallery/gallery-indicator.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-fullscreen.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-indicator.js') }}"></script>
    <script src="{{ mix('/vendor/libs/masonry/masonry.js') }}"></script>
    
    <script src="{{ mix('/js/pages_gallery.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Gallery
    </h4>

    <ul id="gallery-filter" class="nav nav-tabs tabs-alt mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="#all">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#nature">Nature</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#car">Cars</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#animal">Animal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#other">Other</a>
        </li>
    </ul>

    <!-- Lightbox template -->
    <div id="gallery-lightbox" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>

    <div id="gallery-thumbnails" class="row form-row">
        <!-- Add this element to properly relayout grid -->
        <div class="gallery-sizer col-sm-6 col-md-6 col-xl-3 position-absolute"></div>

        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="nature">
            <a href="/img/bg/1.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/1.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="car">
            <a href="/img/bg/2.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/2.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="other">
            <a href="/img/bg/3.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/3.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="other">
            <a href="/img/bg/4.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/4.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="other">
            <a href="/img/bg/5.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/5.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="nature">
            <a href="/img/bg/6.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/6.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="nature">
            <a href="/img/bg/7.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/7.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="car">
            <a href="/img/bg/8.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/8.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="animal">
            <a href="/img/bg/9.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/9.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="animal">
            <a href="/img/bg/10.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/10.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="other">
            <a href="/img/bg/11.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/11.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="other">
            <a href="/img/bg/12.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/12.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="nature">
            <a href="/img/bg/13.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/13.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="animal">
            <a href="/img/bg/14.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/14.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="other">
            <a href="/img/bg/15.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/15.jpg" class="img-fluid">
            </a>
        </div>
        <div class="gallery-thumbnail col-sm-6 col-md-6 col-xl-3 mb-2" data-tag="other">
            <a href="/img/bg/16.jpg" class="img-thumbnail img-thumbnail-zoom-in">
                <span class="img-thumbnail-overlay bg-dark opacity-25"></span>
                <span class="img-thumbnail-content display-4 text-white">
                    <i class="ion ion-ios-search"></i>
                </span>
                <img src="/img/bg/16.jpg" class="img-fluid">
            </a>
        </div>

    </div>
@endsection