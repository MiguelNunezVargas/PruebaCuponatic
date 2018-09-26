'use strict';

// Declare app level module which depends on views, and components
angular.module('cnc-myapp', [
    // external components
    'ui.router',
    'ngResource',

    //shared
    'cnc-myapp.directives',
    'cnc-myapp.filters',
    'cnc-myapp.services',
    'cnc-myapp.functions',

    // vistas
    'cnc-myapp.product',
    'cnc-myapp.logs',

    // routing
    'cnc-myapp.routing'
]);
