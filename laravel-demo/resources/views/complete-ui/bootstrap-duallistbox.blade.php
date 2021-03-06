<div class="ui-block">
    <h3 class="ui-block-heading">Bootstrap Dual Listbox</h3>
    <a target="_blank" href="http://www.virtuosoft.eu/code/bootstrap-duallistbox/" class="ui-block-description">http://www.virtuosoft.eu/code/bootstrap-duallistbox/</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/bootstrap-duallistbox/bootstrap-duallistbox.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/bootstrap-duallistbox/bootstrap-duallistbox.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
        <select multiple="multiple" size="10" id="duallistbox-example">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3" selected="selected">Option 3</option>
            <option value="option4">Option 4</option>
            <option value="option5">Option 5</option>
            <option value="option6" selected="selected">Option 6</option>
            <option value="option7">Option 7</option>
            <option value="option8">Option 8</option>
            <option value="option9">Option 9</option>
            <option value="option0">Option 10</option>
            <option value="option0">Option 11</option>
            <option value="option0">Option 12</option>
            <option value="option0">Option 13</option>
            <option value="option0">Option 14</option>
            <option value="option0">Option 15</option>
            <option value="option0">Option 16</option>
            <option value="option0">Option 17</option>
            <option value="option0">Option 18</option>
            <option value="option0">Option 19</option>
            <option value="option0">Option 20</option>
        </select>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#duallistbox-example').bootstrapDualListbox({
                    nonSelectedListLabel: 'Non-selected',
                    selectedListLabel: 'Selected',
                    preserveSelectionOnMove: 'moved',
                    moveOnSelect: false
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
