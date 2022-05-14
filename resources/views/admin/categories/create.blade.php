@extends('admin.layouts.app')

@section('heading')
    إضافة تصنيف جديد
@endsection

@section('content')
    <div>أضف تصنيفا جديدا</div>
    <hr>
    <form action="{{ route('categories.index') }}" method="POST">

        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-end">إسم التصنيف</label>
            <div class="col-md-6">
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-end">الوصف</label>
            <div class="col-md-6">
                <textarea type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description">
                    {{ old('description') }}
                </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
              <div class="col-md-1">
                  <button type="submit" class="btn btn-primary">أضف</button>
              </div>
        </div>

    </form>
@endsection