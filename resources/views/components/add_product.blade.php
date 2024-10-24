<x-home>
    <div class="flex mt-5">
        <h2 class="font-serif font-semibold text-2xl ml-3">Add Product</h2>
        <a href="{{ route('product_page') }}" class="ml-auto mr-3">
            <i class="fa fa-arrow-left border p-2 bg-green-500 rounded-md hover:bg-green-400"></i>
        </a>
    </div>
    <div>
        <form action="{{ route('action_add_product') }}" method="POST" class="w-full mt-10 rounded-md p-5">
            @csrf
            @method('POST')

            <div class="flex gap-4">
                <div class="flex-1">
                    <div class="form-group font-serif">
                        <label for="product_name">Product Name</label>
                        <br>
                        <input type="text" name="product_name" class="border p-2 rounded-md mt-2 w-full"
                            value="{{ old('product_name') }}">
                        @error('product_name')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group font-serif mt-5">
                        <label for="category_id">Category</label>
                        <br>
                        <select name="category_id" id="" class="border w-full rounded-md p-2 text-center mt-2">
                            <option value="" class="rounded-md p-2 text-center" disabled selected>- Choose
                                Category -</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group font-serif mt-5">
                        <label for="purchase_price">Purchase price (Rp.)</label>
                        <br>
                        <input type="number" name="purchase_price" class="border p-2 rounded-md mt-2 w-full"
                            value="{{ old('purchase_price') }}">
                        @error('purchase_price')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex-1">
                    <div class="form-group font-serif">
                        <label for="selling_price">Selling Price (Rp.)</label>
                        <br>
                        <input type="number" name="selling_price" class="border p-2 rounded-md mt-2 w-full"
                            value="{{ old('selling_price') }}">
                        @error('selling_price')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group font-serif mt-5">
                        <label for="stock">Stock</label>
                        <br>
                        <input type="number" name="stock" class="border p-2 rounded-md mt-2 w-full"
                            value="{{ old('stock') }}">
                        @error('stock')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit"
                class="border p-2 rounded-md bg-green-500 mt-10 w-full font-serif font-semibold hover:bg-green-400">Save</button>
        </form>
    </div>
</x-home>
