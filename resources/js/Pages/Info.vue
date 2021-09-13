<template>
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
                <a href="/home">
                  <span class="sr-only">Workflow</span>
                  <img class="w-auto h-20" src="/img/logo-dishub.png">
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

              <a href="/login" class="font-medium text-blue-900 hover:text-gold">Login</a>
            </div>
            <div class="px-6">
              <input type="text" id="search" placeholder="Seacrh Your Code Here..." v-model="term" @keyup="search" class="ml-2 px-2 py-1 text-sm rounded border">
            </div>
          </nav>
        </div>
      </div>

      <div class="absolute z-10 top-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="px-5 pt-4 flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="/img/logo-dishub.png" alt="">
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
            <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-blue-700 hover:text-gray-900 hover:bg-gray-50">About</a>
            <a href="/login" class="block px-3 py-2 rounded-md text-base font-medium text-blue-900 hover:text-gold hover:bg-gray-50">Log In</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto py-10 sm:py-18 lg:py-26 lg:max-w-none">
      <div class="mt-2 space-y-8 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
      <div class="lg:absolute lg:right-0 px-10 py-6">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 py-10" src="/img/info.png" alt="">
      </div>

      <main class="mt-8 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left ml-4 px-6 -mr-40 py-8">
          <h3 class="text-4xl tracking-tight font-extrabold sm:text-3xl md:text-4xl">
            <span class="block xl:inline text-blue-900">Apa Saja Kriteria Wajib Analisis Dampak Lalu Lintas?</span>
          </h3>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
             Cari tahu di sini
          </p>
          <div class="mt-3 sm:mt-6 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="/img/Kriteria.pdf" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-2 md:text-lg md:px-8">
                Download File
              </a>
            </div>
          </div>
        </div>
      </main>

      </div>
    </div>
  </div>
</div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
      <h2 class="text-2xl font-extrabold text-gray-900">Kategori Pengajuan</h2>

      <div class="mt-6 py-12 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
        <div class="group relative">
          <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
            <img src="/img/logo-ra.png" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="/andal/create">
              <span class="absolute inset-0"></span>
              Daftar
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Rekomendasi Andalalin</p>
        </div>

        <div class="group relative">
          <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
            <img src="/img/logo-rt.png" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="/rt/create">
              <span class="absolute inset-0"></span>
              Daftar
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Rekomendasi Teknis</p>
        </div>

        <div class="group relative">
          <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
            <img src="/img/logo-st.png" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="/st/create">
              <span class="absolute inset-0"></span>
              Daftar
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Standar Teknis</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style>

</style>

<script>
    import _ from 'lodash'

    export default{
        props: {
          andal: Object,
        },
          data(){
    return{
      term: ''
    }
  },
  methods:{
    search: _.throttle(function(){
      this.$inertia.get('/search/', {term: this.term})
    })
  },
    }
</script>
