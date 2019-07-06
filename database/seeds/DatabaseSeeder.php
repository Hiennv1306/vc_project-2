<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();
    	$faker = Faker\Factory::create('vi_VN');
    	for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([ //,
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'phone' => $faker->randomNumber($nbDigits = 8),
                'address' => $faker->address,
                'gender' => $faker->randomElement(['nam', 'nữ']),
                'province' => $faker->city,
                'linhvuc' => $faker->randomElement(['Kĩ sư', 'Giáo viên', 'Nhà nước' ]),
                'password' => bcrypt('secret'),
            ]);
        }
        
    }
}
