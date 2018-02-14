<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;
use App\Category;

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
        $user           = new User();
		$user->name     = 'Admin';
		$user->email    = 'admin@local.com';
		$user->password = Hash::make( '1234' );
		$user->is_admin = true;
        $user->save();
        
        $faker = Faker\Factory::create();

        for ( $i = 1; $i <= 7; $i ++ ) {

            $prod = new Product();
            $prod->prodname = 'Product'.$i;
            $prod->description = str_random(20);
            $prod->price = $faker->randomDigit;
            $prod->cateid = rand(1, 3);
            $prod->picture = $faker->imageUrl($width = 200, $height = 200);
            $prod->save();
    
        }

        for ( $i = 1; $i <= 3; $i ++ ) {
    
            $cate = new Category();
            $cate->catename = 'Cate'.$i;
            $cate->save();
    
        }

    }
}
