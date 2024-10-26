<x-home>
    <div class="flex mt-3 justify-between">
        <h2 class="ml-2 font-bold font-serif content-center text-2xl">Data Products In Category {{ $category->name }}</h2>
        <a href="{{ route('product_page') }}">
            <button class="border p-2 rounded-md mr-2 bg-green-500 hover:bg-green-400">
                <i class="fa fa-arrow-left"></i>
            </button>
        </a>
    </div>
    <div class="w-full overflow-x-auto p-2 mt-8">
        @if ($products->isEmpty())
            <p class="font-serif font fw-semibold text-center text-2xl mb-3">Product Not Found</p>
        @endif
        <table class="border min-w-full table-auto">
            <thead>
                <tr>
                    <th class="border p-2">No</th>
                    <th class="border">Name</th>
                    <th class="border">Purchase Price</th>
                    <th class="border">Selling Price</th>
                    <th class="border">Stock</th>
                    <th class="border">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = ($products->currentPage() - 1) * $products->perPage() + 1;
                @endphp
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td class="border p-2">{{ $no++ }}</td>
                        <td class="border p-2">{{ $product->name }}</td>
                        <td class="border p-2">Rp. {{ number_format($product->purchase_price, 0) }}</td>
                        <td class="border p-2">Rp. {{ number_format($product->selling_price, 0) }}</td>
                        <td class="border p-2">{{ $product->stock }}</td>
                        <td class=" border p-2">
                            <div class="flex justify-center gap-3">
                                <a href="{{ route('edit_product_page', $product->slug) }}">
                                    <button class="border p-2 rounded-md bg-yellow-500 hover:bg-yellow-400">
                                        <i class="fa fa-pen-to-square"></i>
                                    </button>
                                </a>
                                <form action="{{ route('action-delete-product', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="border p-2 rounded-md bg-red-500 hover:bg-red-400"
                                        onclick="return confirm('Delete this data ?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="mt-5">
            {{ $products->appends([
                    'category_id' => request()->input('category_id'),
                    '_token' => request()->input('_token'),
                    '_method' => request()->input('_method'),
                ])->links() }}
        </div>
    </div>
</x-home>
