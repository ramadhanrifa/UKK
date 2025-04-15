@extends('layout.template')

@section('content')

    <x-sidebar>
        <div class="flex flex-col justify-center items-center justify-content-center w-full">
            <x-navbar>Edit Product</x-navbar>
            <x-add-product route="{{ route('product.update', $product->id) }}" :product="$product"></x-add-product>
        </div>
    </x-sidebar>