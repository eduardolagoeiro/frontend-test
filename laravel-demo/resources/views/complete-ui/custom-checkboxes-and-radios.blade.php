<div class="ui-block">
    <h3 class="ui-block-heading">Custom checkboxes and radios</h3>

    <h4 class="ui-block-heading">Example</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <!-- Custom checkbox -->
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-label">Check this custom checkbox</span>
        </label>

        <!-- Custom indeterminate checkbox -->
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="indeterminate-checkbox">
            <span class="custom-control-label">Check this custom checkbox</span>
        </label>

        <!-- Custom radios -->
        <div>
            <label class="custom-control custom-control-inline custom-radio">
                <input name="custom-radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">Toggle this custom radio</span>
            </label>
            <label class="custom-control custom-control-inline custom-radio">
                <input name="custom-radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">Or toggle this other custom radio</span>
            </label>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#indeterminate-checkbox').prop('indeterminate', true)
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Disabled</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <!-- Custom checkboxes -->
        <div>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" disabled checked>
                <span class="custom-control-label">Check this custom checkbox</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="disabled-indeterminate-checkbox" disabled>
                <span class="custom-control-label">Check this custom checkbox</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" disabled>
                <span class="custom-control-label">Check this custom checkbox</span>
            </label>
        </div>

        <!-- Custom radios -->
        <fieldset disabled>
            <label class="custom-control custom-radio">
                <input name="custom-radio-2" type="radio" class="custom-control-input" checked>
                <span class="custom-control-label">Toggle this custom radio</span>
            </label>
            <label class="custom-control custom-radio">
                <input name="custom-radio-2" type="radio" class="custom-control-input">
                <span class="custom-control-label">Or toggle this other custom radio</span>
            </label>
        </fieldset>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#disabled-indeterminate-checkbox').prop('indeterminate', true)
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Validations states</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input is-valid">
                <span class="custom-control-label">Valid state</span>
            </label>
        </div>

        <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input is-invalid">
                <span class="custom-control-label">Invalid state</span>
            </label>
        </div>
    </div>

    <h4 class="ui-block-heading">Stacked</h4>

    <div class="cui-example">
        <div class="custom-controls-stacked">
            <label class="custom-control custom-radio">
                <input name="custom-radio-3" type="radio" class="custom-control-input" checked>
                <span class="custom-control-label">Toggle this custom radio</span>
            </label>
            <label class="custom-control custom-radio">
                <input name="custom-radio-3" type="radio" class="custom-control-input">
                <span class="custom-control-label">Or toggle this other custom radio</span>
            </label>
            <label class="custom-control custom-radio">
                <input name="custom-radio-3" type="radio" class="custom-control-input">
                <span class="custom-control-label">Or toggle this other custom radio</span>
            </label>
        </div>
    </div>
</div>
