<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('roles')->insert([
        	['name' => 'admin'],
        	['name' => 'employee'],
        	['name' => 'user']
        ]);

        factory(App\User::class, 5)->create();
        
        DB::table('products')->insert([
        	[
        		'name' => 'Ôm Mỏ Neo Nằm Mộng Những Chân Trời (Tái Bản 2018)',
        		'description' => 'Tập thơ',
        		'price' => 70,
        		'image' => '298996_p81405mbiatruoc.jpg',
        		'quantily' => 20,
        	],
        	[
        		'name' => 'Chưa Đủ Cô Đơn Để Yêu Chăng? - Phát Hành Dự Kiến 18/03/2019',
        		'description' => 'Nỗi đau của kẻ si tình dường như không được nhắc đến nhưng mỗi bài thơ vẫn mang đến cảm nhận bi thương qua ngôn từ nhẹ nhàng, cảm nhận tinh tế. Để từ đó, những ai đã đi qua những cung bậc cảm xúc của yêu thương có thể dễ dàng đồng cảm. Những bài thơ như tiếng thở dài, được giấu đi trong đêm, chỉ lòng riêng biết.',
        		'price' => 70,
        		'image' => '329199_p86393mbiatruoc.jpg',
        		'quantily' => 15,
        	],
        	[
        		'name' => 'Hay Chúng Mình Đừng Hứa Hẹn Gì Nhau! - Phát Hành Dự Kiến 20/03/2019',
        		'description' => 'Ngày xửa ngày xưa, một anh hề đi lạc vô ngôi làng nọ. Người ta kéo nhau ra coi, cũng đông đông. Rồi người ta cười, người ta vỗ tay. Tay hề như con lân say tiếng pháo, cứ đớp hoài những đợt vỗ tay hồi hồi điệp điệp.… À mà … Đó là chuyện ngày xưa. Thằng hề hay con lân, thời nào cũng vậy. Nhưng hôm nay, bạn không cần phải vỗ tay đâu. Một là vì sẽ chẳng có ai nghe hết. Hai là vì khi đọc những dòng này, tức là trên tay các bạn đang cầm cuốn Hay chúng mình đừng hứa hẹn gì nhau. Cuốn sách này, not hay',
        		'price' => 80,
        		'image' => '329886_p86533mhaychungminhdunghuahenginhau.jpg',
        		'quantily' => 10,
        	]
        ]);

        DB::table('categories')->insert([
        	['name' => 'Ngôn tình'],
        	['name' => 'Tiểu thuyết'],
        	['name' => 'Manga'],
        	['name' => 'Ngụ ngôn'],
        ]);

        DB::table('product_categories')->insert([
        	[
        		'product_id' => 1,
        		'category_id' => 2,
        	],
        	[
        		'product_id' => 2,
        		'category_id' => 2,
        	],
        	[
        		'product_id' => 3,
        		'category_id' => 2,
        	],
        ]);

        DB::table('orders')->insert([
        	[
        		'user_id' => 1,
        		'address' => 'Đây là địa chỉ',
        	],
        ]);

        DB::table('product_orders')->insert([
        	[
        		'order_id' => 1,
        		'product_id' => 1,
        		'quantily' => 1,
        	],/*
        	[
        		'order_id' => App\Order::inRandomOrder()->get()->id,
        		'product_id' => App\Product::inRandomOrder()->id,
        		'quantily' => 1,
        	],*/
        ]);

        foreach (App\Product::All() as $row) {
        	DB::table('carts')->insert([
        		['user_id' => $row->id],
        	]);
        }

        DB::table('product_carts')->insert([
        	[
        		'cart_id' => 1,
        		'product_id' => 1,
        		'quantily' => 1,
        	],
        ]);
    }
}
