<x-app-layout>
    <x-slot name="header"> 
    <div class="font-semibold text-xl text-gray-800 leading-tight">{{__('Presentaciones de los productos')}}</div >
        
    </x-slot>
    <div class="container mx-auto transform translate-y-6 w-full">

        <div class="bg-white p-4 border-solid rounded">
                <table class="min-w-full leading-normal table-fixed">
                <tr>
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">


                    <div class="flex flex-wrap -mx-4 mb-2">    
                        
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">ID Producto</label>  
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="input1">
                        </div>
                        
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre Producto</label> 
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">URL Image</label> 
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" name="input2"><br>
                        </div>
                        
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">

                        <br>
                        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Guardar</button>
                        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Cancelar</button>

                        </div>

                    </div>
                        
                    </form>
                </tr>
                </table>
            


            </table>



        </div>
    </div>

</x-app-layout>