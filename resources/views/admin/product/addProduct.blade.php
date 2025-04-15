@extends('layout.template')

@section('content')
    <x-sidebar>
        <div class="flex flex-col justify-center items-center justify-content-center w-full">
            <x-navbar>Tambah Product</x-navbar>
            <x-card-add-product route="{{ route('product.store') }}" :product=null></x-card-add-product>
        </div>

    </x-sidebar>

    <script>
        import Swal from 'sweetalert2/dist/sweetalert2.js'
        import 'sweetalert2/src/sweetalert2.scss'

        Swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'error',
            confirmButtonText: 'Cool'
        })

        Swal.fire({
            title: "Drag me!",
            icon: "success",
            draggable: true
        })
    </script>
