<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eng/hind</title>

    <!-- روابط ملفات CSS الخارجية -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
    
    <!-- رابط ملف CSS المحلي -->

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="protfolio">
    
    <!-- تضمين الهيدر -->
    @include('partials.header')
    
    <!-- محتوى الصفحة الرئيسي -->
    <div class="protfolio_warpper">
        @yield('content')
    </div>

    <!-- تضمين الفوتر -->
    @include('partials.footer')

    <!-- روابط جافاسكريبت -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/toggle.js') }}"></script>
    <script src="{{ asset('js/mode.js') }}"></script>
    <script src="{{ asset('js/toggleMenu.js') }}"></script>
</body>
</html>
