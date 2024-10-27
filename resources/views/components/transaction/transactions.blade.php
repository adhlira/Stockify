<x-home>
    <div class="flex mt-3 justify-between">
        <h2 class="ml-2 font-bold font-serif content-center text-2xl">Data Transactions</h2>
        <a href="{{ route('add_transaction') }}"
            class="border mr-2 rounded-md content-center p-2 bg-green-500 hover:bg-green-400">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="w-full overflow-x-auto p-2 mt-8">
        <table class="min-w-full border table-auto">
            <thead>
                <tr>
                    <th class="border p-2">No</th>
                    <th class="border p-2">Transaction Date</th>
                    <th class="border p-2">Total Amount</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
            </tbody>
        </table>
    </div>
</x-home>
