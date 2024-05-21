<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

   protected $reviews = [
    [
        'id' => 1,
        'title' =>'Jojo Bijare Adventure',
        'user' =>'nehasmanjas@gmail.com',
        'rating' => '5',
        'date' => '17 april 2024',   
     ],
     [
        'id' => 2,
        'title' =>'Noragami',
        'user' =>'nehasmanjas@gmail.com',
        'rating' => '4',
        'date' => '19 april 2024',   
     ],
     [
        'id' => 3,
        'title' =>'Wind Breaker',
        'user' =>'nehasmanjas@gmail.com',
        'rating' => '5',
        'date' => '21 april 2024',   
     ],
     [
        'id' => 4,
        'title' =>'Wind Breaker',
        'user' =>'nehasmanjas@gmail.com',
        'rating' => '5',
        'date' => '25 april 2024',   
     ],
     [
        'id' => 5,
        'title' =>'Wind Breaker',
        'user' =>'nehasmanjas@gmail.com',
        'rating' => '4',
        'date' => '30 april 2024',   
     ],
   ];

   public function getAllReviews()
   {
    return $this->reviews;
   }
    
}
