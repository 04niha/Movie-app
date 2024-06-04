<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' =>'1',
            'user' =>'nehasmanjas@gmail.com',
            'rating' => '5',
            'date' => '17 april 2024',
        ]);
    
        Review::create([
            'id' => 2,
            'movie_id' =>'2',
            'user' =>'nehasmanjas@gmail.com',
            'rating' => '4',
            'date' => '19 april 2024',  
        ]);
    
        Review::create([
            'id' => 3,
            'movie_id' =>'3',
            'user' =>'nehasmanjas@gmail.com',
            'rating' => '5',
        ]);
        
        Review::create([     
            'id' => 4,
            'movie_id' =>'1',
            'user' =>'nehasmanjas@gmail.com',
            'rating' => '5',
            'date' => '25 april 2024',   
        ]);
    
        Review::create([
            'id' => 5,
            'movie_id' =>'2',
            'user' =>'nehasmanjas@gmail.com',
            'rating' => '4',
            'date' => '30 april 2024', 
        ]);
        
            
       
    }
}
