<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Andalalin
      </h2>
      <div class="p-4">
        <label for="search">Search</label>
        <input type="text" id="search" v-model="term" @keyup="search" class="ml-2 px-2 py-1 text-sm rounded border">
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Kode Reg
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Identitas Pemohon
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Identitas Usaha
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Persyaratan
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="ad1 in andal.data" :key="ad1.id">
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">{{ ad1.code }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">
                            {{ad1.nama_pemohon}}
                          </div>
                          <div class="text-sm text-gray-500">
                            {{ad1.email}}
                          </div>
                          <div class="text-sm text-gray-500">
                            {{ad1.no_tlp}}
                          </div>
                          <div class="text-sm text-gray-500">
                            {{ad1.alamat_pemohon}}
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">
                            {{ad1.jenis_usaha}}
                          </div>
                          <div class="text-sm text-gray-500">
                            Luas Lahan : {{ad1.luas_lahan}}
                          </div>
                          <div class="text-sm text-gray-500">
                            Luas Bangunan : {{ad1.luas_bangunan}}
                          </div>
                          <div class="text-sm text-gray-500">
                            {{ad1.status_lahan}}
                          </div>
                          <div class="text-sm text-gray-500">
                            {{ad1.alamat_usaha}}
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">
                            {{ad1.verifikasi}}
                          </div>
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            <Link :href="`/andal/${ad1.id}/edit`">Edit</Link>
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            <Link :href="`/andal/${ad1.id}`">Details</Link>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-5 flex justify-end">
  <Link class="px-2" :href="andal.prev_page_url">Previous</Link>
  <Link class="px-2" :href="andal.next_page_url">Next</Link>
</div>
  </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import _ from 'lodash'
    import { Link } from '@inertiajs/inertia-vue3'

    export default defineComponent({
        components: {
          AppLayout,
          Link
        },
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
      this.$inertia.get('/andalalin/', {term: this.term})
    })
  },
    })
</script>
