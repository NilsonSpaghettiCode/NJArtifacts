<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Inventario(Productos)')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">
        <div class="bg-white p-4 border-solid rounded">
            <div class="mr-2 mb-8 flex justify-end">
                <a href="{{ url('productos/create') }}" class="rounded-md py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                Crear Producto
                </a>
            </div>
            <table class="min-w-full leading-normal table-fixed">
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID Producto</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nombre</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descripción</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Cantidad</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Valor x Unidad (COP)</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ultima modificación</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Opciones</th>
            </tr>

            @foreach ($productos as $producto)
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$producto->id_producto}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$producto->nombre}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$producto->descripcion}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$producto->valor}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$producto->cantidad}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$producto->updated_at}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="mb-2 mr-2">
                        <form action="{{ url('api/productos', $producto->id_producto) }}" method="post">
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
            </table>
        </div>
    </div>
    </div>

</x-app-layout>
                