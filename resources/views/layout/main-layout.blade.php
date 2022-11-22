<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTE NEWS</title>
    <link rel="icon" href="assets/image/icon/logo.jpg">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <header class="header">
        @include('.static-layout.header')
    </header>
    <div class="content-container">
       @yield('content')
    </div>
    <footer class="footer">
        @include('.static-layout.footer')
    </footer>
    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/live-search.js"></script>
    <script src="assets/js/scroll.js"></script>
</body>
</html>