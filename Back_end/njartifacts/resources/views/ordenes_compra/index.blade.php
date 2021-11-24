<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Ordenes de compra')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">
        <div class="bg-white p-4 border-solid rounded">
            <table class="min-w-full leading-normal table-fixed">
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">NOMBRE</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CORREO ELECTRONICO</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">VALOR TOTAL</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CANTIDAD DE PRODCUTOS</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CANCELADO</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">FECHA DE ORDEN</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CREADO EL</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ACTUALIZADO EL</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">OPCIONES</th>
            </tr>

            @foreach ($ordenes as $orden)
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->id_orden}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->nombre}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->correo_electronico}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->valor_total}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->cantidad_productos}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->cancelado}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->fecha_orden}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->created_at}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$orden->updated_at}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="mb-2 mr-2">   
                        <form action="{{ url('api/ordenes', $orden->id_orden) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" onclick="return confirm('Quiere editar este registro')" class="rounded-full py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                                Facturar
                            </button>
                        </form>
                        
                    </div>
                    <div class="mb-2 mr-2">   
                            <form action="{{ url('api/ordenes', $orden->id_orden) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" onclick="return confirm('Quiere borrar este registro')" class="rounded-full py-2 px-4 text-gray-100 bg-red-500 hover:bg-red-600 focus:outline-none">
                                    Eliminar
                                </button>
                            </form>
                      </div>
                </td>
            </tr>
            @endforeach
            @empty($ordenes)
                <div>
                    <p>Vacio</p>
                </div>
            @endempty

            </table>
        </div>
    </div>
    </div>

</x-app-layout>