@extends('layouts.layout-2')

@section('scripts')
    <script src="{{ mix('/js/pages_vacancies.js') }}"></script>
@endsection

@section('content')
    <div class="container px-0">
        <h2 class="text-center font-weight-bolder pt-5">
            Find a Job You Will Love
        </h2>
        <div class="text-center text-muted text-big mx-auto mt-3" style="max-width: 500px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem erat, dapibus et mauris dictum, consectetur blandit ante.
        </div>

        <div class="card mt-5">

            <div class="p-4 p-md-5">
                <a href="javascript:void(0)" class="text-body text-large font-weight-semibold">Account Director</a>
                <div class="d-flex flex-wrap mt-3">
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-business text-light" title="Department"></i>&nbsp; Marketing</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-pin text-light" title="Location"></i>&nbsp; UK wide</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-time text-primary" title="Employment"></i>&nbsp; Full-time</div>
                </div>
                <div class="mt-3 mb-4">
                    Donec dui risus, sagittis non congue vitae, auctor ornare ex. Aliquam hendrerit, odio vel dictum volutpat, nulla sapien venenatis tellus, vel aliquam enim eros vel ligula. Duis dictum, tellus et feugiat viverra, justo velit vestibulum ex, nec malesuada ex ligula consectetur mi.
                </div>
                <button type="button" class="btn btn-primary rounded-pill">Learn more</button>
            </div>

            <hr class="border-light m-0">

            <div class="p-4 p-md-5">
                <a href="javascript:void(0)" class="text-body text-large font-weight-semibold">Java Developer</a>
                <div class="d-flex flex-wrap mt-3">
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-business text-light" title="Department"></i>&nbsp; Backend Dev</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-pin text-light" title="Location"></i>&nbsp; New York, US</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-time text-primary" title="Employment"></i>&nbsp; Full-time</div>
                </div>
                <div class="mt-3 mb-4">
                    Morbi dolor ex, cursus vitae lectus in, auctor ultricies metus. Sed quis nulla lacus. Maecenas et lectus massa. Cras porta mauris nec nibh tincidunt, non porttitor elit condimentum. Etiam quis augue condimentum, luctus purus et, porttitor enim. Pellentesque quam sapien, lobortis eget dolor non, ultrices fermentum purus.
                </div>
                <button type="button" class="btn btn-primary rounded-pill">Learn more</button>
            </div>

            <hr class="border-light m-0">

            <div class="p-4 p-md-5">
                <a href="javascript:void(0)" class="text-body text-large font-weight-semibold">Infrastructure Administrator</a>
                <div class="d-flex flex-wrap mt-3">
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-business text-light" title="Department"></i>&nbsp; Service Dev</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-pin text-light" title="Location"></i>&nbsp; Tokyo, Japan</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-time text-primary" title="Employment"></i>&nbsp; Part-time</div>
                </div>
                <div class="mt-3 mb-4">
                    Nulla venenatis turpis vel ante accumsan cursus. Cras ultrices ornare neque eu pharetra. In dapibus sollicitudin urna sed suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce vel sapien sodales, pharetra nisl quis, molestie odio. Donec ullamcorper, tortor sed iaculis bibendum, ante ligula dignissim neque, eget cursus nibh arcu quis est. Pellentesque auctor aliquet arcu at placerat. Duis sodales porta eros vitae gravida. Duis malesuada consectetur tristique. Cras ac tortor in lectus dictum semper ac nec tellus. Aenean eget velit mi.
                </div>
                <button type="button" class="btn btn-primary rounded-pill">Learn more</button>
            </div>

            <hr class="border-light m-0">

            <div class="p-4 p-md-5">
                <a href="javascript:void(0)" class="text-body text-large font-weight-semibold">Product Designer</a>
                <div class="d-flex flex-wrap mt-3">
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-business text-light" title="Department"></i>&nbsp; Design</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-time text-primary" title="Employment"></i>&nbsp; Freelance</div>
                </div>
                <div class="mt-3 mb-4">
                    Duis accumsan ultrices tortor, nec tristique tortor eleifend a. Nunc convallis tempor dignissim. Etiam maximus erat a nunc interdum, ac mattis eros consequat. Fusce urna erat, fringilla at faucibus a, porttitor eget tortor. Sed pharetra massa id molestie sagittis. Etiam hendrerit quis dolor ut viverra.
                </div>
                <button type="button" class="btn btn-primary rounded-pill">Learn more</button>
            </div>

            <hr class="border-light m-0">

            <div class="p-4 p-md-5">
                <a href="javascript:void(0)" class="text-body text-large font-weight-semibold">Frontend Developer</a>
                <div class="d-flex flex-wrap mt-3">
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-business text-light" title="Department"></i>&nbsp; Frontend Dev</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-pin text-light" title="Location"></i>&nbsp; New York, US</div>
                    <div class="mr-3"><i class="vacancy-tooltip ion ion-md-time text-primary" title="Employment"></i>&nbsp; Full-time</div>
                </div>
                <div class="mt-3 mb-4">
                    Quisque convallis dolor quis malesuada tempus. Fusce lacinia id ex id fringilla. Nunc sit amet tellus non quam efficitur convallis. Morbi elementum ex sed nisl mattis blandit.
                </div>
                <button type="button" class="btn btn-primary rounded-pill">Learn more</button>
            </div>

        </div>
    </div>
@endsection