@extends('admin.layouts.app')

@section('heading')
    لوحة التحكم
@endsection

@section('content')
    <section class="dashboard__stats">
        <div class="stat__item">
            <h5 class="stat__name">عدد الكتب</h5>
            <p class="stat__number">{{ $number_of_books }}</p>
        </div>
        <div class="stat__item">
            <h5 class="stat__name">عدد التصنيفات</h5>
            <p class="stat__number">{{ $number_of_categories }}</p>
        </div>
        <div class="stat__item">
            <h5 class="stat__name">عدد المؤلفين</h5>
            <p class="stat__number">{{ $number_of_authors }}</p>
        </div>
        <div class="stat__item">
            <h5 class="stat__name">عدد الناشرين</h5>
            <p class="stat__number">{{ $number_of_publishers }}</p>
        </div>
    </section>
@endsection