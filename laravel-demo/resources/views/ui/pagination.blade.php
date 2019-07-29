@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Pagination and breadcrumbs
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Pagination
        </h6>
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Default</div>

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
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Sizes</div>

            <div class="demo-vertical-spacing-sm">
                <ul class="pagination pagination-sm">
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

                <ul class="pagination pagination-lg">
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
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Breadcrumbs
        </h6>
        <div class="card-body demo-vertical-spacing">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Library</li>
            </ol>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Library</a>
                </li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </div>
    </div>
@endsection