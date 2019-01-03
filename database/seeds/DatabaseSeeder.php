<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Empresa::class, 50)->create();
        $admin = new App\Usuario;
        $admin->nombre = "Jolver Andre";
        $admin->email = "devneonix@gmail.com ";
        $admin->clave = "Manchita";
        $admin->nacimiento = \Carbon\Carbon::create(1995, 04, 03);
        $admin->documento = "72218501";
        $admin->image = "xxx";
        $admin->cargo = "Administrador de Sistema";
        $admin->save();
        factory(App\Usuario::class, 25)->create();
        factory(App\Menu::class, 100)->create();
        factory(App\Submenu::class, 200)->create();
        factory(App\OpcionUsuario::class, 200)->create();
    }
}
