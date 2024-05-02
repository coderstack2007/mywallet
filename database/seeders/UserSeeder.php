<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'admin',
            'email' => 'a@',
            'balance' => '0',
            'card' => '0000 0000 0000 0000',
            'password' => password_hash('777', PASSWORD_DEFAULT),
        ]);


        // $this->call([  
        //     UserSeeder::class,
        // ]);  
    }
}
