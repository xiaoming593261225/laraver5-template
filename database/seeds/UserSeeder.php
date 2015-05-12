<?php

class UserSeeder extends \Illuminate\Database\Seeder {

    public function run() {
        DB::table('users')->delete();

        \App\Models\User::create([
            'username' => 'vylcans',
            'name' => 'Edgars Vylcāns',
            'password' => Hash::make('anarchists')
        ]);
    }
}
