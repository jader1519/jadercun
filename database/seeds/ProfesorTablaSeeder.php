<?php

use Illuminate\Database\Seeder;

class ProfesorTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesores = factory(App\Models\Profesor::class, 3)
        ->create()
        ->each(function ($profesor) {
            $profesor->programas()->save(factory(App\Models\Programa::class)->make());
        });
    }
}
