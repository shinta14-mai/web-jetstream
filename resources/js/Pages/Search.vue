<template>
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
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="ad1 in andal" :key="ad1.id">
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
                            {{ad1.verifikasi}}
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="ad1 in rt" :key="ad1.id">
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
                            {{ad1.verifikasi}}
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="ad1 in st" :key="ad1.id">
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
                            {{ad1.verifikasi}}
                          </div>
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
</template>

<script>
    import { defineComponent } from 'vue'
    import _ from 'lodash'
    import { Link } from '@inertiajs/inertia-vue3'

    export default defineComponent({
        components: {
          Link
        },
        props: {
          andal: Array,
          rt: Array,
          st: Array,
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
    })
</script>
