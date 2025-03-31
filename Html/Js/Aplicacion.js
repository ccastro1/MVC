"use strict";

class Aplicacion {
    constructor(ruta, control) {
        const $this = this;
        $this.ruta = ruta;
        $this.control = control;

        $(".btn-modal").on("click", function () {
            $(".bloqueo, .contenedor-modal").show();
        });

        $(".contenedor-modal .cerrar-modal").on("click", function () {
            $(".bloqueo, .contenedor-modal").hide();
        });
    }
}