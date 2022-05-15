@extends('admin.layouts.app')

@section('heading')
    عرض المستخدمين
@endsection

@section('content')
    <section>
      <table class="table table-bordered">
        <thead>
            <tr>
              <th>الإسم</th>
              <th>البريد الإلكتروني</th>
              <th>نوع المستخدم</th>
              <th>خيارات</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->isSuperAdmin() ? 'مدير عام' : ($user->isAdmin() ? 'مستخدم' : 'مدير') }}</td>
                <td class="d-flex">
                    <form action="{{ route('users.update', $user) }}" method="POST" class="form-inline d-flex">
                        @method('patch')
                        @csrf
                        <select name="administration_level" class="form-control">
                            <option selected disabled>اختر نوعا</option>
                            <option value="0">مستخدم</option>
                            <option value="1">مدير</option>
                            <option value="2">مدير عام</option>
                        </select>
                        <button type="submit" class="btn btn-success">تعديل</button>
                    </form>

                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline-block">
                        @method('delete')
                        @csrf
                        @if (auth()->user() != $user)
                            <button type="submit" class="btn btn-danger">حدف</button>
                        @else
                            <button type="submit" class="btn btn-danger disabled">حدف</button>
                        @endif
                    </form>
                </td>
            </tr> 
            @endforeach
        </tbody>
      </table>
    </section>
@endsection