<template>
<!-- Homepage -->
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div>
        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#">
                  <span class="sr-only">Workflow</span>
                  <img class="w-auto h-40 mt-14" src="/img/logo-dishub.png">
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
              <a href="/info" class="font-medium text-blue-700 hover:text-gray-900">Info</a>

              <a href="https://banyuwangikab.go.id/skpd/unit/20901/dinas-perhubungan.html" target="_blank" class="font-medium text-blue-700 hover:text-gray-900">About</a>

              <a href="/login" class="font-medium text-blue-900 hover:text-gold">Log in</a>
            </div>
          </nav>
        </div>
      </div>

      <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="px-5 pt-4 flex items-center justify-between">
            <div>
              <img class="h-10 w-auto" src="/img/logo-dishub.png" alt="">
            </div>
            <div class="-mr-2">
              <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Close main menu</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/info" class="block px-3 py-2 rounded-md text-base font-medium text-blue-700 hover:text-gray-900 hover:bg-gray-50">Info</a>
            <a href="https://banyuwangikab.go.id/skpd/unit/20901/dinas-perhubungan.html" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-blue-700 hover:text-gray-900 hover:bg-gray-50">About</a>
            <a href="/login" class="block px-3 py-2 rounded-md text-base font-medium text-blue-900 hover:text-gold hover:bg-gray-50">Log In</a>
          </div>
        </div>
      </div>

      <main class="mt-8 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h5 class="text-4xl tracking-tight font-extrabold sm:text-3xl md:text-4xl">
            <span class="block xl:inline text-gold">Dinas Perhubungan</span>
          </h5>
          <h3 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            <span class="block xl:inline text-blue-900">Kabupaten Banyuwangi</span>
          </h3>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
             Jl. K.H. Agus Salim No.83, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68416
          </p>
          <div class="mt-3 sm:mt-6 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="https://goo.gl/maps/1kaYBo21cg5hfP5w6" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-2 md:text-lg md:px-8">
                Lihat Lokasi
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/img/dishub.jpg" alt="">
  </div>
</div>

<!-- Card Bidang -->
<div class="relative bg-gray-100">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-6">
    <div class="max-w-2xl mx-auto py-3 sm:py-13 lg:py-21 lg:max-w-none">
      <h2 class="text-2xl font-extrabold text-gray-900">Bidang</h2>
      <div class="mt-1 space-y-6 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">

        <div class="group relative">
          <div class="min-h-screen bg-gray-100 flex justify-center items-center">
            <div class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <img class="w-full cursor-pointer" src="/img/logo-atcs.jpg" alt="" />
              <div>
                <h1 class="text-2xl lg:text-center mt-4 mb-4 text-gold cursor-pointer hover:text-gray-900 transition duration-100">ATCS</h1>
                <section class="flex justify-center items-start">
                  <button onclick="document.getElementById('myModal1').showModal()" id="btn" class="mb-2 py-2 px-9 bg-blue-900 text-white rounded text shadow-xl">Detail</button>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div class="group relative">
          <div class="min-h-screen bg-gray-100 flex justify-center items-center">
            <div class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <div>
                <h1 class="text-2xl lg:text-center mt-2 text-gold cursor-pointer hover:text-gray-900 transition duration-100">Pengujian Kendaraan Bermotor</h1>
                <section class="flex justify-center items-start">
                  <button onclick="document.getElementById('myModal2').showModal()" id="btn" class="mb-2 py-2 px-9 bg-blue-900 text-white rounded text shadow-xl">Detail</button>
                </section>
              </div>
              <img class="w-full cursor-pointer" src="/img/logo-pkb.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="group relative">
          <div class="min-h-screen bg-gray-100 flex justify-center items-center">
            <div class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <img class="w-full cursor-pointer" src="/img/logo-angkutan.jpg" alt="" />
              <div>
                <h1 class="text-2xl lg:text-center mt-4 mb-4 text-gold cursor-pointer hover:text-gray-900 transition duration-100">Angkutan</h1>
                <section class="flex justify-center items-start">
                  <button onclick="document.getElementById('myModal3').showModal()" id="btn" class="mb-2 py-2 px-9 bg-blue-900 text-white rounded text shadow-xl">Detail</button>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div class="group relative">
          <div class="min-h-screen bg-gray-100 flex justify-center items-center">
            <div class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <div>
                <h1 class="text-2xl lg:text-center mt-2 text-gold cursor-pointer hover:text-gray-900 transition duration-100">Lalu Lintas dan Angkutan Jalan</h1>
                <section class="flex justify-center items-start">
                  <button onclick="document.getElementById('myModal4').showModal()" id="btn" class="mb-2 py-2 px-9 bg-blue-900 text-white rounded text shadow-xl">Detail</button>
                </section>
              </div>
              <img class="w-full cursor-pointer" src="/img/logo-lalin.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Visi Misi -->
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto py-10 sm:py-18 lg:py-26 lg:max-w-none">
      <div class="mt-2 space-y-8 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
        <div class="group relative">
          <div class="min-h-screen bg-gray-100 flex justify-center items-center">
            <div class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <img class="w-full cursor-pointer" src="/img/vm.png" alt="" />
            </div>
          </div>
        </div>


        <main class="mt-8 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-10 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left py-16">
          <h3 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            <span class="block xl:inline text-gold">Visi Misi</span>
          </h3>
          <p class="mt-3 text-base text-blue-900 font-bold sm:mt-5 sm:text-xl sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
             Dinas Perhubungan Kabupaten Banyuwangi
          </p>
        </div>
      </main>

      </div>
    </div>
  </div>
