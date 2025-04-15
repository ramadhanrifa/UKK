@extends('layout.template')

@section('content')

    <x-sidebar>
        <div class="flex flex-col">
            <x-navbar> Tambah Pembelian</x-navbar>
            <div class="p-5 flex flex-row justify-start">
                <div class="grid grid-cols-4 sm:grid-cols-4 gap-4 p-2 block">
                    <x-card-product-purchase itemName="Nama Produk" price="Rp 10.000" quantity="1" />
                    <x-card-product-purchase itemName="Nama Produk" price="Rp 10.000" quantity="1" />
                    <x-card-product-purchase itemName="Nama Produk" price="Rp 10.000" quantity="1" />
                    <x-card-product-purchase itemName="Nama Produk" price="Rp 10.000" quantity="1" />
                    <x-card-product-purchase itemName="Nama Produk" price="Rp 10.000" quantity="1" />
                    <x-card-product-purchase itemName="Nama Produk" price="Rp 10.000" quantity="1" />
                    <x-card-product-purchase itemName="Nama Produk" price="Rp 10.000" quantity="1" />

                </div>
            </div>
        </div>
        <br>

        <div class="absoulute flex place items-end p-10 w-64">
            <button
                class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">
                Selanjutnya <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg> </button>
        </div>
    </x-sidebar>
