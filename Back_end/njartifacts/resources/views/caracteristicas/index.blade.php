<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Características de productos')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">

        <div class="bg-white p-4 border-solid rounded">
            <div class="mr-2 mb-8 flex justify-end">
                <a href="{{ url('caracteristicas/index') }}" class="rounded-md py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                Crear característica
                </a>
            </div>
                
            <table class="min-w-full leading-normal table-fixed">
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
               <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID Características</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">NOMBRE</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">DESCRIPCION</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CREADO EN</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ACTULIAZADO EL</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">OPCIONES</th>
            </tr>

            

            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">No</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">mames</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">tengo</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">bigote</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">xd</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="mb-2 mr-2">
                
                        <button type="submit" onclick="return confirm('Quiere borrar este registro')" class="rounded-full py-2 px-4 text-gray-100 bg-red-500 hover:bg-red-600 focus:outline-none">
                            Eliminar
                        </button>
            
                    </div>
                </td>
            </tr>
                
            



            </table>
        </div>
    </div>
    </div>

</x-app-layout>