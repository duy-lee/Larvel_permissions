<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
	DB::table('employees')->insert([
            [
                'name' => 'Lê Văn Duy',
                'gender' => 1,
                'date_of_birth' => '1998-01-21',
                'address' => 'quang nam - viet nam',
                'email' => 'vanduycr7@gmail.com',
                'phone' => '0919918112',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nguyễn Hà Vy',
                'gender' => 2,
                'date_of_birth' => '2000-09-11',
                'address' => 'quang nam - viet nam',
                'email' => 'vyhahas@gmail.com',
                'phone' => '0919993982',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lee Jii',
                'gender' => 1,
                'date_of_birth' => '1998-11-22',
                'address' => 'da nang - viet nam',
                'email' => 'leejiiixx@gmail.com',
                'phone' => '0182918717',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);

    DB::table('roles')->insert([
        [
            'name' => 'admin',
            'description' => 'Manager page',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name' => 'user',
            'description' => 'User page',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]
    ]);
    }
}
