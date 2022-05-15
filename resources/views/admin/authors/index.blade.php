@extends('admin.layouts.app')

@section('heading')
    عرض المؤلفين
@endsection

@section('content')
    <div><a href="{{ route('authors.create') }}" class="btn btn-success text-white">أضف مؤلفا جديدا</a></div>
    <section>
      <table class="table table-bordered">
        <thead>
            <tr>
              <th>الإسم</th>
              <th>الوصف</th>
              <th>خيارات</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->description }}</td>
                <td>
                    <a href="{{ route('authors.edit', $author) }}"  class="btn btn-info btn-sm">تعديل</a>
                    <form action="{{ route('authors.destroy', $author) }}" method="POST" class="d-inline-block">
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