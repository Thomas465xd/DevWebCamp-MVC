(function() {
    const grafica = document.querySelector('#regalos-grafica');
    if(grafica) {

        obtenerDatos()
        async function obtenerDatos() {
            const url = '/api/regalos'
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();
            console.log(resultado);
            
            const ctx = document.getElementById('regalos-grafica').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: resultado.map( regalo => regalo.nombre),
                    datasets: [{
                        label: '',
                        data: resultado.map( regalo => regalo.total),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });            
        }

      }
})();