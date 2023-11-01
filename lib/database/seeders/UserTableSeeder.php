<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'email'=>'bandaotao@gmail.com',
                'password'=> bcrypt('bandaotao123'),
                'role'=>'bandaotao'
            ],
            [
                'email'=>'lanhdaokhoa@gmail.com',
                'password'=> bcrypt('lanhdaokhoa123'),
                'role'=>'lanhdaokhoa'
            ],
            [
                'email'=>'giangvien@gmail.com',
                'password'=> bcrypt('giangvien123'),
                'role'=>'giangvien'
            ],
            [
                'email'=>'hocvien@gmail.com',
                'password'=> bcrypt('hocvien123'),
                'role'=>'hocvien'
            ],
        ];
        DB::table('user')->insert($data);
    }
}
