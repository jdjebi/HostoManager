<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
 

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        User::create([
            'username' => 'admin',
            'nom' => 'admin-name',
            'prenom' => 'admin-surname',
            'role' => 'admin',
            'password' => Hash::make('admin')
        ]);
    }
}
