<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 gap-4 sm:grid-cols-2 sm:px-6 lg:px-8">
            <div class="d-block bg-white overflow-hidden shadow-xl col-span-1 sm:col-span-2 sm:rounded-lg dark:bg-gray-800">
                {{-- <x-jet-welcome /> --}}
                <div class="overflow-x-auto">
                    <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden">
                        <div class="w-full lg:w-5/6">
                            <div class="bg-white shadow-md rounded my-6">
                                <table class="min-w-max w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal text-center">
                                            <th>AÑO</th>
                                            <th>TOTAL FACTURAS</th>
                                            <th>TOTAL CLIENTES</th>
                                            <th>TICKET POR CLIENTE</th>
                                            <th>TOTAL DE PRECIO</th>
                                            <th>TICKET POR FACTURA</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700 text-sm">
                                        <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                                            <th>2017</th>
                                            <td>7404</td>
                                            <td>4066</td>
                                            <td>1,820954255</td>
                                            <td>1181091502</td>
                                            <td>159520,7323</td>
                                        </tr>                                        
                                        <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                                            <th>2018</th>
                                            <td>33934</td>
                                            <td>12426</td>
                                            <td>2,73088685</td>
                                            <td>3013795828</td>
                                            <td>88813,45636</td>
                                        </tr>                                        
                                        <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                                            <th>2019</th>
                                            <td>60183</td>
                                            <td>19589</td>
                                            <td>3,072285466</td>
                                            <td>6411255298</td>
                                            <td>106529,3405</td>
                                        </tr>                                        
                                        <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                                            <th>2020</th>
                                            <td>15260</td>
                                            <td>3826</td>
                                            <td>3,988499739</td>
                                            <td>1748029225</td>
                                            <td>114549,7526</td>
                                        </tr>                                        
                                        <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                                            <th>2021</th>
                                            <td>214</td>
                                            <td>108</td>
                                            <td>1,981481481</td>
                                            <td>18198950</td>
                                            <td>85041,82243</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg dark:bg-gray-800">
                <canvas id="myChart" height="100"></canvas>
                <script>
                    var ctx = document.getElementById('myChart');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['2017', '2018', '2019', '2020', '2021'],
                            datasets: [{
                                label: '# Total de Facturas',
                                data: [7404, 33934, 60183, 15260, 214],
                                fill: true,
                                borderColor: [
                                    'rgba(255, 99, 132, 1)'
                                ],
                                tension: 0.1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
            </div>
            <div class="d-block p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg dark:bg-gray-800">
                <canvas id="myChart1" height="100"></canvas>
                <script>
                    var ctx = document.getElementById('myChart1');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['2017', '2018', '2019', '2020', '2021'],
                            datasets: [{
                                label: '# Total de Clientes',
                                data: [4066, 12426, 19589, 3826, 108],
                                fill: true,
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                tension: 0.1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
            </div>
            <div class="d-block p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg dark:bg-gray-800">
                <canvas id="myChart2" height="100"></canvas>
                <script>
                    var ctx = document.getElementById('myChart2');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['2017', '2018', '2019', '2020', '2021'],
                            datasets: [{
                                label: 'Ticket por Cliente',
                                data: [1.820954255, 2.73088685, 3.072285466, 3.988499739, 1.981481481],
                                fill: true,
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                tension: 0.1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
            </div>
            <div class="d-block p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg dark:bg-gray-800">
                <canvas id="myChart3" height="100"></canvas>
                <script>
                    var ctx = document.getElementById('myChart3');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['2017', '2018', '2019', '2020', '2021'],
                            datasets: [{
                                label: 'Total Precio',
                                data: [1181091502, 3013795828, 6411255298, 1748029225, 18198950],
                                fill: true,
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                tension: 0.1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
            </div>
            <div class="d-block p-5 bg-white overflow-hidden shadow-xl col-span-1 sm:col-span-2 sm:rounded-lg dark:bg-gray-800">
                <canvas id="myChart4" height="100"></canvas>
                <script>
                    var ctx = document.getElementById('myChart4');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['2017', '2018', '2019', '2020', '2021'],
                            datasets: [{
                                label: 'Ticket por Factura',
                                data: [159520.7323, 88813.45636, 106529.3405, 114549.7526, 85041.82243],
                                fill: true,
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                tension: 0.1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
            </div>
        </div>
    </div>
</x-app-layout>
