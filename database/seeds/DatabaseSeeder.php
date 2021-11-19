<?php

use Carbon\Carbon;
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
        DB::table('users')->insert([
            'user_type'     => 'admin',
            'name'    => 'admin',
            'email'    => 'admin@example.com',
            'email_verified_at'    => date('Y-m-d H:i:s'),
            'password'    => Hash::make('123456'),
        ]);
        
        $path = public_path('sql/sql-seed.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);

    }
}
