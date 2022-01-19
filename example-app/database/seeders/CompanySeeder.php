<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            [
                'name' => "nextStage",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage2",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage3",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage4",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage5",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage6",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage7",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage8",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage9",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage10",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage8",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage9",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ],
            [
                'name' => "nextStage10",
                'logo' => 'nextstage.png',
                'website' => 'www.nextstage.com',
                'email' => Str::random(7).'@gmail.com',
                
            ]
            
            
       
        ]);
    }
}
