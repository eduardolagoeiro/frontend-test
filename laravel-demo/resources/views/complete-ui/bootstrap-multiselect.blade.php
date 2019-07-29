<div class="ui-block">
    <h3 class="ui-block-heading">Bootstrap Multiselect</h3>
    <a target="_blank" href="https://github.com/davidstutz/bootstrap-multiselect" class="ui-block-description">https://github.com/davidstutz/bootstrap-multiselect</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/bootstrap-multiselect/bootstrap-multiselect.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/bootstrap-multiselect/bootstrap-multiselect.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <!-- Single -->
        <select id="bs-multiselect-1">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
            <option value="6">Option 6</option>
        </select>

        <!-- Multiple -->
        <select id="bs-multiselect-2" multiple>
            <option value="cheese">Cheese</option>
            <option value="tomatoes">Tomatoes</option>
            <option value="mozarella">Mozzarella</option>
            <option value="mushrooms">Mushrooms</option>
            <option value="pepperoni">Pepperoni</option>
            <option value="onions">Onions</option>
        </select>

        <!-- Groups -->
        <select id="bs-multiselect-3" multiple>
            <optgroup label="Group 1">
                <option value="1-1">Option 1.1</option>
                <option value="1-2" selected="selected">Option 1.2</option>
                <option value="1-3" selected="selected">Option 1.3</option>
            </optgroup>
            <optgroup label="Group 2">
                <option value="2-1">Option 2.1</option>
                <option value="2-2">Option 2.2</option>
                <option value="2-3">Option 2.3</option>
            </optgroup>
        </select>
        <br><br>

        <!-- Full -->
        <select id="bs-multiselect-4" multiple>
            <optgroup label="Group 1">
                <option value="1-1">Option 1.1</option>
                <option value="1-2" selected="selected">Option 1.2</option>
                <option value="1-3" selected="selected">Option 1.3</option>
            </optgroup>
            <optgroup label="Group 2">
                <option value="2-1">Option 2.1</option>
                <option value="2-2">Option 2.2</option>
                <option value="2-3">Option 2.3</option>
            </optgroup>
        </select>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#bs-multiselect-1,#bs-multiselect-2,#bs-multiselect-3').multiselect();
                $('#bs-multiselect-4').multiselect({
                    enableClickableOptGroups: true,
                    enableCollapsibleOptGroups: true,
                    enableFiltering: true,
                    includeSelectAllOption: true,
                    buttonWidth: '100%',
                    maxHeight: 400,
                    dropUp: true,
                    templates: {
                        filter: '<li class="multiselect-item filter"><div class="input-group input-group-sm"><span class="input-group-prepend"><span class="input-group-text"><i class="ion ion-ios-search"></i></span></span><input class="form-control multiselect-search" type="text"></div></li>',
                        filterClearBtn: '<span class="input-group-append"><button class="btn btn-default multiselect-clear-filter" type="button"><i class="ion ion-md-close"></i></button></span>',
                    }
                });

                // RTL
                if ($('html').attr('dir') === 'rtl' || $('body').attr('dir') === 'rtl') {
                    $('#bs-multiselect-1,#bs-multiselect-2,#bs-multiselect-3,#bs-multiselect-4')
                        .next('.btn-group')
                        .find('.dropdown-menu')
                        .addClass('dropdown-menu-right');
                }
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
