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
                                <a href="{{ route('product.create') }}"> <button
                                        class="bg-green-500 text-white rounded-md px-2 py-1 w-relative">Tambah Product +
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
                                    <th class="p-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border-b dark:bg-gray-50 dark:border-gray-300">
                            @php $i = 1 @endphp
                                <tr>
                                    @if($products != null)

                                    @foreach($products as $p)
                                    <td class="px-3 text-2xl font-medium dark:text-gray-600">{{ $i ++}}</td>
                                    <td class="px-3 py-2">
                                        <p></p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <span>{{ $p->name }}</span>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>{{ $p->price }}</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>{{ $p->stock }}</p>
                                    </td>
                                    {{-- Aksi --}}
                                    <td class="px-4 py-2">
                                        <button type="button" title=""
                                            class="px-5 rounded-full dark:text-white bg-yellow-500 text-xl  hover:dark:bg-yellow-600 focus:dark:bg-gray-300">
                                            Edit
                                        </button>
                                        <button type="button" title="Open details"
                                            class="px-5 rounded-full dark:text-white bg-blue-500 text-xl hover:dark:bg-blue-600 focus:dark:bg-gray-300">
                                            Update Stok
                                        </button>
                                        <button type="button" title="Open details"
                                            class="px-5 rounded-full dark:text-white bg-red-500 text-xl hover:dark:bg-red-600 focus:dark:bg-gray-300">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

    </x-sidebar>
