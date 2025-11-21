<x-app-layout :title="'Ahli Jawatankuasa'">
    <!-- Hero Section -->
    <section class="relative min-h-[80vh] md:min-h-[85vh] flex items-center justify-center overflow-hidden">
        <img src="{{ asset('images/kampung.png') }}"
             alt="Landskap Kampung Budiman"
             class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-linear-to-b from-black/70 via-black/60 to-black/40"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center text-white">
            <p class="uppercase tracking-[0.4em] text-sm sm:text-base text-white/80 mb-4">Kepimpinan Kampung Budiman</p>
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-tight">
                Ahli Jawatankuasa <span class="text-primary">Kampung Budiman</span>
            </h1>
            <p class="mt-6 text-base sm:text-lg md:text-xl text-white/90 max-w-3xl mx-auto">
                Pasukan yang berkhidmat dengan dedikasi tinggi demi kemajuan komuniti,
                memacu keharmonian dan kesejahteraan penduduk Kampung Budiman.
            </p>
        </div>
    </section>

    @php
        $gradientClass = "bg-linear-to-r from-[var(--color-primary)] via-[var(--color-tertiary)] to-[var(--color-secondary)]";
    @endphp

    <section class="py-16 md:py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <p class="text-sm uppercase tracking-[0.25em] text-primary mb-3">Teraju Kampung</p>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Majlis Tertinggi</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">
                    Barisan kepimpinan utama yang mengetuai strategi pembangunan Kampung Budiman.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                @foreach ($majlisTertinggi as $member)
                    <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition duration-500 p-8 flex flex-col items-center text-center">
                        <div class="relative mb-6">
                            <div class="absolute inset-0 rounded-full blur-3xl opacity-30 group-hover:opacity-50 transition {{ $gradientClass }}"></div>
                            <div class="relative w-36 h-36 rounded-full p-[3px] {{ $gradientClass }}">
                                <div class="w-full h-full rounded-full bg-white/95 flex items-center justify-center">
                                    <img src="{{ $member['image_url'] }}"
                                        alt="{{ $member['name'] }}"
                                        class="w-32 h-32 rounded-full object-cover"
                                        onerror="this.onerror=null;this.src='https://placehold.co/320x320/DADADA/2F2F2F?text=Tiada+Gambar'">
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex items-center gap-2 bg-slate-100 text-primary text-xs font-semibold uppercase tracking-wide px-4 py-1 rounded-full mb-4">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            {{ $member['position'] }}
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900">{{ $member['name'] }}</h3>
                        <a href="tel:{{ preg_replace('/\D/', '', $member['phone']) }}"
                           class="mt-2 inline-flex items-center gap-2 text-sm text-slate-500 hover:text-primary transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M2.25 6.75c0 8.25 6.75 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.757c0-.62-.402-1.17-1.003-1.323l-4.493-1.124a1.35 1.35 0 0 0-1.33.497l-.97 1.293c-.287.383-.78.547-1.23.41a12.035 12.035 0 0 1-7.626-7.626c-.137-.45.027-.943.41-1.23l1.293-.97a1.35 1.35 0 0 0 .497-1.33L6.58 3.003A1.35 1.35 0 0 0 5.257 2H3.5A1.25 1.25 0 0 0 2.25 3.25v3.5Z"/>
                            </svg>
                            {{ $member['phone'] }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mb-14">
                <p class="text-sm uppercase tracking-[0.25em] text-primary mb-3">Pasukan Sokongan</p>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Ahli Jawatankuasa Lain</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">
                    Tenaga kerja yang memastikan setiap inisiatif dilaksanakan dengan berkesan.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($ahliJawatankuasaLain as $member)
                    <div class="group bg-white rounded-3xl shadow-md hover:shadow-xl transition duration-500 p-6 flex flex-col items-center text-center">
                        <div class="relative mb-4">
                            <div class="w-28 h-28 rounded-full p-[3px] bg-linear-to-br from-primary via-tertiary to-secondary">
                                <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
                                    <img src="{{ $member['image_url'] }}"
                                        alt="{{ $member['name'] }}"
                                        class="w-24 h-24 rounded-full object-cover"
                                        onerror="this.onerror=null;this.src='https://placehold.co/240x240/DEDEDE/2B2B2B?text=Tiada+Gambar'">
                                </div>
                            </div>
                        </div>
                        <p class="text-xs font-semibold uppercase tracking-wide text-primary/80 mb-2">{{ $member['position'] }}</p>
                        <h4 class="text-base font-semibold text-slate-900">{{ $member['name'] }}</h4>
                        <a href="tel:{{ preg_replace('/\D/', '', $member['phone']) }}"
                           class="mt-1 text-xs text-slate-500 hover:text-primary transition">
                            {{ $member['phone'] }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>