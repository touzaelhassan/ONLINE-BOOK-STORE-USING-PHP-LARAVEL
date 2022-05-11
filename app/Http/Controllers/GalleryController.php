<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $books = Book::Paginate(12);
        $title = 'عرض الكتب حسب تاريخ الإضافة';
        return view('gallery', compact('title', 'books'));
    }

    public function search(Request $request)
    {
        $books = Book::where('title', 'like', "%{$request->keyword}%")->paginate(12);
        $title = 'عرض نتائج البحث عن :' . $request->keyword;
        return view('gallery', compact('title', 'books'));
    }
}
