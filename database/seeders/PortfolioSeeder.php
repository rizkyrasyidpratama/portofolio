<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Certificate;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data Profil Mahasiswa
        Profile::create([
            'full_name'     => 'Rizky Rasyid Pratama', // GANTI DENGAN DATA ASLI ANDA
            'headline'      => 'Informatics Student | Aspiring Web Developer',
            'bio'           => 'Mahasiswa Teknik Informatika yang bersemangat dalam pengembangan web modern, full-stack development, dan desain antarmuka responsif.',
            'photo_url'     => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80',
            'cv_url'        => 'https://example.com/cv.pdf',
            'email'         => 'mahasiswa@example.com',
            'phone'         => '081234567890',
            'location'      => 'Lampung, Indonesia',
            'github_url'    => 'https://github.com/rizkyrasyidpratama/portofolio/tree/main',
            'linkedin_url'  => 'https://linkedin.com',
            'instagram_url' => 'https://instagram.com',
        ]);

        // 2. Data Skills (Minimal 6 Skill dalam berbagai kategori)
        $skillHtml = Skill::create(['name' => 'HTML5', 'category' => 'Frontend', 'level' => 'Advanced']);
        $skillCss  = Skill::create(['name' => 'Tailwind CSS', 'category' => 'Frontend', 'level' => 'Advanced']);
        $skillJs   = Skill::create(['name' => 'JavaScript', 'category' => 'Frontend', 'level' => 'Intermediate']);
        $skillPhp  = Skill::create(['name' => 'PHP', 'category' => 'Backend', 'level' => 'Intermediate']);
        $skillLrv  = Skill::create(['name' => 'Laravel', 'category' => 'Backend', 'level' => 'Intermediate']);
        $skillSql  = Skill::create(['name' => 'MySQL', 'category' => 'Database', 'level' => 'Intermediate']);
        $skillGit  = Skill::create(['name' => 'Git & GitHub', 'category' => 'Tools', 'level' => 'Advanced']);

        // 3. Data Projects (Minimal 3 Proyek) + Hubungkan dengan Skills
        $proj1 = Project::create([
            'title'         => 'Aplikasi Portofolio Personal Responsif',
            'slug'          => Str::slug('Aplikasi Portofolio Personal Responsif'),
            'summary'       => 'Website portofolio modern menggunakan Tailwind CSS dan integrasi REST API Laravel.',
            'description'   => 'Proyek website satu halaman yang memamerkan hasil karya, pengalaman, dan keahlian dengan tampilan mobile-first.',
            'thumbnail_url' => 'https://placehold.co/640x360',
            'demo_url'      => 'https://demo.example.com',
            'github_url'    => 'https://github.com/mahasiswa/portfolio',
            'is_featured'   => true,
        ]);
        // Menghubungkan Project 1 dengan Skill terkait via Pivot Table:
        // TIP STANDAR INDUSTRI: Gunakan sync() daripada attach() agar id relasi tidak terduplikasi jika seeder diulang
        $proj1->skills()->sync([$skillHtml->id, $skillCss->id, $skillJs->id]);

        $proj2 = Project::create([
            'title'         => 'Sistem Informasi Kasir Sederhana',
            'slug'          => Str::slug('Sistem Informasi Kasir Sederhana'),
            'summary'       => 'Aplikasi desktop kasir dengan fitur katalog barang, keranjang, dan cetak struk.',
            'description'   => 'Aplikasi dibangun menggunakan pemrograman terstruktur dengan penghitungan diskon dinamis.',
            'thumbnail_url' => 'https://placehold.co/640x360',
            'demo_url'      => null,
            'github_url'    => 'https://github.com/mahasiswa/kasir-app',
            'is_featured'   => false,
        ]);
        $proj2->skills()->attach([$skillGit->id]);

        $proj3 = Project::create([
            'title'         => 'RESTful API Manajemen Pengguna',
            'slug'          => Str::slug('RESTful API Manajemen Pengguna'),
            'summary'       => 'Backend layanan microservice dengan otentikasi Sanctum dan validasi form.',
            'description'   => 'Endpoint JSON terstandarisasi untuk mengelola data anggota organisasi kampus.',
            'thumbnail_url' => 'https://placehold.co/640x360',
            'demo_url'      => null,
            'github_url'    => 'https://github.com/mahasiswa/api-service',
            'is_featured'   => true,
        ]);
        $proj3->skills()->attach([$skillPhp->id, $skillLrv->id, $skillSql->id]);

        // 4. Data Experiences (Pendidikan & Organisasi)
        Experience::create([
            'title'        => 'Mahasiswa S1 Teknik Informatika',
            'organization' => 'Nama Universitas Anda',
            'type'         => 'Pendidikan',
            'start_date'   => '2023-09-01',
            'end_date'     => null,
            'is_current'   => true,
            'description'  => 'Mempelajari algoritma pemrograman, rekayasa perangkat lunak, dan teknologi web.',
        ]);

        Experience::create([
            'title'        => 'Staff Divisi Hubungan Masyarakat',
            'organization' => 'Himpunan Mahasiswa Informatika',
            'type'         => 'Organisasi',
            'start_date'   => '2024-01-10',
            'end_date'     => null,
            'is_current'   => true,
            'description'  => 'Mengelola publikasi kegiatan akademik dan menyelenggarakan webinar teknologi.',
        ]);

        // 5. Data Certificates
        Certificate::create([
            'title'          => 'Belajar Dasar Pemrograman Web',
            'issuer'         => 'Dicoding Academy',
            'issued_date'    => '2024-03-15',
            'credential_url' => 'https://dicoding.com/certificates/EXAMPLE123',
            'description'    => 'Menyelesaikan modul pengantar HTML, CSS, dan dasar JavaScript.',
        ]);
    }
}
