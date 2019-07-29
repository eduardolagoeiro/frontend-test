@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/photoswipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/blueimp-gallery/gallery.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/blueimp-gallery/gallery-indicator.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/blueimp-gallery/gallery-video.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-fullscreen.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-indicator.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-video.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-vimeo.js') }}"></script>
    <script src="{{ mix('/vendor/libs/blueimp-gallery/gallery-youtube.js') }}"></script>
    
    <script src="{{ mix('/js/ui_lightbox.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Lightbox
    </h4>

    <hr class="container-m-nx border-light mt-0">

    <h5 class="font-weight-bold pt-1 pb-1 mt-4 mb-4">Photoswipe</h5>

    <div id="photoswipe-example" class="row" itemscope itemtype="http://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
            <a href="/img/bg/1.jpg" itemprop="contentUrl" data-size="1920x1280">
                <img src="/img/bg/1.jpg" itemprop="thumbnail" alt="Image description">
            </a>
        </figure>
        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
            <a href="/img/bg/2.jpg" itemprop="contentUrl" data-size="1920x1280">
                <img src="/img/bg/2.jpg" itemprop="thumbnail" alt="Image description">
            </a>
        </figure>
        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
            <a href="/img/bg/3.jpg" itemprop="contentUrl" data-size="1920x1280">
                <img src="/img/bg/3.jpg" itemprop="thumbnail" alt="Image description">
            </a>
        </figure>
        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
            <a href="/img/bg/4.jpg" itemprop="contentUrl" data-size="1920x1280">
                <img src="/img/bg/4.jpg" itemprop="thumbnail" alt="Image description">
            </a>
        </figure>
    </div>

    <hr class="container-m-nx border-light mt-5">

    <h5 class="font-weight-bold pt-1 pb-1 mt-4 mb-4">Blueimp Gallery</h5>

    <!-- Lightbox template -->
    <div id="blueimp-gallery-example-container" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>

    <!-- Gallery -->
    <div class="row mb-5" id="blueimp-gallery-example">
        <div class="col-md-3">
            <a href="/img/bg/5.jpg" class="img-thumbnail" title="Image 1">
                <img src="/img/bg/5.jpg" class="img-fluid" alt="Image 1">
            </a>
        </div>
        <div class="col-md-3">
            <a href="/img/bg/6.jpg" class="img-thumbnail" title="Image 2">
                <img src="/img/bg/6.jpg" class="img-fluid" alt="Image 2">
            </a>
        </div>
        <div class="col-md-3">
            <a href="/img/bg/7.jpg" class="img-thumbnail" title="Image 3">
                <img src="/img/bg/7.jpg" class="img-fluid" alt="Image 3">
            </a>
        </div>
        <div class="col-md-3">
            <a href="/img/bg/8.jpg" class="img-thumbnail" title="Image 4">
                <img src="/img/bg/8.jpg" class="img-fluid" alt="Image 4">
            </a>
        </div>
    </div>

    <div id="blueimp-carousel-example" class="blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="play-pause"></a>
    </div>
@endsection