<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Dự Án Chung Cư',
                'slug' => 'du_an_chung_cu',
            ],
            [
                'name' => 'Biệt Thự Nghỉ Dưỡng',
                'slug' => 'biet_thu_nghi_duong',
            ],
            [
                'name' => 'Dự Án Cho Thuê',
                'slug' => 'du_an_cho_thue',
            ],
            [
                'name' => 'Dự Án Khác',
                'slug' => 'du_an_khac',
            ],
        ]);
    }
}
