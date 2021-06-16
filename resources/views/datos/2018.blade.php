<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Datos 2018') }}
        </h2>
    </x-slot>
    <div class="overflow-x-auto">
        <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal text-center">
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
                            @foreach ($datos_2018 as $dato_2018)
                            <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                                <td>{{$dato_2018->id}}</td>
                                <td>{{$dato_2018->id_factura}}</td>
                                <td>{{$dato_2018->id_cliente}}</td>
                                <td>{{$dato_2018->total_factura}}</td>
                                <td>{{$dato_2018->fecha_factura}}</td>
                                <td>{{$dato_2018->id_almacen}}</td>
                                <td>{{$dato_2018->usuario}}</td>
                                <td>{{$dato_2018->fecha_creacion}}</td>
                                <td>{{$dato_2018->numero_factura}}</td>
                                <td>{{$dato_2018->numero_boletas}}</td>
                                <td>{{$dato_2018->total_facturado}}</td>
                                <td>{{$dato_2018->almacen}}</td>
                                <td>{{$dato_2018->medio_pago}}</td>
                                <td>{{$dato_2018->tipo_entrada}}</td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                {{ $datos_2018->links() }}
</x-app-layout>