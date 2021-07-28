(async () => {
    const respuestaRaw = await fetch("./DatosGenero.php");

    // Decodificar como JSON
    const respuesta = await respuestaRaw.json();

    // Obtener una referencia al elemento canvas del DOM
    const $grafica = document.querySelector("#grafica");
    // Las etiquetas son las que van en el eje X. 
    const etiquetas = respuesta.etiquetas;
    // Podemos tener varios conjuntos de datos. Comencemos con uno
    const nacHombre = {
        label: "Niños",
        data: respuesta.NacHombre, // <- Aquí estamos pasando el valor traído usando AJAX
        backgroundColor: 'rgba(30, 41, 255, 0.2)', // Color de fondo
        borderColor: 'rgba(30, 41, 255, 1)', // Color del borde
        borderWidth: 1,// Ancho del borde
    };
    const nacMujer = {
        label: "Niñas",
        data: respuesta.NacMujer, // <- Aquí estamos pasando el valor traído usando AJAX
        backgroundColor: 'rgba(244, 0, 228, 0.2)',// Color de fondo
        borderColor: 'rgba(244, 0, 228, 1)',// Color del borde
        borderWidth: 1,// Ancho del borde
    };
    new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            labels: etiquetas,
            datasets: [
                nacHombre,
                nacMujer
                // Aquí más datos...
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });
})();