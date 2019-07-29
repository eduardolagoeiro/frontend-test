@extends('layouts.layout-2')

@section('content')
    <h4 class="d-flex flex-wrap justify-content-between align-items-center pt-3 mb-4">
        <ol class="breadcrumb font-weight-bold mb-3">
            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="ion ion-ios-chatbubbles"></i></a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Getting started</a></li>
            <li class="breadcrumb-item active">Research in advertising <small><span class="badge badge-warning align-text-bottom ml-1">Sticky</span></small></li>
        </ol>
        <div class="col-12 col-md-3 p-0 mb-3">
            <input type="text" class="form-control" placeholder="Search...">
        </div>
    </h4>

    <div class="card mb-4">
        <div class="card-header">
            <div class="media flex-wrap align-items-center">
                <img src="/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt>
                <div class="media-body ml-3">
                    <a href="javascript:void(0)">Allie Rodriguez</a>
                    <div class="text-muted small">3 days ago</div>
                </div>
                <div class="text-muted small ml-3">
                    <div>Member since <strong>01/12/2017</strong></div>
                    <div><strong>1,234</strong> posts</div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p>
                Aliquam varius euismod lectus, vel consectetur nibh tincidunt vitae. In non dignissim est. Sed eu ligula metus. Vivamus eget quam sit amet risus venenatis laoreet ut vel magna. Sed dui ligula, tincidunt in nunc eu, rhoncus iaculis nisi.
            </p>
            <p>
                Sed et convallis odio, vel laoreet tellus. Vivamus a leo eu metus porta pulvinar. Pellentesque tristique varius rutrum.
            </p>
            <p>
                Praesent sed lacinia erat. Proin efficitur pulvinar ante ullamcorper finibus. Mauris feugiat sapien quis porttitor lacinia. Curabitur finibus justo in elementum pellentesque. Morbi iaculis tortor vel justo porta, quis blandit velit bibendum. Donec eu leo dignissim, condimentum libero eu, dapibus odio. Etiam sodales venenatis posuere. Etiam condimentum nec velit eu scelerisque. Donec cursus tellus est, at hendrerit nulla commodo eu. Praesent euismod pellentesque tempor.
            </p>
            <p>
                Nulla mollis sem id tempus pharetra. Mauris finibus eros et leo ultricies volutpat. Nunc in lacus nec ex posuere gravida. Mauris metus nulla, mollis at felis vitae, congue ullamcorper velit. In vulputate dui sapien, in placerat tellus pellentesque ac. Duis pretium ex felis, sed vulputate orci efficitur id. Vivamus nec mauris ex. Nullam sed dolor id augue elementum ullamcorper. Donec sit amet consectetur erat.
            </p>
        </div>
        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
            <div class="px-4 pt-3">
                <a href="javascript:void(0)" class="text-muted">
                    <i class="ion ion-ios-heart-empty text-danger text-large align-middle"></i>&nbsp;
                    <span class="align-middle">48</span>
                </a>
                <span class="text-muted ml-4">
                    <i class="ion ion-ios-eye text-lighter text-large align-middle"></i>&nbsp;
                    <span class="align-middle">1,203</span>
                </span>
            </div>
            <div class="px-4 pt-3">
                <button type="button" class="btn btn-primary"><i class="ion ion-md-create"></i>&nbsp; Reply</button>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="media">
                <img src="/img/avatars/5-small.png" alt class="d-block ui-w-40 rounded-circle">
                <div class="media-body ml-4">
                    <div class="float-right text-muted small">22 May</div>
                    <a href="javascript:void(0)">Nellie Maxwell</a>
                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                    <div class="mt-2">
                        Nulla mollis sem id tempus pharetra. Mauris finibus eros et leo ultricies volutpat. Nunc in lacus nec ex posuere gravida. Mauris metus nulla, mollis at felis vitae, congue ullamcorper velit. In vulputate dui sapien, in placerat tellus pellentesque ac. Duis pretium ex felis, sed vulputate orci efficitur id. Vivamus nec mauris ex. Nullam sed dolor id augue elementum ullamcorper. Donec sit amet consectetur erat.
                    </div>
                    <div class="small mt-2">
                        <a href="javascript:void(0)" class="text-light">Reply</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-up"></i> 15</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-down"></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="media">
                <img src="/img/avatars/7-small.png" alt class="d-block ui-w-40 rounded-circle">
                <div class="media-body ml-4">
                    <div class="float-right text-muted small">22 May</div>
                    <a href="javascript:void(0)">Alice Hampton</a>
                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                    <div class="mt-2">
