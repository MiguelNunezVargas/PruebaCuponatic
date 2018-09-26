'use strict';

// Declare app level module which depends on views, and components
angular.module('cnc-myapp.routing', [])
    .config(function ($stateProvider, $urlRouterProvider) {
        $stateProvider
            .state('product', {
                url: "/product",
                templateUrl: "public/js/app/pages/product/product.html",
                controller :  "ProductCtrl"
            })

            .state('logs', {
                url: "/logs",
                templateUrl: "public/js/app/pages/logs/logs.html",
                controller: "LogsCtrl"
            });


        // las direciones desconocidas se redirigen al viewer
        $urlRouterProvider.otherwise("/product");
    });