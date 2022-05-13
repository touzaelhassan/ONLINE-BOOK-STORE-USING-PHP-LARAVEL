@extends('admin.layouts.app')

@section('heading')
    عرض الكتب
@endsection

@section('content')
    <div><a href="">أضف كتابا جديدا</a></div>
    <hr>
    <section class="">
      <table class="table">
        <thead>
            <tr>
              <th>العنوان</th>
              <th>الرقم التسلسلي</th>
              <th>التصنيف</th>
              <th>المؤلفون</th>
              <th>الناشر</th>
              <th>السعر</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
              <td><a href="#">{{ $book->title }}</a></td>
              <td>{{ $book->isbn }}</td>
              <td>{{ $book->category->name }}</td>
              <td>
              @foreach ($book->authors as $author)
                  {{ $loop->first ? '' : 'و' }}
                  {{ $author->name }}
              @endforeach 
              </td>
              <td>{{ $book->publisher->name }}</td>
              <td>{{ $book->price }}</td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </section>
@endsection