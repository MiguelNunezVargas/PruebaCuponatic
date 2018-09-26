angular.module('cnc-myapp.services', [])
	.service('ProductsService', function () {
        this.postBusquedaProductos = function () {
            var urlBusquedaProductos = "http://localhost/project_cuponatic/web/app_dev.php/api/productscript/busquedas/"
            return urlBusquedaProductos;
        },
        this.getBusquedaLogs = function () {
            var urlBusquedaLogs = "http://localhost/project_cuponatic/web/app_dev.php/api/productscript/estadisticas/"
            return urlBusquedaLogs;
        }
        return this;
    })
;
