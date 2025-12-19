@extends('frontend.layout')

@section('content')
<h2>Daftar Menu Catering</h2>

@if ($menus->count())
    @foreach ($menus as $menu)
        <div class="card">
            <strong>{{ $menu->nama_menu }}</strong><br>
            Jenis: {{ $menu->jenis }}<br>
            Harga: Rp {{ number_format($menu->harga) }}
        </div>
    @endforeach
@else
    <p>Belum ada menu tersedia.</p>
@endif
@endsection
