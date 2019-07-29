<div class="ui-block">
    <h3 class="ui-block-heading">Side Nav</h3>

    <samp class="cui-example-code-static">
        &lt;script src="&#123;&#123; mix('/vendor/js/sidenav.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Vertical</h4>

    <div class="cui-example">
        <button type="button" id="sidenav-1-toggle-collapsed" class="btn btn-primary mb-4">Toggle collapsed</button>

        <div id="sidenav-1" class="sidenav sidenav-vertical bg-dark" style="height: 450px">
            <ul class="sidenav-inner py-3">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link" id="111"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                new SideNav($('#sidenav-1')[0]);

                $('#sidenav-1-toggle-collapsed').click(function() {
                    $('#sidenav-1').toggleClass('sidenav-collapsed');
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Horizontal</h4>

    <div class="cui-example">
        <div id="sidenav-2" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 100">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                new SideNav($('#sidenav-2')[0], {
                    orientation: 'horizontal'
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Horizontal (show dropdown on hover)</h4>

    <div class="cui-example">
        <div id="sidenav-3" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 99">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                new SideNav($('#sidenav-3')[0], {
                    orientation: 'horizontal',
                    showDropdownOnHover: true
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Horizontal within container</h4>

    <div class="cui-example">
        <div id="sidenav-4" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 98">
            <div class="container d-flex">
                <ul class="sidenav-inner">
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                                <ul class="sidenav-menu">
                                    <li class="sidenav-item">
                                        <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                    </li>
                                    <li class="sidenav-item">
                                        <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                    </li>
                                    <li class="sidenav-item">
                                        <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidenav-item">
                                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                                <ul class="sidenav-menu">
                                    <li class="sidenav-item">
                                        <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                    </li>
                                    <li class="sidenav-item">
                                        <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                    </li>
                                    <li class="sidenav-item">
                                        <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item active">
                        <a href="javascript:void(0)" class="sidenav-link"><div>Item 3</div></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                new SideNav($('#sidenav-4')[0], {
                    orientation: 'horizontal'
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">No animation</h4>

    <div class="cui-example">
        <button type="button" id="sidenav-5-toggle-collapsed" class="btn btn-primary mb-4">Toggle collapsed</button>

        <div id="sidenav-5" class="sidenav sidenav-vertical bg-dark mb-4" style="height: 450px">
            <ul class="sidenav-inner py-3">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div id="sidenav-6" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 97">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                new SideNav($('#sidenav-5')[0], {
                    animate: false
                });

                new SideNav($('#sidenav-6')[0], {
                    orientation: 'horizontal',
                    animate: false
                });

                $('#sidenav-5-toggle-collapsed').click(function() {
                    $('#sidenav-5').toggleClass('sidenav-collapsed');
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">No accordion</h4>

    <div class="cui-example">
        <button type="button" id="sidenav-7-toggle-collapsed" class="btn btn-primary mb-4">Toggle collapsed</button>

        <div id="sidenav-7" class="sidenav sidenav-vertical bg-dark mb-4" style="height: 450px">
            <ul class="sidenav-inner py-3">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div id="sidenav-8" class="sidenav sidenav-horizontal bg-dark" style="position: relative;z-index: 96">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                new SideNav($('#sidenav-7')[0], {
                    accordion: false
                });

                new SideNav($('#sidenav-8')[0], {
                    orientation: 'horizontal',
                    accordion: false
                });

                $('#sidenav-7-toggle-collapsed').click(function() {
                    $('#sidenav-7').toggleClass('sidenav-collapsed');
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Elements</h4>

    <div class="cui-example">
        <div class="mb-4">
            <button type="button" id="sidenavs-9-toggle-collapsed" class="btn btn-primary">Toggle collapsed</button>
        </div>

        <!-- Blocks within scrollable area -->

        <div class="sidenavs-9 sidenav sidenav-vertical d-inline-flex bg-dark mr-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item disabled">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item disabled">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item disabled">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>

                <li class="sidenav-divider mb-0"></li>

                <li class="sidenav-block my-1">
                    <div class="small">
                        Milestone <div class="float-right">55%</div>
                    </div>
                    <div class="progress mt-1 mb-3" style="height: 4px;">
                        <div class="progress-bar bg-success" style="width: 55%;"></div>
                    </div>

                    <div class="small">
                        Release <div class="float-right">80%</div>
                    </div>
                    <div class="progress mt-1" style="height: 4px;">
                        <div class="progress-bar bg-danger" style="width: 80%;"></div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Blocks outside of scrollable area -->

        <div class="sidenavs-9 sidenav sidenav-vertical d-inline-flex bg-dark mr-4" style="height: 450px">
            <div class="sidenav-block my-1">
                <div class="media align-items-center">
                    <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                    <div class="media-body pl-3">
                        <h5 class="sidenav-text mb-1">Mike Greene</h5>
                        <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                    </div>
                </div>
            </div>
            <div class="sidenav-divider mt-0"></div>

            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item disabled">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item disabled">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item disabled">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>

            <div class="sidenav-divider mb-0"></div>

            <div class="sidenav-block my-1">
                <div class="small">
                    Milestone <div class="float-right">55%</div>
                </div>
                <div class="progress mt-1 mb-3" style="height: 4px;">
                    <div class="progress-bar bg-success" style="width: 55%;"></div>
                </div>

                <div class="small">
                    Release <div class="float-right">80%</div>
                </div>
                <div class="progress mt-1" style="height: 4px;">
                    <div class="progress-bar bg-danger" style="width: 80%;"></div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('.sidenavs-9').each(function() {
                    new SideNav(this);
                });

                $('#sidenavs-9-toggle-collapsed').click(function() {
                    $('.sidenavs-9').toggleClass('sidenav-collapsed');
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Colors (vertical)</h4>

    <div class="cui-example">
        <div class="mb-4">
            <button type="button" id="sidenavs-10-toggle-collapsed" class="btn btn-primary">Toggle collapsed</button>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-sidenav-theme mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-primary mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-secondary mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-success mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-info mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-warning mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-danger mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-white mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-lighter mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-10 sidenav sidenav-vertical d-inline-flex bg-light mr-4 mb-4" style="height: 450px">
            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('.sidenavs-10').each(function() {
                    new SideNav(this);
                });

                $('#sidenavs-10-toggle-collapsed').click(function() {
                    $('.sidenavs-10').toggleClass('sidenav-collapsed');
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Colors (horizontal)</h4>

    <div class="cui-example">
        <div class="sidenavs-11 sidenav sidenav-horizontal bg-sidenav-theme mb-4" style="position: relative; z-index: 95">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-primary mb-4" style="position: relative; z-index: 94">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-secondary mb-4" style="position: relative; z-index: 93">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-success mb-4" style="position: relative; z-index: 92">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-info mb-4" style="position: relative; z-index: 91">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-warning mb-4" style="position: relative; z-index: 90">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-danger mb-4" style="position: relative; z-index: 89">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-white mb-4" style="position: relative; z-index: 88">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-lighter mb-4" style="position: relative; z-index: 87">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-11 sidenav sidenav-horizontal bg-light mb-4" style="position: relative; z-index: 86">
            <ul class="sidenav-inner">
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('.sidenavs-11').each(function() {
                    new SideNav(this, {
                        orientation: 'horizontal'
                    });
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">With background</h4>

    <div class="cui-example">
        <div class="mb-4">
            <button type="button" id="sidenavs-12-toggle-collapsed" class="btn btn-primary">Toggle collapsed</button>
        </div>

        <div class="sidenavs-12 sidenav sidenav-vertical sidenav-dark d-inline-flex ui-bg-cover ui-bg-overlay-container mr-4 mb-4" style="background-image: url('/img/bg/1.jpg'); height: 450px">
            <div class="ui-bg-overlay bg-dark opacity-25"></div>

            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-12 sidenav sidenav-vertical sidenav-dark d-inline-flex ui-bg-cover ui-bg-overlay-container mr-4 mb-4" style="background-image: url('/img/bg/13.jpg'); height: 450px">
            <div class="ui-bg-overlay bg-warning opacity-25"></div>

            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <div class="sidenavs-12 sidenav sidenav-vertical sidenav-light d-inline-flex ui-bg-cover ui-bg-overlay-container mr-4 mb-4" style="background-image: url('/img/bg/16.jpg'); height: 450px">
            <div class="ui-bg-overlay bg-white opacity-75"></div>

            <ul class="sidenav-inner">
                <li class="sidenav-block my-1">
                    <div class="media align-items-center">
                        <img src="/img/avatars/1-small.png" class="d-block ui-w-50 rounded-circle" alt="">
                        <div class="media-body pl-3">
                            <h5 class="sidenav-text mb-1">Mike Greene</h5>
                            <div class="small"><a href="javascript:void(0)" class="sidenav-link"><strong class="sidenav-text">5</strong> new messages</a></div>
                        </div>
                    </div>
                </li>

                <li class="sidenav-divider mt-0"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Some Long Long Long Long Long Item</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 1</div></a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.2</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 1.3</div></a>
                        </li>
                    </ul>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 2</div></a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.1</div></a>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.2</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.2.3</div></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><div>Item 2.3</div></a>

                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.1</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.2</div></a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="javascript:void(0)" class="sidenav-link"><div>Item 2.3.3</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidenav-divider mb-0"></li>
                <li class="sidenav-header small font-weight-semibold">SECTION HEADER</li>

                <li class="sidenav-item active">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 3</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 4</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 5</div></a>
                </li>

                <li class="sidenav-divider"></li>

                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 6</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 7</div></a>
                </li>
                <li class="sidenav-item">
                    <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 8</div></a>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('.sidenavs-12').each(function() {
                    new SideNav(this);
                });

                $('#sidenavs-12-toggle-collapsed').click(function() {
                    $('.sidenavs-12').toggleClass('sidenav-collapsed');
                });
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Usage</h4>

    <samp class="cui-example-code-static">
        &lt;script src="&#123;&#123; mix('/vendor/js/sidenav.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <samp class="cui-example-code-static">
        &lt;div class="sidenav sidenav-vertical" id="vertical-sidenav-id"&gt;
            ...
        &lt;/div&gt;

        &lt;div class="sidenav sidenav-horizontal" id="horizontal-sidenav-id"&gt;
            ...
        &lt;/div&gt;
    </samp>

    <samp class="cui-example-code-static">
        &lt;script&gt;
            var sidenav1 = new SideNav(document.getElementById('vertical-sidenav-id'), { ...options });
            var sidenav2 = new SideNav(document.getElementById('horizontal-sidenav-id'), {
                orientation: 'horizontal',
                ...options
            });

            // SideNav instance also can be accessed using element attribute:
            document.getElementById('sidenav-id').sidenavInstance
        &lt;/script&gt;
    </samp>

    <h6 class="text-muted small font-weight-bold mt-5">OPTIONS</h6>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Default</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>orientation</strong></td>
                    <td><code>'vertical'</code></td>
                    <td>Sidenav orientation. <div class="mt-2">Values: &nbsp; <code>'vertical'</code>, <code>'horizontal'</code></div></td>
                </tr>
                <tr>
                    <td><strong>accordion</strong></td>
                    <td><code>true</code></td>
                    <td>Enable/disable accordion behaviour. <div class="mt-2">Values: &nbsp; <code>true</code>, <code>false</code></div></td>
                </tr>
                <tr>
                    <td><strong>animate</strong></td>
                    <td><code>true</code></td>
                    <td>Enable/disable animations. <div class="mt-2">Values: &nbsp; <code>true</code>, <code>false</code></div></td>
                </tr>
                <tr>
                    <td><strong>closeChildren</strong></td>
                    <td><code>false</code></td>
                    <td>Close all children menus when the parent menu closes. <div class="mt-2">Values: &nbsp; <code>true</code>, <code>false</code></div></td>
                </tr>
                <tr>
                    <td><strong>showDropdownOnHover</strong></td>
                    <td><code>false</code></td>
                    <td>Open dropdown on hover <em class="text-muted">(horizontal mode only)</em>. <div class="mt-2">Values: &nbsp; <code>true</code>, <code>false</code></div></td>
                </tr>
                <tr>
                    <td><strong>onOpen</strong></td>
                    <td>
                    </td>
                    <td>
                        Called immediately after toggle link clicked.
                        <samp class="cui-example-code-static mb-3" data-lang="javascript">
                            new SideNav(document.getElementById('sidenav-id'), {
                                onOpen: function(sidenavInstance, itemEl, toggleLinkEl, menuEl) {
                                    ...
                                }
                            });
                        </samp>
                    </td>
                </tr>
                <tr>
                    <td><strong>onOpened</strong></td>
                    <td>
                    </td>
                    <td>
                        Called after menu/dropdown open animation ends.
                        <samp class="cui-example-code-static mb-3" data-lang="javascript">
                            new SideNav(document.getElementById('sidenav-id'), {
                                onOpened: function(sidenavInstance, itemEl, toggleLinkEl, menuEl) {
                                    ...
                                }
                            });
                        </samp>
                    </td>
                </tr>
                <tr>
                    <td><strong>onClose</strong></td>
                    <td>
                    </td>
                    <td>
                        Called immediately after toggle link clicked.
                        <samp class="cui-example-code-static mb-3" data-lang="javascript">
                            new SideNav(document.getElementById('sidenav-id'), {
                                onClose: function(sidenavInstance, itemEl, toggleLinkEl, menuEl) {
                                    ...
                                }
                            });
                        </samp>
                    </td>
                </tr>
                <tr>
                    <td><strong>onClosed</strong></td>
                    <td>
                    </td>
                    <td>
                        Called after menu/dropdown close animation ends.
                        <samp class="cui-example-code-static mb-3" data-lang="javascript">
                            new SideNav(document.getElementById('sidenav-id'), {
                                onClosed: function(sidenavInstance, itemEl, toggleLinkEl, menuEl) {
                                    ...
                                }
                            });
                        </samp>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h6 class="text-muted small font-weight-bold mt-5">METHODS</h6>
    <samp class="cui-example-code-static mb-3" data-lang="javascript">
        sidenavInstance.method(...arguments);
    </samp>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Method</th>
                    <th>Arguments</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>open(el[, closeChildren=options.closeChildren])</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-toggle</code> element</li>
                            <li><code>closeChildren</code> - Close all children menus when the parent menu closes. <em class="text-muted">(optional)</em></li>
                        </ul>
                    </td>
                    <td>Open menu/dropdown</td>
                </tr>
                <tr>
                    <td><code>close(el[, closeChildren=options.closeChildren])</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-toggle</code> element</li>
                            <li><code>closeChildren</code> - Close all children menus when the parent menu closes. <em class="text-muted">(optional)</em></li>
                        </ul>
                    </td>
                    <td>Close menu/dropdown</td>
                </tr>
                <tr>
                    <td><code>toggle(el[, closeChildren=options.closeChildren])</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-toggle</code> element</li>
                            <li><code>closeChildren</code> - Close all children menus when the parent menu closes. <em class="text-muted">(optional)</em></li>
                        </ul>
                    </td>
                    <td>Toggle menu/dropdown</td>
                </tr>
                <tr>
                    <td><code>closeAll([closeChildren=options.closeChildren])</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>closeChildren</code> - Close all children menus when the parent menu closes. <em class="text-muted">(optional)</em></li>
                        </ul>
                    </td>
                    <td>Close all menus/dropdowns</td>
                </tr>
                <tr>
                    <td><code>setActive(el, active[, openTree=true[, deactivateOthers=true]])</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-link</code> element</li>
                            <li><code>active</code> - Set to <code>true</code> to activate; <code>false</code> to deactivate</li>
                            <li><code>openTree</code> - Open parent menu tree</li>
                            <li><code>deactivateOthers</code> - Deactivate currently active items</li>
                        </ul>
                    </td>
                    <td>Activate/deactivate item</td>
                </tr>
                <tr>
                    <td><code>setDisabled(el, disabled)</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-link</code> element</li>
                            <li><code>disabled</code> - Set to <code>true</code> to disable; <code>false</code> to enable</li>
                        </ul>
                    </td>
                    <td>Disable/enable item</td>
                </tr>
                <tr>
                    <td><code>isActive(el)</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-link</code> element</li>
                        </ul>
                    </td>
                    <td>Returns <code>true</code> if item is active</td>
                </tr>
                <tr>
                    <td><code>isOpened(el)</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-link</code> element</li>
                        </ul>
                    </td>
                    <td>Returns <code>true</code> if menu item is opened</td>
                </tr>
                <tr>
                    <td><code>isDisabled(el)</code></td>
                    <td>
                        <ul class="ui-list">
                            <li><code>el</code> - <code>.sidenav-item</code> or <code>.sidenav-link</code> element</li>
                        </ul>
                    </td>
                    <td>Returns <code>true</code> if item is disabled</td>
                </tr>
                <tr>
                    <td><code>update()</code></td>
                    <td>
                    </td>
                    <td>Update scrollbar<em class="text-muted">(vertical mode)</em> / scrollable area<em class="text-muted">(horizontal mode)</em></td>
                </tr>
                <tr>
                    <td><code>destroy()</code></td>
                    <td>
                    </td>
                    <td>Destroy SideNav instance</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
