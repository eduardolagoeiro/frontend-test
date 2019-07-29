@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        Invoice
    </h4>

    <div class="card">
        <div class="card-body p-5">

            <div class="row">
                <div class="col-sm-6 pb-4">

                    <div class="media align-items-center mb-4">
                        <div class="ui-w-40">
                            <div class="w-100 position-relative" style="padding-bottom: 54%">
                                <svg class="w-100 h-100 position-absolute" viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path fill="#999" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
                            </div>
                        </div>
                        <div class="media-body text-big font-weight-bold ml-2">
                            Appwork
                        </div>
                    </div>

                    <div class="mb-1">Office 154, 330 North Brand Boulevard</div>
                    <div class="mb-1">Glendale, CA 91203, USA</div>
                    <div>+0 (123) 456 7891, +9 (876) 543 2198</div>

                </div>

                <div class="col-sm-6 text-right pb-4">

                    <h6 class="text-big text-large font-weight-bold mb-3">INVOICE #49029</h6>
                    <div class="mb-1">Date: <strong class="font-weight-semibold">January 12, 2015</strong></div>
                    <div>Due date: <strong class="font-weight-semibold">May 12, 2015</strong></div>

                </div>
            </div>

            <hr class="mb-4">

            <div class="row">
                <div class="col-sm-6 mb-4">

                    <div class="font-weight-bold mb-2">Invoice To:</div>
                    <div>Alice Hampton</div>
                    <div>Company LTD</div>
                    <div>70 Bowman St.</div>
                    <div>South Windsor, CT 06074</div>
                    <div>United States</div>
                    <div>+9 (965) 645 8146</div>
                    <div>ahampton@mail.com</div>

                </div>
                <div class="col-sm-6 mb-4">

                    <div class="font-weight-bold mb-2">Payment Details:</div>
                    <table>
                        <tbody>
                            <tr>
                                <td class="pr-3">Total Due:</td>
                                <td><strong>$6,095.25</strong></td>
                            </tr>
                            <tr>
                                <td class="pr-3">Bank name:</td>
                                <td>Finance Bank</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Country:</td>
                                <td>United States</td>
                            </tr>
                            <tr>
                                <td class="pr-3">City:</td>
                                <td>West New York, NJ 07093</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Address:</td>
                                <td>23 Sussex Ave.</td>
                            </tr>
                            <tr>
                                <td class="pr-3">IBAN:</td>
                                <td>ETD85039283901259</td>
                            </tr>
                            <tr>
                                <td class="pr-3">SWIFT code:</td>
                                <td>AS4F1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="table-responsive mb-4">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th class="py-3">
                                Task description
                            </th>
                            <th class="py-3">
                                Rate
                            </th>
                            <th class="py-3">
                                Hours
                            </th>
                            <th class="py-3">
                                Line total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3">
                                <div class="font-weight-semibold">Website design and development</div>
                                <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                            </td>
                            <td class="py-3">
                                <strong>$50.00</strong>
                            </td>
                            <td class="py-3">
                                <strong>63</strong>
                            </td>
                            <td class="py-3">
                                <strong>$3,150.00</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                                <div class="font-weight-semibold">Branding</div>
                                <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                            </td>
                            <td class="py-3">
                                <strong>$47.95</strong>
                            </td>
                            <td class="py-3">
                                <strong>36</strong>
                            </td>
                            <td class="py-3">
                                <strong>$1,726.20</strong>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right py-3">
                                Subtotal:<br>
                                Tax(25%):<br>
                                <span class="d-block text-big mt-2">Total:</span>
                            </td>
                            <td class="py-3">
                                <strong>$4,876.20</strong><br>
                                <strong>$1,219.05</strong><br>
                                <strong class="d-block text-big mt-2">$6,095.25</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-muted">
                <strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet, dolor id dapibus dapibus, neque mi tincidunt quam, quis congue ligula risus vitae magna. Curabitur ultrices nisi massa, nec viverra lorem feugiat sed. Mauris non porttitor nunc. Integer eu orci in magna auctor vestibulum.
            </div>

        </div>
        <div class="card-footer text-right">

            <a href="{{ route('pages.invoice-print') }}" target="_blank" class="btn btn-default"><i class="ion ion-md-print"></i>&nbsp; Print</a>
            <button type="button" class="btn btn-primary ml-2"><i class="ion ion-ios-paper-plane"></i>&nbsp; Send</button>

        </div>
    </div>
@endsection