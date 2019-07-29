@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/datatables/datatables.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ mix('/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ mix('/vendor/libs/datatables/datatables.js') }}"></script>
    
    <script src="{{ mix('/js/pages_users_list.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Users
    </h4>

    <!-- Filters -->
    <div class="ui-bordered px-4 pt-4 mb-4">
        <div class="form-row align-items-center">
            <div class="col-md mb-4">
                <label class="form-label">Verified</label>
                <select class="custom-select">
                    <option>Any</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            <div class="col-md mb-4">
                <label class="form-label">Role</label>
                <select class="custom-select">
                    <option>Any</option>
                    <option>User</option>
                    <option>Author</option>
                    <option>Staff</option>
                    <option>Admin</option>
                </select>
            </div>
            <div class="col-md mb-4">
                <label class="form-label">Status</label>
                <select class="custom-select">
                    <option>Any</option>
                    <option>Active</option>
                    <option>Banned</option>
                    <option>Deleted</option>
                </select>
            </div>
            <div class="col-md mb-4">
                <label class="form-label">Latest activity</label>
                <input type="text" id="user-list-latest-activity" class="form-control" placeholder="Any">
            </div>
            <div class="col-md col-xl-2 mb-4">
                <label class="form-label d-none d-md-block">&nbsp;</label>
                <button type="button" class="btn btn-secondary btn-block">Show</button>
            </div>
        </div>
    </div>
    <!-- / Filters -->

    <div class="card">
        <div class="card-datatable table-responsive">
            <table id="user-list" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Account</th>
                        <th>E-mail</th>
                        <th>Name</th>
                        <th>Latest activity</th>
                        <th>Verified</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection