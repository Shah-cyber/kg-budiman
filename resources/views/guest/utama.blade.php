<x-app-layout :title="'Utama'">
  


    <!-- Hero Section -->
    <section class="relative bg-cover h-[85vh] bg-center bg-no-repeat flex item-center justify-center" style="background-image: url('/images/ilovekgbudiman.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 py-12 md:py-16 lg:py-20 flex flex-col lg:flex-row items-center justify-center lg:justify-between gap-8 lg:gap-10 text-white">
            
            <!-- Text Section -->
            <div class="w-full lg:max-w-2xl text-center lg:text-left intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
                <span class="text-white">Selamat Datang</span> ke<br />
                <span class="text-white">Kampung Budiman</span>
            </h2>

            <p class="mt-4 sm:mt-6 text-gray-200 leading-relaxed text-sm sm:text-base">
                Sebuah komuniti harmoni yang berteraskan nilai kemanusiaan, gotong-royong, dan semangat kejiranan.
            </p>

            <p class="mt-2 sm:mt-3 text-gray-200 leading-relaxed text-sm sm:text-base">
                Di sini, kami meraikan kehidupan desa yang penuh ketenangan, sambil melangkah ke arah kemajuan bersama.
            </p>

            <!-- CTA Button -->
            <div class="mt-6 sm:mt-8 flex justify-center lg:justify-start">
                <a href="#bulletin"
                class="inline-flex items-center px-5 py-3 text-sm font-medium rounded-lg text-white
                        bg-linear-to-r from-primary to-tertiary
                        hover:opacity-90 transition">
                Ketahui Lebih Lanjut
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"></path>
                </svg>
                </a>
            </div>
            </div>

            <!-- Logo Card -->
            <div class="w-full lg:w-auto lg:max-w-sm flex justify-center lg:justify-end intersect:motion-preset-slide-left intersect:motion-ease-spring-bouncier">
                <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 w-full max-w-[280px] sm:max-w-sm">
                    <img src="/images/jpkk ori.png" alt="JPKK Kampung Budiman" class="w-full h-auto" />
                </div>
            </div>

        </div>
    </section>
    

          
    <section id="bulletin" class="py-8 sm:py-12 md:py-16 bg-white intersect:motion-preset-fade intersect:motion-ease-spring-bouncier">
      @if($carouselAnnouncements->isNotEmpty())
        @php $slideCount = $carouselAnnouncements->count(); @endphp
        <div id="bulletin-carousel"
          class="relative w-full max-w-full md:max-w-full lg:max-w-[1280px] mx-auto px-2 sm:px-3 md:px-2 lg:px-8 intersect:motion-preset-slide-right intersect:motion-duration-1200"
          x-data="{
            active: 0,
            total: {{ $slideCount }},
            timer: null,
            progress: 0,
            start() {
              if (this.total <= 1) return;
              this.stop();
              this.progress = 0;
              this.timer = setInterval(() => {
                this.progress += 1;
                if (this.progress >= 100) {
                  this.progress = 0;
                  this.active = (this.active + 1) % this.total;
                }
              }, 60);
            },
            stop() {
              if (this.timer) {
                clearInterval(this.timer);
                this.timer = null;
              }
            },
            go(index) {
              this.active = index;
              this.progress = 0;
              this.start();
            }
          }"
          x-init="start()"
          @mouseenter="stop()"
          @mouseleave="start()">
          <div class="relative w-full min-h-[680px] sm:min-h-[720px] md:min-h-[520px] md:h-[560px] lg:h-[580px] rounded-2xl sm:rounded-3xl md:rounded-[32px] overflow-hidden shadow-xl md:shadow-2xl ring-1 ring-black/10 bg-slate-900">
            @foreach($carouselAnnouncements as $announcement)
              <article class="absolute inset-0 w-full h-full"
                x-show="active === {{ $loop->index }}"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-500"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak

                aria-roledescription="slide"
                aria-label="Buletin {{ $loop->iteration }} daripada {{ $slideCount }}">
                <div class="absolute inset-0 overflow-hidden">
                  <img src="{{ $announcement['image_url'] }}"
                    alt="{{ $announcement['title'] }}"
                    class="w-full h-full object-cover blur-2xl scale-110 brightness-[0.6] opacity-80" />
                  <div class="absolute inset-0 bg-linear-to-r from-white/60 via-white/40 to-transparent sm:from-white/50 sm:via-white/30 md:from-white/50 lg:from-black/40"></div>
                </div>
                <div class="relative h-full z-10 w-full mx-auto px-2 sm:px-3 md:px-2 lg:px-12 py-4 sm:py-6 md:py-8 pb-12 sm:pb-14 md:pb-16 flex flex-col md:flex-row items-center gap-4 sm:gap-5 md:gap-6 lg:gap-12">
                  <div class="w-full md:w-1/2 flex justify-center md:justify-start order-2 md:order-1 h-full">
                    <div class="bg-white/85 backdrop-blur-2xl border border-white/60 rounded-2xl sm:rounded-3xl md:rounded-4xl shadow-xl md:shadow-2xl p-4 sm:p-5 md:p-6 lg:p-8 w-full max-w-xl transition duration-500 h-full flex flex-col overflow-hidden">
                      <div class="flex flex-wrap items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                        <span class="px-2.5 sm:px-3 py-1 rounded-full bg-primary/10 text-primary text-[10px] sm:text-xs font-bold tracking-wider uppercase border border-primary/20">
                          Pengumuman
                        </span>
                        <span class="text-slate-500 text-[10px] sm:text-xs font-medium flex items-center gap-1">
                          <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z"/>
                          </svg>
                          {{ $announcement['start_date'] ?? 'Tarikh TBA' }}
                        </span>
                      </div>
                      <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 leading-tight mb-3 sm:mb-4 shrink-0">
                        {{ $announcement['title'] }}
                      </h2>
                      <p class="text-slate-600 text-xs sm:text-sm md:text-base lg:text-lg leading-relaxed mb-4 sm:mb-5 md:mb-6 whitespace-pre-line wrap-break-word overflow-y-auto flex-1 min-h-0">
                        {{ $announcement['summary'] }}
                      </p>
                      <div class="flex flex-col sm:flex-row sm:flex-wrap items-stretch sm:items-center gap-3 sm:gap-4 shrink-0 mt-auto">
                        <a href="{{ route('aktiviti') }}"
                          class="group flex items-center justify-center gap-2 bg-slate-900 text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-xl sm:rounded-2xl font-semibold text-xs sm:text-sm md:text-base shadow-lg shadow-primary/20 transition hover:bg-slate-800">
                          Lihat Aktiviti
                          <svg class="w-4 h-4 sm:w-4.5 sm:h-4.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                          </svg>
                        </a>
                        <div class="flex items-center gap-2 sm:gap-3 text-xs sm:text-sm text-slate-600">
                          <span class="flex items-center gap-1.5 sm:gap-2">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6 1A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/>
                            </svg>
                            <span class="hidden sm:inline">Kemaskini Terkini</span>
                            <span class="sm:hidden">Terkini</span>
                          </span>
                          <span class="h-1 w-1 rounded-full bg-slate-400"></span>
                          <span class="text-xs sm:text-sm">Kampung Budiman</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-1/2 h-[240px] sm:h-[260px] md:h-full flex items-center justify-center order-1 md:order-2 relative px-2 sm:px-4">
                    <img src="{{ $announcement['image_url'] }}"
                      alt="{{ $announcement['title'] }}"
                      class="max-h-full max-w-full object-contain rounded-xl sm:rounded-2xl md:rounded-3xl shadow-xl md:shadow-2xl ring-1 ring-white/30 bg-white/10" />
                  </div>
                </div>
              </article>
            @endforeach
          </div>

          <!-- Progress Dots -->
          <div class="absolute bottom-3 sm:bottom-4 md:bottom-6 left-0 right-0 z-30 flex justify-center gap-2 sm:gap-3 pointer-events-none">
            @foreach($carouselAnnouncements as $index => $announcement)
              <button type="button"
                @click="go({{ $index }})"
                class="group relative h-1.5 sm:h-2 rounded-full transition-all duration-300 overflow-hidden bg-white/30 hover:bg-white/50 active:scale-110 pointer-events-auto"
                :class="active === {{ $index }} ? 'w-10 sm:w-12' : 'w-2.5 sm:w-3'">
                <span class="sr-only">Slide {{ $index + 1 }}</span>
                <div x-show="active === {{ $index }}"
                  class="absolute inset-0 bg-white h-full"
                  :style="`width: ${progress}%`"></div>
              </button>
            @endforeach
          </div>

          <!-- Arrows -->
          <button type="button"
            @click="active = (active === 0) ? total - 1 : active - 1; progress = 0; start()"
            class="absolute top-1/2 -translate-y-1/2 left-2 sm:left-3 md:left-4 z-20 w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 rounded-full bg-black/25 backdrop-blur-md text-white hidden sm:flex items-center justify-center hover:bg-black/45 hover:scale-110 active:scale-95 transition touch-manipulation">
            <svg class="w-5 h-5 sm:w-5.5 sm:h-5.5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
          </button>
          <button type="button"
            @click="active = (active + 1) % total; progress = 0; start()"
            class="absolute top-1/2 -translate-y-1/2 right-2 sm:right-3 md:right-4 z-20 w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 rounded-full bg-black/25 backdrop-blur-md text-white hidden sm:flex items-center justify-center hover:bg-black/45 hover:scale-110 active:scale-95 transition touch-manipulation">
            <svg class="w-5 h-5 sm:w-5.5 sm:h-5.5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </button>
        </div>
      @else
        <div class="mx-auto max-w-4xl px-6 py-16 text-center">
          <p class="text-lg text-gray-600">Tiada buletin untuk dipaparkan buat masa ini. Sila kembali semula.</p>
        </div>
      @endif
    </section>
        
    <!-- 360 Video Section -->
    <section id="video-360" class="py-20 bg-gray-50 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12 intersect:motion-preset-fade intersect:motion-ease-spring-bouncier">
                <h2 class="text-4xl md:text-5xl font-extrabold text-primary mb-4">
                    Pandangan 360° Kampung Budiman
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Terokai keindahan dan keunikan Kampung Budiman melalui pengalaman video 360 darjah yang membawa anda merasai suasana sebenar kampung kami.
                </p>
            </div>

            <div class="max-w-5xl mx-auto intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-black" style="padding-bottom: 56.25%;">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/tgBeeSlEj60" 
                        title="Video 360 Kampung Budiman" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
                <p class="text-center text-sm text-gray-500 mt-4">
                    <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                    Tarik layar video untuk melihat pandangan 360° atau gunakan kawalan untuk navigasi
                </p>
            </div>
        </div>
    </section>

    <!-- Pengenalan -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Content -->
            <div class="intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier">
            <h2 class="text-5xl font-extrabold text-primary mb-6">PENGENALAN</h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                Kampung Budiman telah dibuka pada awal tahun <span class="font-semibold text-primary">1930–an</span> 
                oleh Ketua Kampung Meru iaitu <span class="font-semibold text-primary">Tuan Haji Mohd. Sharif.</span>
            </p>

            <p class="text-gray-700 leading-relaxed mb-4">
                Kampung ini asalnya berada di bawah pentadbiran Kampung Meru, Klang. 
                Diperingkat awal iaitu sekitar tahun <span class="font-semibold text-primary">1950–an</span>, 
                kampung ini dikenali sebagai <span class="font-semibold text-primary">Kampung Jalan Paip.</span>
            </p>

            <p class="text-gray-700 leading-relaxed mb-8">
                Ini kerana kampung ini dibuka bagi pembinaan laluan paip dari kolam air Tasik Subang ke Sungai Kuning.
            </p>

            <!-- Highlight Cards -->
            <div class="flex flex-wrap gap-4">
                <div class="flex items-center bg-primary/10 rounded-lg px-5 py-4 w-full sm:w-auto">
                <div class="flex items-center justify-center w-10 h-10 bg-primary text-white rounded-full mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6 1A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-primary">Sejarah Panjang</p>
                    <p class="text-sm text-gray-600">Lebih 90 tahun warisan</p>
                </div>
                </div>

                <div class="flex items-center bg-tertiary/10 rounded-lg px-5 py-4 w-full sm:w-auto">
                <div class="flex items-center justify-center w-10 h-10 bg-tertiary text-white rounded-full mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5V4H2v16h5m10-4H7m0 0v4m10-4v4"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-tertiary">Komuniti Erat</p>
                    <p class="text-sm text-gray-600">Penduduk yang mesra</p>
                </div>
                </div>
            </div>
            </div>

            <!-- Right Image Grid -->
            <div class="grid grid-cols-2 gap-4 intersect:motion-preset-slide-left intersect:motion-ease-spring-bouncier">
            <img src="/images/pengenalan-1.jpeg" alt="Kampung image 1" class="rounded-xl shadow-md object-cover w-full h-48 md:h-56" />
            <img src="/images/pengenalan-2.jpeg" alt="Kampung image 2" class="rounded-xl shadow-md object-cover w-full h-48 md:h-56" />
            <img src="/images/pengenalan-3.jpeg" alt="Kampung image 3" class="rounded-xl shadow-md object-cover w-full h-48 md:h-56" />
            <img src="/images/pengenalan-4.jpeg" alt="Kampung image 4" class="rounded-xl shadow-md object-cover w-full h-48 md:h-56" />
            </div>

        </div>
    </section>

    <!-- Lokasi & waktu berurusan -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12">

    <!-- Lokasi Kami -->
    <div class="intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier"
    >
      <h2 class="text-3xl font-extrabold text-primary mb-6 flex justify-center lg:text-left">
        LOKASI KAMI
      </h2>

      <div class="rounded-xl overflow-hidden shadow-md mb-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4964.156356033213!2d101.46790405!3d3.15410395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc50e2aabfc2f9%3A0x2f1d233d56216c6f!2sKampung%20Budiman%2C%2040150%20Klang%2C%20Selangor!5e1!3m2!1sen!2smy!4v1763633190027!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Address Box -->
      <div class="bg-white shadow-sm rounded-xl p-5 flex items-start">
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#6B3A25] text-white mr-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3zm0 0c-4.418 0-8 3.582-8 8v1h16v-1c0-4.418-3.582-8-8-8z" />
          </svg>
        </div>
        <div>
          <p class="font-semibold text-primary">Alamat</p>
          <p class="text-gray-600 text-sm">
            Lot 4470 /2, Jalan Haji Jalal, Jalan Paip, Kampung Budiman,<br />
            Meru, 41050 Klang, Selangor
          </p>
        </div>
      </div>
    </div>

    <!-- Waktu Berurusan -->
    <div class="intersect:motion-preset-slide-left intersect:motion-ease-spring-bouncier">
      <h2 class="text-3xl font-extrabold text-primary mb-6 flex justify-center lg:text-left">
        WAKTU BERURUSAN
      </h2>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <!-- Table Header -->
        <div class="bg-linear-to-r from-[#6B3A25] to-[#6B3A29] text-white text-sm font-semibold uppercase grid grid-cols-2 px-6 py-3">
          <div>Hari</div>
          <div>Masa</div>
        </div>

        <!-- Table Body -->
        <div class="divide-y divide-gray-200 text-sm">
          <div class="grid grid-cols-2 px-6 py-3 items-center">
            <div class="flex items-center gap-2">
              <span>Isnin</span>
            </div>
            <div class="text-gray-700">8:00am hingga 9:00pm</div>
          </div>
          <div class="grid grid-cols-2 px-6 py-3 items-center">
            <div class="flex items-center gap-2">
              <span>Selasa</span>
            </div>
            <div class="text-gray-700">8:00am hingga 9:00pm</div>
          </div>
          <div class="grid grid-cols-2 px-6 py-3 items-center">
            <div class="flex items-center gap-2">
              <span>Rabu</span>
            </div>
            <div class="text-gray-700">8:00am hingga 9:00pm</div>
          </div>
          <div class="grid grid-cols-2 px-6 py-3 items-center">
            <div class="flex items-center gap-2">
              <span>Khamis</span>
            </div>
            <div class="text-gray-700">8:00am hingga 9:00pm</div>
          </div>
          <div class="grid grid-cols-2 px-6 py-3 items-center">
            <div class="flex items-center gap-2">
              <span>Jumaat</span>
            </div>
            <div class="text-gray-700">8:00am hingga 9:00pm</div>
          </div>
          <div class="grid grid-cols-2 px-6 py-3 items-center">
            <div class="flex items-center gap-2">
              <span>Sabtu</span>
            </div>
            <div class="text-gray-500 italic">Cuti</div>
          </div>
          <div class="grid grid-cols-2 px-6 py-3 items-center">
            <div class="flex items-center gap-2">
              <span>Ahad</span>
            </div>
            <div class="text-gray-500 italic">Cuti</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</x-app-layout>