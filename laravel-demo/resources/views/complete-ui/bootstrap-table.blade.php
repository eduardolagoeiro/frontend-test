<div class="ui-block">
    <h3 class="ui-block-heading">Bootstrap Table</h3>
    <a target="_blank" href="https://github.com/wenzhixin/bootstrap-table" class="ui-block-description">https://github.com/wenzhixin/bootstrap-table</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/bootstrap-table/bootstrap-table.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/bootstrap-table/bootstrap-table.js') &#125;&#125;"&gt;&lt;/script&gt;

        &lt;!-- External plugins --&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/tableexport/tableexport.js') &#125;&#125;">&lt;/script&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/moment/moment.js') &#125;&#125;"&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') &#125;&#125;"&gt;&lt;/script&gt;

        <!-- Extensions: -->
        &lt;script src="&#123;&#123; mix('/vendor/libs/bootstrap-table/extensions/*') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
        <div id="bootstrap-table-toolbar">
            <button id="bootstrap-table-remove" class="btn btn-danger" disabled>
                <i class="ion ion-md-close"></i> Delete
            </button>
        </div>

        <table id="bootstrap-table-example"
                     data-toolbar="#bootstrap-table-toolbar"
                     data-search="true"
                     data-show-refresh="true"
                     data-show-columns="true"
                     data-show-export="true"
                     data-detail-view="true"
                     data-minimum-count-columns="2"
                     data-show-pagination-switch="true"
                     data-pagination="true"
                     data-id-field="id"
                     data-show-footer="true"
                     data-url="/json/bootstrap-table-data.json">
        </table>

        <!-- Javascript -->
        <script>
            $(function() {
                var $table = $('#bootstrap-table-example');
                var $remove = $('#bootstrap-table-remove');
                var selections = [];

                function getIdSelections() {
                    return $.map($table.bootstrapTable('getSelections'), function (row) {
                        return row.id;
                    });
                }

                $table.bootstrapTable({
                    height: 500,
                    iconsPrefix: 'opacity-75 ion',
                    icons: {
                        paginationSwitchDown: 'ion-ios-arrow-down icon-chevron-down',
                        paginationSwitchUp: 'ion-ios-arrow-up icon-chevron-up',
                        refresh: 'ion-md-refresh icon-refresh',
                        columns: 'ion-md-apps icon-th',
                        detailOpen: 'ion-md-add icon-plus',
                        detailClose: 'ion-md-remove icon-minus',
                        export: 'ion-md-cloud-download icon-share'
                    },
                    detailFormatter: function detailFormatter(index, row) {
                        var html = [];

                        $.each(row, function (key, value) {
                            html.push('<p><b>' + key + ':</b> ' + (typeof value === 'undefined' ? false : value) + '</p>');
                        });

                        return html.join('');
                    },
                    columns: [
                        [
                            {
                                field: 'state',
                                checkbox: true,
                                rowspan: 2,
                                align: 'center',
                                valign: 'middle'
                            }, {
                                title: 'Item ID',
                                field: 'id',
                                rowspan: 2,
                                align: 'center',
                                valign: 'middle',
                                sortable: true,
                                footerFormatter: function totalTextFormatter(data) {
                                    return 'Total';
                                }
                            }, {
                                title: 'Item Detail',
                                colspan: 3,
                                align: 'center'
                            }
                        ],
                        [
                            {
                                field: 'name',
                                title: 'Item Name',
                                sortable: true,
                                editable: true,
                                footerFormatter: function totalNameFormatter(data) {
                                    return data.length;
                                },
                                align: 'center'
                            }, {
                                field: 'price',
                                title: 'Item Price',
                                sortable: true,
                                align: 'center',
                                editable: {
                                    type: 'text',
                                    title: 'Item Price',
                                    validate: function (value) {
                                        value = $.trim(value);

                                        if (!value) { return 'This field is required'; }
                                        if (!/^\$/.test(value)) { return 'This field needs to start width $.' }

                                        var data = $table.bootstrapTable('getData');
                                        var index = $(this).parents('tr').data('index');

                                        // console.log(data[index]);
                                        return '';
                                    }
                                },
                                footerFormatter: function totalPriceFormatter(data) {
                                    var total = 0;

                                    $.each(data, function (i, row) {
                                        total += +(row.price.substring(1));
                                    });

                                    return '$' + total;
                                }
                            }, {
                                field: 'operate',
                                title: 'Item Operate',
                                align: 'center',
                                events: {
                                    'click .like': function (e, value, row, index) {
                                        alert('You click like action, row: ' + JSON.stringify(row));
                                    },
                                    'click .remove': function (e, value, row, index) {
                                        $table.bootstrapTable('remove', {
                                            field: 'id',
                                            values: [row.id]
                                        });
                                    }
                                },
                                formatter: function operateFormatter(value, row, index) {
                                    return [
                                        '<a class="btn btn-xs icon-btn btn-outline-default borderless like" href="javascript:void(0)" title="Like">',
                                        '<i class="ion ion-md-heart"></i>',
                                        '</a>  ',
                                        '<a class="btn btn-xs icon-btn btn-outline-danger borderless remove" href="javascript:void(0)" title="Remove">',
                                        '<i class="ion ion-md-close"></i>',
                                        '</a>'
                                    ].join('');
                                }
                            }
                        ]
                    ]
                });


                // Make bootstrapTable compatible with Bootstrap 4
                if ($('body').attr('dir') !== 'rtl' && $('html').attr('dir') !== 'rtl') {
                    $('.bootstrap-table .pull-right .dropdown-menu').addClass('dropdown-menu-right');
                    $('.bootstrap-table .pull-left .dropdown-menu').removeClass('dropdown-menu-right');
                } else {
                    $('.bootstrap-table .pull-left .dropdown-menu').addClass('dropdown-menu-right');
                }


                // sometimes footer render error.
                setTimeout(function () {
                    $table.bootstrapTable('resetView');
                }, 200);

                $table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
                    $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
                    // save your data, here just save the current page
                    selections = getIdSelections();
                    // push or splice the selections if you want to save all data selections
                });

                $table.on('all.bs.table', function(e, name, args) {
                    // console.log(name, args);
                });

                $remove.click(function() {
                    var ids = getIdSelections();

                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: ids
                    });
                    $remove.prop('disabled', true);
                });

            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
