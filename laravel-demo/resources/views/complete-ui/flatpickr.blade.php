<div class="ui-block">
    <h3 class="ui-block-heading">Flatpickr</h3>
    <a target="_blank" href="https://github.com/flatpickr/flatpickr" class="ui-block-description">https://github.com/flatpickr/flatpickr</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/flatpickr/flatpickr.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/flatpickr/flatpickr.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading pb-0">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <!-- Date -->
        <input type="text" class="form-control" id="flatpickr-date">

        <!-- Time -->
        <input type="text" class="form-control" id="flatpickr-time">

        <!-- Datetime -->
        <input type="text" class="form-control" id="flatpickr-datetime">

        <!-- Full -->
        <input type="text" class="form-control" id="flatpickr-full">

        <!-- Range -->
        <input type="text" class="form-control" id="flatpickr-range">

        <!-- Inline -->
        <div>
            <input type="text" class="form-control" id="flatpickr-inline">
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                // Date
                $('#flatpickr-date').flatpickr({
                    altInput: true
                });

                // Time
                $('#flatpickr-time').flatpickr({
                    enableTime: true,
                    noCalendar: true,
                    altInput: true
                });

                // Datetime
                $('#flatpickr-datetime').flatpickr({
                    enableTime: true,
                    altInput: true
                });

                // Full
                $('#flatpickr-full').flatpickr({
                    weekNumbers: true,
                    enableTime: true,
                    mode: 'multiple',
                    minDate: 'today',
                    altInput: true
                });

                // Range
                $('#flatpickr-range').flatpickr({
                    mode: 'range',
                    altInput: true
                });

                // Inline
                $('#flatpickr-inline').flatpickr({
                    inline: true,
                    altInput: true,
                    allowInput: false
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
