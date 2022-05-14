@extends('admin.layouts.app')

@section('heading')
    تعديل بيانات الكتاب
@endsection

@section('content')
    <div>عدل بيانات الكتاب</div>
    <hr>
    <form action="{{ route('books-show', $book)}}" method="POST" enctype="multipart/form-data">

        @method('patch')
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-end">عنوان الكتاب</label>
            <div class="col-md-6">
                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $book->title }}">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="isbn" class="col-md-4 col-form-label text-md-end">الرقم التسلسلي</label>
            <div class="col-md-6">
                <input type="text" id="isbn" class="form-control @error('isbn') is-invalid @enderror" name="isbn" value="{{ $book->isbn }}">
                @error('isbn')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="cover-image" class="col-md-4 col-form-label text-md-end">صورة الغلاف</label>
            <div class="col-md-6">
                <input type="file" accept="image/*" id="cover-image" class="form-control @error('cover-image') is-invalid @enderror" name="cover-image" value="{{ old('cover-image') }}">
                @error('cover-image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-md-4 col-form-label text-md-end">التصنيف</label>
            <div class="col-md-6">
                <select id="category" class="form-control" name="category">
                    <option disabled {{ $book->category == null ? "selected" : ""}} >اختر تصنيفا</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $book->category == $category ? "selected" : ""}}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="authors" class="col-md-4 col-form-label text-md-end">المؤلفون</label>
            <div class="col-md-6">
                <select multiple id="authors" class="form-control" name="authors[]">
                    <option disabled {{ $book->authors()->count() == 0 ? 'selected' : '' }} >اختر المؤلفين</option>
                    @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->authors->contains($author) ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
                @error('authors')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="publisher" class="col-md-4 col-form-label text-md-end">المؤلفون</label>
            <div class="col-md-6">
                <select id="publisher" class="form-control" name="publisher">
                    <option disabled {{ $book->publisher == null ? 'selected' : '' }}>اختر ناشرا</option>
                    @foreach ($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ $book->publisher == $publisher ? 'selected' : '' }}>{{ $publisher->name }}</option>
                    @endforeach
                </select>
                @error('publisher')
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
                  {{ $book->description }}
                </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="publish_year" class="col-md-4 col-form-label text-md-end">سنة النشر</label>
            <div class="col-md-6">
                <input type="text" id="publish_year" class="form-control @error('publish_year') is-invalid @enderror" name="publish_year" value="{{ $book->publish_year }}">
                @error('publish_year')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="number_of_pages" class="col-md-4 col-form-label text-md-end">عدد الصفحات</label>
            <div class="col-md-6">
                <input type="text" id="number_of_pages" class="form-control @error('number_of_pages') is-invalid @enderror" name="number_of_pages" value="{{ $book->number_of_pages }}">
                @error('number_of_pages')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="number_of_copies" class="col-md-4 col-form-label text-md-end">عدد النسخ</label>
            <div class="col-md-6">
                <input type="text" id="number_of_copies" class="form-control @error('number_of_copies') is-invalid @enderror" name="number_of_copies" value="{{ $book->number_of_copies }}">
                @error('number_of_copies')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-end">السعر</label>
            <div class="col-md-6">
                <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $book->price }}">
                @error('price')
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