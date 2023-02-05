<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'item_name' =>'Cabe',
            'desc' => 'Warna bisa campur antara merah 80% - 90% dan warna lain (hijau, kuning, orange, putih) sekitar 10% - 20%. Cabai rawit merah berukuran kecil dan warnanya bervariasi. Mulai dari oranye kemerahan sampai merah. Rasanya sangat pedas sehingga cocok sebagai bahan utama membuat sambal.',
            'price' => 9900,
            'image' => 'images/items/cabai.png',
        ]);

        Item::create([
            'item_name' =>'Pisang',
            'desc' => 'Pisang cavendish siap makan. Pisang imperfect memiliki kulit yang lebih berbintik-bintik. Namun rasanya tetap enak. Sebaiknya segera konsumsi pada hari yang sama.
Teksturnya lembut dan rasanya manis. Cocok untuk sarapan, bekal, atau sebagai topping smoothies dan makanan lainnya. Kulit pisang cenderung kuning mulus, namun ada juga yang memiliki sedikit bercak hitam. Tunggu 2-3 hari agar matang sempurna.',
            'price' => 11200,
            'image' => 'images/items/pisang.png',
        ]);

        Item::create([
            'item_name' =>'Pepaya',
            'desc' => 'Tersedia dalam pilihan konvensional dan imperfect. Pepaya imperfect memiliki bercak di kulitnya dan dapat langsung dikonsumsi. Pepaya konvensional perlu ditunggu 2-3 hari agar matang sempurna.

Kulit pepaya california berwarna hijau mulus. Ukurannya pas untuk 1-2 orang. Rasanya manis, lezat, dan segar. Cocok untuk dimakan langsung,dijadikan camilan sehat, dibuat jus, atau dessert.',
            'price' => 17900,
            'image' => 'images/items/pepaya.png',
        ]);

        Item::create([
            'item_name' =>'Daun Bawang',
            'desc' => 'Daun bawang memiliki bentuk memanjang dengan batang putih berdaging tebal. Daun bawang memiliki aroma dan rasa yang khas. Sehingga sering digunakan sebagai pelengkap makanan atau penambah cita rasa.',
            'price' => 2300,
            'image' => 'images/items/daun-bawang.png',
        ]);

        Item::create([
            'item_name' =>'Buah Naga Merah',
            'desc' => 'Tersedia dalam pilihan imperfect dan konvensional. Buah naga imperfect memiliki ukuran yang lebih kecil dan kulit buah yang agak layu. Namun rasa dan manfaatnya tetap sama.

Buah naga dengan daging buah berwarna merah. Rasanya ringan cenderung manis. Teksturnya lembut. Cocok untuk camilan atau bekal. Dapat diolah menjadi jus atau digunakan sebagai pewarna merah alami dalam kreasi makanan atau kue.',
            'price' => 17600,
            'image' => 'images/items/buah-naga.png',
        ]);

        Item::create([
            'item_name' =>'Strawberry',
            'desc' => 'Ditanam secara hidroponik. Lebih segar, sehat, dan berkualitas. Strawberry sweetheart memiliki bentuk yang unik dan warna merah yang menggugah selera. Daging buah juicy dengan rasa manis cenderung asam segar. Cocok untuk camilan, selai, smoothies, jus, dan berbagai kreasi lainnya.',
            'price' => 13900,
            'image' => 'images/items/strawberry.png',
        ]);

        Item::create([
            'item_name' =>'Alpukat',
            'desc' => 'Tersedia dalam pilihan alpukat mentega konvensional dan imperfect. Alpukat mentega imperfect memiliki bintik hitam di kulitnya dan perlu menunggu 2-3 hari untuk matang.

Daging buah alpukat mentega lebih tebal, kenyal, dan padat. Warnanya juga lebih halus dan lebih tidak berserat. Rasanya lebih manis dari alpukat biasa saat sudah matang. Tunggu 2-3 hari agar matang sempurna.',
            'price' => 18500,
            'image' => 'images/items/alpukat.png',
        ]);

        Item::create([
            'item_name' =>'Buncis Baby',
            'desc' => 'Tersedia dalam pilihan konvensional dan imperfect. Buncis imperfect memiliki bentuk yang tidak lurus dan berlubang. Beberapa batangnya juga ada yang patah. Namun rasa dan nutrisinya tetap sama.',
            'price' => 8700,
            'image' => 'images/items/baby-buncis.png',
        ]);

        Item::create([
            'item_name' =>'Lemon',
            'desc' => 'Lemon ini memiliki warna kuning yang cantik dan juga bersih, bulir lemon yang besar, dan kandungan air yang tinggi bikin Lemon jadi super segar!',
            'price' => 22900,
            'image' => 'images/items/lemon.png',
        ]);
        
        Item::create([
            'item_name' =>'Baby Pak Choy',
            'desc' => 'Baby Pak Choy termasuk jenis chinesse cabbage, tapi memiliki bentuk kecil dan daun yang lebar. Warna daun hijau terang dan batang berwarna putih, lebih lebar daunnya daripada batangnya. Baby Pak Choy bisa dimakan mentah sebagai lalap atau dapat direbus.
            Ditanam secara hidroponik. Sehingga menghasilkan kualitas produk yang segar dan lebih sehat.',
            'price' => 9700,
            'image' => 'images/items/baby-pakcoy.png',
        ]);

        Item::create([
            'item_name' =>'Selada',
            'desc' => 'Daun selada romaine agak mirip dengan sawi. Ukurannya lebih kecil dari selada romaine biasanya. Rasanya manis dan teksturnya renyah. Cocok untuk salad, tumis, capcay, tumis selada, cah selada, dan berbagai kreasi masakan lainnya.',
            'price' => 7500,
            'image' => 'images/items/selada.png',
        ]);

        Item::create([
            'item_name' =>'Kol Ungu',
            'desc' => 'Masak pake kol ungu sekarang gaperlu ribet motong sendiri karena ada IjoIjo Kol Ungu potong! Kol Ungu potong ini diiris dari kol ungu pilihan yang segar, sehat, renyah dan higienis pastinya untuk masak lebih praktis.',
            'price' => 15000,
            'image' => 'images/items/kol-ungu.png',
        ]);
    }
}
