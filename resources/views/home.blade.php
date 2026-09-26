@extends('layouts.app')

@section('content')
@php
    $programs = [
        ['icon' => 'hand-heart', 'name' => 'Kemanusiaan', 'text' => 'Bidang kepedulian untuk menguatkan solidaritas dan mendukung martabat sesama.'],
        ['icon' => 'book-open', 'name' => 'Pendidikan', 'text' => 'Fokus pada kesempatan belajar, pengetahuan, dan ruang tumbuh yang inklusif.'],
        ['icon' => 'users-round', 'name' => 'Pemberdayaan', 'text' => 'Mendorong potensi individu dan komunitas agar tumbuh mandiri dan berdaya.'],
        ['icon' => 'leaf', 'name' => 'Lingkungan', 'text' => 'Kepedulian pada lingkungan hidup dan keberlanjutan untuk generasi mendatang.'],
        ['icon' => 'hand-coins', 'name' => 'Ekonomi', 'text' => 'Mendukung penguatan ekonomi masyarakat secara inklusif dan berkelanjutan.'],
    ];
    $pathway = [
        ['icon' => 'book-open', 'title' => 'Belajar', 'text' => 'Akses pendidikan dan dukungan belajar.'],
        ['icon' => 'wrench', 'title' => 'Keterampilan', 'text' => 'Bekal akademik, digital, dan vokasional.'],
        ['icon' => 'handshake', 'title' => 'Magang / Pengalaman', 'text' => 'Paparan praktik dan lingkungan kerja.'],
        ['icon' => 'badge-check', 'title' => 'Siap Kerja', 'text' => 'Persiapan untuk memasuki dunia kerja.'],
        ['icon' => 'briefcase', 'title' => 'Peluang Kerja', 'text' => 'Menghubungkan talenta dengan peluang.'],
        ['icon' => 'home', 'title' => 'Keluarga Mandiri', 'text' => 'Mendorong masa depan keluarga yang lebih mandiri.'],
    ];
    $ecosystemFlow = [
        ['icon' => 'heart-handshake', 'name' => 'Yayasan Peduli Kebaikan Dunia', 'role' => 'Menjangkau, mendampingi dan menghubungkan penerima manfaat.'],
        ['icon' => 'laptop', 'name' => 'FOKUS', 'role' => 'Dukungan pembelajaran digital dan pengembangan akademik.'],
        ['icon' => 'graduation-cap', 'name' => 'SMK Career', 'role' => 'Pengembangan keterampilan, kesiapan kerja, magang dan koneksi industri.'],
        ['icon' => 'building-2', 'name' => 'Mitra Industri', 'role' => 'Peluang pengalaman kerja, magang dan jalur menuju pekerjaan.'],
        ['icon' => 'home', 'name' => 'Keluarga Mandiri', 'role' => 'Ketika satu anak muda berkembang, dampaknya dapat dirasakan oleh keluarga.'],
    ];
    $orphanPathway = [
        ['icon' => 'home', 'label' => 'Panti Asuhan'], ['icon' => 'book-open', 'label' => 'Akses Belajar'],
        ['icon' => 'hand-heart', 'label' => 'Mentoring'], ['icon' => 'wrench', 'label' => 'Keterampilan'],
        ['icon' => 'briefcase', 'label' => 'Kesiapan Karier'], ['icon' => 'trending-up', 'label' => 'Peluang Masa Depan'],
    ];
    $careerPath = [
        ['icon' => 'wrench', 'label' => 'Pelatihan'], ['icon' => 'badge-check', 'label' => 'Keterampilan Praktis'],
        ['icon' => 'graduation-cap', 'label' => 'Persiapan Karier'], ['icon' => 'handshake', 'label' => 'Magang'],
        ['icon' => 'building-2', 'label' => 'Paparan Industri'], ['icon' => 'briefcase', 'label' => 'Peluang Kerja'],
    ];
    $partners = [
        ['icon' => 'heart-handshake', 'name' => 'Yayasan / Organisasi Sosial', 'role' => 'Menjangkau peserta, memahami kebutuhan, dan mengoordinasikan program.'],
        ['icon' => 'school', 'name' => 'Sekolah & SMK', 'role' => 'Menghubungkan siswa dengan pembelajaran dan pengembangan keterampilan.'],
        ['icon' => 'baby', 'name' => 'Panti Asuhan', 'role' => 'Membuka akses belajar dan pengembangan diri bagi anak-anak.'],
        ['icon' => 'building-2', 'name' => 'Perusahaan / Industri', 'role' => 'Menyediakan paparan industri, praktik, dan peluang magang.'],
        ['icon' => 'trending-up', 'name' => 'Corporate CSR', 'role' => 'Mendukung pelatihan dan program sosial melalui kolaborasi CSR.'],
        ['icon' => 'graduation-cap', 'name' => 'Institusi Pendidikan', 'role' => 'Mendukung pembelajaran, pendampingan, dan pengembangan akademik.'],
        ['icon' => 'hand-heart', 'name' => 'Relawan & Mentor', 'role' => 'Berbagi waktu, pengalaman, dan pendampingan.'],
        ['icon' => 'building-2', 'name' => 'Pemerintah / Institusi', 'role' => 'Menjajaki dukungan kelembagaan dan sinergi program.'],
    ];
    $photos = [
        ['src' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=900&q=85', 'alt' => 'Foto ilustrasi anak-anak belajar bersama', 'label' => 'Belajar bersama'],
        ['src' => 'https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=900&q=85', 'alt' => 'Foto ilustrasi kegiatan relawan dan masyarakat', 'label' => 'Berbagi kepedulian'],
        ['src' => 'https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=900&q=85', 'alt' => 'Foto ilustrasi kegiatan komunitas', 'label' => 'Tumbuh bersama'],
        ['src' => 'https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?auto=format&fit=crop&w=900&q=85', 'alt' => 'Foto ilustrasi kolaborasi komunitas', 'label' => 'Kolaborasi kebaikan'],
        ['src' => 'https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&fit=crop&w=900&q=85', 'alt' => 'Foto ilustrasi anak-anak dalam kegiatan belajar', 'label' => 'Ruang penuh harapan'],
        ['src' => 'https://images.unsplash.com/photo-1509099836639-18ba1795216d?auto=format&fit=crop&w=900&q=85', 'alt' => 'Foto ilustrasi anak-anak beraktivitas bersama', 'label' => 'Masa depan yang cerah'],
    ];
@endphp

<section class="hero" id="beranda">
    <div class="hero-photo" role="img" aria-label="Foto ilustrasi kegiatan komunitas"></div><div class="hero-shade"></div>
    <div class="hero-content wrap">
        <div class="eyebrow eyebrow-light"><span></span> Pendidikan · Keterampilan · Masa depan</div>
        <h1>Menebar Kebaikan,<br /><em>Menghadirkan Harapan</em></h1>
        <p>Dari pendidikan hingga kesiapan kerja, kami membangun kolaborasi agar anak-anak dan generasi muda Indonesia memiliki kesempatan untuk belajar, berkembang, bekerja, dan membantu keluarganya menuju kehidupan yang lebih mandiri.</p>
        <div class="hero-actions"><a class="button button-primary" href="#kolaborasi">Bangun Masa Depan Bersama <x-icon name="arrow-right" size="17" /></a><a class="button button-outline-light" href="#program">Jelajahi Program <x-icon name="arrow-up-right" size="16" /></a></div>
        <a class="hero-scroll" href="#tentang"><span>Jelajahi lebih lanjut</span><x-icon name="arrow-down" size="15" /></a>
    </div>
    <div class="hero-caption"><span class="caption-line"></span> Foto ilustrasi · Bersama membuka masa depan</div>
</section>

<section class="intro section-pad" id="tentang"><div class="wrap intro-grid">
    <div class="intro-heading"><div class="eyebrow"><span></span> Tentang yayasan</div><p class="identity-kicker">Lembaga Kemanusiaan &amp;<br />Pembangunan Berkelanjutan</p><h2>Membuka jalan<br />menuju <em>masa depan.</em></h2></div>
    <div class="intro-copy"><p class="lead">Yayasan Peduli Kebaikan Dunia adalah Lembaga Kemanusiaan &amp; Pembangunan Berkelanjutan.</p><p>Sebagian anak muda menghadapi jarak antara akses belajar, pengembangan keterampilan, dan pengalaman mengenal dunia kerja. Fokus misi sosial kami adalah membantu anak-anak, pelajar, dan generasi muda Indonesia membangun jalan dari pendidikan menuju keterampilan dan kesiapan kerja. Kami ingin memperluas kesempatan belajar, pendampingan, pengalaman, dan peluang yang dapat mendukung kemandirian keluarga.</p><a class="text-link" href="#program">Jelajahi fokus kami <x-icon name="arrow-right" size="16" /></a></div>
</div></section>

<section class="program-section section-pad" id="program"><div class="wrap"><div class="section-heading heading-row"><div><div class="eyebrow"><span></span> Bidang resmi yayasan</div><h2>Fokus kepedulian</h2></div><p>Lima bidang yang menjadi dasar untuk mengembangkan inisiatif dan program bersama.</p></div><div class="program-grid">
    @foreach ($programs as $program)
        <article class="program-card program-card-{{ $loop->iteration }}"><div class="program-top"><span class="program-number">0{{ $loop->iteration }}</span><x-icon name="{{ $program['icon'] }}" size="26" /></div><h3>{{ $program['name'] }}</h3><p>{{ $program['text'] }}</p><a href="#kolaborasi" class="card-arrow" aria-label="Diskusikan fokus {{ $program['name'] }}"><x-icon name="arrow-up-right" size="17" /></a></article>
    @endforeach
</div></div></section>

<section class="pathway-section section-pad" id="jalur"><div class="wrap"><div class="section-heading heading-row"><div><div class="eyebrow"><span></span> Jalur dampak sosial</div><h2>Dari Pendidikan<br />Menuju Kemandirian</h2></div><p>Jalur yang sedang dikembangkan untuk menghubungkan anak muda dari ruang belajar ke peluang dan keluarga yang lebih mandiri.</p></div><div class="pathway-grid">
    @foreach ($pathway as $step)
        <article class="pathway-step"><span class="pathway-number">0{{ $loop->iteration }}</span><span class="pathway-icon"><x-icon name="{{ $step['icon'] }}" size="22" /></span><h3>{{ $step['title'] }}</h3><p>{{ $step['text'] }}</p>@unless ($loop->last)<x-icon class="pathway-arrow" name="arrow-right" size="17" />@endunless</article>
    @endforeach
</div><p class="pathway-footnote">Peluang bergantung pada kebutuhan peserta dan kolaborasi yang dapat diwujudkan. Tidak ada jaminan penempatan kerja.</p></div></section>

<section class="ecosystem-flow-section section-pad" id="ecosystem"><div class="wrap"><div class="section-heading heading-row"><div><div class="eyebrow"><span></span> Model kolaborasi yang diusulkan</div><h2>Ekosistem Kebaikan<br />yang Berkelanjutan</h2></div><p>Kebaikan tidak berhenti pada bantuan. Kami ingin membangun jalan agar penerima manfaat memiliki pendidikan, keterampilan, peluang, dan kemampuan untuk berdiri secara mandiri.</p></div><div class="flow-rail">
    @foreach ($ecosystemFlow as $step)
        <div class="flow-node-wrap"><article class="flow-node {{ $loop->first ? 'flow-node-origin' : '' }} {{ $loop->last ? 'flow-node-outcome' : '' }}"><span class="flow-step">0{{ $loop->iteration }}</span><span class="flow-icon"><x-icon name="{{ $step['icon'] }}" size="24" /></span><h3>{{ $step['name'] }}</h3><p>{{ $step['role'] }}</p></article>@unless ($loop->last)<x-icon class="flow-arrow" name="arrow-right" size="19" />@endunless</div>
    @endforeach
</div><p class="proposal-note">Ekosistem ini merupakan model kolaborasi yang sedang dikembangkan. Tidak menyatakan adanya kemitraan formal yang telah ditandatangani.</p></div></section>

<section class="orphan-section section-pad" id="kegiatan"><div class="wrap orphan-grid"><div class="orphan-copy"><div class="eyebrow eyebrow-light"><span></span> Akses dan kesempatan</div><h2>Dari Panti Asuhan Menuju Masa Depan yang Lebih Luas</h2><p>Keadaan hari ini tidak seharusnya menentukan masa depan seorang anak. Melalui akses pendidikan, pendampingan, keterampilan dan paparan terhadap dunia kerja, kami ingin membantu membuka lebih banyak kemungkinan bagi mereka.</p><a class="button button-light" href="#kontak">Dukung Masa Depan Anak <x-icon name="arrow-right" size="16" /></a></div><div class="orphan-pathway" aria-label="Jalur dukungan dari panti asuhan menuju peluang masa depan">
    @foreach ($orphanPathway as $step)
        <div class="orphan-path-wrap"><div class="orphan-path-step"><span class="orphan-path-icon"><x-icon name="{{ $step['icon'] }}" size="19" /></span><strong>{{ $step['label'] }}</strong></div>@unless ($loop->last)<x-icon class="orphan-path-arrow" name="arrow-right" size="15" />@endunless</div>
    @endforeach
</div><p class="orphan-note">Foto ilustrasi · Inisiatif yang diusulkan untuk dikembangkan sesuai kebutuhan anak dan bersama calon mitra.</p></div></section>

<section class="focus-detail-section section-pad" id="fokus"><div class="wrap focus-detail-grid"><div class="focus-art"><img src="{{ $photos[0]['src'] }}" alt="Foto ilustrasi pelajar sedang belajar" loading="lazy"/><span class="focus-art-label"><x-icon name="monitor-play" size="16" /> Foto ilustrasi</span></div><div class="focus-detail-copy"><div class="eyebrow"><span></span> FOKUS × SOCIAL IMPACT</div><span class="feature-badge">Model Kolaborasi Pendidikan</span><h2>Belajar Hari Ini. Membuka Peluang Esok.</h2><p class="focus-lead">Pembelajaran digital dapat mendukung akses belajar, latihan terstruktur, dan pengembangan pendidikan.</p><p>FOKUS berpotensi mendukung penerima manfaat terpilih melalui pembelajaran digital dan pengembangan akademik, termasuk kemungkinan akses bersponsor. Bentuk dan kriteria dukungan akan dirancang bersama; ini merupakan model kolaborasi yang diusulkan, bukan kemitraan formal yang telah dikonfirmasi.</p><a class="button button-primary" href="#jalur">Pelajari Jalur Pendidikan <x-icon name="arrow-right" size="16" /></a></div></div></section>

<section class="career-section section-pad" id="karier"><div class="wrap career-grid"><div class="career-heading"><div class="eyebrow"><span></span> SMK CAREER × SOCIAL IMPACT</div><span class="feature-badge">Model Kolaborasi Karier</span><h2>Bukan Sekadar Lulus. Siap Memasuki Dunia Kerja.</h2><p>Tujuannya memperkecil jarak antara sekolah dan dunia kerja melalui pengembangan keterampilan praktis, persiapan karier, pengalaman, dan paparan industri.</p><p>Kolaborasi dapat menjajaki paparan pendidikan maupun industri di Indonesia dan Malaysia sesuai peluang yang tersedia. Ini bukan janji penempatan kerja atau pekerjaan di luar negeri.</p></div><div class="career-path">
    @foreach ($careerPath as $step)
        <div class="career-path-wrap"><div class="career-path-item"><span><x-icon name="{{ $step['icon'] }}" size="20" /></span><strong>{{ $step['label'] }}</strong></div>@unless ($loop->last)<x-icon class="career-path-arrow" name="arrow-right" size="15" />@endunless</div>
    @endforeach
</div></div></section>

<section class="impact-section family-impact" id="dampak"><div class="wrap family-impact-inner"><div class="family-impact-copy"><div class="eyebrow eyebrow-light"><span></span> Filosofi dampak keluarga</div><h2>Ketika Satu Anak Muda Mendapatkan Peluang,<br /><em>Satu Keluarga Bisa Memiliki Harapan Baru.</em></h2><p>Pendidikan dan pekerjaan bukan hanya tentang individu. Penghasilan yang berkelanjutan dapat membantu anak muda mendukung orang tua, adik-beradik dan membangun kehidupan keluarga yang lebih mandiri.</p><small>Keyakinan yang menggerakkan misi kami, bukan klaim statistik.</small></div><div class="family-impact-visual" aria-label="Dampak peluang bagi keluarga"><div><x-icon name="graduation-cap" size="24" /><span>Anak muda</span></div><x-icon name="arrow-down" size="18" /><div><x-icon name="users-round" size="24" /><span>Orang tua &amp; saudara</span></div><x-icon name="arrow-down" size="18" /><div><x-icon name="home" size="24" /><span>Keluarga lebih mandiri</span></div></div></div></section>

<section class="gallery-section section-pad" id="galeri"><div class="wrap"><div class="section-heading heading-row"><div><div class="eyebrow"><span></span> Momen bermakna</div><h2>Galeri kebaikan</h2></div><div class="gallery-heading-copy"><p>Foto ilustrasi yang menyiapkan ruang untuk dokumentasi perjalanan yayasan.</p><span>Ganti dengan foto resmi Yayasan</span></div></div><div class="gallery-grid">
    @foreach ($photos as $photo)
        <button class="gallery-tile gallery-tile-{{ $loop->iteration }}" type="button" data-gallery-image="{{ $photo['src'] }}" data-gallery-alt="{{ $photo['alt'] }}" data-gallery-label="{{ $photo['label'] }}" aria-label="Perbesar foto ilustrasi: {{ $photo['label'] }}"><img src="{{ $photo['src'] }}" alt="{{ $photo['alt'] }}" loading="lazy"/><span class="gallery-label">{{ $photo['label'] }}<x-icon name="arrow-up-right" size="15" /></span></button>
    @endforeach
</div></div></section>

<section class="collab-section section-pad" id="kolaborasi"><div class="wrap"><div class="collab-top"><div><div class="eyebrow eyebrow-light"><span></span> Ekosistem yang diusulkan</div><h2>Siapa yang Bisa<br /><em>Bergabung?</em></h2></div><div class="collab-lead"><p>Setiap pihak dapat membantu membuka satu bagian dari jalur pendidikan, keterampilan, pengalaman, dan peluang. Peran berikut adalah peluang kolaborasi, bukan daftar mitra yang telah dikonfirmasi.</p></div></div><div class="ecosystem-grid">
    @foreach ($partners as $partner)
        <article class="ecosystem-card"><span class="ecosystem-number">0{{ $loop->iteration }}</span><x-icon name="{{ $partner['icon'] }}" size="23" class="ecosystem-icon"/><h3>{{ $partner['name'] }}</h3><p>{{ $partner['role'] }}</p></article>
    @endforeach
</div><div class="collab-bottom-cta"><p>Bangun jalur yang lebih kuat untuk anak dan generasi muda.</p><a class="button button-light" href="#kontak">Mari Bangun Program Bersama <x-icon name="arrow-up-right" size="16" /></a></div></div></section>

<section class="contact-section section-pad" id="kontak"><div class="wrap contact-grid"><div class="contact-copy"><div class="eyebrow eyebrow-light"><span></span> Mari terhubung</div><h2>Mari Bangun<br />Program Bersama.</h2><p>Punya gagasan untuk pendidikan, program panti asuhan, kesiapan karier, pelatihan, magang, atau dukungan CSR? Mari mulai percakapan dan jelajahi kemungkinan kolaborasi.</p><div class="contact-social"><span class="social-icon"><x-icon name="camera" size="19" /></span><div><small>Ikuti perjalanan kami</small><a href="https://www.instagram.com/yayasanpedulikebaikandunia/" target="_blank" rel="noopener noreferrer">@yayasanpedulikebaikandunia <x-icon name="arrow-up-right" size="14" /></a></div></div><a class="button button-outline-light instagram-cta" href="https://www.instagram.com/yayasanpedulikebaikandunia/" target="_blank" rel="noopener noreferrer">Lihat Kegiatan Kami di Instagram <x-icon name="arrow-up-right" size="15" /></a></div><form class="contact-form" data-contact-demo><div class="form-heading"><h3>Kirim pesan</h3><p>Ceritakan bagaimana kita bisa membangun program bersama.</p></div><div class="form-row"><label>Nama<input name="nama" type="text" placeholder="Nama lengkap" autocomplete="name" required /></label><label>Email<input name="email" type="email" placeholder="nama@email.com" autocomplete="email" required /></label></div><div class="form-row"><label>WhatsApp <span class="optional">(opsional)</span><input name="whatsapp" type="tel" placeholder="Nomor WhatsApp" autocomplete="tel" /></label><label>Subjek<select name="subjek" required><option value="" selected disabled>Pilih topik</option><option>Program Pendidikan</option><option>Program Panti Asuhan</option><option>Kolaborasi SMK</option><option>Mitra Industri</option><option>Program CSR</option><option>Relawan / Mentor</option><option>Kolaborasi Lainnya</option></select></label></div><label>Pesan<textarea name="pesan" rows="4" placeholder="Tuliskan gagasan atau bentuk kolaborasi yang ingin dijajaki..." required></textarea></label><button type="submit" class="button button-primary form-submit">Kirim pesan <x-icon name="send" size="15" /></button><p class="form-feedback" role="status" hidden><x-icon name="check" size="15" /> Terima kasih. Form demo ini belum terhubung ke sistem penerima pesan.</p><p class="form-footnote">Formulir ini merupakan demo dan belum mengirim data ke server.</p></form></div></section>

<div class="lightbox" role="dialog" aria-modal="true" aria-label="Galeri foto" aria-hidden="true" hidden>
    <button class="modal-close" type="button" aria-label="Tutup galeri"><x-icon name="x" size="22" /></button>
    <button class="lightbox-control lightbox-prev" type="button" aria-label="Foto sebelumnya"><x-icon name="chevron-left" size="22" /></button>
    <figure class="lightbox-figure"><img src="" alt="" /><figcaption></figcaption></figure>
    <button class="lightbox-control lightbox-next" type="button" aria-label="Foto berikutnya"><x-icon name="chevron-right" size="22" /></button>
</div>
@endsection
