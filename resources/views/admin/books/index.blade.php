@extends('admin.layouts.app')

@section('heading')
    عرض الكتب
@endsection

@section('content')
    <div><a href="{{ route('books-create') }}" class="btn btn-success text-white">أضف كتابا جديدا</a></div>
    <section>
      <table class="table table-bordered">
        <thead>
            <tr>
              <th>العنوان</th>
              <th>الرقم التسلسلي</th>
              <th>التصنيف</th>
              <th>المؤلفون</th>
              <th>الناشر</th>
              <th>السعر</th>
              <th>خيارات</th>  
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
              <td><a href="{{ route('books-show', $book) }}">{{ $book->title }}</a></td>
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
              <td>
                <a href="{{ route('books-edit', $book) }}" class="btn btn-success text-white btn-sm">تعديل</a>
                <form action="{{ route('books-destroy', $book) }}" method="POST" class="d-inline-block">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger btn-sm">حدف</button>
                </form>
              </td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </section>
@endsection