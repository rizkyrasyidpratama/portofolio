<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Rizky Rasyid Pratama | Editorial Engineer' }}</title>
  
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
<body class="bg-[#F8F9FA] text-[#1A1A1A] antialiased selection:bg-[#E5E5E5] selection:text-black">

  <!-- NAVIGATION -->
  <header class="sticky top-0 z-50 bg-[#F8F9FA]/80 backdrop-blur-md border-b border-[#E5E5E5]">
    <div class="max-w-5xl mx-auto px-6 h-20 flex items-center justify-between">
      <a href="#" class="text-xl font-bold tracking-tighter text-black uppercase">
        R. Rasyid <span class="text-xs font-normal tracking-normal lowercase text-slate-500">/ porto</span>
      </a>
      <nav class="hidden md:flex items-center space-x-8 text-xs font-semibold uppercase tracking-wider text-slate-600">
        <a href="#tentang" class="hover:text-black transition">About</a>
        <a href="#keahlian" class="hover:text-black transition">Stack</a>
        <a href="#proyek" class="hover:text-black transition">Works</a>
        <a href="#kontak" class="hover:text-black transition">Contact</a>
      </nav>
    </div>
  </header>

  <main class="max-w-5xl mx-auto px-6 py-12 space-y-16">
    
    <!-- EDITORIAL HERO SECTION -->
    <section class="border-b border-black pb-16">
      <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-10">
        <div class="max-w-2xl space-y-6">
          <span class="inline-block text-xs font-bold uppercase tracking-widest text-slate-400">
            [ Undergrad / Informatika ]
          </span>
          <h1 class="text-4xl md:text-6xl font-black text-black tracking-tighter leading-[0.95] uppercase">
            Building Clean Web<br>& Systems Framework.
          </h1>
          <p class="text-lg text-slate-600 leading-relaxed font-normal max-w-xl">
            Halo, saya <span class="font-semibold text-black">Rizky Rasyid Pratama</span>. Fokus pada rekayasa perangkat lunak fungsional dan pemecahan masalah berbasis teknologi web modern.
          </p>
          <div class="pt-4 flex flex-wrap gap-3">
            <a href="#proyek" class="px-6 py-3 text-xs font-bold uppercase tracking-wider text-white bg-black border border-black hover:bg-slate-900 transition">
              Explore Works →
            </a>
            <a href="#kontak" class="px-6 py-3 text-xs font-bold uppercase tracking-wider text-black bg-transparent border border-black hover:bg-black hover:text-white transition">
              Get in Touch
            </a>
          </div>
        </div>
        <div class="shrink-0">
          <div class="relative w-48 h-48 md:w-64 md:h-64 border border-black bg-white p-2">
            <img 
              src="/portofolio/images/profil.jpeg" 
              alt="Rizky Rasyid Pratama" 
              class="w-full h-full object-cover filter grayscale contrast-125 hover:grayscale-0 transition duration-500"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION ABOUT: NON-SIMETRIS -->
    <section id="tentang" class="grid grid-cols-1 md:grid-cols-3 gap-8 py-8 border-b border-slate-200">
      <div>
        <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400">// Overview</h2>
      </div>
      <div class="md:col-span-2 space-y-4 text-base leading-relaxed text-slate-700">
        <p>
          Saya mengeksplorasi arsitektur <strong class="text-black font-semibold">Full-Stack Web Development</strong>, optimalisasi algoritma data, serta skalabilitas manajemen basis data relasional langsung dari akar kodenya.
        </p>
        <p>
          Lebih menyukai kode yang ringkas, terdokumentasi, dan efisien dibandingkan dekorasi animasi visual yang berlebihan. Berkomitmen untuk terus membangun sistem digital yang fungsional dan kokoh.
        </p>
      </div>
    </section>

    <!-- SECTION BENTO GRID STACK -->
    <section id="keahlian" class="space-y-6 pb-16 border-b border-slate-200">
      <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400">// Core Stack</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        
        <!-- Box 1 -->
        <div class="p-8 bg-white border border-[#E5E5E5] flex flex-col justify-between group hover:border-black transition">
          <span class="text-xs font-bold text-slate-400 uppercase">Languages</span>
          <div class="mt-8 space-y-1">
            <h3 class="text-xl font-bold uppercase">Python / JS / PHP</h3>
            <p class="text-xs text-slate-500">Skrip otomatisasi data dan logika backend eksternal.</p>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="p-8 bg-black text-white flex flex-col justify-between md:col-span-2">
          <span class="text-xs font-bold text-slate-500 uppercase">Web Infrastructure</span>
          <div class="mt-12 space-y-2">
            <h3 class="text-2xl font-black uppercase tracking-tight text-white">Laravel & Tailwind Frameworks</h3>
            <p class="text-sm text-slate-400 max-w-md">Membangun arsitektur modular yang responsif, terstruktur, dan memiliki integrasi rute yang aman.</p>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="p-8 bg-white border border-[#E5E5E5] md:col-span-2 flex flex-col justify-between group hover:border-black transition">
          <span class="text-xs font-bold text-slate-400 uppercase">Persistence & Tools</span>
          <div class="mt-12 space-y-2">
            <h3 class="text-2xl font-bold uppercase text-black">MySQL / Version Control Git</h3>
            <p class="text-sm text-slate-500 max-w-md">Skema relasi database terkompilasi, kolaborasi repositori GitHub aktif, dan optimasi kerja via VS Code.</p>
          </div>
        </div>

        <!-- Box 4 -->
        <div class="p-8 bg-[#E5E5E5] border border-transparent flex flex-col justify-between text-black">
          <span class="text-xs font-bold text-slate-500 uppercase">Paradigms</span>
          <div class="mt-8 space-y-1">
            <h3 class="text-xl font-bold uppercase">Clean Code Approach</h3>
            <p class="text-xs text-slate-600">Efisiensi baris perintah, modularitas tinggi, dan kemudahan skalabilitas sistem.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- SECTION WORKS -->
    <section id="proyek" class="space-y-6 pb-16 border-b border-black">
      <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400">// Selected Works</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Work 1 -->
        <div class="bg-white border border-[#E5E5E5] p-8 flex flex-col justify-between space-y-8 hover:border-black transition">
          <div class="space-y-4">
            <span class="text-xs font-bold uppercase px-2 py-1 bg-slate-100 border border-slate-200">[ Web System ]</span>
            <h3 class="text-2xl font-black uppercase tracking-tight">Sistem Informasi Akademik Minimalis</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              Arsitektur aplikasi web terpadu untuk manajemen basis data mahasiswa, pemetaan nilai akademik, dan otentikasi pendaftaran berbasis tingkatan hak akses pengguna.
            </p>
          </div>
          <div class="flex gap-2 text-xs font-mono text-slate-400">
            <span>#Laravel</span> <span>#MySQL</span>
          </div>
        </div>

        <!-- Work 2 -->
        <div class="bg-white border border-[#E5E5E5] p-8 flex flex-col justify-between space-y-8 hover:border-black transition">
          <div class="space-y-4">
            <span class="text-xs font-bold uppercase px-2 py-1 bg-slate-100 border border-slate-200">[ Data Machine ]</span>
            <h3 class="text-2xl font-black uppercase tracking-tight">Analisis Sentimen Media Sosial</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              Program komputasi klasifikasi data opini publik secara masif memanfaatkan model klasifikasi Naive Bayes serta pengolahan tokenisasi teks Natural Language Processing.
            </p>
          </div>
          <div class="flex gap-2 text-xs font-mono text-slate-400">
            <span>#Python</span> <span>#Pandas</span>
          </div>
        </div>

      </div>
    </section>

    <!-- SECTION CONTACT & FOOTER -->
    <section id="kontak" class="py-12 bg-black text-white p-8 md:p-12 space-y-8">
      <div class="max-w-xl space-y-4">
        <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter">Let's Collaborate.</h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Terbuka untuk kolaborasi riset rekayasa perangkat lunak, pengembangan sistem backend, industri magang, maupun pemecahan problem digital kompleks.
        </p>
      </div>
      <div class="flex flex-wrap gap-4 pt-4 border-t border-slate-800">
        <a href="mailto:rizkyrasyidpratama@gmail.com" class="px-6 py-3 text-xs font-bold uppercase tracking-wider bg-white text-black hover:bg-slate-200 transition">
          Send Email ↗
        </a>
        <a href="https://github.com" target="_blank" class="px-6 py-3 text-xs font-bold uppercase tracking-wider bg-transparent border border-white text-white hover:bg-white hover:text-black transition">
          GitHub Repository
        </a>
      </div>
    </section>

  </main>

  <footer class="max-w-5xl mx-auto px-6 py-8 flex flex-col md:flex-row justify-between items-center text-xs font-mono text-slate-400 gap-4">
