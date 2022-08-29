<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InsertNguoidung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khachhang')->insert(
            [
                [
                    'tacgia_ten' => 'Nguyen Van A', 'tacgia_taikhoan' => 'ngocbaox50', 'tacgia_matkhau' => '123456',
                    'tacgia_email' => 'abc@gmail.com', 'tacgia_trangthai' => 1
                ],
                [
                    'tacgia_ten' => 'Nguyen Van B', 'tacgia_taikhoan' => 'ngocbaox51', 'tacgia_matkhau' => '123456',
                    'tacgia_email' => 'abc@gmail.com', 'tacgia_trangthai' => 1
                ],
                'tacgia_ten' => 'Nguyen Van C', 'tacgia_taikhoan' => 'ngocbaox52', 'tacgia_matkhau' => '123456',
                    'tacgia_email' => 'abc@gmail.com', 'tacgia_trangthai' => 1
            ]
        );
        
    }
}
