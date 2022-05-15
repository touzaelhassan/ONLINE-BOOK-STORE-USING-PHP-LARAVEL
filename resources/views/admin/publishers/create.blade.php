@extends('admin.layouts.app')

@section('heading')
    إضافة ناشر جديد
@endsection

@section('content')
    <div>أضف ناشر جديد</div>
    <hr>
    <form action="{{ route('publishers.index') }}" method="POST">

        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-end">إسم الناشر</label>
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
            <label for="address" class="col-md-4 col-form-label text-md-end">العنوان</label>
            <div class="col-md-6">
                <textarea type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address">
                    {{ old('address') }}
                </textarea>
                @error('address')
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