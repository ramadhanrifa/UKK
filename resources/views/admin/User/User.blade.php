@extends('layout.template')

@section('content')

    <x-sidebar>
        <div class="flex flex-col justify-center items-center justify-content-center w-full">
            <x-navbar>User</x-navbar>
            <div class="container p-5 mx-auto sm:p-4 dark:text-gray-800 ">
                <div class="m-5">
                    <div class="flex-col justify-between">
                        <div class="flex block mt-4 justify-between ">
                            <div class="relative m-2">
                                <a href="#"> <button class="bg-blue-500 text-white rounded-md px-2 py-1">Export
                                        penjualan (xlsx)</button></a>
                            </div>
                            <div class="relative m-2">
                                <a href="{{ route('user.create') }}"> <button
                                        class="bg-green-500 text-white rounded-md px-2 py-1 w-relative">Tambah Akun +
                                    </button></a>
                            </div>
                        </div>
                        <div class="flex block mt-4 justify-between">
                        <div class="relative m-2">
                                <label for="table-search" class="p-2 w-2 "> Tampilkan Berapa
                                    <select name="" id="">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                    </select>
                                </label>
                            </div>
                            <div class="relative m-2">
                                <form method="post" action="{{ route('user.search') }}">
                                    @csrf
                                <label for="table-search" class="flex p-1">Cari : 
                                    <input type="text" name="search" id="search"
                                        class="p-1 text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                        <button type="submit" class="bg-blue-500 text-white rounded-md px-2 py-1 w-relative">Cari</button>
                                    </label>
                                </form>
                             


                            </div>
                        </div>
                        <table class="w-full p-6 text-xs text-left whitespace-nowrap overflow-x-auto">
                            <colgroup>
                                <col class="w-5">
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col class="w-5">
                            </colgroup>
                            <thead>
                                <tr class="dark:bg-gray-300">
                                    <th class="p-3">NO</th>
                                    <th class="p-3">Email</th>
                                    <th class="p-3">Nama</th>
                                    <th class="p-3">Role</th>
                                    <th class="p-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="border-b dark:bg-gray-50 dark:border-gray-300">
                                <tr>
                                @php $i = 1 @endphp
                                @foreach ($users as $u)
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600">{{ $i++ }}</td>
                                    <td class="px-3 py-2">
                                        <p>{{ $u->email }}</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>{{ $u->name }}</span>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>{{ $u->role }}</p>
                                    </td>
                                    <td class="px-3 py-2">
                                    
                                        <button type="button" onclick="openModal()"  title="Open details"
                                            class="p-1 rounded-full dark:text-gray-400 hover:dark:bg-gray-300 focus:dark:bg-gray-300">
                                            <svg viewBox="0 0 24 24" class="w-4 h-4 fill-current">
                                                <path
                                                    d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z">
                                                </path>
                                            </svg>
                                        </button>

                                        <div id="myModal"
                                        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                                        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                                            <div class="flex justify-between items-center border-b pb-2 mb-4">
                                                <h2 class="text-xl font-bold">Detail Pengguna</h2>
                                                    <button onclick="closeModal()"
                                                        class="text-gray-500 hover:text-red-500 text-2xl">&times;</button>
                                            </div>
                                        <div>
                                            <p><strong>Nama:</strong> Dwight Adams</p>
                                            <p><strong>Role:</strong> UI Designer</p>
                                            <p><strong>Perusahaan:</strong> Spirit Media</p>
                                            <p><strong>Email:</strong> dwight@adams.com</p>
                                            <p><strong>Telp:</strong> 555-873-9812</p>
                                            <p><strong>Alamat:</strong> 71 Cherry Court, SO, United Kingdom</p>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                                @php $i =+ 1 @endphp                                
                            </tbody>
                        </table>
                    </div>
                </div>
    </x-sidebar>

@section('scripts')
    <script>
        const setup = () => {
            return {
                isShow: false,
                watchScreen() {
                    if (window.innerWidth < -1024) {
                        this.isShow = false
                    }
                }
            }
        }

        function openModal() {
            document.getElementById('myModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('myModal').classList.add('hidden');
        }
    </script>
