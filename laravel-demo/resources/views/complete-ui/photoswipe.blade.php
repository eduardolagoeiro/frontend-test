<div class="ui-block">
    <h3 class="ui-block-heading">Photoswipe</h3>
    <a target="_blank" href="http://photoswipe.com" class="ui-block-description">http://photoswipe.com</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/photoswipe/photoswipe.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/photoswipe/photoswipe.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
        <!-- Images -->
        <div id="photoswipe-example" class="row" itemscope itemtype="http://schema.org/ImageGallery">
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
                <a href="/img/bg/1.jpg" itemprop="contentUrl" data-size="1920x1280">
                    <img src="/img/bg/1.jpg" itemprop="thumbnail" alt="Image description">
                </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
                <a href="/img/bg/2.jpg" itemprop="contentUrl" data-size="1920x1280">
                    <img src="/img/bg/2.jpg" itemprop="thumbnail" alt="Image description">
                </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
                <a href="/img/bg/3.jpg" itemprop="contentUrl" data-size="1920x1280">
                    <img src="/img/bg/3.jpg" itemprop="thumbnail" alt="Image description">
                </a>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-sm-3">
                <a href="/img/bg/4.jpg" itemprop="contentUrl" data-size="1920x1280">
                    <img src="/img/bg/4.jpg" itemprop="thumbnail" alt="Image description">
                </a>
            </figure>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                // Utility function (see src/libs/photoswipe/photoswipe.es6)
                // See the docs: http://photoswipe.com/documentation/getting-started.html
                //
                initPhotoSwipeFromDOM('#photoswipe-example');
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
