@extends('layouts.app')

@section('content')

<div class="container">
    <div class="authors">
        <div class="authors__form">
            <form action="{{ route('authors-search') }}" method="GET">
                <input type="text" name="keyword">
                <button type="submit">ابحث</button>
            </form>
        </div>
        <div class="authors__content">

            <h3>{{ $title }}</h3>

            <ul>
            @foreach ($authors as $author)
                <li>
                  <a href="{{ route('gallery-authors', $author) }}">{{ $author->name }} ({{ $author->books->count() }})</a>
                </li>
            @endforeach
            </ul>

        </div>
    </div>
</div>

@endsection