@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    
    <!-- Page -->
    <link rel="stylesheet" href="{{ mix('/vendor/css/pages/users.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ mix('/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    
    <script src="{{ mix('/js/pages_users_edit.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Edit user <span class="text-muted">#3425433</span>
    </h4>

    <div class="nav-tabs-top">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#user-edit-account">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#user-edit-info">Information</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="user-edit-account">

                <div class="card-body">

                    <div class="media align-items-center">
                        <img src="/img/avatars/5-small.png" alt="" class="d-block ui-w-80">
                        <div class="media-body ml-3">
                            <label class="form-label d-block mb-2">Avatar</label>
                            <label class="btn btn-outline-primary btn-sm">
                                Change
                                <input type="file" class="user-edit-fileinput">
                            </label>&nbsp;
                            <button type="button" class="btn btn-default btn-sm md-btn-flat">Reset</button>
                        </div>
                    </div>

                </div>
                <hr class="border-light m-0">
                <div class="card-body pb-2">

                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control mb-1" value="nmaxwell">
                        <a href="javascript:void(0)" class="small">Reset password</a>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="Nelle Maxwell">
                    </div>
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                        <a href="javascript:void(0)" class="small">Resend confirmation</a>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company</label>
                        <input type="text" class="form-control" value="Company Ltd.">
                    </div>

                </div>
                <hr class="border-light m-0">
                <div class="card-body pb-2">

                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select class="custom-select">
                            <option selected>User</option>
                            <option>Author</option>
                            <option>Staff</option>
                            <option>Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="custom-select">
                            <option selected>Active</option>
                            <option>Banned</option>
                            <option>Deleted</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox m-0">
                            <input type="checkbox" class="custom-control-input" checked>
                            <span class="custom-control-label">Verified</span>
                        </label>
                    </div>

                </div>
                <hr class="border-light m-0">
                <div class="table-responsive">
                    <table class="table card-table m-0">
                        <tbody>
                            <tr>
                                <th>Module Permission</th>
                                <th>Read</th>
                                <th>Write</th>
                                <th>Create</th>
                                <th>Delete</th>
                            </tr>
                            <tr>
                                <td>Users</td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input" checked>
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Articles</td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input" checked>
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input" checked>
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input" checked>
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Staff</td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox px-2 m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="user-edit-info">

                <div class="card-body pb-2">

                    <h6 class="mb-4">Social links</h6>
                    <div class="form-group">
                        <label class="form-label">Twitter</label>
                        <input type="text" class="form-control" value="https://twitter.com/user">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" value="https://www.facebook.com/user">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Google+</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">LinkedIn</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" value="https://www.instagram.com/user">
                    </div>

                </div>
                <hr class="border-light m-0">
                <div class="card-body pb-2">

                    <h6 class="mb-4">Personal info</h6>
                    <div class="form-group">
                        <label class="form-label">Birthday</label>
                        <input type="text" class="form-control" value="May 3, 1995">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Country</label>
                        <select class="custom-select">
                            <option>USA</option>
                            <option selected>Canada</option>
                            <option>UK</option>
                            <option>Germany</option>
                            <option>France</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Languages</label>
                        <select multiple class="user-edit-multiselect form-control w-100">
                            <option selected>English</option>
                            <option>German</option>
                            <option>French</option>
                        </select>
                    </div>

                </div>
                <hr class="border-light m-0">
                <div class="card-body pb-2">

                    <h6 class="mb-4">Contacts</h6>
                    <div class="form-group">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" value="+0 (123) 456 7891">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Website</label>
                        <input type="text" class="form-control" value="">
                    </div>

                </div>
                <hr class="border-light m-0">
                <div class="card-body pb-2">

                    <h6 class="mb-4">Interests</h6>
                    <div class="form-group">
                        <label class="form-label">Favorite music</label>
                        <input type="text" class="form-control user-edit-tagsinput" value="Rock,Alternative,Electro,Drum & Bass,Dance">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Favorite movies</label>
                        <input type="text" class="form-control user-edit-tagsinput" value="The Green Mile,Pulp Fiction,Back to the Future,WALL·E,Django Unchained,The Truman Show,Home Alone,Seven Pounds">
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="text-right mt-3">
        <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
        <button type="button" class="btn btn-default">Cancel</button>
    </div>
@endsection