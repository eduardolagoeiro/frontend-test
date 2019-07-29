@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/datatables/datatables.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/datatables/datatables.js') }}"></script>
    
    <script src="{{ mix('/js/pages_articles_list.js') }}"></script>
@endsection

@section('content')
    <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
        <div>Articles</div>
        <button type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Create article</button>
    </h4>

    <div class="card">
        <div class="card-datatable table-responsive">
            <table id="article-list" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="min-width: 18rem">Title</th>
                        <th>Likes</th>
                        <th>Comments</th>
                        <th class="text-nowrap">Created At</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection