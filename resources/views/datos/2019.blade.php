<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Datos 2019') }}
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
                                <th>ID_FACTURA</th>
                                <th>ID CLIENTE</th>
                                <th>TOTAL FACTURA</th>
                                <th>FECHA FACTURA</th>
                                <th>ID ALMACEN</th>
                                <th>USUARIO</th>
                                <th>FECHA CREACIÓN</th>
                                <th>NUMERO FACTURA</th>
                                <th>NUMERO BOLETAS</th>
                                <th>TOTAL FACTURADO</th>
                                <th>ALMACEN</th>
                                <th>MEDIO PAGO</th>
                                <th>TIPO ENTRADA</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            @foreach ($datos_2019 as $dato_2019)
                            <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                                <td>{{$dato_2019->id}}</td>
                                <td>{{$dato_2019->id_factura}}</td>
                                <td>{{$dato_2019->id_cliente}}</td>
                                <td>{{$dato_2019->total_factura}}</td>
                                <td>{{$dato_2019->fecha_factura}}</td>
                                <td>{{$dato_2019->id_almacen}}</td>
                                <td>{{$dato_2019->usuario}}</td>
                                <td>{{$dato_2019->fecha_creacion}}</td>
                                <td>{{$dato_2019->numero_factura}}</td>
                                <td>{{$dato_2019->numero_boletas}}</td>
                                <td>{{$dato_2019->total_facturado}}</td>
                                <td>{{$dato_2019->almacen}}</td>
                                <td>{{$dato_2019->medio_pago}}</td>
                                <td>{{$dato_2019->tipo_entrada}}</td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                {{ $datos_2019->links() }}
</x-app-layout>