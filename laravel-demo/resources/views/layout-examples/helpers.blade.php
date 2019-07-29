@extends('layouts.layout-2')

@section('scripts')
    <script src="{{ mix('/js/layouts.js') }}"></script>
@endsection

@section('content')
    <div class="py-3 mb-4">
        <h4 class="font-weight-bold mb-2">
            <span class="text-muted font-weight-light">Layouts /</span> Layout helpers
        </h4>
        <div class="text-muted text-big font-weight-light">
            Layout helpers allow you to easily set layout options and get current layout info. See also <a href="layouts_options.html">layout options.</a>
        </div>
    </div>

    <hr class="container-m-nx border-light mt-0 mb-4">

    <pre class="layout-example-code mb-4"><code>Example:

window.layoutHelpers.toggleCollapsed()</code></pre>

    <div class="row">

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>getLayoutSidenav()</code></pre>
                    Returns the <code>.layout-sidenav</code> element (if exists). Otherwise returns <code>null</code>.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>getSidenav()</code></pre>
                    Returns the <code>.sidenav.layout-sidenav</code> element or <code>.sidenav</code> element within <code>.layout-sidenav</code> (if exists). Otherwise returns <code>null</code>.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>getLayoutNavbar()</code></pre>
                    Returns the <code>.layout-navbar</code> element (if exists). Otherwise returns <code>null</code>.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>getLayoutFooter()</code></pre>
                    Returns the <code>.layout-footer</code> element (if exists). Otherwise returns <code>null</code>.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>getLayoutContainer()</code></pre>
                    Returns the <code>.layout-container</code> element (if exists). Otherwise returns <code>null</code>.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isSmallScreen()</code></pre>
                    Returns <code>true</code> if the window width is less than 992px (lg breakpoint).
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isSmallScreen">&rsaquo; isSmallScreen()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isLayout1()</code></pre>
                    Returns <code>true</code> if the current layout is <code>.layout-1</code>.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isLayout1">&rsaquo; isLayout1()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isCollapsed()</code></pre>
                    Returns <code>true</code> if the layout sidenav is collapsed.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isCollapsed">&rsaquo; isCollapsed()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isFixed()</code></pre>
                    Returns <code>true</code> if the layout position is fixed.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isFixed">&rsaquo; isFixed()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isOffcanvas()</code></pre>
                    Returns <code>true</code> if the current layout is offcanvas.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isOffcanvas">&rsaquo; isOffcanvas()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isNavbarFixed()</code></pre>
                    Returns <code>true</code> if the layout navbar position is fixed.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isNavbarFixed">&rsaquo; isNavbarFixed()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isFooterFixed()</code></pre>
                    Returns <code>true</code> if the layout footer position is fixed.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isFooterFixed">&rsaquo; isFooterFixed()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>isReversed()</code></pre>
                    Returns <code>true</code> if layout is reversed.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-isReversed">&rsaquo; isReversed()</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>setCollapsed(collapsed, animate = true)</code></pre>
                    Collapse / expand layout sidenav.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setCollapsed-false-true">&rsaquo; setCollapsed(false, true)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setCollapsed-true-true">&rsaquo; setCollapsed(true, true)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setCollapsed-false-false">&rsaquo; setCollapsed(false, false)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setCollapsed-true-false">&rsaquo; setCollapsed(true, false)</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>toggleCollapsed(animate = true)</code></pre>
                    Toggle layout sidenav.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-toggleCollapsed-true">&rsaquo; toggleCollapsed(true)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-toggleCollapsed-false">&rsaquo; toggleCollapsed(false)</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>setPosition(fixed, offcanvas)</code></pre>
                    <p>Set layout position. <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setPosition-collapse">&rsaquo; collapse sidenav</a></code></p>
                    <span class="text-muted">Note:</span> If the layout position is fixed and the current layout is <code>.layout-1</code>, the layout navbar position also will be fixed.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setPosition-false-false">&rsaquo; setPosition(false, false)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setPosition-true-false">&rsaquo; setPosition(true, false)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setPosition-false-true">&rsaquo; setPosition(false, true)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setPosition-true-true">&rsaquo; setPosition(true, true)</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>setNavbarFixed(fixed)</code></pre>
                    Set layout navbar position. <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setNavbarFixed-reset">&rsaquo; reset layout position</a></code>
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setNavbarFixed-true">&rsaquo; setNavbarFixed(true)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setNavbarFixed-false">&rsaquo; setNavbarFixed(false)</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>setFooterFixed(fixed)</code></pre>
                    Set layout footer position.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setFooterFixed-true">&rsaquo; setFooterFixed(true)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setFooterFixed-false">&rsaquo; setFooterFixed(false)</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>setReversed(reversed)</code></pre>
                    Reverse layout.
                </div>
                <div class="card-footer media border-light">
                    <div><strong>Run:</strong></div>
                    <div class="media-body ml-3">
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setReversed-true">&rsaquo; setReversed(true)</a></code>
                        <code class="layout-example-run"><a href="javascript:void(0)" id="helpers-setReversed-false">&rsaquo; setReversed(false)</a></code>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>update()</code></pre>
                    Update layout.
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>setAutoUpdate(enable)</code></pre>
                    Update layout on window resize.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>on(event, callback)</code></pre>
                    <p>Add an event listener. You can set listener namespace using the next syntax: <code>{EventName}.{Namespace}</code>.</p>
                    <pre class="layout-example-code p-0"><code>// Subscribe to `resize` event.
