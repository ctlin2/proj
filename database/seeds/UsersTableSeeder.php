<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => '任才俊',
            'email' => 'cyrusren@mail.ksu.edu.tw',
            'password' => Hash::make(Str::random(8)),
            'ksuid' => 'T093000474',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '王文彥',             
            'email' => 'wenyen.w2@gmail.com',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T095000041',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '黃慶祥',             
            'email' => 'hwang@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T093000067',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '周志學',             
            'email' => 'jsjhou@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T095000042',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '李冠榮',             
            'email' => 'leekr@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T093000453',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '曾龍',             
            'email' => 'btseng@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T094000175',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '鄭朝榮',             
            'email' => 'cjcheng@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T094000013',            
            'mobile' =>'' ,           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '張慶寶',             
            'email' => 'chingpao@ms28.hinet.net',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T097000002',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '鐘俊顏',             
            'email' => 'cychung@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T101000033',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '曾建勳',             
            'email' => 'jason.tseng.taiwan@gmail.com',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T097000001',            
            'mobile' => '',           
            'title' => '副教授',            
        ]);

        User::create([             
            'name' => '李宗儒',             
            'email' => 't097000085@g.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T097000085',            
            'mobile' => '',           
            'title' => '助理教授',            
        ]);

        User::create([             
            'name' => '林建良',             
            'email' => 'jenner@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T094000144',            
            'mobile' => '',           
            'title' => '助理教授',            
        ]);
        
        User::create([             
            'name' => '林錦財',             
            'email' => '4070E106@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T093000298',            
            'mobile' => '',           
            'title' => '助理教授',            
        ]);
        
        User::create([             
            'name' => '邱正毅',             
            'email' => 'averymale04@gmail.com',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'T094000177',            
            'mobile' => '',           
            'title' => '助理教授',            
        ]);

        User::create([             
             'name' => '劉乙萱',             
            'email' => 'yihsuan@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => 'A097000054',            
            'mobile' => '',           
            'title' => '系助理',            
        ]);

        User::create([             
            'name' => '謝進順',             
            'email' => 'sjsjsjs1@gmail.com',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => '',            
            'mobile' => '',           
            'title' => '助理教授',            
        ]);

        User::create([             
            'name' => '吳長益',             
            'email' => 'cywu531@gmail.com',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => '',            
            'mobile' => '',           
            'title' => '講師',            
        ]);

        User::create([             
            'name' => '陳柔伊',             
            'email' => 'hichloe@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => '',            
            'mobile' => '',           
            'title' => '講師',            
        ]);

        User::create([             
            'name' => '彭已庭',             
            'email' => 'iranalyzer@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => '',            
            'mobile' => '',           
            'title' => '講師',            
        ]);

        User::create([             
            'name' => '葉華軒',             
            'email' => 'ya985@yahoo.com.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => '',            
            'mobile' => '',           
            'title' => '講師',            
        ]);

        User::create([             
            'name' => '鄭郁翰',             
            'email' => 'yhcheng@mail.ksu.edu.tw',            
            'password' => Hash::make(Str::random(8)),             
            'ksuid' => '',            
            'mobile' => '',           
            'title' => '講師',            
        ]);
    }
}
