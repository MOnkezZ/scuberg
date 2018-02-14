<?php

use Illuminate\Database\Seeder;
use App\User;

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

    }
}
