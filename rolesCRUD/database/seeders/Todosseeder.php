<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Todosseeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $useradmin=User::create([
            'name'=> 'admin paula',
            'email'=> 'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'fullacces'=>'yes',
            'codigo'=>'adm1',
                    ]);
            $user1=User::create([
                'name'=> 'ausuario marcos',
                'email'=> 'marcos@gmail.com',
                'password'=>Hash::make('marcos'),
                'fullacces'=>'no',
                'codigo'=>'casa1',
            ]);
            $user2=User::create([
                'name'=> 'hacker',
                'email'=> 'hacker@gmail.com',
                'password'=>Hash::make('hacker'),
                'fullacces'=>'nop',
                'codigo'=>'casa2',
            ]);
            
        
    }
}
