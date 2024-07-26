<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    // Chèn dữ liệu vào bảng
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Cao Chót Vót', 'password' => bcrypt('hehe'), 'dia_chi' => '', 'hinh' => '', 'email' => 'caochotvot@gmail.com', 'dien_thoai' => '0918765238', 'role' => 1],
            ['name' => 'Mai Nhớ Em', 'password' => bcrypt('hehe'), 'dia_chi' => '', 'hinh' => '', 'email' => 'mainhoem@gmail.com', 'dien_thoai' => '098532482', 'role' => 0],
            ['name' => 'Vi Na Phôn', 'password' => bcrypt('hehe'), 'dia_chi' => '', 'hinh' => '', 'email' => 'vinaphone@gmail.com', 'dien_thoai' => '097397392', 'role' => 1]
        ]);
        DB::table('tinh_chat')->insert([
            ['id' => 1, 'ten' => 'Bình thường'],
            ['id' => 2, 'ten' => 'Giá rẻ'],
            ['id' => 3, 'ten' => 'Giảm sốc'],
            ['id' => 4, 'ten' => 'Cao cấp'],
        ]); //table tinh_chat
        DB::table('nha_sx')->insert([
            ['id' => 1, 'ten' => 'Asus', 'thu_tu' => 1, 'an_hien' => 1],
            ['id' => 2, 'ten' => 'Acer', 'thu_tu' => 2, 'an_hien' => 1],
            ['id' => 3, 'ten' => 'Lenovo', 'thu_tu' => 4, 'an_hien' => 1],
            ['id' => 4, 'ten' => 'MSI', 'thu_tu' => 5, 'an_hien' => 1],
            ['id' => 5, 'ten' => 'HP', 'thu_tu' => 3, 'an_hien' => 1],
            ['id' => 6, 'ten' => 'Dell', 'thu_tu' => 8, 'an_hien' => 1],
            ['id' => 7, 'ten' => 'Apple', 'thu_tu' => 9, 'an_hien' => 0],
            ['id' => 8, 'ten' => 'Surface', 'thu_tu' => 10, 'an_hien' => 0],
            ['id' => 9, 'ten' => 'Masstel', 'thu_tu' => 7, 'an_hien' => 0],
            ['id' => 10, 'ten' => 'LG', 'thu_tu' => 6, 'an_hien' => 1],
        ]); //table nha_sx
        $hinh_arr = [
            'https://cdn.tgdd.vn/Products/Images/44/302207/hp-pavilion-15-eg2086tu-i3-7c0q8pa-050223-080308-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/311178/asus-vivobook-go-15-e1504fa-r5-nj776w-thumb-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/310282/acer-aspire-3-a315-510p-32ef-i3-nxkdhsv001-thumb-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/321192/dell-inspiron-15-3520-i5-25p231-250424-020344-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/313333/lenovo-ideapad-slim-3-15iah8-i5-83er00evn-thumb-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/311016/msi-modern-15-b12mo-i5-628vn-thumb-1-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/291153/hp-240-g9-i5-6l1y1pa-thumb-1-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/311180/asus-vivobook-15-oled-a1505za-i5-l1337w-thumb-1-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/320870/acer-aspire-lite-15-51m-5542-i5-nxks5sv001-thumb-2-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/302266/dell-inspiron-15-3520-i3-i3u082w11blu-thumb-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/322269/asus-tuf-gaming-a15-fa506nf-r5-hn012w-thumb-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/316941/msi-gaming-gf63-thin-12uc-i7-887vn-glr-thumb-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/322072/lenovo-loq-gaming-15iax9-i5-83gs000jvn-thumb-new-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/316941/msi-gaming-gf63-thin-12uc-i7-887vn-glr-thumb-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/322612/macbook-air-13-inch-m3-2024-050324-020626-600x600.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg',

        ];
        $ten_arr = [
            'HP Pavilion 15 eg2086TU i3 1215U (7C0Q8PA)',
            'Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W)',
            'Acer Aspire 3 A315 510P 32EF i3 N305 (NX.KDHSV.001)',
            'Dell Inspiron 15 3520 i5 1235U (25P231)',
            'Lenovo Ideapad Slim 3 15IAH8 i5 12450H (83ER000EVN)',
            'MSI Modern 15 B12MO i5 1235U (628VN)',
            'HP 240 G9 i5 1235U (6L1Y1PA)',
            'Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W)',
            'Acer Aspire Lite 15 51M 5542 i5 1155G7 (NX.KS5SV.001)',
            'Dell Inspiron 15 3520 i3 1215U (i3U082W11BLU)',
        ];
        for ($i = 0; $i < 1000; $i++) {
            $gia = mt_rand(2000, 3000);
            $gia_km = mt_rand(1700, $gia - 50);

            $gia = $gia * 10000;
            $gia_km = $gia_km  * 10000;

            DB::table('san_pham')->insert([
                'id_nhasx' => mt_rand(1, 10),
                'ten' => Arr::random($ten_arr),
                'gia' => $gia,
                'gia_km' => $gia_km,
                'hinh' => Arr::random($hinh_arr),
                'xem' => mt_rand(0, 5000),
                'soluong' => mt_rand(0, 5000),
                'hot' => mt_rand(0, 1),
                'an_hien' => mt_rand(0, 1),
                'tinh_chat' => mt_rand(1, 3),
                'mau_sac' => mt_rand(1, 3),
                'can_nang' => mt_rand(1, 4),
            ]);
        }
    }
}
