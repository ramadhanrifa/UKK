@extends('layout.template')

@section('content')

    <x-sidebar>
        <div class="flex flex-col justify-center items-center justify-content-center w-full">
            <x-navbar>Tambah User</x-navbar>
            <x-add-user route="{{ route('user.store') }}" :user=null></x-add-user>

        </div>
    </x-sidebar>
