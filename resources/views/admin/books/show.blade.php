@extends('admin.layouts.app')

@section('heading')
    عرض تفاصيل الكتاب
@endsection

@section('content')
    <div class="container">
    <div>{{$book->id}}</div>
    <div><img src="{{ asset('storage/' . $book->cover_image) }}"></div>
    <h4>{{$book->title}}</h4>
    <div>
        @if ($book->authors->isNotEmpty())
        <div>
            <b> تأليف  : </b>
            @foreach ($book->authors as $author)
            {{ $loop->first ? '' : 'و' }}
            <a href="#">{{ $author->name }}</a>
            @endforeach  
        </div>
        @endif
    </div>
    <p>{{$book->category->name}}</p>
    <p>{{$book->isbn}}</p>
    <p>{{$book->number_of_pages}}</p>
    <p>{{$book->number_of_copies}}</p>
    <p>{{$book->price}}</p>
    <p>{{$book->description}}</p>
</div>
@endsection