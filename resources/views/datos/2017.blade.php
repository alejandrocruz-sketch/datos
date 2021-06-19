<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Datos 2017') }}
        </h2>
    </x-slot>
    <div class="overflow-x-auto">
        <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal text-center dark:bg-gray-900 dark:text-white">
                                <th>#</th>
                                <th>ID<br> FACTURA</th>
                                <th>ID<br> CLIENTE</th>
                                <th>TOTAL<br> FACTURA</th>
                                <th>FECHA<br>FACTURA</th>
                                <th>ID<br> ALMACEN</th>
                                <th>USUARIO</th>
                                <th>FECHA<br> CREACIÓN</th>
                                <th>NUMERO<br> FACTURA</th>
                                <th>NUMERO<br> BOLETAS</th>
                                <th>TOTAL<br> FACTURADO</th>
                                <th>ALMACEN</th>
                                <th>MEDIO<br> PAGO</th>
                                <th>TIPO <br> ENTRADA</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            @foreach ($datos_2017 as $dato_2017)
                            <tr class="border-b border-gray-200 text-center dark:bg-gray-700 dark:text-white dark:border-gray-600">
                                <td>{{$dato_2017->id}}</td>
                                <td>{{$dato_2017->id_factura}}</td>
                                <td>{{$dato_2017->id_cliente}}</td>
                                <td>{{$dato_2017->total_factura}}</td>
                                <td>{{$dato_2017->fecha_factura}}</td>
                                <td>{{$dato_2017->id_almacen}}</td>
                                <td>{{$dato_2017->usuario}}</td>
                                <td>{{$dato_2017->fecha_creacion}}</td>
                                <td>{{$dato_2017->numero_factura}}</td>
                                <td>{{$dato_2017->numero_boletas}}</td>
                                <td>{{$dato_2017->total_facturado}}</td>
                                <td>{{$dato_2017->almacen}}</td>
                                <td>{{$dato_2017->medio_pago}}</td>
                                <td>{{$dato_2017->tipo_entrada}}</td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                {{ $datos_2017->links() }}
</x-app-layout>