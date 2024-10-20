<x-home>
    <div class="flex mt-5">
        <h2 class="ml-3 font-bold font-serif text-2xl">Data Categories</h2>
        <a href="{{ route('add-category') }}" class="ml-auto mr-3 border rounded-md content-center p-2 bg-green-500">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="w-full overflow-x-auto p-2 mt-8">
        <table class="border min-w-full table-auto">
            <thead>
                <tr>
                    <th class="border p-2">No</th>
                    <th class="border">Name</th>
                    <th class="border">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($categories as $category)
                    <tr class="text-center">
                        <td class="border p-2">{{ $no++ }}</td>
                        <td class="border p-2">{{ $category->name }}</td>
                        <td class=" border p-2">
                            <button class="border p-2 rounded-md bg-yellow-500">
                                <i class="fa fa-floppy-disk"></i>
                            </button>
                            <button class="border p-2 rounded-md bg-red-500">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-home>
