<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
        <div>                            
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="border-none">
                    <form action="/viewlog/" enctype="multipart/form-data" method="get">
                        <label>Имя пользователя</label>
                        <br>
                        <input name="username" type="username">
                        <br>
                        <label>Имя обработки</label>
                        <br>
                        <input name="path" type="path">
                        <br>
                        <label>Имя вызывающей обработки</label>
                        <br>
                        <input name="from_path" type="from_path">
                        <br>
                        <label>Кол-во выводимых записей</label>
                        <br>
                        <input name="items_per_user" type="items_per_user" value=50>              
                        <br><br>
                        <input type="submit">
                    </form>
                </div>             
                </div>         
        </div>
    </div>
    


                
</x-app-layout>

 
             