@extends('layouts.app')

@section('content')

<div class="container">
    <div class="publishers">
        <div class="publishers__form">
            <form action="{{ route('publishers-search') }}" method="GET">
                <input type="text" name="keyword">
                <button type="submit">ابحث</button>
            </form>
        </div>
        <div class="publishers__content">

            <h3>{{ $title }}</h3>

            <ul>
            @foreach ($publishers as $publisher)
                <li>
                  <a href="{{ route('gallery-publishers', $publisher) }}">{{ $publisher->name }} ({{ $publisher->books->count() }})</a>
                </li>
            @endforeach
            </ul>

        </div>
    </div>
</div>

@endsection