@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/bootstrap-slider/bootstrap-slider.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/nouislider/nouislider.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/bootstrap-slider/bootstrap-slider.js') }}"></script>
    <script src="{{ mix('/vendor/libs/nouislider/nouislider.js') }}"></script>
    
    <script src="{{ mix('/js/forms_sliders.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Forms /</span> Sliders
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Default Bootstrap 4 slider
        </h6>
        <div class="card-body demo-vertical-spacing">
            <input type="range" class="custom-range">
            <input type="range" class="custom-range" disabled>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Bootstrap Slider
        </h6>
        <div class="card-body demo-vertical-spacing overflow-hidden">
            <input id="bs-slider-1" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">

            <!-- Range -->

            <div>
                Filter by price interval:
                <input id="bs-slider-2" type="text" value data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]">
                <strong class="float-left small">€ 10</strong>
                <strong class="float-right small">€ 1000</strong>
            </div>

            <!-- Reversed -->

            <div class="slider-reversed">
                <input id="bs-slider-3" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
            <div class="slider-reversed">
                <input id="bs-slider-4" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="1" data-slider-orientation="vertical">
            </div>

            <!-- Disabled -->

            <input id="bs-slider-5" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false">

            <!-- With ticks -->

            <input id="bs-slider-6" type="text" data-slider-value="160" data-slider-ticks-snap-bounds="10">
            <div class="slider-reversed">
                <input id="bs-slider-7" type="text" data-slider-value="160" data-slider-ticks-snap-bounds="10" data-slider-orientation="vertical">
            </div>

            <!-- Colors -->

            <div class="slider-primary">
                <input class="bs-slider-variant" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
            <div class="slider-secondary">
                <input class="bs-slider-variant" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
            <div class="slider-success">
                <input class="bs-slider-variant" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
            <div class="slider-warning">
                <input class="bs-slider-variant" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
            <div class="slider-info">
                <input class="bs-slider-variant" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
            <div class="slider-danger">
                <input class="bs-slider-variant" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
            <div class="slider-dark">
                <input class="bs-slider-variant" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            noUiSlider
        </h6>
        <div class="card-body demo-vertical-spacing-lg p-5 mb-4">
            <div id="nouislider-1"></div>

            <div id="nouislider-2"></div>

            <div id="nouislider-3"></div>

            <div id="nouislider-4"></div>

            <div id="nouislider-5"></div>

            <div id="nouislider-6" class="noUi-primary"></div>
            <div id="nouislider-7" class="noUi-secondary"></div>
            <div id="nouislider-8" class="noUi-success"></div>
            <div id="nouislider-9" class="noUi-warning"></div>
            <div id="nouislider-10" class="noUi-info"></div>
            <div id="nouislider-11" class="noUi-danger"></div>
            <div id="nouislider-12" class="noUi-dark"></div>
        </div>
    </div>
@endsection