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
                                <a href="#"> <button
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
                                <label for="table-search" class="flex p-1">Cari : <input type="text" id="table-search"
                                        class="p-1 text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500"></label>

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
                                    <td class="px-3 text-l font-medium dark:text-gray-600">1</td>
                                    <td class="px-3 py-2">
                                        <p>dwight@adams.com</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>Dwight Adams</p>
                                    </td>

                                    <td class="px-3 py-2">
                                        <p>71 Cherry Court, SO</p>
                                        <p class="dark:text-gray-600">United Kingdom</p>
                                    </td>
                                    {{-- Aksi --}}
                                    <td class="px-4 py-2">
                                        <button type="button" title=""
                                            class="px-5 rounded-full dark:text-white bg-yellow-500 text-xl  hover:dark:bg-yellow-600 focus:dark:bg-gray-300">
                                            Edit
                                        </button>
                                        <button type="button" title="Open details"
                                            class="px-5 rounded-full dark:text-white bg-red-500 text-xl hover:dark:bg-red-600 focus:dark:bg-gray-300">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 text-l font-medium dark:text-gray-600"></td>
                                    <td class="px-3 py-2">
                                        <p>Richie Allen</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>Geothermal Technician</span>
                                        <p class="dark:text-gray-600">Icecorps</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>555-129-0761</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <button type="button" title="Open details"
                                            class="p-1 rounded-full dark:text-gray-400 hover:dark:bg-gray-300 focus:dark:bg-gray-300">
                                            <svg viewBox="0 0 24 24" class="w-4 h-4 fill-current">
                                                <path
                                                    d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z">
                                                </path>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
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
    </script>
