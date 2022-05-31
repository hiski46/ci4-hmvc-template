<?php

$routes->group('procurement', ['namespace' => 'Modules\Procurement\Controllers'], function ($routes) {
    $routes->get('/', 'Procurement::index');
});
