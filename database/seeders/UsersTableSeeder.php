<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $data=[
        ['id'=>1,'name'=>'Admin','email'=>'admin@gmail.com','password'=>bcrypt('12345678'),'role'=>1,],
        ['id'=>2,'name'=>'Employee','email'=>'employee@gmail.com','password'=>bcrypt('12345678'),'role'=>0,]
       ];

        DB::table('users')->insert($data);
    }

}
