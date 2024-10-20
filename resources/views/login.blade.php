<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <title>Stockify</title>
</head>

<body class="bg-gray-800">
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <div class="container border mx-auto w-80 min-h-full bg-gray-700 p-5 mt-28 rounded-lg">
        <h1 class="text-3xl text-white mb-10">Log In</h1>
        <form action="" method="POST">
            @csrf

            <input type="text" name="username" class="border border-red-500 rounded-full bg-gray-800 text-white w-full mb-3 p-2"
                placeholder=" Username">
            <input type="password" name="password" class="border border-red-500 rounded-full bg-gray-800 text-white w-full mb-10 p-2"
                placeholder=" Password">
            <button type="submit" class="border p-2 w-full rounded-full text-white bg-red-500">Log In</button>
        </form>
        <div class="flex mt-16 justify-center">
            <p class="text-white text-sm">Don't have an account ?</p>
            <a href="{{ route('sign_up_page') }}" class="text-red-500 ml-8 text-sm hover:underline">Sign Up</a>
        </div>
    </div>
</body>

</html>
