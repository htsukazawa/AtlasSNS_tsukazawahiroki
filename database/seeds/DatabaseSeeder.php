<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            ['username' => 'Atlas1',
             'mail'     => 'Atlas1@gmail.com',
             'password' => 'atAtlas01'],
             ['username' => 'Atlas2',
             'mail'     => 'Atlas2@gmail.com',
             'password' => 'atAtlas02'],
             ['username' => 'Atlas3',
             'mail'     => 'Atlas3@gmail.com',
             'password' => 'atAtlas03'],
        ]);
    }
}
