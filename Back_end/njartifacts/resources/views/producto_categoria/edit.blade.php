<x-app-layout>
    <x-slot name="header"> 
    <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Creación de producto caracteristica')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">

        @empty(!session('response'))
        <x-alert>
            {{session('response')}}
        </x-alert>
        @endempty
        

        <div class="bg-white p-4 border-solid rounded">
                <table class="min-w-full leading-normal table-fixed">
                <tr>
                    <form action="{{ route('producto_caracteristicas.update', ['producto_caracteristica'=>$producto_caracterisca_seleccionado->id]) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap -mx-4 mb-2">    
   
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Productos</label> 
                            <select name="id_producto" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option selected value="{{$producto_seleccionado->id_producto}}" class="bg-green-100 color-green">{{$producto_seleccionado->nombre}}</option>
                                @foreach ($productos as $producto)
                                    <option value="{{$producto->id_producto}}">{{$producto->nombre}}</option>
                                @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">caracteristicas</label> 
                                <select name="id_caracteristica" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option selected value="{{$caracteristica_seleccionada->id_caracteristica}}" class="bg-green-100 color-green">{{$caracteristica_seleccionada->descripcion}}</option>
                                    @foreach ($caracteristicas as $caracteristicas)
                                        <option value="{{$caracteristicas->id_caracteristica}}">{{$caracteristicas->descripcion}}</option>
                                    @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">

                        <br>
                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Guardar</button>
                        <a href="{{ url('/producto_caracteristicas') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Cancelar</a>

                        </div>

                    </div>
                        
                    </form>
                </tr>
                </table>
            


            </table>



        </div>
    </div>

</x-app-layout>