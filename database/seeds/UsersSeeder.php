<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'administrador@kuepa.com',
            'password' => '$2y$10$B.ssncjIrT2d.3KcVgagVOW3cpsNKGq3gMa6jzyWnOn6Db1YITkP2',
          ]);
    }
}
