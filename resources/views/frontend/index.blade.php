@extends('frontend.layout')

@section('content')
<h2>Selamat Datang di Catering Makanan Lezat</h2>
<p>Kami menyediakan berbagai menu catering untuk berbagai acara.</p>

<h3>🍱 Menu Paket</h3>

@if ($paket->count())
    @foreach ($paket as $item)
        <div class="card">
            <strong>{{ $item->nama_menu }}</strong><br>
            Harga: Rp {{ number_format($item->harga) }}
        </div>
    @endforeach
@else
    <p>Belum ada menu paket.</p>
@endif

<h3>🍽️ Menu Satuan</h3>

@if ($satuan->count())
    @foreach ($satuan as $item)
        <div class="card">
            <strong>{{ $item->nama_menu }}</strong><br>
            Harga: Rp {{ number_format($item->harga) }}
        </div>
    @endforeach
@else
    <p>Belum ada menu satuan.</p>
@endif
@endsection
