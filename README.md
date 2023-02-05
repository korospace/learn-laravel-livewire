================= <br>
Prepare Database <br>
================= <br>
    
    1- php artisan make:model Contact -mfs

    2- set up Contact model

    3- set up ContactFactory

    4- set up ContactSeeder

    5- run -> php artisan migrate

    6- run -> php artisan db:seed ContactSeeder 

===================== <br>
Livewire Installation <br>
===================== <br>
    
    1- run -> composer require livewire/livewire

    2- add @livewireStyles & @livewireScripts in html

===================== <br>
Create livewire views <br>
===================== <br>

    1- php artisan livewire:make ContactIndex
