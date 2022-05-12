@extends('layouts.app')

@section('content')

<div class="container">
    <div class="categories">
        <div class="categories__form">
            <form action="{{ route('categories-search') }}" method="GET">
                <input type="text" name="keyword">
                <button type="submit">ابحث</button>
            </form>
        </div>
        <div class="categories__content">

            <h3>{{ $title }}</h3>

            <ul>
            @foreach ($categories as $category)
                <li>
                  <a href="{{ route('gallery-categories', $category) }}">{{ $category->name }} ({{ $category->books->count() }})</a>
                </li>
            @endforeach
            </ul>

        </div>
    </div>
</div>

@endsection