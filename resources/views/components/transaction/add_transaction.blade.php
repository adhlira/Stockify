<x-home>
    <div class="flex mt-3 justify-between">
        <h2 class="ml-2 font-bold font-serif content-center text-2xl">Add Transaction</h2>
        <a href="{{ route('transactions') }}"
            class="border mr-2 rounded-md content-center p-2 bg-green-500 hover:bg-green-400">
            <i class="fa fa-arrow-left"></i>
        </a>
    </div>
    <form action="" method="POST" class="mt-5 p-5">
        @csrf

        <div class="flex gap-4">
            <div class="flex-none w-1/3">
                <div class="form-group font-serif">
                    <label for="product_name">Product</label>
                    <br>
                    <select name="productSelect" id="productSelect" class="mt-2 border rounded-md w-full p-2"
                        onchange="showPrice()">
                        <option value="" disabled selected>- Select Product -</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" data-price="{{ $product->selling_price }}">
                                {{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('productSelect')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group font-serif mt-5">
                    <label for="price">Price</label>
                    <br>
                    <input type="number" name="productPrice" id="productPrice" class="border rounded-md w-full p-2"
                        readonly>
                    @error('productPrice')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group font-serif mt-5">
                    <label for="quantity">Quantity</label>
                    <br>
                    <input type="number" name="quantity" class="border rounded-md w-full p-2">
                    @error('quantity')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group font-serif mt-5">
                    <label for="total">Total</label>
                    <br>
                    <input type="number" name="total" class="border rounded-md w-full p-2" readonly>
                    @error('total')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <button class="mt-5 w-full border rounded-md p-2 font-serif">Add to Cart</button>
            </div>
            <div class="flex-1 border"></div>
        </div>
    </form>
    <script>
        function showPrice() {
            const productSelect = document.getElementById('productSelect');
            const productPrice = document.getElementById('productPrice');

            // Ambil harga produk dari atribut data-price pada option yang dipilih
            const selectedOption = productSelect.options[productSelect.selectedIndex];
            const price = selectedOption.getAttribute('data-price');

            // Jika harga ada, tampilkan dalam input harga; jika tidak, kosongkan input
            productPrice.value = price ? `Rp ${parseFloat(price).toLocaleString('id-ID')}` : '';
        }
    </script>
</x-home>
