<?php

class DT_Dashboard_Callback_Card extends DT_Dashboard_Card {
    private $setup_callback;
    private $render_callback;

    public function __construct( $handle, $label, $params = [] ) {
        $this->setup_callback = $params['setup'];
        $this->render_callback = $params['render'];
        parent::__construct( $handle, $label, $params );
    }

    /**
     * Register any assets the card needs or do anything else needed on registration.
     * @return mixed
     */
    public function setup() {
        $callback = $this->setup_callback;
        if ( $callback ) {
            $callback();
        }
    }

    /**
     * Render the card
     */
    public function render() {
        $callback = $this->render_callback;
        if ( $callback ) {
            $callback();
        }
    }
}
