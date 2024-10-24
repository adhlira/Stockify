<x-home>
    <div class="flex mt-5">
        <h2 class="font-serif font-semibold text-2xl ml-3">Edit Category</h2>
        <a href="{{ route('categories') }}" class="ml-auto mr-3">
            <i class="fa fa-arrow-left border p-2 bg-green-500 hover:bg-green-400 rounded-md"></i>
        </a>
    </div>
    <div>
        <form action="{{ route('action-edit-category', $category->id) }}" method="POST" class="w-1/2 ml-3 mt-10 rounded-md p-5">
            @csrf
            @method('PUT')

            <div class="form-group font-serif">
                <label for="name">Category Name</label>
                <br>
                <input type="text" name="category_name" class="border p-2 rounded-md mt-2 w-full" value="{{ old('category_name', $category->name) }}">
                @error('category_name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="border p-2 rounded-md bg-green-500 hover:bg-green-400 font-serif font-semibold mt-5 w-full">Save</button>
        </form>
    </div>
</x-home>
