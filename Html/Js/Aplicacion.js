"use strict";

class Aplicacion {
    constructor(ruta) {
        const $this = this;
        
        this.ruta = ruta;

        $(".btn-modal").on("click", function () {
            $(".bloqueo, .contenedor-modal").show();
        });

        $(".contenedor-modal .cerrar-modal").on("click", function () {
            $(".bloqueo, .contenedor-modal").hide();
        });
    }
}