<x-app-layout :title="'Utama'">
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('/images/ilovekgbudiman.jpg');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 flex flex-col lg:flex-row items-center justify-between gap-10 text-white">
        
        <!-- Text Section -->
        <div class="max-w-2xl">
        <h2 class="text-4xl md:text-5xl font-bold leading-tight">
            <span class="text-[#c1121f]">Selamat Datang</span> ke<br />
            <span class="text-white">Kampung Budiman</span>
        </h2>

        <p class="mt-6 text-gray-200 leading-relaxed">
            Sebuah komuniti harmoni yang berteraskan nilai kemanusiaan, gotong-royong, dan semangat kejiranan.
        </p>

        <p class="mt-3 text-gray-200 leading-relaxed">
            Di sini, kami meraikan kehidupan desa yang penuh ketenangan, sambil melangkah ke arah kemajuan bersama.
        </p>

        <!-- CTA Button -->
        <div class="mt-8">
            <a href="#"
            class="inline-flex items-center px-5 py-3 text-sm font-medium rounded-lg text-white
                    bg-linear-to-r from-primary to-tertiary
                    hover:opacity-90 transition">
            Ketahui Lebih Lanjut
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"></path>
            </svg>
            </a>
        </div>
        </div>

        <!-- Logo Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8 w-full max-w-sm">
        <img src="/images/jpkk.png" alt="JPKK Kampung Budiman" class="w-full h-auto" />
        </div>

    </div>
    </section>

    <!-- Pengenalan -->

    <!-- Lokasi & waktu berurusan -->

</x-app-layout>