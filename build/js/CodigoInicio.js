$(document).ready(function () {
    $("#btn").on("click", function () {
        fetch("Inicio/Lista", {
            headers: {
                'credentials': 'same-origin',
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
                // or 'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
            .then(response => response.text())
            .then(html => $("#div_list").html(html));
    });
})