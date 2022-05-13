<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" 
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>لوحة الإدارة |  مكتبة حسوب</title>
</head>
<body dir="rtl">
    <div class="dashboard-container">
        @include('admin.layouts.sidebar')
        <div class="dashboard">
            @include('admin.layouts.header')
            <section class="dashboard__content">
                @yield('content')
            </section>
            @include('admin.layouts.footer')
        </div>
    </div> 
</body>
</html>