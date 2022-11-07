<?php 
/**
 * Routes: 'URL' => [Controller::class, 'action']
 */
return [
    '~^$~' => [\App\Controllers\MainPageController\MainPageController::class, 'index']
];