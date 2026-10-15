<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Rizky Rasyid Pratama | System Architect & Developer' }}</title>
  
  <!-- Laravel Vite CSS & JS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://googleapis.com">
  <link rel="preconnect" href="https://gstatic.com" crossorigin>
  <link href="https://googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-blue-500/20 selection:text-blue-400">

  <!-- NAVBAR -->
  <header class="sticky top-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-900">
    <div class="max-w-5xl mx-auto px-6 h-20 flex items-center justify-between">
      <a href="#" class="text-lg font-bold tracking-tight text-white">
        <span class="text-blue-500 font-mono">&lt;</span>RizkyRasyid<span class="text-blue-500 font-mono"> /&gt;</span>
      </a>
      <nav class="hidden md:flex items-center space-x-8 text-xs font-semibold tracking-wider uppercase text-slate-400">
        <a href="#tentang" class="hover:text-blue-400 transition">About</a>
        <a href="#keahlian" class="hover:text-blue-400 transition">Stack</a>
        <a href="#proyek" class="hover:text-blue-400 transition">Works</a>
        <a href="#kontak" class="hover:text-blue-400 transition">Contact</a>
      </nav>
    </div>
  </header>

  <main class="max-w-5xl mx-auto px-6 py-12 space-y-24">
    
    <!-- MIDNIGHT HERO SECTION -->
    <section class="py-8">
      <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-12">
        <div class="max-w-2xl space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 text-xs font-medium tracking-wide text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>
            Informatika Engineer
          </div>
          <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-[1.05]">
            Membangun Logika Backend & <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-clip-text text-transparent">Arsitektur Web Clean.</span>
          </h1>
          <p class="text-base md:text-lg text-slate-400 leading-relaxed max-w-xl">
            Halo, saya <span class="text-white font-medium">Rizky Rasyid Pratama</span>. Mahasiswa Informatika yang berfokus penuh pada rekayasa perangkat lunak fungsional dan otomatisasi sistem modern.
          </p>
          <div class="pt-4 flex flex-wrap gap-4">
            <a href="#proyek" class="px-6 py-3 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-500 shadow-lg shadow-blue-600/20 transition">
              Lihat Proyek Pilihan
            </a>
            <a href="#kontak" class="px-6 py-3 text-sm font-semibold text-slate-400 bg-slate-900 border border-slate-800 rounded-lg hover:bg-slate-800 hover:text-white transition">
              Hubungi Hubungi
            </a>
          </div>
        </div>
        <div class="shrink-0">
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

    <!-- TENTANG SAYA -->
    <section id="tentang" class="grid grid-cols-1 md:grid-cols-3 gap-8 py-12 border-t border-slate-900">
      <div>
        <h2 class="text-sm font-bold uppercase tracking-widest text-blue-400 font-mono">// 01. Profile</h2>
      </div>
      <div class="md:col-span-2 space-y-4 text-base leading-relaxed text-slate-400">
        <p>
          Saya mengeksplorasi arsitektur <strong class="text-white font-semibold">Full-Stack Web Development</strong>, pengelolaan relasi basis data, serta komputasi terstruktur langsung dari logika dasarnya.
        </p>
        <p>
          Saya aktif membangun proyek perangkat lunak dengan pendekatan kode yang bersih (*clean code*) dan efisien. Berkomitmen kuat untuk merancang solusi sistem yang andal dan mudah dikembangkan di masa mendatang.
        </p>
      </div>
    </section>

    <!-- BENTO GRID KEAHLIAN -->
    <section id="keahlian" class="space-y-6">
      <h2 class="text-sm font-bold uppercase tracking-widest text-indigo-400 font-mono">// 02. Core Stack</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        
        <!-- Box 1 -->
        <div class="p-6 bg-slate-900/40 border border-slate-900 rounded-2xl flex flex-col justify-between hover:border-slate-800 transition">
          <span class="text-xs font-bold text-slate-500 font-mono">01 / STACK</span>
          <div class="mt-8 space-y-2">
            <h3 class="text-lg font-bold text-white">Bahasa Pemrograman</h3>
            <p class="text-sm text-slate-400">Python, JavaScript, dan PHP untuk otomatisasi data serta pengolahan logika sistem backend.</p>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="p-8 bg-gradient-to-br from-blue-950/40 via-indigo-950/20 to-slate-950 border border-blue-900/30 rounded-2xl flex flex-col justify-between md:col-span-2">
          <span class="text-xs font-bold text-blue-400 font-mono">02 / INFRASTRUCTURE</span>
          <div class="mt-12 space-y-2">
            <h3 class="text-xl font-black text-white uppercase tracking-tight">Laravel Framework & Tailwind CSS v4</h3>
            <p class="text-sm text-slate-400">Arsitektur web modular dengan integrasi keamanan bawaan, manajemen rute dinamis, serta desain antarmuka modern yang sangat responsif.</p>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="p-8 bg-slate-900/40 border border-slate-900 rounded-2xl md:col-span-2 flex flex-col justify-between hover:border-slate-800 transition">
          <span class="text-xs font-bold text-indigo-400 font-mono">03 / PERSISTENCE</span>
          <div class="mt-12 space-y-2">
            <h3 class="text-xl font-bold text-white">MySQL & Version Control Tools</h3>
            <p class="text-sm text-slate-400">Perancangan skema relasi basis data terstruktur, manajemen kolaborasi kode via Git/GitHub, serta optimalisasi alur kerja menggunakan editor VS Code.</p>
          </div>
        </div>

        <!-- Box 4 -->
        <div class="p-6 bg-slate-900 text-slate-100 border border-slate-800 rounded-2xl flex flex-col justify-between">
          <span class="text-xs font-bold text-slate-400 font-mono">04 / CORE VALUE</span>
          <div class="mt-8 space-y-2">
            <h3 class="text-lg font-bold text-white">Clean Code Approach</h3>
            <p class="text-sm text-slate-400">Mengutamakan efisiensi baris instruksi koding, kemudahan pelacakan bug, dan skalabilitas sistem yang bersih.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- PROYEK PILIHAN -->
    <section id="proyek" class="space-y-6">
      <h2 class="text-sm font-bold uppercase tracking-widest text-purple-400 font-mono">// 03. Selected Works</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Work 1 -->
        <div class="bg-slate-900/30 border border-slate-900 p-8 rounded-2xl flex flex-col justify-between space-y-6 hover:border-slate-800 transition">
          <div class="space-y-4">
            <span class="text-xs font-mono text-blue-400">[ Aplikasi Web ]</span>
            <h3 class="text-xl font-bold text-white tracking-tight">Sistem Informasi Akademik Minimalis</h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Arsitektur aplikasi web terpadu untuk pengelolaan basis data mahasiswa, pemetaan nilai berkas akademik, serta manajemen otentikasi hak akses berlapis pengguna.
            </p>
          </div>
          <div class="flex gap-3 text-xs font-mono text-slate-500">
            <span class="px-2 py-0.5 bg-slate-900 rounded">#Laravel</span>
            <span class="px-2 py-0.5 bg-slate-900 rounded">#MySQL</span>
          </div>
        </div>

        <!-- Work 2 -->
        <div class="bg-slate-900/30 border border-slate-900 p-8 rounded-2xl flex flex-col justify-between space-y-6 hover:border-slate-800 transition">
          <div class="space-y-4">
            <span class="text-xs font-mono text-purple-400">[ Komputasi Data ]</span>
            <h3 class="text-xl font-bold text-white tracking-tight">Analisis Sentimen Media Sosial</h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Program komputasi klasifikasi data opini publik secara berkala memanfaatkan implementasi model statistik Naive Bayes serta pemrosesan teks Natural Language Processing.
            </p>
          </div>
          <div class="flex gap-3 text-xs font-mono text-slate-500">
            <span class="px-2 py-0.5 bg-slate-900 rounded">#Python</span>
            <span class="px-2 py-0.5 bg-slate-900 rounded">#Pandas</span>
          </div>
        </div>

      </div>
    </section>

    <!-- KONTAK & FOOTER -->
    <section id="kontak" class="py-12 bg-gradient-to-r from-slate-900 to-indigo-950/40 border border-slate-900 rounded-3xl p-8 md:p-12 space-y-6 text-center md:text-left md:flex md:items-center md:justify-between md:gap-8 md:space-y-0">
      <div class="max-w-xl space-y-3">
        <h2 class="text-3xl font-black text-white tracking-tight">Mari Mulai Kolaborasi.</h2>
        <p class="text-slate-400 text-sm leading-relaxed">
