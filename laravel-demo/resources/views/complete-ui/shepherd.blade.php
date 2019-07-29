<div class="ui-block">
    <h3 class="ui-block-heading">Shepherd tour</h3>
    <a target="_blank" href="https://shipshapecode.github.io/shepherd/" class="ui-block-description">https://shipshapecode.github.io/shepherd/</a>

    <div class="no-ie10" data-name="Shepherd.js"></div>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/shepherd/shepherd.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/shepherd/shepherd.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
        <div class="row">
            <div class="col-sm-4" id="tour-1">
                <p>Lorem ipsum dolor sit amet, nam ut odio essent indoctum, an graecis detracto intellegat cum.</p>
            </div>
            <div class="col-sm-4">
                <p>Duo te aperiri accommodare voluptatibus.</p>
            </div>
            <div class="col-sm-4" id="tour-2">
                <p>Eam unum facilis accusata no, facer libris pro ei, vim verterem mandamus intellegam cu.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" id="tour-3">
                <p>Qui nobis docendi ut.</p>
            </div>
            <div class="col-sm-6">
                <p>Ad sea illud quidam oblique, nec ipsum discere intellegebat an.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p>Quem natum constituam mei ut, et vim graeco aliquam periculis.</p>
            </div>
            <div class="col-sm-3" id="tour-5">
                <p>Vix eu tritani mentitum.</p>
            </div>
            <div class="col-sm-3">
                <p>Diam iracundia definitiones ea eam.</p>
            </div>
            <div class="col-sm-3" id="tour-4">
                <p>Mel nonumes adolescens an, at duo modus partiendo maiestatis, sed integre honestatis cu.</p>
            </div>
        </div>

        <button class="btn btn-default" id="shepherd-example">Start tour</button>

        <!-- Javascript -->
        <script>
            $(function() {
                function setupTour(tour) {
                    var backButtonClass = 'btn btn-sm btn-secondary md-btn-flat';
                    var nextButtonClass = 'btn btn-sm btn-primary';
                    var isRtl = $('html').attr('dir') === 'rtl';

                    tour.addStep('tour-1', {
                        title: 'Title of first step',
                        text: ['Content of first step', '<strong>Second</strong> line'],
                        attachTo: '#tour-1 ' + (isRtl ? 'left' : 'right'),
                        buttons: [{
                            action: tour.cancel,
                            classes: backButtonClass,
                            text: 'Exit'
                        }, {
                            action: tour.next,
                            classes: nextButtonClass,
                            text: 'Next'
                        }]
                    });
                    tour.addStep('tour-2', {
                        title: 'Title of second step',
                        text: 'Content of second step',
                        attachTo: '#tour-2 ' + (isRtl ? 'right' : 'left'),
                        buttons: [{
                            action: tour.back,
                            classes: backButtonClass,
                            text: 'Back'
                        }, {
                            action: tour.next,
                            classes: nextButtonClass,
                            text: 'Next'
                        }]
                    });
                    tour.addStep('tour-3', {
                        title: 'Title of third step',
                        text: 'Content of third step',
                        attachTo: '#tour-3 bottom',
                        buttons: [{
                            action: tour.back,
                            classes: backButtonClass,
                            text: 'Back'
                        }, {
                            action: tour.next,
                            classes: nextButtonClass,
                            text: 'Next'
                        }]
                    });
                    tour.addStep('tour-4', {
                        title: 'Title of fourth step',
                        text: 'Content of fourth step',
                        attachTo: '#tour-4 top',
                        buttons: [{
                            action: tour.back,
                            classes: backButtonClass,
                            text: 'Back'
                        }, {
                            action: tour.next,
                            classes: nextButtonClass,
                            text: 'Next'
                        }]
                    });
                    tour.addStep('tour-modal', {
                        title: 'Floating modal',
                        text: 'Content of floating modal step',
                        buttons: [{
                            action: tour.back,
                            classes: backButtonClass,
                            text: 'Back'
                        }, {
                            action: tour.next,
                            classes: nextButtonClass,
                            text: 'Next'
                        }]
                    });
                    tour.addStep('tour-5', {
                        title: 'Title of fifth step',
                        text: 'Content of fifth step',
                        attachTo: '#tour-5 bottom',
                        buttons: [{
                            action: tour.back,
                            classes: backButtonClass,
                            text: 'Back'
                        }, {
                            action: tour.next,
                            classes: nextButtonClass,
                            text: 'Done'
                        }]
                    });

                    return tour;
                }

                $('#shepherd-example').click(function () {
                    var tour = new Shepherd.Tour({
                        defaultStepOptions: {
                            scrollTo: false,
                            showCancelLink: true
                        },
                        useModalOverlay: true
                    });

                    setupTour(tour).start();
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
