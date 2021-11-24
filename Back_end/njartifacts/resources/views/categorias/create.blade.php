<x-app-layout>
    <x-slot name="header"> 
    <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Creación de categoria')}}</div >
        
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
                    <form action="{{ route('categorias_i.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    @method('POST')
                    <div class="flex flex-wrap -mx-4 mb-2">    
                                             
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre</label> 
                            <input name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text"><br>
                        </div>

                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descripcion</label> 
                                <input name="descripcion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text"><br>
                            </div>
                        
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">

                        <br>
                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Guardar</button>
                        <a href="{{ url('/categorias') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Cancelar</a>

                        </div>

                    </div>
                        
                    </form>
                </tr>
                </table>
            


            </table>



        </div>
    </div>

</x-app-layout>