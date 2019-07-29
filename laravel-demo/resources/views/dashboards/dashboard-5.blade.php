@extends('layouts.layout-2')

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/chartjs/chartjs.js') }}"></script>
    
    <script src="{{ mix('/js/dashboards_dashboard-5.js') }}"></script>
@endsection

@section('content')
    <!-- Head stats -->
    <div class="row no-gutters container-m-nx container-m-ny bg-lighter bg-white container-p-x pb-3 mb-4">
        <div class="col-6 col-sm-3 col-md pt-3 pr-4">
            <div class="media align-items-center">
                <div class="ion ion-logo-twitter text-twitter text-large"></div>
                <div class="media-body ml-3">
                    <div class="text-big font-weight-bold line-height-1">25,362</div>
                    <div class="text-light text-tiny font-weight-semibold line-height-1 mt-1">FOLLOWERS</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-md pt-3 pr-4">
            <div class="media align-items-center">
                <div class="ion ion-logo-googleplus text-google text-large"></div>
                <div class="media-body ml-3">
                    <div class="text-big font-weight-bold line-height-1">12,941</div>
                    <div class="text-light text-tiny font-weight-semibold line-height-1 mt-1">FOLLOWERS</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-md pt-3 pr-4">
            <div class="media align-items-center">
                <div class="ion ion-logo-facebook text-facebook text-large"></div>
                <div class="media-body ml-3">
                    <div class="text-big font-weight-bold line-height-1">18,665</div>
                    <div class="text-light text-tiny font-weight-semibold line-height-1 mt-1">FOLLOWERS</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-md pt-3 pr-4">
            <div class="media align-items-center">
                <div class="ion ion-logo-pinterest text-pinterest text-large"></div>
                <div class="media-body ml-3">
                    <div class="text-big font-weight-bold line-height-1">5,719</div>
                    <div class="text-light text-tiny font-weight-semibold line-height-1 mt-1">FOLLOWERS</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-md pt-3 pr-4">
            <div class="media align-items-center">
                <div class="ion ion-logo-instagram text-instagram text-large"></div>
                <div class="media-body ml-3">
                    <div class="text-big font-weight-bold line-height-1">8,636</div>
                    <div class="text-light text-tiny font-weight-semibold line-height-1 mt-1">FOLLOWERS</div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Head stats -->

    <!-- Traffic chart + sources -->
    <div class="card mb-4">
        <h5 class="card-header with-elements border-0 pt-3 pb-0">
            <span class="card-header-title"><i class="ion ion-md-stats text-primary"></i>&nbsp; Traffic</span>

            <div class="card-header-elements ml-auto">
                <div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default md-btn-flat">
                        <input type="radio" name="btn-radio"> Month
                    </label>
                    <label class="btn btn-default md-btn-flat">
                        <input type="radio" name="btn-radio"> 6 Months
                    </label>
                    <label class="btn btn-default md-btn-flat active">
                        <input type="radio" name="btn-radio" checked> Year
                    </label>
                    <label class="btn btn-default md-btn-flat">
                        <input type="radio" name="btn-radio"> 3 Years
                    </label>
                </div>
            </div>
        </h5>
        <hr class="border-light mb-0">
        <div class="row no-gutters row-bordered">
            <div class="d-flex col-md-8 col-lg-12 col-xl-8 align-items-center p-4">
                <div class="w-100" style="height: 230px;">
                    <canvas id="statistics-chart-1"></canvas>
                </div>
            </div>

            <!-- Sources -->
            <div class="col-md-4 col-lg-12 col-xl-4 px-4 pt-4">
                <div class="pb-4">
                    Twitter
                    <div class="float-right small mt-1">
                        11,963 &nbsp;&nbsp;
                        <span class="text-muted">29.77%</span>
                    </div>
                    <div class="progress mt-1" style="height:3px;">
                        <div class="progress-bar bg-twitter" style="width: 29.77%;"></div>
                    </div>
                </div>
                <div class="pb-4">
                    Google+
                    <div class="float-right small mt-1">
                        11,963 &nbsp;&nbsp;
                        <span class="text-muted">28.39%</span>
                    </div>
                    <div class="progress mt-1" style="height:3px;">
                        <div class="progress-bar bg-google" style="width: 28.39%;"></div>
                    </div>
                </div>
                <div class="pb-4">
                    Facebook
                    <div class="float-right small mt-1">
                        9,965 &nbsp;&nbsp;
                        <span class="text-muted">23.65%</span>
                    </div>
                    <div class="progress mt-1" style="height:3px;">
                        <div class="progress-bar bg-facebook" style="width: 23.65%;"></div>
                    </div>
                </div>
                <div class="pb-4">
                    Pinterest
                    <div class="float-right small mt-1">
                        4,223 &nbsp;&nbsp;
                        <span class="text-muted">10.02%</span>
                    </div>
                    <div class="progress mt-1" style="height:3px;">
                        <div class="progress-bar bg-pinterest" style="width: 10.02%;"></div>
                    </div>
                </div>
                <div class="pb-4">
                    Instagram
                    <div class="float-right small mt-1">
                        3,437 &nbsp;&nbsp;
                        <span class="text-muted">8.15%</span>
                    </div>
                    <div class="progress mt-1" style="height:3px;">
                        <div class="progress-bar bg-instagram" style="width: 8.15%;"></div>
                    </div>
                </div>
            </div>
            <!-- / Sources -->

        </div>
    </div>
    <!-- / Traffic chart + sources -->

    <div class="row">

        <!-- Charts -->
        <div class="col-sm-6 col-xl-3">

            <div class="card mb-4">
                <div class="card-body pb-3">
                    <strong class="text-big">2366</strong>
                    <small class="text-muted">VIEWS</small>
                </div>
                <div class="px-2">
                    <div class="w-100" style="height: 35px;">
                        <canvas id="statistics-chart-2"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-3">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-center" style="height: 98px">
                    <div>
                        <div class="text-large">+39%</div>
                        <div class="text-muted text-tiny">VIEWS</div>
                    </div>
                    <div class="w-50" style="height: 35px;">
                        <canvas id="statistics-chart-3"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-3">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-center" style="height: 98px">
                    <div>
                        <div class="text-muted small">View depth</div>
                        <strong class="text-large font-weight-normal">4.23</strong>
                        <sup class="text-success small">+ 12%</sup>
                    </div>
                    <div class="w-50">
                        <div style="height: 35px;">
                            <canvas id="statistics-chart-4"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-3">

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-center" style="height: 98px">
                    <div>
                        <div class="text-muted small">Time on site</div>
                        <strong class="text-large font-weight-normal">3:44</strong>
                        <sup class="text-success small">+ 2%</sup>
                    </div>
                    <div class="w-50">
                        <div style="height: 35px;">
                            <canvas id="statistics-chart-5"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="card mb-4">
                <h6 class="card-header with-elements border-0 pr-0 pb-0">
                    <div class="card-header-title">Type gadgets</div>
                    <div class="card-header-elements ml-auto">
                        <div class="btn-group mr-3">
                            <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                                <i class="ion ion-ios-more"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" id="type-gadgets-dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Action 1</a>
                                <a class="dropdown-item" href="javascript:void(0)">Action 2</a>
                            </div>
                        </div>
                    </div>
                </h6>
                <div class="py-4 px-3">
                    <div style="height:120px;">
                        <canvas id="statistics-chart-6"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="card mb-4">
                <h6 class="card-header with-elements border-0 pr-0 pb-0">
                    <div class="card-header-title">New users</div>
                    <div class="card-header-elements ml-auto">
                        <div class="btn-group mr-3">
                            <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                                <i class="ion ion-ios-more"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" id="new-users-dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Action 1</a>
                                <a class="dropdown-item" href="javascript:void(0)">Action 2</a>
                            </div>
                        </div>
                    </div>
                </h6>
                <div class="pt-4">
                    <div style="height:144px;">
                        <canvas id="statistics-chart-7"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="card mb-4">
                <h6 class="card-header with-elements border-0 pr-0 pb-0">
                    <div class="card-header-title">Age users</div>
                    <div class="card-header-elements ml-auto">
                        <div class="btn-group mr-3">
                            <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                                <i class="ion ion-ios-more"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" id="age-users-dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Action 1</a>
                                <a class="dropdown-item" href="javascript:void(0)">Action 2</a>
                            </div>
                        </div>
                    </div>
                </h6>
                <div class="py-4 px-3">
                    <div style="height:120px;">
                        <canvas id="statistics-chart-8"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <!-- / Charts -->

        <div class="col-md-8 col-lg-12 col-xl-9">

            <!-- Popular queries -->
            <div class="card mb-4">
                <div class="h6 card-header">Popular queries</div>
                <div class="table-responsive">
                    <table class="table card-table">
                        <thead>
                            <tr>
                                <th>Query</th>
                                <th>Clicks</th>
                                <th>Impressions</th>
                                <th>CTR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                <td>130</td>
                                <td>260</td>
                                <td>16.9%</td>
                            </tr>
                            <tr>
                                <td>Nulla id ex at odio mollis faucibus quis non odio.</td>
                                <td>120</td>
                                <td>240</td>
                                <td>15.8%</td>
                            </tr>
                            <tr>
                                <td>Sed commodo pharetra tellus.</td>
                                <td>110</td>
                                <td>220</td>
                                <td>14.7%</td>
                            </tr>
                            <tr>
                                <td>Nullam eu felis dignissim, rutrum ante at, gravida quam. Suspendisse ornare massa in leo aliquet, non aliquet tellus scelerisque.</td>
                                <td>100</td>
                                <td>200</td>
                                <td>13.6%</td>
                            </tr>
                            <tr>
                                <td>Praesent placerat tincidunt ante, tincidunt porttitor turpis viverra quis.</td>
                                <td>90</td>
                                <td>180</td>
                                <td>12.5%</td>
                            </tr>
                            <tr>
                                <td>Mauris vel rhoncus velit.</td>
                                <td>80</td>
                                <td>160</td>
                                <td>11.4%</td>
                            </tr>
                            <tr>
                                <td>Vestibulum malesuada consectetur porttitor.</td>
                                <td>70</td>
                                <td>140</td>
                                <td>10.3%</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="javascript:void(0)" class="card-footer text-body d-block text-center small font-weight-semibold">SHOW MORE</a>
                </div>
            </div>
            <!-- / Popular queries -->

        </div>
        <div class="col-md-4 col-lg-12 col-xl-3">

            <!-- Stats -->
            <div class="row">
                <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12">

                    <div class="card mb-4">
                        <div class="card-header border-0 pb-0">Monthly clicks</div>
                        <div class="card-body text-center text-success text-xlarge py-3">3,235</div>
                        <div class="card-footer border-0 small pt-0">
                            <div class="float-right text-success">
                                <small class="ion ion-md-arrow-round-up"></small> 11.25%
                            </div>
                            <span class="text-muted">Total: 46,536</span>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12">

                    <div class="card mb-4">
                        <div class="card-header border-0 pb-0">Monthly impressions</div>
                        <div class="card-body text-center text-danger text-xlarge py-3">8,267</div>
                        <div class="card-footer border-0 small pt-0">
                            <div class="float-right text-danger">
                                <small class="ion ion-md-arrow-round-down"></small> 5.38%
                            </div>
                            <span class="text-muted">Total: 20,369</span>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12">

                    <div class="card mb-4">
                        <div class="card-header border-0 pb-0">Monthly avg. CTR</div>
                        <div class="card-body text-center text-success text-xlarge py-3">21.73%</div>
                        <div class="card-footer border-0 small pt-0">
                            <div class="float-right text-success">
                                <small class="ion ion-md-arrow-round-up"></small> 2.54%
                            </div>
                            <span class="text-muted">Total: 18.3%</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- / Stats -->

        </div>
    </div>
@endsection