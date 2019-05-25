<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
    }
  /**  public function run()
    *{
    *    DB::table('users')->insert([
    *        'name' => 'Daniel Chavez',
    *        'calle' => 'Reforma',
    *        'numero' => '455',
    *        'colonia' => 'Rancho Blanco',
    *        'ciudad' => 'Tlaquepaque',
    *        'estado' => 'Jalisco',
    *    ]);
    *    User::create([
    *      'name' => 'Daniel Chavez',
    *      'calle' => 'Reforma',
    *      'numero' => '455',
    *      'colonia' => 'Rancho Blanco',
    *      'ciudad' => 'Tlaquepaque',
    *      'estado' => 'Jalisco',
    *    ]);
    *     factory(App\User::class, 25)->create();
  */

}
