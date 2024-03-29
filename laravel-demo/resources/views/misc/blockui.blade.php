@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/spinkit/spinkit.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/block-ui/block-ui.js') }}"></script>
    
    <script src="{{ mix('/js/misc_blockui.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Miscellaneous /</span> BlockUI
    </h4>

    <hr class="container-m-nx border-light mt-0 mb-4">

    <div class="card mb-3" id="block-ui-element-example">
        <div class="card-header">
            Card title
        </div>
        <div class="card-body">
            <p>
                Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus vis et. No est volumus ocurreret vituperata.
            </p>
            <p>
                At pri facete recteque, eos omittam hendrerit maiestatis et. Ut aliquip regione pericula mea, sed te ornatus vivendum, tritani persius atomorum id pro. Laoreet epicurei ei duo. Ad nulla senserit sit, has ne prima option.
            </p>
        </div>
    </div>

    <button type="button" class="btn btn-default" id="block-ui-block-page">Block page</button>
    <button type="button" class="btn btn-default" id="block-ui-block-element">Block element</button>
    <button type="button" class="btn btn-default" id="block-ui-unblock-element">Unblock element</button>
@endsection