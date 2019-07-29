@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> Progress bars
    </h4>

    <div class="card mb-4">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Default</div>

            <div class="progress">
                <div class="progress-bar" style="width: 60%;"></div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Height</div>

            <div class="progress" style="height: 6px;">
                <div class="progress-bar" style="width: 60%;"></div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">With label</div>

            <div class="progress">
                <div class="progress-bar" style="width: 30%;">30%</div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Variations</div>

            <div class="demo-vertical-spacing-sm">
                <div class="progress">
                    <div class="progress-bar bg-secondary" style="width: 30%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 40%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 20%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 60%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-danger" style="width: 80%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-dark" style="width: 50%"></div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Striped</div>

            <div class="demo-vertical-spacing-sm">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" style="width: 45%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-secondary" style="width: 30%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 40%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" style="width: 20%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" style="width: 60%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 80%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" style="width: 50%"></div>
                </div>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Animated</div>

            <div class="demo-vertical-spacing-sm">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 45%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 30%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 40%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 80%"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width: 50%"></div>
                </div>
            </div>
        </div>
    </div>
@endsection