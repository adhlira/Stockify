<nav class="bg-gray-600 border">
    <div class="flex">
        <img src="{{ asset('logo.png') }}" alt="" class="w-16 h-16 content-center">
        <h1 class="md:text-3xl text-xl text-white font-bold content-center">Stockify</h1>
        <button class="ml-auto p-2" onclick="toggleDropdown()">
            <i class="fa fa-user text-white"></i>
        </button>
        <!-- Dropdown Menu -->
        <div id="dropdownMenu"
            class="absolute right-6 mt-10 w-40 bg-white border border-gray-200 rounded-md shadow-lg hidden">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Log Out</a>
        </div>
    </div>
</nav>
