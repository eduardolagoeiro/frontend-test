<div class="ui-block">
    <h3 class="ui-block-heading">jsTree</h3>
    <a target="_blank" href="https://www.jstree.com" class="ui-block-description">https://www.jstree.com</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/jstree/themes/default/style.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/jstree/jstree.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <div class="row">
            <div class="col-md-6">
                <h6>Default</h6>

                <div id="jstree-example-1" style="margin-top:20px;min-height:200px;border:1px solid #ddd;padding:20px;">
                    <ul>
                        <li>css
                            <ul>
                                <li data-jstree='{"icon" : "jstree-file"}'>app.css</li>
                                <li data-jstree='{"icon" : "jstree-file"}'>style.css</li>
                            </ul>
                        </li>
                        <li class="jstree-open">img
                            <ul>
                                <li data-jstree='{"icon" : "jstree-file"}'>bg.jpg</li>
                                <li data-jstree='{"icon" : "jstree-file"}'>logo.png</li>
                                <li data-jstree='{"icon" : "jstree-file"}'>avatar.png</li>
                            </ul>
                        </li>
                        <li class="jstree-open">js
                            <ul>
                                <li data-jstree='{"icon" : "jstree-file"}'>jquery.js</li>
                                <li data-jstree='{"icon" : "jstree-file"}'>app.js</li>
                            </ul>
                        </li>
                        <li class="text-primary" data-jstree='{"icon" : "jstree-file"}'> index.html</li>
                        <li class="text-primary" data-jstree='{"icon" : "jstree-file"}'> page-one.html</li>
                        <li data-jstree='{"icon" : "jstree-file"}'> page-two.html</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h6>Custom icons</h6>

                <div id="jstree-example-2" style="margin-top:20px;min-height:200px;border:1px solid #ddd;padding:20px;"></div>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#jstree-example-1').jstree();
                $('#jstree-example-2').jstree({
                    core : {
                        data : [
                            {
                                text: 'css',
                                children: [
                                    { text: 'app.css', type: 'css' },
                                    { text: 'style.css', type: 'css' },
                                ],
                            },
                            {
                                text: 'img',
                                state: {
                                    opened: true
                                },
                                children: [
                                    { text: 'bg.jpg', type: 'img' },
                                    { text: 'logo.png', type: 'img' },
                                    { text: 'avatar.png', type: 'img' },
                                ],
                            },
                            {
                                text: 'js',
                                state: {
                                    opened: true
                                },
                                children: [
                                    { text: 'jquery.js', type: 'js' },
                                    { text: 'app.js', type: 'js' },
                                ],
                            },
                            { text: 'index.html', type: 'html' },
                            { text: 'page-one.html', type: 'html' },
                            { text: 'page-two.html', type: 'html' }
                        ]
                    },
                    plugins: [ 'types' ],
                    types: {
                        default: { icon: 'ion ion-ios-folder' },
                        html: { icon: 'ion ion-logo-html5 text-danger' },
                        css: { icon: 'ion ion-logo-css3 text-info' },
                        img: { icon: 'ion ion-ios-image text-success' },
                        js: { icon: 'ion ion-logo-nodejs text-warning' }
                    }
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
