<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Solicitudes de contacto')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">

        <div class="p-6:md p-5:lg bg-white p-4 border-solid rounded">
            <table class="min-w-full leading-normal w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
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
                @foreach ($solicitudes_contacto as $solicitud)
                <tr class="sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->id}}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->nombre}}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->apellido}}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->correo_electronico}}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->mensaje}}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->contactado}}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->created_at}}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$solicitud->updated_at}}</td>
                    <td  class="flex px-5 py-20 border-b border-gray-200 bg-white text-sm" > 
                        <div class="mb-2 mr-2">
                            <form action="{{ url('api/solicitudes_contactos', $solicitud->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <button type="submit" class="rounded-full py-2 px-4 text-gray-100 bg-green-500 hover:bg-green-600 focus:outline-none">
                                    Contactado
                                </button>
                            </form>
                      </div>
                      <div class="mb-2 mr-2">
                        <form action="{{ url('solicitudes', $solicitud->id) }}" method="post">
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

    

</x-app-layout>