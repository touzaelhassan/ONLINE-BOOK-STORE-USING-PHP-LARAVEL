@extends('admin.layouts.app')

@section('heading')
    عرض الناشرين
@endsection

@section('content')
    <div><a href="{{ route('publishers.create') }}" class="btn btn-success text-white">أضف ناشرا جديدا</a></div>
    <section>
      <table class="table table-bordered">
        <thead>
            <tr>
              <th>الإسم</th>
              <th>العنوان</th>
              <th>خيارات</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $publisher)
            <tr>
                <td>{{ $publisher->name }}</td>
                <td>{{ $publisher->address }}</td>
                <td>
                    <a href="{{ route('publishers.edit', $publisher) }}"  class="btn btn-info btn-sm">تعديل</a>
                    <form action="{{ route('publishers.destroy', $publisher) }}" method="POST" class="d-inline-block">
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