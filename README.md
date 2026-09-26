# Yayasan Peduli Kebaikan Dunia

Homepage Laravel untuk Yayasan Peduli Kebaikan Dunia. Implementasi menggunakan Blade, Laravel Vite, CSS, dan JavaScript tanpa runtime React.

## Menjalankan secara lokal

Persyaratan: PHP 8.3+, Composer, Node.js, dan npm.

```bash
composer install
npm install
npm run build
php artisan serve
```

Buka alamat yang ditampilkan Laravel (umumnya `http://127.0.0.1:8000`). Untuk mengembangkan CSS/JavaScript dengan hot reload, jalankan `npm run dev` di terminal terpisah.

## Struktur utama

- `routes/web.php` — route homepage bernama `home`.
- `resources/views/layouts/app.blade.php` — metadata, aset Vite, header, dan footer.
- `resources/views/home.blade.php` — konten homepage beserta data program, jalur, dan galeri.
- `resources/views/components/` — komponen brand, navigasi, footer, serta sprite ikon SVG.
- `resources/css/app.css`, `resources/js/app.js` — gaya dan interaksi browser.
- `public/logo-yayasan.png` — lokasi logo resmi; bila tidak tersedia, komponen brand menampilkan mark sementara.

Form kontak saat ini hanya demo frontend dan tidak mengirim data. Route `POST /contact`, validasi, penyimpanan, dan pengiriman email dapat ditambahkan ketika alur penerima pesan sudah ditentukan.

## Backup versi React/Vite

Sumber React/Vite sebelum migrasi tersimpan di `migration-backup/react-vite-source-20260926.tar.gz`.

Foto pada homepage adalah ilustrasi placeholder. Ganti dengan foto resmi Yayasan setelah dokumentasi dan izin penggunaan tersedia.