In quis tortor et urna fermentum varius et ac nibh. Praesent dignissim leo velit, in volutpat metus rutrum sit amet. Nulla gravida nibh magna, finibus ullamcorper lacus sollicitudin ut. Proin vehicula vitae lectus a dictum. Nunc eu eros ut velit porta tristique nec eu dolor. Sed auctor elit at sapien accumsan aliquet. Vestibulum at nunc dignissim, tristique ipsum vitae, dapibus dolor. Quisque tincidunt enim sed congue venenatis. Fusce non lacus et augue cursus faucibus sit amet vitae turpis. In hac habitasse platea dictumst. Curabitur tincidunt velit maximus eros lobortis, at hendrerit nulla cursus. Donec nec metus et elit accumsan ultrices.
                    </div>
                    <div class="small mt-2">
                        <a href="javascript:void(0)" class="text-light">Reply</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-up"></i> 15</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-down"></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="media">
                <img src="/img/avatars/8-small.png" alt class="d-block ui-w-40 rounded-circle">
                <div class="media-body ml-4">
                    <div class="float-right text-muted small">22 May</div>
                    <a href="javascript:void(0)">Hallie Lewis</a>
                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                    <div class="mt-2">
                        Ea inani epicurei mea. No docendi antiopam quo, ad dicant viderer cotidieque vix. Ea mea dicat ludus, utroque explicari conclusionemque ius eu, in scaevola tractatos persecuti per.
                    </div>
                    <div class="small mt-2">
                        <a href="javascript:void(0)" class="text-light">Reply</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-up"></i> 15</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-down"></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="media">
                <img src="/img/avatars/12-small.png" alt class="d-block ui-w-40 rounded-circle">
                <div class="media-body ml-4">
                    <div class="float-right text-muted small">22 May</div>
                    <a href="javascript:void(0)">Wayne Morgan</a>
                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                    <div class="mt-2">
                        Donec ornare eu lorem sit amet laoreet. Praesent mollis eros dui, eget tincidunt arcu rutrum ut. Morbi et dui molestie, tincidunt nibh vel, consequat sapien. Phasellus nec imperdiet erat, et viverra metus.
                    </div>
                    <div class="small mt-2">
                        <a href="javascript:void(0)" class="text-light">Reply</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-up"></i> 15</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-down"></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="media">
                <img src="/img/avatars/11-small.png" alt class="d-block ui-w-40 rounded-circle">
                <div class="media-body ml-4">
                    <div class="float-right text-muted small">22 May</div>
                    <a href="javascript:void(0)">Belle Ross</a>
                    <div class="text-muted small">Member since 01/12/2017 &nbsp;·&nbsp; 345 posts</div>
                    <div class="mt-2">
                        Proin luctus molestie magna, non rutrum nisi laoreet non. Pellentesque venenatis tincidunt tortor, ac dignissim sem volutpat placerat. Donec pharetra lacus at ullamcorper pharetra. Duis iaculis, erat nec sollicitudin efficitur, est erat tempus nisl, a pharetra nisi metus at eros. Maecenas non metus pretium, vestibulum odio id, hendrerit sem.
                    </div>
                    <div class="small mt-2">
                        <a href="javascript:void(0)" class="text-light">Reply</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-up"></i> 15</a>
                        <a href="javascript:void(0)" class="text-light ml-3">
                            <i class="ion ion-ios-thumbs-down"></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection