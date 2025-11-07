@php
    // Define the custom gradient for buttons and main elements
    $gradientClass = "bg-gradient-to-r from-primary to-tertiary";

    
    // Placeholder image URL for the background (similar to hero section)
    $imageUrl = 'https://placehold.co/1920x1080/282828/ffffff?text=Supermarket+Aisle+Background';
@endphp

<!-- Menggunakan x-app-layout yang anda sediakan sebagai wrapper utama -->
<x-app-layout>
    <div class="min-h-screen relative flex items-center justify-center p-4 font-sans overflow-hidden">
        
        <!-- 1. Background Image with Overlay (Similar to Hero Section) -->
        <div class="absolute inset-0">
            <img src="{{ $imageUrl }}"
                 alt="Latar Belakang Pasaraya"
                 class="w-full h-full object-cover">
            
            <!-- Dark Overlay with Primary Color Tint for Readability -->
            {{-- <div class="absolute inset-0 bg-primary bg-opacity-10"></div> --}}
            <div class="absolute inset-0 bg-gray-100"></div>
        </div>

        <!-- 2. Main Login Container (Split Card) -->
        <div class="relative z-10 w-full max-w-5xl bg-white rounded-2xl shadow-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 shadow-lg">
            
            <!-- KIRI: Marketing / Teks Promosi -->
            <div class="p-10 flex flex-col justify-center text-white min-h-[450px] bg-primary bg-linear-to-br from-primary to-tertiary">
                <div class="space-y-4">
                    <h2 class="text-4xl font-extrabold leading-tight drop-shadow-md">
                        Selamat Datang ke
                        <span>Sistem Admin!</span>
                    </h2>
                    <p class="text-lg font-light opacity-90">
                        Sila log masuk untuk menguruskan maklumat perniagaan, aktiviti terkini, dan pengumuman rasmi Kampung Budiman.
                    </p>
                    <div class="pt-4">
                        <span class="inline-block py-1 px-4 text-xs font-semibold rounded-full bg-white text-primary shadow-lg">
                            Pengurusan Digital Komuniti
                        </span>
                    </div>
                </div>
            </div>

            <!-- KANAN: Form Log Masuk -->
            <div class="p-8 md:p-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    Log Masuk Admin
                </h2>

                <form class="space-y-6">
                    <!-- Input E-mel -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Alamat E-mel
                        </label>
                        <div class="relative">
                            <!-- Ikon E-mel -->
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <input id="email" 
                                   name="email" 
                                   type="email" 
                                   required 
                                   placeholder="contoh@kampung.my"
                                   autocomplete="email" 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:border-primary focus:ring-1 focus:ring-primary transition duration-200">
                        </div>
                        <!-- @error('email') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror -->
                    </div>

                    <!-- Input Kata Laluan -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Kata Laluan
                        </label>
                        <div class="relative">
                            <!-- Ikon Kunci -->
                             <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            </div>
                            <input id="password" 
                                   name="password" 
                                   type="password" 
                                   required 
                                   placeholder="Masukkan kata laluan anda"
                                   autocomplete="current-password" 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:border-primary focus:ring-1 focus:ring-primary transition duration-200">
                        </div>
                        <!-- @error('password') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror -->
                    </div>

                    <!-- Pilihan Ingat Saya & Lupa Kata Laluan -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" 
                                   name="remember" 
                                   type="checkbox" 
                                   class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary"
                                   style="--tw-ring-color: var(--color-primary);">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Ingat Saya
                            </label>
                        </div>

                        <a href="#" class="text-sm font-medium text-primary hover:text-tertiary transition duration-200">
                            Lupa Kata Laluan?
                        </a>
                    </div>

                    <!-- Butang Log Masuk (dengan Gradien) -->
                    <div>
                        <button type="submit" 
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-semibold text-white transition duration-300 ease-in-out {{ $gradientClass }} focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transform hover:scale-[1.01]">
                            Log Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>