// No namespace defined.
window.layoutHelpers.on('resize', function() {
    ...
});

// Subscribe to `resize` event
// with `page-1` namespace.
window.layoutHelpers.on('resize.page-1', function() {
    ...
});
</code></pre>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>off(event)</code></pre>
                    <p>Remove an event listener. Will remove only events with given namespace, otherwise will remove all events without namespace.</p>
                    <pre class="layout-example-code p-0"><code>// Remove all `resize` listeners
// without namespace.
window.layoutHelpers.off('resize');

// Remove all `resize` listeners
// with `page-1` namespace.
window.layoutHelpers.off('resize.page-1');
</code></pre>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>init()</code></pre>
                    Performs <code>layoutHelpers</code> initialization. Invoked automatically after the page loaded.
                    You need to call this method only if the <code>destroy()</code> method called before.
                    If <code>layoutHelpers</code> is already initialized, nothing will happen.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <pre class="layout-example-code text-big p-0 mb-3"><code>destroy()</code></pre>
                    Remove bound events, clean markup and disable layout auto update.
                    <div class="alert alert-warning mt-3 mb-0">
                        Will remove all bound events except <code>init</code> events. You will need unbind <code>init</code> events manually using the <code>off()</code> method.
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr class="container-m-nx mb-5">
    <h5 class="mb-4">Events</h5>
    <div class="card">
        <div class="card-body">
            <p>You can subscribe / unsubscribe events in two ways:</p>
            <ol class="mb-4">
                <li class="mb-1">
                    Using the <code>on()</code> / <code>off()</code> methods <strong>(preferred way)</strong>;
                </li>
                <li>
                    Using <code>window.addEventListener('layout{EventName}', ...)</code> / <code>window.removeEventListener('layout{EventName}', ...)</code>.
                </li>
            </ol>
            <div class="alert alert-warning mt-3 mb-0">
                The <code>destroy()</code> method will remove only events bound using the <code>on()</code> method. So, after destroy, you will need to manually remove events bound using <code>window.addEventListener</code>.
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <pre class="layout-example-code p-0"><code>Examples:

// - Using the on() / off() methods, without namespace:

// Subscribe to `resize` event.
window.layoutHelpers.on('resize', function() {
    ...
});

// Unsubscribe `resize` event.
window.layoutHelpers.off('resize');


// - Using the on() / off() methods, with `page-1` namespace:

// Subscribe to `resize` event.
window.layoutHelpers.on('resize.page-1', function() {
    ...
});

// Unsubscribe `resize` event.
window.layoutHelpers.off('resize.page-1');


// - Using window.addEventListener / window.removeEventListener:

function resizeCallback() {
    ...
}

// Subscribe to `resize` event.
window.addEventListener('layoutresize', resizeCallback, false);

// Unsubscribe `resize` event.
window.removeEventListener('layoutresize', resizeCallback, false);
</code></pre>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <h6>Available events:</h6>
            <table class="table m-0">
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>init</code></td>
                        <td>Triggered after <code>layoutHelpers</code> initialization completed.</td>
                    </tr>
                    <tr>
                        <td><code>toggle</code></td>
                        <td>Triggered after layout sidenav collapsed / expanded.</td>
                    </tr>
                    <tr>
                        <td><code>resize</code></td>
                        <td>Delayed window resize event. Default resize event delay: <code>200ms</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection