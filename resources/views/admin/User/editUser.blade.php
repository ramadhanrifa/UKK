@extends('layout.template')

@section('content')

    <x-sidebar>
        <div class="flex flex-col justify-center items-center justify-content-center w-full">
            <x-navbar>edit User</x-navbar>
            <x-add-user route="{{ route('user.update', $user->id) }}" :user="$user"></x-add-user>
        </div>
    </x-sidebar>
