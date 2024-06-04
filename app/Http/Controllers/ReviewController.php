<?php

namespace App\Http\Controllers;

use App\Models\Review;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
{
    $reviews = Review::all();
    
        return view('reviews.index', compact('reviews'));
}
    public function create()
{
    $reviews = Review::all();
    return view('reviews.create', compact('reviews'));
}
    public function store(Request $request)
{
    $validatedData = $request->validate([
        
        'id' => 'required',
        'movie' => 'required',
        'user' => 'required',
        'rating' => 'required',
        'date' => 'required',
    ]);

    Review::create($validatedData);

    return redirect('/reviews')->with('success', 'review added successfully!');
}
public function destroy(Review $review)
{
        $review->delete();
        return redirect('/reviews')->with('success', 'Genre deleted successfully!');
    }
}
