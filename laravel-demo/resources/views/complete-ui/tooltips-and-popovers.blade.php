<div class="ui-block">
    <h3 class="ui-block-heading">Tooltips</h3>

    <h4 class="ui-block-heading">Position</h4>

    <div class="cui-example cui-example-inline-spacing" id="tooltip-position-demo">
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Right</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Top</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Bottom</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Left</button>

        <!-- Javascript -->
        <script>
            $(function() {
                if ($('html').attr('dir') === 'rtl' || $('body').attr('dir') === 'rtl') {
                    $('#tooltip-position-demo [data-placement=right]').attr('data-placement', 'left').addClass('rtled');
                    $('#tooltip-position-demo [data-placement=left]:not(.rtled)').attr('data-placement', 'right').addClass('rtled');
                }
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Variations</h4>

    <div class="cui-example cui-example-inline-spacing" id="tooltip-variations-demo">
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-state="primary" title="Primary tooltip">Primary</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-state="secondary" title="Secondary tooltip">Secondary</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" data-state="success" title="Success tooltip">Success</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-state="info" title="Info tooltip">Info</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-state="warning" title="Warning tooltip">Warning</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" data-state="danger" title="Danger tooltip">Danger</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-state="dark" title="Dark tooltip">Dark</button>

        <!-- Javascript -->
        <script>
            $(function() {
                if ($('html').attr('dir') === 'rtl' || $('body').attr('dir') === 'rtl') {
                    $('#tooltip-variations-demo [data-placement=right]').attr('data-placement', 'left').addClass('rtled');
                    $('#tooltip-variations-demo [data-placement=left]:not(.rtled)').attr('data-placement', 'right').addClass('rtled');
                }
            });
        </script>
        <!-- / Javascript -->
    </div>

    <!-- Javascript -->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!-- / Javascript -->
</div>

<div class="ui-block">
    <h3 class="ui-block-heading">Popovers</h3>

    <h4 class="ui-block-heading">Position</h4>

    <div class="cui-example cui-example-inline-spacing" id="popover-position-demo">
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on right</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on top</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on bottom</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Popover on left</button>

        <!-- Javascript -->
        <script>
            $(function() {
                if ($('html').attr('dir') === 'rtl' || $('body').attr('dir') === 'rtl') {
                    $('#popover-position-demo [data-placement=right]').attr('data-placement', 'left').addClass('rtled');
                    $('#popover-position-demo [data-placement=left]:not(.rtled)').attr('data-placement', 'right').addClass('rtled');
                }
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Variations</h4>

    <div class="cui-example cui-example-inline-spacing" id="popover-variations-demo">
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="right" data-state="primary" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Primary</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-state="success" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Success</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-state="info" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Info</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="left" data-state="warning" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Warning</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-state="danger" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Danger</button>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-state="dark" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover title">Dark</button>

        <!-- Javascript -->
        <script>
            $(function() {
                if ($('html').attr('dir') === 'rtl' || $('body').attr('dir') === 'rtl') {
                    $('#popover-variations-demo [data-placement=right]').attr('data-placement', 'left').addClass('rtled');
                    $('#popover-variations-demo [data-placement=left]:not(.rtled)').attr('data-placement', 'right').addClass('rtled');
                }
            });
        </script>
        <!-- / Javascript -->
    </div>

    <!-- Javascript -->
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover();
        });
    </script>
    <!-- / Javascript -->
</div>
