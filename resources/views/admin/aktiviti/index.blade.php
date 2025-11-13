<x-admin-layout :title="'Fasiliti'">

    <!-- Tambah padding menyeluruh (kiri, kanan, atas, bawah) -->
    <div class="p-4 sm:p-6 lg:p-8">

        {{-- Menggunakan style button/pill tabs dengan gradient. --}}
        <div class="mb-4">
            
            <!-- Navigation Links: Menggunakan route untuk navigasi dan memenuhkan lebar skrin -->
            <ul class="flex w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400" role="tablist">

                {{-- Tentukan route aktif di sini untuk kegunaan dalam kelas Tailwind --}}
                @php
                    $isAktivitiActive = request()->routeIs('admin.aktiviti.*');
                    $isPengungumanActive = request()->routeIs('admin.pengunguman.*');
                @endphp

                <!-- Tab 1: Senarai Ahli Jawatankuasa (Route: admin.ajk.index) -->
                <li class="flex-1 me-2" role="presentation">
                    <a href="{{ route('admin.aktiviti.index') }}"
                        class="inline-block w-full px-4 py-3 rounded-lg transition duration-300 transform hover:scale-[1.01]
                        {{-- Logik Kelas Aktif: Guna gradient primary-tertiary --}}
                        @if ($isAktivitiActive)
                            text-white bg-linear-to-r from-primary to-tertiary shadow-xl shadow-primary-500/50 active font-semibold
                        @else
                            hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white
                        @endif
                        "
                        aria-current="{{ $isAktivitiActive ? 'page' : 'false' }}">
                        Senarai Aktiviti
                    </a>
                </li>

                <!-- Tab 2: Senarai Fasiliti (Route: admin.fasiliti.index) -->
                <li class="flex-1" role="presentation">
                    <a href="{{ route('admin.pengunguman.index') }}"
                        class="inline-block w-full px-4 py-3 rounded-lg transition duration-300 transform hover:scale-[1.01]
                        {{-- Logik Kelas Aktif: Guna gradient primary-tertiary --}}
                        @if ($isPengungumanActive)
                            text-white bg-linear-to-r from-primary to-tertiary shadow-xl shadow-primary-500/50 active font-semibold
                        @else
                            hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white
                        @endif
                        "
                        aria-current="{{ $isPengungumanActive ? 'page' : 'false' }}">
                        Senarai Pengunguman
                    </a>
                </li>
            </ul>
        </div>

        <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Senarai Aktiviti Kampung</h2>
                <a href="{{ route('admin.aktiviti.create') }}" class="inline-block px-4 py-2 text-sm bg-secondary text-white rounded-lg shadow hover:bg-primary-dark transition duration-300 transform hover:scale-[1.02]">
                    Tambah Aktiviti
                </a>
            </div>

            {{-- search --}}
            <div class="mb-6">
                <label for="search" class="sr-only">Cari Aktiviti</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <!-- Search Icon (Lucide) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 dark:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <input type="text" id="search" name="search" 
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg shadow-sm focus:border-secondary-500 focus:ring-secondary-500 dark:text-white text-sm" 
                           placeholder="Cari mengikut Nama Aktiviti">
                </div>
            </div>

            {{-- table senarai ajk [no., gambar, nama ajk, jawatan, no. telefon ,action(edit, delete)] --}}
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-md">
                    <thead class="bg-gray-100 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">No.</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Gambar</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Nama Aktiviti</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Keterangan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Tarikh</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Penandaan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Tindakan</th>
                        </tr>
                    </thead>
                <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">          
                          
                    <!-- Contoh Baris 1 -->
                    @foreach ($activities as $index => $activity)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $loop->iteration }}
                            </td>

                            {{-- KAROUSEL GAMBAR --}}
                            <td class="px-6 py-4">
                                <div class="relative w-36 h-24 rounded-lg overflow-hidden bg-gray-200 dark:bg-gray-700" id="carousel-container-{{ $index +1}}">
                                    <!-- Imej akan dimasukkan oleh JavaScript -->
                                    <img id="carousel-img-{{ $index+1 }}" src="" alt="Gambar Aktiviti" class="w-full h-full object-cover transition-opacity duration-300">
                                    
                                    <!-- Butang Kiri -->
                                    <button onclick="navigateCarousel('{{ $index }}', -1)" 
                                            class="absolute left-0 top-1/2 -translate-y-1/2 p-1 bg-black/40 hover:bg-black/70 text-white transition rounded-r-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6"/>
                                        </svg>
                                    </button>
                                    
                                    <!-- Butang Kanan -->
                                    <button onclick="navigateCarousel('{{ $index + 1 }}', 1)" 
                                            class="absolute right-0 top-1/2 -translate-y-1/2 p-1 bg-black/40 hover:bg-black/70 text-white transition rounded-l-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6"/>
                                        </svg>
                                    </button>

                                    <!-- Indicator Teks -->
                                    <div id="carousel-indicator-{{ $index + 1 }}" class="absolute bottom-1 right-1 text-xs px-1 bg-black/50 text-white rounded">
                                        0/0
                                    </div>
                                </div>
                            </td>
                            {{-- END KAROUSEL GAMBAR --}}

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{ $activity->title }}
                            </td>
                            <td class="px-6 py-4 max-w-xs text-sm text-gray-900 dark:text-gray-100 truncate">
                                {{ $activity->description }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{ \Carbon\Carbon::parse($activity->date)->format('d/m/Y') }}
                            </td>

                            {{-- Tagging --}}
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                {{-- @foreach ($activity->tags as $tag)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-primary-800 dark:bg-primary-900 dark:text-primary-300 mb-1">
                                        {{ $tag }}
                                    </span>
                                @endforeach --}}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                {{-- <a href="{{ route('admin.aktiviti.edit', $activity->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a> --}}
                                {{-- <form action="{{ route('admin.aktiviti.destroy', $activity->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Adakah anda pasti mahu memadam aktiviti ini?')">
                                        Padam
                                    </button>
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach

                </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Data placeholder untuk karousel menggunakan picsum.photos yang bersaiz kecil
        const activityImages = {
            @foreach ($activities as $index => $activity) @php $array = explode(',', $activity->image_path);@endphp 
            "{{ $index +1}}": [@foreach ($array as $index => $img)
                "{{ "../storage/".$img }}" @if(!$loop->last),@endif
            @endforeach]
                @if(!$loop->last),@endif @endforeach
        };

        // Simpan state karousel
        const carouselState = {
            '1': 0, // Baris ID 1, imej pertama (indeks 0)
            '2': 0,  // Baris ID 2, imej pertama (indeks 0)
            '3': 0  // Baris ID 3, imej pertama (indeks 0)
        };

        /**
         * Mengemudi karousel untuk baris tertentu.
         * @param {string} id ID baris (e.g., '1')
         * @param {number} direction -1 untuk Kiri, 1 untuk Kanan
         */
        function navigateCarousel(id, direction) {
            const images = activityImages[id];
            if (!images || images.length === 0) return;

            let currentIndex = carouselState[id];
            let newIndex = currentIndex + direction;

            // Loop back to start/end
            if (newIndex >= images.length) {
                newIndex = 0;
            } else if (newIndex < 0) {
                newIndex = images.length - 1;
            }

            carouselState[id] = newIndex;
            updateCarousel(id, images[newIndex], newIndex, images.length);
        }

        /**
         * Mengemas kini imej dan penunjuk karousel.
         */
        function updateCarousel(id, imageUrl, index, total) {
            const imgElement = document.getElementById(`carousel-img-${id}`);
            const indicatorElement = document.getElementById(`carousel-indicator-${id}`);

            if (imgElement) {
                // Gunakan opacity untuk kesan fade yang lancar
                imgElement.style.opacity = '0'; 
                setTimeout(() => {
                    imgElement.src = imageUrl;
                    imgElement.style.opacity = '1'; 
                }, 150); // Tempoh peralihan
            }
            if (indicatorElement) {
                indicatorElement.textContent = `${index + 1}/${total}`;
            }
        }

        // Init karousel pada permulaan
        window.onload = function() {
            for (const id in activityImages) {
                if (activityImages[id].length > 0) {
                    // Pastikan index mula 0, dan total adalah bilangan imej
                    updateCarousel(id, activityImages[id][0], 0, activityImages[id].length);
                } else {
                     // Jika tiada imej, paparkan placeholder '0/0'
                    const indicatorElement = document.getElementById(`carousel-indicator-${id}`);
                    if (indicatorElement) indicatorElement.textContent = `0/0`;
                }
            }
        };
    </script>

</x-admin-layout>