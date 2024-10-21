<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <script>
        // Function to toggle dropdown visibility
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        }
    </script>
    <title>Stockify</title>
</head>

<body>
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

    <div class="container min-w-full">
        <x-navbar></x-navbar>
        <main>
            <div class="flex min-h-screen">
                <div class="w-56 py-5 bg-gray-600">
                    <x-sidebar></x-sidebar>
                </div>
                <div class="flex-1 border">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>
