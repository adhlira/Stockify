<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>404</title>
</head>

<body>
    <div class="text-center border min-h-screen content-center">
        <h1 class="text-5xl font-bold mb-3">404</h1>
        <p class="mb-3">Page Not Found</p>
        <a href="{{ route('product_page') }}" class="hover:underline">Go back to products</a>
    </div>
</body>

</html>
