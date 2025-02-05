<?php

function dt_dashboard_register_card( $handle, $label, $setup, $render, $priority = 0 ) {
    DT_Dashboard_Plugin_Cards::instance()->register(
        new DT_Dashboard_Callback_Card($handle, $label, [
            'setup' => $setup,
            'render' => $render,
            'priority' => $priority
        ])
    );
};
