<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Default Title')
    </title>
</head>
<body>

    <!-- Include the Header partial -->
    @include('frontend.layout.header')

    @yield('content')

    <!-- Include the Footer partial -->
    @include('frontend.layout.footer')

</body>
</html>