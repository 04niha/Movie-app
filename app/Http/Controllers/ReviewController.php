<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
{
    $reviews = new Review;
    $reviews = $reviews->getAllReviews();

    return view('review', ['reviews' => $reviews]);
}
}
