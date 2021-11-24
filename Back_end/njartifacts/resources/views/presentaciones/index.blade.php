<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Presentaciones de los productos')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">
        <div class="bg-white p-4 border-solid rounded">
            <div class="mr-2 mb-8 flex justify-end">
                <a href="{{ url('presentaciones/create') }}" class="rounded-md py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                Añadir Presentacion
                </a>
            </div>
            <table class="min-w-full leading-normal table-fixed">
            
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
               <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID PRESENTACION</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">IMAGEN</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">PRODUCTO ID</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CREADO EN</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ACTULIAZADO EL</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">OPCIONES</th>
            </tr>
            @foreach ($presentaciones as $presentacion)
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$presentacion->id_imagen}}</td>
                 <td class=" px-5 py-5 border-b border-gray-200 bg-white text-sm"><img class="max-w-xs" src="{{$presentacion->url_imagen}}" alt="imgplaceholder"></td>
                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$presentacion->id_productopk}}</td>
                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$presentacion->created_at}}</td>
                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$presentacion->updated_at}}</td>
                 <td class="flex px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="mb-2 mr-2">   
                        <a  href="{{ route('presentacion_i.edit', ['presentacion_i'=>$presentacion->id_imagen]) }}" type="submit" onclick="return confirm('Quiere editar este registro')" class="rounded-full py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                            Editar
                        </a>

                  </div>
                  <div class="mb-2 mr-2">   
                    <form  method="POST" action="{{ url('api/imagenes', $presentacion->id_imagen) }}">
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