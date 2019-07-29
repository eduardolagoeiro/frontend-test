@extends('layouts.layout-2')

@section('content')
    <h3 class="row align-items-center font-weight-bold py-4 mb-4">
        <div class="col">
            Help center
            <div class="text-muted text-tiny font-weight-light">Answers to common questions</div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 mt-4 mt-sm-0">
            <input type="text" class="form-control form-control-lg" placeholder="Search topic...">
        </div>
    </h3>
    <hr class="container-m-nx border-light my-0">

    <div class="row row-bordered my-4">
        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
            <a href="javascript:void(0)" class="card card-hover text-body my-2">
                <div class="card-body text-center py-5">
                    <div class="lnr lnr-home display-3 text-primary"></div>
                    <h5 class="m-0 mt-3">Getting started</h5>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
            <a href="javascript:void(0)" class="card card-hover text-body my-2">
                <div class="card-body text-center py-5">
                    <div class="lnr lnr-users display-3 text-primary"></div>
                    <h5 class="m-0 mt-3">Accounts</h5>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
            <a href="javascript:void(0)" class="card card-hover text-body my-2">
                <div class="card-body text-center py-5">
                    <div class="lnr lnr-apartment display-3 text-primary"></div>
                    <h5 class="m-0 mt-3">Membership</h5>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
            <a href="javascript:void(0)" class="card card-hover text-body my-2">
                <div class="card-body text-center py-5">
                    <div class="lnr lnr-lock display-3 text-primary"></div>
                    <h5 class="m-0 mt-3">Privacy</h5>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
            <a href="javascript:void(0)" class="card card-hover text-body my-2">
                <div class="card-body text-center py-5">
                    <div class="lnr lnr-bug display-3 text-primary"></div>
                    <h5 class="m-0 mt-3">Issues</h5>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
            <a href="javascript:void(0)" class="card card-hover text-body my-2">
                <div class="card-body text-center py-5">
                    <div class="lnr lnr-bubble display-3 text-primary"></div>
                    <h5 class="m-0 mt-3">Contacts</h5>
                </div>
            </a>
        </div>
    </div>
    <hr class="container-m-nx border-light my-0">

    <div class="card mt-5">
        <h5 class="card-header py-4 px-5">Getting started</h5>
        <div class="row no-gutters row-bordered">
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Viverra tellus non pulvinar risus</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce in viverra lectus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce id urna cursus, auctor tortor ut, fermentum magna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris non elit nec quam tempor auctor eu in massa.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum condimentum enim molestie condimentum tempus.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Lorem ipsum dolor sit amet</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec dignissim iaculis purus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum euismod mauris elit, ut lobortis erat tincidunt at.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nunc pharetra justo at magna consequat accumsan.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec urna lorem, rhoncus nec tristique et, scelerisque in libero.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam vitae nibh bibendum, mattis mauris et, rhoncus nibh.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam lacinia molestie ex, id posuere metus porta eget.</a>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <h5 class="card-header py-4 px-5">Accounts</h5>
        <div class="row no-gutters row-bordered">
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Viverra tellus non pulvinar risus</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce in viverra lectus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce id urna cursus, auctor tortor ut, fermentum magna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris non elit nec quam tempor auctor eu in massa.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum condimentum enim molestie condimentum tempus.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Lorem ipsum dolor sit amet</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec dignissim iaculis purus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum euismod mauris elit, ut lobortis erat tincidunt at.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nunc pharetra justo at magna consequat accumsan.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec urna lorem, rhoncus nec tristique et, scelerisque in libero.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam vitae nibh bibendum, mattis mauris et, rhoncus nibh.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam lacinia molestie ex, id posuere metus porta eget.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <h5 class="card-header py-4 px-5">Membership</h5>
        <div class="row no-gutters row-bordered">
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Lorem ipsum dolor sit amet</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec dignissim iaculis purus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum euismod mauris elit, ut lobortis erat tincidunt at.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nunc pharetra justo at magna consequat accumsan.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec urna lorem, rhoncus nec tristique et, scelerisque in libero.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam vitae nibh bibendum, mattis mauris et, rhoncus nibh.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam lacinia molestie ex, id posuere metus porta eget.</a>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <h5 class="card-header py-4 px-5">Privacy</h5>
        <div class="row no-gutters row-bordered">
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Viverra tellus non pulvinar risus</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce in viverra lectus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce id urna cursus, auctor tortor ut, fermentum magna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris non elit nec quam tempor auctor eu in massa.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum condimentum enim molestie condimentum tempus.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Lorem ipsum dolor sit amet</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec dignissim iaculis purus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum euismod mauris elit, ut lobortis erat tincidunt at.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nunc pharetra justo at magna consequat accumsan.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec urna lorem, rhoncus nec tristique et, scelerisque in libero.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam vitae nibh bibendum, mattis mauris et, rhoncus nibh.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam lacinia molestie ex, id posuere metus porta eget.</a>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <h5 class="card-header py-4 px-5">Issues</h5>
        <div class="row no-gutters row-bordered">
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Viverra tellus non pulvinar risus</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce in viverra lectus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce id urna cursus, auctor tortor ut, fermentum magna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris non elit nec quam tempor auctor eu in massa.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum condimentum enim molestie condimentum tempus.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Lorem ipsum dolor sit amet</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec dignissim iaculis purus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum euismod mauris elit, ut lobortis erat tincidunt at.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nunc pharetra justo at magna consequat accumsan.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec urna lorem, rhoncus nec tristique et, scelerisque in libero.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam vitae nibh bibendum, mattis mauris et, rhoncus nibh.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Nullam lacinia molestie ex, id posuere metus porta eget.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <h5 class="card-header py-4 px-5">Contacts</h5>
        <div class="row no-gutters row-bordered">
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Maecenas nec augue placerat</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Sed luctus urna nunc.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Curabitur ac nibh nulla.</a>
            </div>
            <div class="col-md-6 p-5">
                <h6 class="mb-4">Viverra tellus non pulvinar risus</h6>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce in viverra lectus.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Fusce id urna cursus, auctor tortor ut, fermentum magna.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Mauris non elit nec quam tempor auctor eu in massa.</a>
                <a href="javascript:void(0)" class="d-block mb-3"><i class="ion ion-ios-arrow-forward"></i>&nbsp; Vestibulum condimentum enim molestie condimentum tempus.</a>
            </div>
        </div>
    </div>
@endsection