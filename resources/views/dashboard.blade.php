@extends('layout.template')

@section('content')

    <x-sidebar>
        @if (auth()->user()->role == 'admin')
            <x-card-dashboard-admin></x-card-dashboard-admin>
        @elseif(auth()->user()->role == 'pegawai')
            <x-card-dashboard-pegawai></x-card-dashboard-pegawai>
        @endif


    </x-sidebar>
