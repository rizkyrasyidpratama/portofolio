# Portofolio — Latihan 5a: RESTful API (GET Endpoints)

<img src="docs/screenshots/foto-saya.png" alt="Foto Rizky Rasyid Pratama" width="150">

|                 |                      |
| --------------- | -------------------- |
| **Nama**        | Rizky Rasyid Pratama |
| **NPM**         | 24312116             |
| **Mata Kuliah** | Pemrograman Web 2    |
| **Branch**      | `Lat-5a_RestAPI_GET` |

API read-only (metode GET) untuk menyajikan data portofolio publik dalam format JSON,
dibangun dengan Laravel dan MySQL. Struktur tabel dan seeder berasal dari Latihan 4b.

## Cara Menjalankan

```sh
composer install
cp .env.example .env        # Windows: copy .env.example .env
php artisan key:generate
# isi DB_* di .env (MySQL), buat database kosong, lalu:
php artisan migrate:fresh --seed
php artisan serve
```

## Daftar Endpoint

Base URL: `http://127.0.0.1:8000`. Semua respons memakai format `status`, `message`, `data`.

| Method | Endpoint                         | Fungsi                                    | Status                          |
| ------ | -------------------------------- | ----------------------------------------- | ------------------------------- |
| GET    | `/api/portfolio/profile`         | Data profil pemilik portofolio            | 200 / 404 jika profil belum ada |
| GET    | `/api/portfolio/skills`          | Daftar skill, diurutkan per kategori      | 200                             |
| GET    | `/api/portfolio/projects`        | Daftar proyek beserta skill-nya           | 200                             |
| GET    | `/api/portfolio/projects/{slug}` | Detail satu proyek berdasarkan slug       | 200 / 404                       |
| GET    | `/api/portfolio/experiences`     | Riwayat pendidikan, organisasi, dan kerja | 200                             |
| GET    | `/api/portfolio/certificates`    | Daftar sertifikat                         | 200                             |

Contoh respons sukses:

```json
{
    "status": "success",
    "message": "Data skill berhasil diambil.",
    "total": 7,
    "data": [
        {
            "id": 1,
            "name": "HTML5",
            "category": "Frontend",
            "level": "Advanced",
            "icon": null
        }
    ]
}
```

## Bukti Pengujian

> Ganti dengan screenshot Postman / Thunder Client / Bruno milikmu.
> Simpan gambar di folder `docs/screenshots/` lalu sesuaikan nama file di bawah.

| Endpoint                                             | Screenshot                                         |
| ---------------------------------------------------- | -------------------------------------------------- |
| `/api/portfolio/profile` (200 OK)                    | ![profile](docs/screenshots/profile.png)           |
| `/api/portfolio/skills` (200 OK)                     | ![skills](docs/screenshots/skills.png)             |
| `/api/portfolio/projects` (200 OK)                   | ![projects](docs/screenshots/projects.png)         |
| `/api/portfolio/experiences` (200 OK)                | ![experiences](docs/screenshots/experiences.png)   |
| `/api/portfolio/certificates` (200 OK)               | ![certificates](docs/screenshots/certificates.png) |
| `/api/portfolio/projects/slug-palsu` (404 Not Found) | ![404](docs/screenshots/not-found.png)             |
| Panel API Status di halaman welcome                  | ![welcome](docs/screenshots/welcome.png)           |

## Penjelasan N+1 Query Problem

> Tulis ulang dengan kata-katamu sendiri; draf ini hanya kerangka.

N+1 Query Problem terjadi ketika aplikasi mengambil N data induk dengan 1 query, lalu mengambil
data relasi tiap induk dengan query terpisah di dalam perulangan, sehingga totalnya 1 + N query.
Pada endpoint `/api/portfolio/projects`, tanpa eager loading, 3 proyek berarti 1 query untuk
proyek ditambah 3 query untuk skill masing-masing, yaitu 4 query. Dengan 100 proyek jadinya 101 query.

Solusinya eager loading: `Project::with('skills')->get()`. Laravel hanya menjalankan 2 query
(satu untuk proyek, satu untuk semua skill terkait) berapa pun jumlah proyeknya. Ini penting
terutama di database cloud, karena setiap query menambah waktu bolak-balik jaringan.

## Perbedaan Routing API: Laravel 10 vs Laravel 11

> Tulis ulang dengan kata-katamu sendiri; draf ini hanya kerangka.

- **Laravel 10:** `routes/api.php` sudah tersedia sejak instalasi dan otomatis terdaftar lewat
  `RouteServiceProvider`, dengan prefix `/api` dan middleware group `api`.
- **Laravel 11:** struktur proyek lebih ramping dan `routes/api.php` tidak dibuat secara default.
  File tersebut diaktifkan dengan `php artisan install:api`, yang juga memasang Laravel Sanctum
  dan mendaftarkan rute API di `bootstrap/app.php`.

Pada proyek ini `php artisan install:api` dijalankan, dan 6 rute terdaftar di bawah `/api/portfolio`.
