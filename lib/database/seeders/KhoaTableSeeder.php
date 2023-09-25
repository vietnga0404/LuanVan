<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KhoaTableSeeder extends Seeder
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
                'k_makhoa'=>'KH01',
                'k_tenkhoa'=>'Khoa Triết',
                'k_slug'=>Str::slug('KhoaTriet')
            ],
            [
                'k_makhoa'=>'KH02',
                'k_tenkhoa'=>'Khoa Kinh Tế - Chính Trị',
                'k_slug'=>Str::slug('KhoaKinhTe-ChinhTri')
            ],
        ];
        DB::table('khoa')->insert($data);
    }
}
