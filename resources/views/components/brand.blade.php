@props(['light' => false])

<a class="brand {{ $light ? 'brand-light' : '' }}" href="{{ route('home') }}#beranda" aria-label="Yayasan Peduli Kebaikan Dunia, ke beranda">
    @if (file_exists(public_path('logo-yayasan.png')))
        <img class="brand-logo-image" src="{{ asset('logo-yayasan.png') }}" alt="" />
    @else
        <span class="brand-mark" aria-hidden="true"><x-icon name="heart-handshake" size="24" /></span>
        <span class="brand-name"><small>YAYASAN</small><strong>Peduli Kebaikan Dunia</strong></span>
    @endif
</a>
