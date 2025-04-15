<div class="flex justify-center items-center w-full">
    <div class="p-8 justify-items-center items-center justify-center  rounded border border-gray-200">
        <form>
            <div class="mt-8 grid lg:grid-cols-2 gap-4 w-full">
                <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Email</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="Masukan Barang" />
                </div>
                <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Nama</label>
                    <input type="file" name="image" id="file"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" />
                </div>
                <div> <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">Role</label>
                    <select name="" id="">
                        <option value="admin">Admin</option>
                        <option value="pegawai">Pegawai</option>
                    </select>
                </div>
                <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Password</label>
                    <input type="text" name="brithday" id="brithday"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-8 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="5" />
                </div>
            </div>
            <div class="space-x-4 mt-8 text-end"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Simpan</button>
            </div>
        </form>
    </div>
</div>
