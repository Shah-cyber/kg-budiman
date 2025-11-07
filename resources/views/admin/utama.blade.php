<x-admin-layout :title="'Dashboard Admin'">

    <!-- Tambah padding menyeluruh (kiri, kanan, atas, bawah) -->
    <div class="p-4 sm:p-6 lg:p-8 space-y-8">

        <!-- SELAMAT DATANG ADMIN & KETERANGAN SISTEM -->
        <header class="p-6 md:p-10 rounded-xl bg-linear-to-r from-primary to-secondary shadow-2xl shadow-primary-500/50 text-white">
            <h1 class="text-4xl font-extrabold mb-2 tracking-tight">
                Selamat Datang, Admin!
            </h1>
            <p class="text-secondary-100/90 text-lg max-w-3xl">
                Sistem pengurusan ini membolehkan anda memantau Ahli Jawatankuasa, Fasiliti, aktiviti BizHub, dan mengurus pengumuman terkini.
            </p>
        </header>

        <!-- DASHBOARD CARDS (STATISTICS) -->
        <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Kad 1: Senarai Aktiviti (Menggunakan Primary/Tertiary Gradient) --}}
            <div class="p-5 rounded-xl text-white shadow-lg transform hover:scale-[1.03] transition duration-300
                        bg-linear-to-br from-stone-500 to-stone-900">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold uppercase opacity-80">Aktiviti</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 opacity-70">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <path d="M21 13a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        <path d="M3 10h18"></path>
                        <path d="M12 15v5"></path>
                        <path d="M10 17h4"></path>
                    </svg>
                </div>
                <div class="mt-4">
                    <p class="text-3xl font-bold">120</p>
                    <p class="text-sm opacity-80">Jumlah Aktiviti Bulan Ini</p>
                </div>
                <a href="#" class="mt-3 block text-right text-sm font-medium hover:underline opacity-90">Lihat Semua</a>
            </div>

            {{-- Kad 2: Fasiliti (Menggunakan Secondary Color) --}}
            <div class="p-5 rounded-xl text-white shadow-lg transform hover:scale-[1.03] transition duration-300
                        bg-linear-to-br from-amber-500 to-amber-900">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold uppercase opacity-80">Fasiliti</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 opacity-70">
                        <path d="M12 20V10"></path>
                        <path d="M18 20V4"></path>
                        <path d="M6 20v-4"></path>
                    </svg>
                </div>
                <div class="mt-4">
                    <p class="text-3xl font-bold">15</p>
                    <p class="text-sm opacity-80">Fasiliti Tersedia</p>
                </div>
                 <a href="#" class="mt-3 block text-right text-sm font-medium hover:underline opacity-90">Urus Fasiliti</a>
            </div>

            {{-- Kad 3: BizHub (Menggunakan Tertiary Color) --}}
            <div class="p-5 rounded-xl text-white shadow-lg transform hover:scale-[1.03] transition duration-300
                        bg-linear-to-br from-emerald-500 to-emerald-900">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold uppercase opacity-80">BizHub</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 opacity-70">
                        <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                        <path d="M17 10h.01"></path>
                        <path d="M7 10h.01"></path>
                        <path d="m7 6-.44-.9a2 2 0 0 1 1.96-2.1h10.96a2 2 0 0 1 1.96 2.1L17 6"></path>
                    </svg>
                </div>
                <div class="mt-4">
                    <p class="text-3xl font-bold">45</p>
                    <p class="text-sm opacity-80">Pengguna Berdaftar BizHub</p>
                </div>
                <a href="#" class="mt-3 block text-right text-sm font-medium hover:underline opacity-90">Laporan BizHub</a>
            </div>

            {{-- Kad 4: Pengumuman Baru (Menggunakan Warna Perhatian) --}}
            <div class="p-5 rounded-xl text-white shadow-lg transform hover:scale-[1.03] transition duration-300
                        bg-linear-to-br from-sky-500 to-sky-900">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold uppercase opacity-80">Pengumuman Baru</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 opacity-70">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                </div>
                <div class="mt-4">
                    <p class="text-3xl font-bold">3</p>
                    <p class="text-sm opacity-80">Menunggu Kelulusan</p>
                </div>
                <a href="#" class="mt-3 block text-right text-sm font-medium hover:underline opacity-90">Urus Pengumuman</a>
            </div>
            
        </section>
        
        <!-- SENARAI TERKINI (Contoh) -->
        <section class="mt-10">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Aktiviti Terkini</h2>
            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md border border-gray-200 dark:border-gray-700">
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-3 flex justify-between items-center">
                        <span class="text-gray-900 dark:text-gray-200 font-medium">Mesyuarat AJK Bulanan</span>
                        <span class="text-xs px-2 py-1 rounded-full bg-primary-100 text-primary-800 dark:bg-primary-900 dark:text-primary-300">Sedang Berlangsung</span>
                    </li>
                    <li class="py-3 flex justify-between items-center">
                        <span class="text-gray-900 dark:text-gray-200 font-medium">Bengkel Pemasaran Digital</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Semalam, 10:00 AM</span>
                    </li>
                    <li class="py-3 flex justify-between items-center">
                        <span class="text-gray-900 dark:text-gray-200 font-medium">Pendaftaran Fasiliti Baru (Dewan)</span>
                        <span class="text-xs px-2 py-1 rounded-full bg-tertiary-100 text-tertiary-800 dark:bg-tertiary-900 dark:text-tertiary-300">Selesai</span>
                    </li>
                </ul>
            </div>
        </section>

    </div>

</x-admin-layout>