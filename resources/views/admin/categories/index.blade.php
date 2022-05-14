@extends('admin.layouts.app')

@section('heading')
    عرض التصنيفات
@endsection

@section('content')
    <div><a href="{{ route('categories.create') }}" class="btn btn-success text-white">أضف صنفا جديدا</a></div>
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
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}"  class="btn btn-info btn-sm">تعديل</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline-block">
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