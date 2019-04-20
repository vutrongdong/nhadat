<?php

use Illuminate\Database\Seeder;

class SettingWebSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        factory(FTW\Repositories\Settings\Setting::class)->create([
            'title' => 'Website bất động sản sô 1 tại Việt Nam',
            'keywords' => 'keywords',
            'description'=> 'Đây là đoạn mô tả về công ty',
            'name' => 'Website bất động sản',
            'address' => '11C/14 Dương Quảng Hàm - Cầu Giấy - Hà Nội',
            'phone' => '01237432585',
            'email' => 'trongdong717@gmail.com',
            'tax_number' => 'HGKWS123',
            'bank' => 'viettin bank',
            'about' => 'Đây là website chính thức của VinCity. Nếu bạn muốn kết nối với Tập đoàn Vingroup, hoặc các đơn vị thành viên, hãy bấm vào đây!',
            'facebook' => 'https://www.facebook.com/dong.vutrong.79',
            'instagram' => 'https://www.instagram.com/dong.vutrong.79',
            'zalo' => 'https://www.zalo.me.vn/dong.vutrong.79',
        ]);
    }
}
