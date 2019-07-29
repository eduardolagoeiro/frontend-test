@extends('layouts.layout-2')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/quill/typography.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/libs/quill/editor.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ mix('/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script>
        // Quill does not support IE 10 and below so don't load it to prevent console errors
        if (typeof document.documentMode !== 'number' || document.documentMode > 10) {
            document.write('\x3Cscript src="{{ mix('/vendor/libs/quill/quill.js') }}">\x3C/script>');
        }
    </script>
    
    <script src="{{ mix('/js/pages_articles_edit.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Edit article <span class="text-muted">#563</span>
    </h4>

    <div class="card">
        <div class="card-body media align-items-center">
            <img src="/img/avatars/1-small.png" class="d-block ui-w-40 rounded-circle" alt="">
            <div class="media-body ml-3">
                <a href="javascript:void(0)" class="text-body d-block">
                    <strong>Mike Greene</strong>
                    <span class="text-muted">@mgreene</span>
                </a>
                Created at 03/30/2018
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body pb-2">

            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" value="What Is The Big R For Marketing Your Business">
            </div>

            <div class="form-group">
                <label class="form-label">Slug</label>
                <input type="text" class="form-control" value="what-is-the-big-r-for-marketing-your-business">
            </div>

            <div class="form-group">
                <label class="form-label">Tags</label>
                <input type="text" class="form-control article-edit-tagsinput" value="Productivity,Creativity,Writing,Inspiration,Psychology">
            </div>

            <div class="form-group">
                <label class="form-label">Status</label>
                <select class="custom-select">
                    <option selected>Published</option>
                    <option>Draft</option>
                    <option>Deleted</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Content</label>
                <div id="article-editor-toolbar">
                    <span class="ql-formats">
                        <select class="ql-font"></select>
                        <select class="ql-size"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                    </span>
                    <span class="ql-formats">
                        <select class="ql-color"></select>
                        <select class="ql-background"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-script" value="sub"></button>
                        <button class="ql-script" value="super"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-header" value="1"></button>
                        <button class="ql-header" value="2"></button>
                        <button class="ql-blockquote"></button>
                        <button class="ql-code-block"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-list" value="ordered"></button>
                        <button class="ql-list" value="bullet"></button>
                        <button class="ql-indent" value="-1"></button>
                        <button class="ql-indent" value="+1"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-direction" value="rtl"></button>
                        <select class="ql-align"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                        <button class="ql-video"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-clean"></button>
                    </span>
                </div>
                <div id="article-editor" style="height: 400px"></div>
                <textarea id="article-editor-fallback" class="form-control d-none" style="height: 400px"></textarea>
            </div>

            <div class="form-group media" style="min-height:1px">
                <div class="ui-bg-cover" style="width: 100px;height: 100px;background-image: url('/img/bg/13.jpg');"></div>
                <div class="media-body ml-3">
                    <label class="form-label">
                        Main image:
                    </label>
                    <a href="javascript:void(0)" class="d-block">http://example.com/assets/img/articles/563.jpg</a>
                    <label class="custom-file mt-3">
                        <input type="file" class="custom-file-input">
                        <span class="custom-file-label"></span>
                    </label>
                </div>
            </div>

        </div>
        <hr class="m-0">
        <div class="card-body pb-2">
            <h6 class="small font-weight-semibold mb-4">Meta</h6>

            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" value="What Is The Big R For Marketing Your Business">
            </div>

            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="3">Read What Is The Big R For Marketing Your Business</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Keywords</label>
                <input type="text" class="form-control" value="Productivity, Creativity, Writing, Inspiration, Psychology">
            </div>
        </div>

    </div>

    <div class="text-right mt-3">
        <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
        <button type="button" class="btn btn-default">Cancel</button>
    </div>
@endsection