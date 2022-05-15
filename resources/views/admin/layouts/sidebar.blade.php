<aside class="sidebar">
    <h5>أكاديمية حسوب</h5>
    <h5><a href="{{ route('admin-index') }}">لوحة التحكم</a></h5>
    <ul class="sidebar__list">
        <li class="sidebar__item">
            <a href="{{ route('books-index')}}" class="sidebar__link">الكتب</a>
        </li>
        <li class="sidebar__item">
          <a href="{{ route('categories.index') }}" class="sidebar__link">التصنيفات</a>
        </li>
        <li class="sidebar__item">
            <a href="#" class="sidebar__link">المؤلف</a>
        </li>
        <li class="sidebar__item">
            <a href="{{ route('publishers.index') }}" class="sidebar__link">الناشرون</a>
        </li>
        <li class="sidebar__item">
            <a href="#" class="sidebar__link">المستخدون</a>
        </li>
    </ul>
</aside>