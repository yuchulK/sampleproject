<?php

use Illuminate\Database\Seeder;

class UserDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_datas')->insert([
            'user_name' => 'sampleName',
            'user_email' => 'sampleEmail',
            'user_password' => 'samplePassword',
        ]);
    }
}
