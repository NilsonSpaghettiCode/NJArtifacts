<x-app-layout>
    <x-slot name="header"> 
        <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Inventario(Productos)')}}</div >
        
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
                    <form action="{{ url('api/productos') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="flex flex-wrap -mx-5 mb-2">    
                        
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre</label>  
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="nombre">
                        </div>
                        
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descripción</label> 
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="descripcion">
                        </div>
                        
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Cantidad</label> 
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" name="cantidad"><br>
                        </div>
                        
                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Valor x Unidad (COP)</label> 
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="valor">
                        </div>

                        <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0" style="display:inline-block;text-align:center">

                        <br>

                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Guardar</button>
                        <a href="{{ url('productos', []) }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Cancelar</a>

                        </div>

                    </div>
                    </form>
                        
                    
                </tr>
                </table>
            


            </table>



        </div>
    </div>

</x-app-layout>