@extends('admin.layouts.app')

@section('heading')
    تعديل بيانات الناشر
@endsection

@section('content')
    <div>عدل بيانات الناشر</div>
    <hr>
    <form action="{{ route('publishers.update', $publisher)}}" method="POST">

        @method('patch')
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-end">إسم الناشر</label>
            <div class="col-md-6">
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $publisher->name }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-end">الوصف</label>
            <div class="col-md-6">
                <textarea type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address">
                  {{ $publisher->address }}
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
                  <button type="submit" class="btn btn-primary"> عدل</button>
              </div>
        </div>

    </form>
@endsection