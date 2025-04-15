@extends('layout.template')

@section('content')

    <x-sidebar>

        <div class="container p-5 mx-auto sm:p-4 dark:text-gray-800">
            <h2 class="mb-4 text-2xl font-semibold leading-tight">Produk</h2>
            <div class="overflow-x-auto">
                <div class="m-5">
                    <div class="flex-col justify-between">
                        <div class="flex block mt-4 justify-between ">
                            <div class="relative m-2">
                                <a href="#"> <button class="bg-blue-500 text-white rounded-md px-2 py-1">Export
                                        penjualan (xlsx)</button></a>
                            </div>
                            <div class="relative m-2">
                                <a href="#"> <button
                                        class="bg-green-500 text-white rounded-md px-2 py-1 w-relative">Tambah Penjualan +
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
                        <table class="w-full p-6 text-xs text-left whitespace-nowrap">
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
                                    <th class="p-3"></th>
                                    <th class="p-3">Nama Produk</th>
                                    <th class="p-3">Harga</th>
                                    <th class="p-3">Stok</th>
                                    <th class="p-3">Address</th>
                                    <th class="p-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border-b dark:bg-gray-50 dark:border-gray-300">
                                <tr>
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600">A</td>
                                    <td class="px-3 py-2">
                                        <p>Dwight Adams</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>UI Designer</span>
                                        <p class="dark:text-gray-600">Spirit Media</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>555-873-9812</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>dwight@adams.com</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>71 Cherry Court, SO</p>
                                        <p class="dark:text-gray-600">United Kingdom</p>
                                    </td>
                                    {{-- Aksi --}}
                                    <td class="px-4 py-2">
                                        {{-- <button type="button" title=""
                                            class="px-5 rounded-full dark:text-white bg-yellow-500 text-xl  hover:dark:bg-yellow-600 focus:dark:bg-gray-300">
                                            Lihat
                                        </button> --}}
                                        <button onclick="openModal()"
                                            class="px-5 rounded-full dark:text-white bg-yellow-500 text-xl hover:dark:bg-yellow-600 focus:dark:bg-gray-300">
                                            Lihat
                                        </button>
                                        <button type="button" title="Open details"
                                            class="px-5 rounded-full dark:text-white bg-blue-500 text-xl hover:dark:bg-blue-600 focus:dark:bg-gray-300">
                                            Unduh Bukti
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600"></td>
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
                                        <p>richie@allen.com</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>Knesebeckstrasse 32, Obersteinebach</p>
                                        <p class="dark:text-gray-600">Germany</p>
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
                            <tbody class="border-b dark:bg-gray-50 dark:border-gray-300">
                                <tr>
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600">B</td>
                                    <td class="px-3 py-2">
                                        <p>Alex Bridges</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>Administrative Services Manager</span>
                                        <p class="dark:text-gray-600">Smilectronics</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>555-238-9890</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>alex@bridges.com</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>Hooivelden 117, Kortrijk</p>
                                        <p class="dark:text-gray-600">Belgium</p>
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
                                <tr>
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600"></td>
                                    <td class="px-3 py-2">
                                        <p>Lynette Brown</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>Camera Operator</span>
                                        <p class="dark:text-gray-600">Surge Enterprises</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>555-521-5712</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>lynette@brown.com</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>22 rue de la Boétie, Poitiers</p>
                                        <p class="dark:text-gray-600">France</p>
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
                            <tbody class="border-b dark:bg-gray-50 dark:border-gray-300">
                                <tr>
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600">C</td>
                                    <td class="px-3 py-2">
                                        <p>Mariah Claxton</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>Nuclear Technician</span>
                                        <p class="dark:text-gray-600">White Wolf Brews</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>555-654-9810</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>mariah@claxton.com</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>R Oliveirinhas 71, Maia</p>
                                        <p class="dark:text-gray-600">Portugal</p>
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
                                <tr>
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600"></td>
                                    <td class="px-3 py-2">
                                        <p>Hermila Craig</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>Production Engineer</span>
                                        <p class="dark:text-gray-600">Cavernetworks Co.</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>555-091-8401</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>hermila@craig.com</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>Rua da Rapina 89, Espeja</p>
                                        <p class="dark:text-gray-600">Spain</p>
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

                <!-- Modal -->
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
                </div>

    </x-sidebar>

    <script>
        function openModal() {
            document.getElementById('myModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('myModal').classList.add('hidden');
        }
    </script>
