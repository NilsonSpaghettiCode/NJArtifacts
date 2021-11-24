<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Solicitudes de contacto')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">

        <div class="bg-white p-4 border-solid rounded">
            <table class="min-w-full leading-normal">
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">NOMBRE</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">APELLIDO</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CORREO ELECTRONICO</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">MENSAJE</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CONTACTADO</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CREADO EN</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CONTACTADO EN</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">OPCIONES</th>

                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">1</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Nilson Felipe</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Vargas Parras</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">nilson.vargas@uniminuto.edu.co</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"Contesten chingada vida su servicio es pesimo OwO"</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"Si"</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"23/11/2020"</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"23/11/2021"</td>
                    <td  class="px-5 py-5 border-b border-gray-200 bg-white text-sm" > 
                        <div class="mb-2 mr-2">
                        <button class="rounded-full py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                         Editar
                        </button>
                      </div>
                    </td>
                
                </tr>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ID</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">NOMBRE</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">APELLIDO</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CORREO ELECTRONICO</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">MENSAJE</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CONTACTADO</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CREADO EN</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CONTACTADO EN</th>
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">1</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Nilson Felipe</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Vargas Parras</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">nilson.vargas@uniminuto.edu.co</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"Contesten chingada vida su servicio es pesimo OwO"</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"Si"</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"23/11/2020"</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">"23/11/2021"</td>
                
                </tr>
            </table>
        </div>
    </div>

</x-app-layout>