<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <title>Sign Up</title>
</head>

<body class="bg-gray-800">
    <div class="container border mx-auto w-80 min-h-full bg-gray-700 p-5 mt-16 rounded-lg">
        <h1 class="text-3xl text-white mb-10">Sign Up</h1>
        <form action="{{ route('action-sign_up') }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group mb-3">
                <input type="text" name="name"
                    class="border border-red-500 rounded-full bg-gray-800 text-white w-full p-2" placeholder=" Name">
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input type="text" name="username"
                    class="border border-red-500 rounded-full bg-gray-800 text-white w-full p-2"
                    placeholder=" Username">
                @error('username')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input type="email" name="email"
                    class="border border-red-500 rounded-full bg-gray-800 text-white w-full p-2" placeholder=" Email">
                @error('email')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password"
                    class="border border-red-500 rounded-full bg-gray-800 text-white w-full p-2"
                    placeholder=" Password">
                @error('password')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="border p-2 w-full rounded-full text-white bg-red-500">Sign Up</button>
        </form>
        <div class="flex mt-16 justify-center">
            <p class="text-white text-sm">Already have an account ?</p>
            <a href="{{ route('login_page') }}" class="text-red-500 ml-8 text-sm hover:underline">Log In</a>
        </div>
    </div>
</body>

</html>
