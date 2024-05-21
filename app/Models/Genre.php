<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $genres = [
        [
            'id' => 1,
            'name' =>'Jojo Bijare Adventure',
            'description' => 'JoJo s Bizarre Adventure adalah anime petualangan yang tidak selalu berlatar di satu tempat. Anime juga selalu memiliki cara yang unik dalam memperkenalkan karakter baru atau kekuatan baru. Hal yang membuat anime ini semakin unik adalah kebanyakan protagonis dalam seri ini selalu diperkenalkan sebagai antagonis. Namun, mereka berubah setelah mereka berhasil dikalahkan oleh para keturunan Joestar.',   
         ],
         [
            'id' => 2,
            'name' =>'Noragami',         
            'description' => 'Serial anime bergenre supranatural ini menceritakan seorang siswi SMP bernama Hiyori Iki. Serial anime yang diadaptasi dari manga Jepang karya Adachitoka ini sudah tayang di Jepang sejak 2014..',   
         ],
         [
            'id' => 3,
            'name' =>'Wind Breaker',
            'description' => 'Wind Breaker, sebuah judul anime terbaru bergenre aksi yang bertema sekolah ini diadaptasi dari manga dengan judul serupa ciptaan Satoru Nii. Pada Wind Breaker ini berfokus pada Haruka Sakura yang tak ingin berurusan dengan orang lemah, ia hanya tertarik pada orang yang kuat. Sakura kemudian masuk ke SMA Furin yang sudah dikenal sebagai sekolah yang sering tawuran.',   
         ],
       ];
    
       public function getAllGenres()
       {
        return $this->genres;
       }
}
