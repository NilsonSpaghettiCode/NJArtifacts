<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Productos y categorias')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">
        @empty(!session('response'))
        <x-alert>
            {{session('response')}}
        </x-alert>
        @endempty
        <div class="bg-white p-4 border-solid rounded">
            <div class="mr-2 mb-8 flex justify-end">
                <a href="{{ route('producto_categoria.create') }}" class="rounded-md py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                Crear categoría por producto
                </a>
            </div>
        <div class="bg-white p-4 border-solid rounded">
                
            <table class="min-w-full leading-normal table-fixed">
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
               <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID producto categoria </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Id producto</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Id categoria</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">OPCIONES</th>
                
            </tr>
            
            @foreach ($productos_categorias as $productos_categoria)
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$productos_categoria->id_categoriaProducto}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$productos_categoria->id_productofk}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$productos_categoria->id_categoriafk}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="mb-2 mr-2">
                        <form action="{{ route('producto_categoria.destroy', ['producto_categorium'=>$productos_categoria->id_categoriaProducto]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('Quiere borrar este registro?')" class="rounded-full py-2 px-4 text-gray-100 bg-red-500 hover:bg-red-600 focus:outline-none">
                                Eliminar
                            </button>
                        </form>
                        
            
                    </div>
                    <div class="mb-2 mr-2">
                        
                            <a href="{{ route('producto_categoria.edit', ['producto_categorium'=>$productos_categoria->id_categoriaProducto]) }}" type="submit" onclick="return confirm('Quiere editar este registro?')" class="rounded-full py-2 px-4 text-gray-100 bg-green-500 hover:bg-red-600 focus:outline-none">
                                Editar
                            </a>
                        
                    </div>
                </td>
            </tr>
                
            @endforeach
            
            </table>
        </div>
    </div>
    </div>

</x-app-layout>