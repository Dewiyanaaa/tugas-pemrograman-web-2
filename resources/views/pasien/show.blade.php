@extends('layouts.app')

@section('content')
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-primary mb-3" href="{{ route('pasien.index') }}" role="button">
        Back
    </a>

    <ul class="list-group">
        <li class="list-group-item">
            Nama: {{ $pasien->name }}
        </li>

        <li class="list-group-item">
            Umur: {{ $pasien->umur }}
        </li>

        <li class="list-group-item">
            Jenis Kelamin:
            {{ $pasien->jeniskelamin }}
        </li>

        <li class="list-group-item">
            Alamat:
            {{ $pasien->alamat }}
        </li>

        <li class="list-group-item">
            Keluhan:
            {{ $pasien->keluhan }}
        </li>

        <li class="list-group-item">
            Created at:
            {{ $pasien->created_at->format('d F Y H:i:s') }}
        </li>

        <li class="list-group-item">
            Last update:
            {{ $pasien->updated_at->diffForHumans() }}
        </li>
    </ul>
@endsection
