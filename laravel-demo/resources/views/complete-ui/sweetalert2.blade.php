<div class="ui-block">
    <h3 class="ui-block-heading">SweetAlert2</h3>
    <a target="_blank" href="https://github.com/sweetalert2/sweetalert2" class="ui-block-description">https://github.com/sweetalert2/sweetalert2</a>

    <div class="no-ie10" data-name="Sweetalert2"></div>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/sweetalert2/sweetalert2.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/sweetalert2/sweetalert2.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-inline-spacing">
        <button class="btn btn-lg btn-default" id="sweetalert-example-1">Basic</button>
        <button class="btn btn-lg btn-default" id="sweetalert-example-2">Full</button>
        <button class="btn btn-lg btn-default" id="sweetalert-example-3">With loader</button>
        <button class="btn btn-lg btn-default" id="sweetalert-example-4">Steps</button>
        <button class="btn btn-lg btn-info" id="sweetalert-example-5">Info</button>
        <button class="btn btn-lg btn-success" id="sweetalert-example-6">Success</button>
        <button class="btn btn-lg btn-warning" id="sweetalert-example-7">Warning</button>
        <button class="btn btn-lg btn-danger" id="sweetalert-example-8">Danger</button>

        <!-- Javascript -->
        <script>
            $(function() {
                $('#sweetalert-example-1').click(function() {
                    Swal.fire({
                        title: 'Here\'s a message!', 
                        text: 'It\'s pretty, isn\'t it?',
                        footer: '<a href="javascript:void(0)">Why do I have this issue?</a>'
                    });
                });

                $('#sweetalert-example-2').click(function() {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'warning',
                        allowOutsideClick: false,
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel plx!'
                    }).then(function(result) {
                        if (result.value) {
                            Swal.fire('Deleted!', 'Your imaginary file has been deleted.', 'success');
                        } else {
                            Swal.fire('Cancelled', 'Your imaginary file is safe :)', 'error');
                        }
                    });
                });

                $('#sweetalert-example-3').click(function() {
                    Swal.fire({
                        title: 'Ajax request example',
                        text: 'Submit to run ajax request',
                        type: 'info',
                        showCancelButton: true,
                        showLoaderOnConfirm: true,
                        allowOutsideClick: function () {
                            return !Swal.isLoading();
                        },
                        preConfirm: function() {
                            return new Promise(function (resolve) {
                                setTimeout(function () {
                                    resolve(true);
                                }, 2000);
                            });
                        }
                    }).then(function(result) {
                        if (result.value) {
                            Swal.fire('Ajax request finished!');
                        }
                    })
                });

                $('#sweetalert-example-4').click(function () {
                    Swal.mixin({
                        input: 'text',
                        confirmButtonText: 'Next &rarr;',
                        showCancelButton: true,
                        progressSteps: ['1', '2', '3']
                    }).queue([{
                            title: 'Question 1',
                            text: 'Chaining swal2 modals is easy'
                        },
                        'Question 2',
                        'Question 3'
                    ]).then(function (result) {
                        if (result.value) {
                            Swal.fire({
                                title: 'All done!',
                                html: 'Your answers: <pre><code>' + JSON.stringify(result.value) + '</code></pre>',
                                confirmButtonText: 'Lovely!'
                            })
                        }
                    })
                });

                $('#sweetalert-example-5').click(function() {
                    Swal.fire({
                        title: 'Are you sure?!',
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'info',
                        showCancelButton: true,
                        customClass: {
                            confirmButton: 'btn btn-info btn-lg',
                            cancelButton: 'btn btn-default btn-lg'
                        }
                    });
                });

                $('#sweetalert-example-6').click(function() {
                    Swal.fire({
                        title: 'Are you sure?', 
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'success',
                        showCancelButton: true,
                        customClass: {
                            confirmButton: 'btn btn-success btn-lg',
                            cancelButton: 'btn btn-default btn-lg'
                        }
                    });
                });

                $('#sweetalert-example-7').click(function() {
                    Swal.fire({
                        title: 'Are you sure?', 
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'warning',
                        showCancelButton: true,
                        customClass: {
                            confirmButton: 'btn btn-warning btn-lg',
                            cancelButton: 'btn btn-default btn-lg'
                        }
                    });
                });

                $('#sweetalert-example-8').click(function() {
                    Swal.fire({
                        title: 'Are you sure?', 
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'error',
                        showCancelButton: true,
                        customClass: {
                            confirmButton: 'btn btn-danger btn-lg',
                            cancelButton: 'btn btn-default btn-lg'
                        }
                    });
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
