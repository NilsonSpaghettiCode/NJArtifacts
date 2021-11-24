<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Inventario(Productos)')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">

        <div class="bg-white p-4 border-solid rounded">
                
            <table class="min-w-full leading-normal table-fixed">
            
            <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID Producto</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nombre</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descripción</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Cantidad</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Valor x Unidad (COP)</th>
            </tr>

            </table>
        </div>
    </div>
    </div>
</x-app-layout>
                