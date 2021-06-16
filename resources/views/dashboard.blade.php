<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
</x-app-layout>
