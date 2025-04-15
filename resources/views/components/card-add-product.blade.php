<div class="flex justify-center items-center w-full">
    <div class="p-8 justify-items-center items-center justify-center  rounded border border-gray-200">
        @if($product != null)
        <form method="put" action="{{ $route }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mt-8 grid lg:grid-cols-2 gap-4 w-full">
                <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Nama Produk</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="Masukan Barang" value="{{ $product->name ?? "" }}"/>
                </div>
                <div> <label for="image" class="text-sm text-gray-700 block mb-1 font-medium">Gambar Produk</label>
                    <input type="file" name="image" id="file" value="{{ $product->image ?? "" }}"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                </div>
                <div> <label for="price" class="text-sm text-gray-700 block mb-1 font-medium">Harga</label>
                    <input type="text" name="price" id="price"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="1000" value="{{ $product->price ?? "" }}" />
                </div>
                <div> <label for="stock" class="text-sm text-gray-700 block mb-1 font-medium">Stok</label>
                    <input type="text" name="stock" id="stock"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="5" value="{{ $product->stock }}" />
                </div>
            </div>
            <div class="space-x-4 mt-8 text-end"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Simpan</button>
            </div>
        </form>

        @else
        <form method="post" action="{{ $route }}" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <div class="mt-8 grid lg:grid-cols-2 gap-4 w-full">
                <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Nama Produk</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="Masukan Barang" />
                </div>
                <div> <label for="image" class="text-sm text-gray-700 block mb-1 font-medium">Gambar Produk</label>
                    <input type="file" name="image" id="file"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                </div>
                <div> <label for="price" class="text-sm text-gray-700 block mb-1 font-medium">Harga</label>
                    <input type="text" name="price" id="price"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="1000" />
                </div>
                <div> <label for="stock" class="text-sm text-gray-700 block mb-1 font-medium">Stok</label>
                    <input type="text" name="stock" id="stock"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="5" />
                </div>
            </div>
            <div class="space-x-4 mt-8 text-end"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Simpan</button>
            </div>
        </form>
        @endif  
        
    </div>
</div>