</div>

<dialog id="myModal1" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
   <div class="relative">
        <!-- Header -->
        <div class="flex w-full h-auto justify-center items-center">
          <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
            AREA TRAFFIC CONTROL SYSTEM
          </div>
          <div onclick="document.getElementById('myModal1').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </div>
          <!--Header End-->
        </div>
          <!-- Modal Content-->
           <div class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
             Pengendalian lalu lintas dengan menyelaraskan waktu lampu merah pada jaringan jalan raya di Kabupaten Banyuwangi. Area traffic control sistem (atcs) Kabupaten Banyuwangi telah di dukung dengan pantauan kamera cctv dan akan terus dimaksimalkan oleh Dinas Perhubungan Kabupaten Banyuwangi.
          </div>
          <!-- End of Modal Content-->
        </div>
</dialog>
<dialog id="myModal2" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
   <div class="relative">
        <!-- Header -->
        <div class="flex w-full h-auto justify-center items-center">
          <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
            PENGUJIAN KENDARAAN BERMOTOR
          </div>
          <div onclick="document.getElementById('myModal2').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </div>
          <!--Header End-->
        </div>
          <!-- Modal Content-->
           <div class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
             Serangkaian kegiatan menguji dan/atau memeriksa bagian-bagian kendaraan bermotor: kereta gandengan, kereta tempelan dan kendaraan khusus dalam rangka pemenuhan terhadap persyaratan teknis dan layak jalan.
          </div>
          <!-- End of Modal Content-->
        </div>
</dialog>
<dialog id="myModal3" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
   <div class="relative">
        <!-- Header -->
        <div class="flex w-full h-auto justify-center items-center">
          <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
            ANGKUTAN
          </div>
          <div onclick="document.getElementById('myModal3').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </div>
          <!--Header End-->
        </div>
          <!-- Modal Content-->
           <div class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
             Perencanaan, pengadaan, pemasangan, pengaturan dan pemeliharaan fasilitas perlengkapan jalan. Dalam rangka mewujudkan, mendukung dan memelihara keamanan, keselamatan, ketertiban, dan kelancaran lalu lintas.
          </div>
          <!-- End of Modal Content-->
        </div>
</dialog>
<dialog id="myModal4" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
   <div class="relative">
        <!-- Header -->
        <div class="flex w-full h-auto justify-center items-center">
          <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
            LALU LINTAS DAN ANGKUTAN JALAN
          </div>
          <div onclick="document.getElementById('myModal4').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </div>
          <!--Header End-->
        </div>
          <!-- Modal Content-->
           <div class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
             Satu kesatuan sistem yang terdisi atas lalu lintas, angkutan jalan, jaringan lalu lintas dan angkutan jalan, prasarana lalu lintas dan angkutan jalan, kendaraan, pengemudi, pengguna jalan, serta pengelolaannya.
          </div>
          <!-- End of Modal Content-->
        </div>
</dialog>

<!-- Footer -->
<footer class="footer bg-blue-900 relative pt-1 border-b-2 border-blue-700">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Berita</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Aplikasi Mobile</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Area Traffic Control System (ATCS)</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Lampu Penerangan Jalan Umum</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Bandara, Perkeretaapian, Pelabuhan & Terminal</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">e-blue</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">e-parkir</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Pengaduan</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Kebijakan Kami</a></span>
                    <span class="my-2"><a href="#" class="text-gold  text-md hover:text-white">Kritik, Saran & Pesan</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-white uppercase mt-4 md:mt-0 mb-2">Dinas perhubungan kabupaten banyuwangi</span>
                    <br>
                    <span class="my-2">Dinas Perhubungan merupakan unsur pelaksana urusan</span>
                    <span class="my-2">pemerintahan bidang perhubungan yang menjadi kewenangan daerah</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8 space-x-6">
            <a href="https://www.facebook.com/people/Dinas-Perhubungan-Bwi/100018371887088/" target="_blank" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/dishub_banyuwangi/?hl=en" target="_blank" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="https://twitter.com/dishub_bwi?lang=en" target="_blank" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    © 2021
                </p>
            </div>
        </div>
    </div>
</footer>

</template>


<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../Layouts/Navbar.vue';
export default {
    props: ['title'],
    components: {
    Link,
    Layout,
    }
}
</script>

<style>
  dialog[open] {
  animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
}

  dialog::backdrop {
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
    backdrop-filter: blur(3px);
  }


@keyframes appear {
  from {
    opacity: 0;
    transform: translateX(-3rem);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>
