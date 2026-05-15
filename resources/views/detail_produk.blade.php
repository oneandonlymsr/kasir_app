@extends('layouts.master')

@section('content')
<div style="text-align: center; width: 90%; max-width: 700px; margin:auto; background: rgba (0,0,0,0,0.25); color: #ffffff; padding: 30px; border-radius: 15px; border: 3px solid #ff8c00; box-shadow: 0 0 10px #ff8c00;">
   <h1 style="font-size: 2rem; font-weight: bold; color:#ff8c00; margin-bottom: 10px; ">The Roawring Coffee Menu</h1>

   <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl">

   @php
   $menu = [
        ['nama' => 'Kopi Espresso (The Roawr)', 'harga' => '15.000','desc' => 'Ekstrak kopi murni yang tajam dan kuat. Langsung memberikan energi instan untuk menerjang hari.'],
        ['nama' => 'Kopi Latte (Soft Stripe)', 'harga' => '20.000', 'desc' => 'Perpaduan lembut espresso dan susu creamy. Sehalus langkah harimau, tenang namun mematikan.'],
        ['nama' => 'Kopi Cappuccino (Tiger Foam)', 'harga' => '25.000', 'desc' => 'Espresso dengan busa susu yang tebal dan taburan cokelat di atasnya. Rasa klasiknya bikin kamu merasa jadi raja rimba di setiap seruputan.']
    ];
    @endphp

    @foreach ($menu as $item)
    <div class="bg-[#1a1a1a] p-6 rounded-3xl border-2 border[#333] hover:border-[#ff8c00] transition-all group">
        <div class="h-40 bg-[#333] rounded-2xl mb-4 flex items-center justify-center">
            <span class="text-5xl group-hover: scale-110 transition-transform">☕☕</span>
        </div>
        <h3 style="color: #ff8c00; font-size: 1.5rem; margin: 15px 0;">{{$item['nama']}}</h3>
        <p style="color: #ffffff; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">{{$item['desc']}}</p>
        <div style="font-size: 1.8rem; font-weight: bold; color: #ffffff; margin-bottom: 20px;">Rp{{$item['harga']}}</div>
        <button style="background: #ff8c00; color: black; padding: 10px 25px; border:#706f6c; border-radius: 5px; font-weight: bold; cursor: ponter; text-transform:uppercase;">
            Tambah ke Kasir
        </button>
    </div>
    @endforeach

    </div>

    <a href="/" class="mt-12 text-gray-500 hover:text-[#ff8c00]">Kembali ke Beranda</a>
</div>
@endsection