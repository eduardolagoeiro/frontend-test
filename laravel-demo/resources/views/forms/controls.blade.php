@extends('layouts.layout-2')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">Forms /</span> Controls
    </h4>

    <div class="card mb-4">
        <h6 class="card-header">
            Input
        </h6>
        <div class="card-body">
            <input type="text" class="form-control" placeholder="Text input">
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Textarea
        </h6>
        <div class="card-body">
            <textarea class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Checkboxes and radios
        </h6>
        <div class="card-body">
            <div>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <div class="form-check-label">
                        Option one is this and that&mdash;be sure to include why it's great
                    </div>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="" disabled>
                    <div class="form-check-label">
                        Option two is disabled
                    </div>
                </label>
            </div>

            <!-- Radios -->
            <div>
                <label class="form-check">
                    <input class="form-check-input" type="radio" value="option1" name="radios-example" checked>
                    <div class="form-check-label">
                        Option one is this and that&mdash;be sure to include why it's great
                    </div>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="radio" value="option2" name="radios-example">
                    <div class="form-check-label">
                        Option two can be something else and selecting it will deselect option one
                    </div>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="radio" value="option3" name="radios-example" disabled>
                    <div class="form-check-label">
                        Option three is disabled
                    </div>
                </label>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Inline</div>

            <!-- Checkboxes -->
            <div>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="option1">
                    <span class="form-check-label">
                        1
                    </span>
                </label>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="option2">
                    <span class="form-check-label">
                        2
                    </span>
                </label>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="option3" disabled>
                    <span class="form-check-label">
                        3
                    </span>
                </label>
            </div>

            <!-- Radios -->
            <div>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inline-radios-example" value="option1">
                    <span class="form-check-label">
                        1
                    </span>
                </label>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inline-radios-example" value="option2">
                    <span class="form-check-label">
                        2
                    </span>
                </label>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inline-radios-example" value="option3" disabled>
                    <span class="form-check-label">
                        3
                    </span>
                </label>
            </div>
        </div>
        <hr class="m-0">
        <div class="card-body">
            <div class="text-light small font-weight-semibold mb-3">Without label</div>

            <label class="form-check">
                <input class="form-check-input" type="checkbox" value="option1">
            </label>

            <label class="form-check">
                <input class="form-check-input" type="radio" value="option1">
            </label>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Selects
        </h6>
        <div class="card-body demo-vertical-spacing-sm">
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <!-- Multiple -->
            <select multiple class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Disabled
        </h6>
        <div class="card-body demo-vertical-spacing-sm">
            <fieldset disabled>
                <div class="form-group">
                    <label class="form-label">Disabled input</label>
                    <input type="text" class="form-control" placeholder="Disabled input">
                </div>
                <div class="form-group">
                    <label class="form-label">Disabled select menu</label>
                    <select class="form-control">
                        <option>Disabled select</option>
                    </select>
                </div>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="" disabled>
                    <div class="form-check-label">
                        Can't check this
                    </div>
                </label>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </div>
    </div>

    <div class="card bg-dark text-white mb-4">
        <h6 class="card-header">
            Inverted
        </h6>
        <div class="card-body demo-vertical-spacing-sm">
            <input type="text" class="form-control form-control-inverted" placeholder="Text input">

            <textarea class="form-control form-control-inverted" rows="3"></textarea>

            <select class="form-control form-control-inverted">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="card-body">
            <div class="text-white small font-weight-semibold mb-3">Disabled</div>

            <div class="demo-vertical-spacing-sm">
                <input type="text" class="form-control form-control-inverted" placeholder="Text input" disabled>

                <textarea class="form-control form-control-inverted" rows="3" disabled></textarea>

                <select class="form-control form-control-inverted" disabled>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Read only
        </h6>
        <div class="card-body">
            <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
        </div>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">
            Sizes
        </h6>
        <div class="card-body demo-vertical-spacing-sm">
            <input class="form-control form-control-lg" placeholder=".form-control-lg">
            <input class="form-control" placeholder="Default input">
            <input class="form-control form-control-sm" placeholder=".form-control-sm">
            <select class="form-control form-control-lg">
                <option>.form-control-lg</option>
            </select>
            <select class="form-control">
                <option>Default select</option>
            </select>
            <select class="form-control form-control-sm">
                <option>.form-control-sm</option>
            </select>
        </div>
    </div>
@endsection