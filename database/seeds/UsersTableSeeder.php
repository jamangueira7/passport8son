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
        //
        factory(\App\User::class)->create([
            'email'=>'joao1@joao.com'
        ]);

        factory(\App\User::class)->create([
            'email'=>'joao2@joao.com'
        ]);
    }
}
