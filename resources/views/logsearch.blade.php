<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Поиск логов') }}
        </h2>
    </x-slot>
                <div id="myform" style="all:unset">    
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
                        <input type="submit" value="Найти">
                    </form>
                </div>
                
                
</x-app-layout>

 
             