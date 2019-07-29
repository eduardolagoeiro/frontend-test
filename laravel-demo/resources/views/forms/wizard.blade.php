@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/smartwizard/smartwizard.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/smartwizard/smartwizard.js') }}"></script>
    <script src="{{ mix('/vendor/libs/validate/validate.js') }}"></script>
    
    <script src="{{ mix('/js/forms_wizard.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Forms /</span> SmartWizard
    </h4>

    <hr class="container-m-nx border-light mt-0 mb-5">

    <div id="smartwizard-1" class="smartwizard-example">
        <ul>
            <li>
                <a href="#smartwizard-1-step-1" class="mb-3">
                    <span class="sw-number">1</span>
                    <div class="text-muted small">FIRST STEP</div>
                    Keyboard
                </a>
            </li>
            <li>
                <a href="#smartwizard-1-step-2" class="mb-3">
                    <span class="sw-number">2</span>
                    <div class="text-muted small">SECOND STEP</div>
                    Effects
                </a>
            </li>
            <li>
                <a href="#smartwizard-1-step-3" class="mb-3">
                    <span class="sw-number">3</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Pager
                </a>
            </li>
        </ul>

        <div class="mb-3">
            <div id="smartwizard-1-step-1" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 1
                </div>
            </div>
            <div id="smartwizard-1-step-2" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 2
                </div>
            </div>
            <div id="smartwizard-1-step-3" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 3
                </div>
            </div>
        </div>
    </div>

    <hr class="container-m-nx border-light my-4">
    <h6 class="text-muted small font-weight-bold py-3 my-4">
        With icon
    </h6>

    <div id="smartwizard-2" class="smartwizard-example">
        <ul>
            <li>
                <a href="#smartwizard-2-step-1" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-keypad"></span>
                    Keyboard
                    <div class="text-muted small">Set up shortcuts</div>
                </a>
            </li>
            <li>
                <a href="#smartwizard-2-step-2" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-ios-color-wand"></span>
                    Effects
                    <div class="text-muted small">Add effects</div>
                </a>
            </li>
            <li>
                <a href="#smartwizard-2-step-3" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-md-copy"></span>
                    Pager
                    <div class="text-muted small">Select pager options</div>
                </a>
            </li>
            <li>
                <a href="#smartwizard-2-step-4" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-icon ion ion-md-notifications-outline"></span>
                    Notifications
                    <div class="text-muted small">Set up notifications</div>
                </a>
            </li>
        </ul>

        <div class="mb-3">
            <div id="smartwizard-2-step-1" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 1
                </div>
            </div>
            <div id="smartwizard-2-step-2" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 2
                </div>
            </div>
            <div id="smartwizard-2-step-3" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 3
                </div>
            </div>
            <div id="smartwizard-2-step-4" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 4
                </div>
            </div>
        </div>
    </div>

    <hr class="container-m-nx border-light my-4">
    <h6 class="text-muted small font-weight-bold py-3 my-4">
        Boxed steps
    </h6>

    <div id="smartwizard-3" class="smartwizard-example">
        <ul class="card px-4 pt-3 mb-3">
            <li>
                <a href="#smartwizard-3-step-1" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">1</span>
                    <div class="text-muted small">FIRST STEP</div>
                    Keyboard
                </a>
            </li>
            <li>
                <a href="#smartwizard-3-step-2" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">2</span>
                    <div class="text-muted small">SECOND STEP</div>
                    Effects
                </a>
            </li>
            <li>
                <a href="#smartwizard-3-step-3" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">3</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Pager
                </a>
            </li>
        </ul>

        <div class="mb-3">
            <div id="smartwizard-3-step-1" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 1
                </div>
            </div>
            <div id="smartwizard-3-step-2" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 2
                </div>
            </div>
            <div id="smartwizard-3-step-3" class="card animated fadeIn">
                <div class="card-body">
                    Step Content 3
                </div>
            </div>
        </div>
    </div>

    <hr class="container-m-nx border-light my-4">
    <h6 class="text-muted small font-weight-bold py-3 my-4">
        Vertical
    </h6>

    <div class="demo-vertical-spacing">
        <!-- Left -->
        <div id="smartwizard-4" class="smartwizard-vertical-left smartwizard-example">
            <ul>
                <li>
                    <a href="#smartwizard-4-step-1" class="text-nowrap mb-3">
                        <span class="sw-done-icon ion ion-md-checkmark"></span>
                        <span class="sw-icon ion ion-ios-keypad"></span>
                        <div class="text-muted small">FIRST STEP</div>
                        Keyboard
                    </a>
                </li>
                <li>
                    <a href="#smartwizard-4-step-2" class="text-nowrap mb-3">
                        <span class="sw-done-icon ion ion-md-checkmark"></span>
                        <span class="sw-icon ion ion-ios-color-wand"></span>
                        <div class="text-muted small">SECOND STEP</div>
                        Effects
                    </a>
                </li>
                <li>
                    <a href="#smartwizard-4-step-3" class="text-nowrap mb-3">
                        <span class="sw-done-icon ion ion-md-checkmark"></span>
                        <span class="sw-icon ion ion-md-copy"></span>
                        <div class="text-muted small">THIRD STEP</div>
                        Pager
                    </a>
                </li>
            </ul>

            <div class="mb-3">
                <div id="smartwizard-4-step-1" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 1
                    </div>
                </div>
                <div id="smartwizard-4-step-2" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 2
                    </div>
                </div>
                <div id="smartwizard-4-step-3" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 3
                    </div>
                </div>
            </div>
        </div>

        <!-- Right -->
        <div id="smartwizard-5" class="smartwizard-vertical-right smartwizard-example">
            <ul>
                <li>
                    <a href="#smartwizard-5-step-1" class="text-nowrap mb-3">
                        <span class="sw-done-icon ion ion-md-checkmark"></span>
                        <span class="sw-icon ion ion-ios-keypad"></span>
                        <div class="text-muted small">FIRST STEP</div>
                        Keyboard
                    </a>
                </li>
                <li>
                    <a href="#smartwizard-5-step-2" class="text-nowrap mb-3">
                        <span class="sw-done-icon ion ion-md-checkmark"></span>
                        <span class="sw-icon ion ion-ios-color-wand"></span>
                        <div class="text-muted small">SECOND STEP</div>
                        Effects
                    </a>
                </li>
                <li>
                    <a href="#smartwizard-5-step-3" class="text-nowrap mb-3">
                        <span class="sw-done-icon ion ion-md-checkmark"></span>
                        <span class="sw-icon ion ion-md-copy"></span>
                        <div class="text-muted small">THIRD STEP</div>
                        Pager
                    </a>
                </li>
            </ul>

            <div>
                <div id="smartwizard-5-step-1" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 1
                    </div>
                </div>
                <div id="smartwizard-5-step-2" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 2
                    </div>
                </div>
                <div id="smartwizard-5-step-3" class="card animated fadeIn mb-3">
                    <div class="card-body">
                        Step Content 3
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="container-m-nx border-light my-4">
    <h6 class="text-muted small font-weight-bold py-3 my-4">
        Validation
    </h6>

    <form id="smartwizard-6" action="javascript:void(0)">
        <ul class="card px-4 pt-3 mb-3">
            <li>
                <a href="#smartwizard-6-step-1" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">1</span>
                    <div class="text-muted small">FIRST STEP</div>
                    Account
                </a>
            </li>
            <li>
                <a href="#smartwizard-6-step-2" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">2</span>
                    <div class="text-muted small">SECOND STEP</div>
                    Profile
                </a>
            </li>
            <li>
                <a href="#smartwizard-6-step-3" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">3</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Hints
                </a>
            </li>
            <li>
                <a href="#smartwizard-6-step-4" class="mb-3">
                    <span class="sw-done-icon ion ion-md-checkmark"></span>
                    <span class="sw-number">4</span>
                    <div class="text-muted small">THIRD STEP</div>
                    Finish
                </a>
            </li>
        </ul>

        <div class="mb-3">
            <div id="smartwizard-6-step-1" class="card animated fadeIn">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">User name
                            <span class="text-danger">*</span>
                        </label>
                        <input name="wizard-userName" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password
                            <span class="text-danger">*</span>
                        </label>
                        <input name="wizard-password" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password
                            <span class="text-danger">*</span>
                        </label>
                        <input name="wizard-confirm" type="text" class="form-control required">
                    </div>

                    <p>
                        <span class="text-danger">*</span> Mandatory</p>
                </div>
            </div>
            <div id="smartwizard-6-step-2" class="card animated fadeIn">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">First name
                            <span class="text-danger">*</span>
                        </label>
                        <input name="wizard-name" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last name
                            <span class="text-danger">*</span>
                        </label>
                        <input name="wizard-surname" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email
                            <span class="text-danger">*</span>
                        </label>
                        <input name="wizard-email" type="text" class="form-control required email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input name="wizard-address" type="text" class="form-control">
                    </div>

                    <p>
                        <span class="text-danger">*</span> Mandatory</p>
                </div>
            </div>
            <div id="smartwizard-6-step-3" class="card animated fadeIn">
                <div class="card-body">
                    <ul>
                        <li>Foo</li>
                        <li>Bar</li>
                        <li>Foobar</li>
                    </ul>
                </div>
            </div>
            <div id="smartwizard-6-step-4" class="card animated fadeIn">
                <div class="card-body">
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">I agree with the Terms and Conditions</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection