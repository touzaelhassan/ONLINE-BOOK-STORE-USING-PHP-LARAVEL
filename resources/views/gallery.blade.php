@extends('layouts.app')

@section('content')

<div class="container">
    <div class="gallery"> 

        <div class="gallery__search">
            <form action="{{route('search')}}" method="GET">
                <input type="text" name="keyword">
                <button type="submit" class="btn btn-secondary">ابحث</button>
            </form>
        </div>

        <div class="gallery__content">
            <h2 class="gallery__title">{{ $title }}</h2>
            <div class="gallery__items">
                @foreach ($books as $book)

                <div class="gallery__item">
                    <a href="{{route('book-details', $book->id)}}">
                        <div class="book__image"><img src="{{ asset('storage/' . $book->cover_image) }}" class="w-100"></div>
                        <h5 class="book__title">{{ $book->title }}</h5>
                    </a>

                    @if ($book->category != NULL)
                    <a href="{{ route('gallery-categories', $book->category)}}" class="category__name">{{ $book->category->name }}</a>
                    @endif

                    @if ($book->authors->isNotEmpty())
                        <div class="">
                            <b> تأليف  : </b>
                            @foreach ($book->authors as $author)
                            {{ $loop->first ? '' : 'و' }}
                            <a href="{{ route('gallery-authors', $author) }}">{{ $author->name }}</a>
                            @endforeach  
                        </div>
                    @endif
                </div>

                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection


 {{-- <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">معرض الكتب</div>


                <div>
                  <form action="{{route('search')}}" method="GET">
                    <input type="text" name="keyword">
                    <button type="submit" class="btn btn-secondary">ابحث</button>
                  </form>
                </div>

                <div class="card-body">
                   <h3>{{ $title }}</h3>
                   <div>
                     @foreach ($books as $book)
                      <p>{{ $book->title }}</p>
                      <img src="{{ asset('storage/' . $book->cover_image) }}" class="w-25"> 
                      <p>{{ $book->description }}</p>
                     @endforeach
                   </div>
                   <div class="row">
                        @if ($books->count())
                            @foreach ($books as $book)
                                @if ($book->number_of_books > 0)
                                    <div>
                                        <div>

                                          <img src="{{ asset('storage/' . $book->cover_image) }}">

                                          <p>{{ $book->title }}</p>

                                          @if ($book->category != NULL)
                                          <a href="#">{{ $book->category->name }}</a>
                                          @endif
                                          
                                          @if ($books->authors->isNotEmpty())
                                              <b> تأليف  :</b>
                                              @foreach ($book->authors as $author)
                                                  {{ $loop->first ? '' : 'و' }}
                                                  <a href="#">{{ $author->name }}</a>
                                              @endforeach   
                                          @endif
                                          <p>السعر : {{$book->price}} $</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <h3>لا توجد نتائج</h3>
                        @endif
                   </div>
                </div>
            </div>
        </div>
    </div> --}}