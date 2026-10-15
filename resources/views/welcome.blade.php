<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Rizky Rasyid Pratama | Back-End Developer & Software Engineer' }}</title>
  
  <!-- Laravel Vite CSS & JS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://googleapis.com">
  <link rel="preconnect" href="https://gstatic.com" crossorigin>
  <link href="https://googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-blue-500/20 selection:text-blue-400">

  <!-- NAVBAR STRUCTURE -->
  <header class="sticky top-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-900">
    <div class="max-w-5xl mx-auto px-6 h-20 flex items-center justify-between">
      <a href="#" class="text-lg font-bold tracking-tight text-white group">
        <span class="text-blue-500 font-mono transition-transform group-hover:scale-110 inline-block">&lt;</span>RizkyRasyid<span class="text-blue-500 font-mono transition-transform group-hover:scale-110 inline-block"> /&gt;</span>
      </a>
      <nav class="hidden md:flex items-center space-x-8 text-xs font-semibold tracking-wider uppercase text-slate-400">
        <a href="#about" class="hover:text-blue-400 transition">Profil</a>
        <a href="#stack" class="hover:text-blue-400 transition">Kompetensi</a>
        <a href="#works" class="hover:text-blue-400 transition">Portofolio</a>
        <a href="#contact" class="hover:text-blue-400 transition">Kontak</a>
      </nav>
    </div>
  </header>

  <main class="max-w-5xl mx-auto px-6 py-12 space-y-24">
    
    <!-- MIDNIGHT HERO SECTION STRUCTURE -->
    <section class="py-8">
      <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-12">
        <div class="max-w-2xl space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 text-xs font-medium tracking-wide text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>
            Fokus: Back-End & Data Engineering
          </div>
          <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-[1.05]">
            Membangun Logika Komputasi & <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-clip-text text-transparent">Sistem Web Skalabel.</span>
          </h1>
          <p class="text-base md:text-lg text-slate-400 leading-relaxed max-w-xl">
            Halo, saya <span class="text-white font-medium">Rizky Rasyid Pratama</span>. Mahasiswa Informatika yang mendedikasikan fokus pada rekayasa perangkat lunak fungsional, optimasi arsitektur database, dan otomatisasi sistem modern.
          </p>
          <div class="pt-4 flex flex-wrap gap-4">
            <a href="#works" class="px-6 py-3 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-500 shadow-lg shadow-blue-600/20 transition">
              Eksplorasi Proyek
            </a>
            <a href="#contact" class="px-6 py-3 text-sm font-semibold text-slate-400 bg-slate-900 border border-slate-800 rounded-lg hover:bg-slate-800 hover:text-white transition">
              Mari Berdiskusi
            </a>
          </div>
        </div>
        <div class="shrink-0">
          <!-- Layered Glowing Border for Profile Image Structure -->
          <div class="relative w-44 h-44 md:w-56 md:h-56 rounded-full p-1 bg-gradient-to-tr from-blue-500 via-indigo-500 to-purple-500 shadow-xl shadow-blue-500/10">
            <img 
              src="/portofolio/images/profil.jpeg" 
              alt="Foto Rizky Rasyid Pratama" 
              class="w-full h-full rounded-full object-cover border-4 border-slate-950"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- TENTANG SAYA STRUCTURE -->
    <section id="about" class="grid grid-cols-1 md:grid-cols-3 gap-8 py-12 border-t border-slate-900">
      <div>
        <h2 class="text-sm font-bold uppercase tracking-widest text-blue-400 font-mono">// 01. Analisis Profil</h2>
      </div>
      <div class="md:col-span-2 space-y-4 text-base leading-relaxed text-slate-400">
        <p>
          Sebagai mahasiswa <strong class="text-white font-semibold">Informatika</strong>, saya mendalami bagaimana sebuah sistem backend dirancang dengan efisiensi tinggi. Fokus saya meliputi manajemen manipulasi data dinamis, integrasi fungsional RESTful API, serta optimalisasi struktur basis data relasional.
        </p>
        <p>
          Saya lebih mengutamakan penulisan kode yang bersih (*clean code*), terdokumentasi, dan memiliki performa komputasi yang cepat dibandingkan dekorasi visual yang berlebihan. Saya siap menghadapi tantangan teknis kompleks melalui pendekatan rekayasa yang terukur.
        </p>
      </div>
    </section>

    <!-- BENTO GRID KEAHLIAN STRUCTURE -->
    <section id="stack" class="space-y-6">
      <h2 class="text-sm font-bold uppercase tracking-widest text-indigo-400 font-mono">// 02. Spesifikasi Stack</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        
        <!-- Box 1 -->
        <div class="p-6 bg-slate-900/40 border border-slate-900 rounded-2xl flex flex-col justify-between hover:border-slate-800 transition">
          <span class="text-xs font-bold text-slate-500 font-mono">01 / LOGIC</span>
          <div class="mt-8 space-y-2">
            <h3 class="text-lg font-bold text-white">Bahasa Pemrograman</h3>
            <p class="text-sm text-slate-400">Pemanfaatan Python untuk pemrosesan data, JavaScript untuk interaktivitas asinkronus, dan PHP untuk membangun fondasi logika backend.</p>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="p-8 bg-gradient-to-br from-blue-950/40 via-indigo-950/20 to-slate-950 border border-blue-900/30 rounded-2xl flex flex-col justify-between md:col-span-2">
          <span class="text-xs font-bold text-blue-400 font-mono">02 / ARCHITECTURE</span>
          <div class="mt-12 space-y-2">
            <h3 class="text-xl font-black text-white uppercase tracking-tight">Ekosistem Laravel & Tailwind CSS</h3>
            <p class="text-sm text-slate-400">Implementasi arsitektur MVC Modular (Laravel) yang menjamin keamanan rute sistem, dikombinasikan dengan sistem utilitas Tailwind CSS untuk efisiensi render antarmuka modern.</p>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="p-8 bg-slate-900/40 border border-slate-900 rounded-2xl md:col-span-2 flex flex-col justify-between hover:border-slate-800 transition">
          <span class="text-xs font-bold text-indigo-400 font-mono">03 / STORAGE & INFRASTRUCTURE</span>
          <div class="mt-12 space-y-2">
            <h3 class="text-xl font-bold text-white">MySQL & Kontrol Repositori</h3>
            <p class="text-sm text-slate-400">Perancangan skema relasi database (DDL/DML) yang ternormalisasi, manajemen kolaborasi kode berbasis Git/GitHub Version Control, serta optimalisasi *environment* kerja via VS Code.</p>
          </div>
        </div>

        <!-- Box 4 -->
        <div class="p-6 bg-slate-900 text-slate-100 border border-slate-800 rounded-2xl flex flex-col justify-between">
          <span class="text-xs font-bold text-slate-400 font-mono">04 / CORE METRIC</span>
          <div class="mt-8 space-y-2">
            <h3 class="text-lg font-bold text-white">Prinsip OOP & Modular</h3>
            <p class="text-sm text-slate-400">Menjaga kode tetap memiliki skalabilitas tinggi, meminimalkan redundansi, serta mempermudah proses pelacakan *bug*.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- PROYEK PILIHAN STRUCTURE -->
    <section id="works" class="space-y-6">
      <h2 class="text-sm font-bold uppercase tracking-widest text-purple-400 font-mono">// 03. Rekam Jejak Proyek</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Work 1 -->
        <article class="bg-slate-900/30 border border-slate-900 p-8 rounded-2xl flex flex-col justify-between space-y-6 hover:border-slate-800 transition">
          <div class="space-y-4">
            <span class="text-xs font-mono text-blue-400">[ Arsitektur Web ]</span>
            <h3 class="text-xl font-bold text-white tracking-tight">Sistem Informasi Akademik Terpadu</h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Rancang bangun aplikasi web pengelolaan manajemen data mahasiswa, otomatisasi pemetaan nilai berkas, serta restriksi keamanan menggunakan autentikasi akun berdasarkan tingkatan hak akses (*role management*).
            </p>
          </div>
          <div class="flex gap-3 text-xs font-mono text-slate-500">
            <span class="px-2 py-0.5 bg-slate-900 rounded">#Laravel-Backend</span>
            <span class="px-2 py-0.5 bg-slate-900 rounded">#Relational-MySQL</span>
          </div>
        </article>

        <!-- Work 2 -->
        <article class="bg-slate-900/30 border border-slate-900 p-8 rounded-2xl flex flex-col justify-between space-y-6 hover:border-slate-800 transition">
          <div class="space-y-4">
            <span class="text-xs font-mono text-purple-400">[ Komputasi Sains ]</span>
            <h3 class="text-xl font-bold text-white tracking-tight">Pemrosesan Analisis Sentimen Sentimen Publik</h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Pengembangan skrip data mining untuk melakukan klasifikasi opini publik berskala masif dari platform digital memanfaatkan model algoritma statistika Naive Bayes serta tokenisasi pemrosesan teks NLP.
            </p>
          </div>
          <div class="flex gap-3 text-xs font-mono text-slate-500">
