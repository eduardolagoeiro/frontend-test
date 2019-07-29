<template>
  <div class="ui-block">
    <h3 class="ui-block-heading">Spinners</h3>

    <h4 class="ui-block-heading">Border</h4>

    <div class="cui-example cui-example-inline-spacing">
      <b-spinner label="Spinning" />
      <b-spinner label="Spinning" variant="primary" />
      <b-spinner label="Spinning" variant="secondary" />
      <b-spinner label="Spinning" variant="success" />
      <b-spinner label="Spinning" variant="danger" />
      <b-spinner label="Spinning" variant="warning" />
      <b-spinner label="Spinning" variant="info" />
      <b-spinner label="Spinning" variant="light" />
      <b-spinner label="Spinning" variant="dark" />
    </div>

    <h4 class="ui-block-heading">Growing</h4>

    <div class="cui-example cui-example-inline-spacing">
      <b-spinner label="Spinning" type="grow" />
      <b-spinner label="Spinning" type="grow" variant="primary" />
      <b-spinner label="Spinning" type="grow" variant="secondary" />
      <b-spinner label="Spinning" type="grow" variant="success" />
      <b-spinner label="Spinning" type="grow" variant="danger" />
      <b-spinner label="Spinning" type="grow" variant="warning" />
      <b-spinner label="Spinning" type="grow" variant="info" />
      <b-spinner label="Spinning" type="grow" variant="light" />
      <b-spinner label="Spinning" type="grow" variant="dark" />
    </div>

    <h4 class="ui-block-heading">Small</h4>

    <div class="cui-example">
      <div class="cui-example-inline-spacing mb-4">
        <b-spinner label="Spinning" small />
        <b-spinner label="Spinning" small variant="primary" />
        <b-spinner label="Spinning" small variant="secondary" />
        <b-spinner label="Spinning" small variant="success" />
        <b-spinner label="Spinning" small variant="danger" />
        <b-spinner label="Spinning" small variant="warning" />
        <b-spinner label="Spinning" small variant="info" />
        <b-spinner label="Spinning" small variant="light" />
        <b-spinner label="Spinning" small variant="dark" />
      </div>

      <div class="cui-example-inline-spacing">
        <b-spinner label="Spinning" type="grow" small />
        <b-spinner label="Spinning" type="grow" small variant="primary" />
        <b-spinner label="Spinning" type="grow" small variant="secondary" />
        <b-spinner label="Spinning" type="grow" small variant="success" />
        <b-spinner label="Spinning" type="grow" small variant="danger" />
        <b-spinner label="Spinning" type="grow" small variant="warning" />
        <b-spinner label="Spinning" type="grow" small variant="info" />
        <b-spinner label="Spinning" type="grow" small variant="light" />
      </div>
    </div>

    <h4 class="ui-block-heading">Within buttons</h4>

    <div class="cui-example">
      <div class="cui-example-inline-spacing mb-4">
        <!-- Extra small -->
        <b-button variant="primary" class="btn-xs" disabled>
          <b-spinner />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" class="btn-xs" disabled>
          <b-spinner />
          Loading...
        </b-button>

        <!-- Small -->
        <b-button variant="primary" size="sm" disabled>
          <b-spinner />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" size="sm" disabled>
          <b-spinner />
          Loading...
        </b-button>

        <!-- Default -->
        <b-button variant="primary" disabled>
          <b-spinner />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" disabled>
          <b-spinner />
          Loading...
        </b-button>

        <!-- Large -->
        <b-button variant="primary" size="lg" disabled>
          <b-spinner />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" size="lg" disabled>
          <b-spinner />
          Loading...
        </b-button>

        <!-- Extra large -->
        <b-button variant="primary" class="btn-xl" disabled>
          <b-spinner />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" class="btn-xl" disabled>
          <b-spinner />
          Loading...
        </b-button>
      </div>

      <div class="cui-example-inline-spacing">
        <!-- Extra small -->
        <b-button variant="primary" class="btn-xs" disabled>
          <b-spinner type="grow" />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" class="btn-xs" disabled>
          <b-spinner type="grow" />
          Loading...
        </b-button>

        <!-- Small -->
        <b-button variant="primary" size="sm" disabled>
          <b-spinner type="grow" />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" size="sm" disabled>
          <b-spinner type="grow" />
          Loading...
        </b-button>

        <!-- Default -->
        <b-button variant="primary" disabled>
          <b-spinner type="grow" />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" disabled>
          <b-spinner type="grow" />
          Loading...
        </b-button>

        <!-- Large -->
        <b-button variant="primary" size="lg" disabled>
          <b-spinner type="grow" />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" size="lg" disabled>
          <b-spinner type="grow" />
          Loading...
        </b-button>

        <!-- Extra large -->
        <b-button variant="primary" class="btn-xl" disabled>
          <b-spinner type="grow" />
          <span class="sr-only">Loading...</span>
        </b-button>
        <b-button variant="primary" class="btn-xl" disabled>
          <b-spinner type="grow" />
          Loading...
        </b-button>
      </div>
    </div>
  </div>
</template>

<script>
export default {}
</script>
