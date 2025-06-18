# UAS Pemrograman Berbasis Framework - Frontend Laravel

## Identitas Mahasiswa
- **Nama** : Muhammad Alva Rezal  
- **NIM**  : 230202039  
- **Kelas**: TI 2B  
- **Kampus**: Politeknik Negeri Cilacap

---

## 📦 Cara Instalasi dan Menjalankan Project Laravel

1. **Clone Repository**
```bash
git clone https://github.com/username/frontend-uas-pbf-230202039.git
cd frontend-uas-pbf-230202039 
```
2. **Install Dependency**

```bash
composer install
```

3. **Jalankan Laravel**

 ```bash
 php artisan serve
 ```

4. **Jalankan CI**

```bash
php spark serve
```

5. **Mulai Program**
```bash
[http://127.0.0.1:8000].
```
klik link tersebut (ctrl+c) untuk memulai program.

## ✨ Fitur Tambahan

Berikut beberapa fitur tambahan yang telah ditambahkan dalam project Laravel ini:

### 1. Export PDF Peminjaman
- Tersedia tombol **Export ke PDF** pada halaman tabel peminjaman.
- Fitur ini memungkinkan pengguna untuk mencetak **satu data** peminjaman yang dipilih (bukan seluruh data).
- Menggunakan package **DomPDF Laravel** untuk generate file PDF.

### 2. Gambar Latar (Background) di Halaman Dashboard
- Tampilan halaman dashboard diberikan sentuhan visual berupa **gambar latar belakang**.
- Gambar disimpan di direktori `public/images` dan dipanggil melalui CSS inline di layout atau blade.
- Memberikan tampilan antarmuka yang lebih menarik dan estetik.

  
## 📁 Struktur Folder Utama
```bash
frontend-uass-230202039/
├── app/Http/Controllers/
│   ├── BukuController.php
│   └── PeminjamanController.php
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php
│   ├── buku/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   └── edit.blade.php
│   ├── peminjaman/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   └── edit.blade.php
│   └── dashboard.blade.php
├── public/
│   └── background-dashboard.jpg
├── routes/
│   └── web.php
├── README.md
└── ...
```
## 🔗 Link Repository


https://github.com/AlvaRezal123/frontend-uass-230202039

## 💻 Visual Program



   
