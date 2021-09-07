<template>
<div class="bg-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="p-4">
      <label for="search">Search</label>
      <input type="text" id="search" v-model="term" @keyup="search" class="ml-2 px-2 py-1 text-sm rounded border">
    </div>
    <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
      <h2 class="text-2xl font-extrabold text-gray-900">Collections</h2>

      <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
        <div class="group relative">
          <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
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
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
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
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
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
