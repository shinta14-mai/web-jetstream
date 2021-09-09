<template>
<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="w-full bg-cover bg-center" style="height:56rem; background-image: url(http://dishub.banyuwangikab.go.id/img/front/carousel.jpg);">
        <div class="flex items-center justify-center h-full w-full bg-blue-900 bg-opacity-95">
      <div>
        <h3 class="text-3xl font-medium leading-6 text-gold -mt-48">Profil</h3>
        <p class="mt-1 text-lg text-white">
          Pada bagian ini isikan identitas anda dan usaha anda pada kolom yang disediakan.
        </p>
      </div>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form @submit.prevent="submit">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="nama_pemohon" class="block text-sm font-medium text-gray-700">Nama Pemohon</label>
              <input v-model="st.nama_pemohon" type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <p v-if="errors.nama_pemohon" class="errors">{{ errors.nama_pemohon }}</p>
            </div>

            <div>
              <label for="alamat_pemohon" class="block text-sm font-medium text-gray-700">Alamat Pemohon</label>
              <div class="mt-1">
                <textarea v-model="st.alamat_pemohon" id="alamat_pemohon" name="alamat_pemohon" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                <p v-if="errors.alamat_pemohon" class="errors">{{ errors.alamat_pemohon }}</p>
              </div>
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="no_tlp" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
              <input v-model="st.no_tlp" type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <p v-if="errors.no_tlp" class="errors">{{ errors.no_tlp }}</p>
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="jenis_usaha" class="block text-sm font-medium text-gray-700">Jenis/Nama Usaha</label>
              <input v-model="st.jenis_usaha" type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <p v-if="errors.jenis_usaha" class="errors">{{ errors.jenis_usaha }}</p>
            </div>

            <div>
              <label for="alamat_usaha" class="block text-sm font-medium text-gray-700">Alamat Tempat Usaha</label>
              <div class="mt-1">
                <textarea v-model="st.alamat_usaha" id="alamat_usaha" name="alamat_usaha" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                <p v-if="errors.alamat_usaha" class="errors">{{ errors.alamat_usaha }}</p>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="luas_lahan" class="block text-sm font-medium text-gray-700">
                  Luas Lahan
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    M2
                  </span>
                  <input v-model="st.luas_lahan" type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                  <p v-if="errors.luas_lahan" class="errors">{{ errors.luas_lahan }}</p>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="luas_bangunan" class="block text-sm font-medium text-gray-700">
                  Luas Bangunan
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    M2
                  </span>
                  <input v-model="st.luas_bangunan" type="text" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                  <p v-if="errors.luas_bangunan" class="errors">{{ errors.luas_bangunan }}</p>
                </div>
              </div>
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="status_lahan" class="block text-sm font-medium text-gray-700">Status Lahan</label>
              <input v-model="st.status_lahan" type="text" name="status_lahan" id="status_lahan" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <p v-if="errors.status_lahan" class="errors">{{ errors.status_lahan }}</p>
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input v-model="st.email" type="text" name="email" id="email" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <p v-if="errors.email" class="errors">{{ errors.email }}</p>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
    <div class="w-full bg-cover bg-center" style="height:37rem; background-image: url(http://dishub.banyuwangikab.go.id/img/front/carousel.jpg);">
        <div class="flex items-center justify-center h-full w-full bg-blue-900 bg-opacity-95">
      <div>
        <h3 class="text-3xl font-medium leading-6 text-gold -mt-48">Persyaratan</h3>
        <p class="mt-1 text-lg text-white">
          Pada bagian ini unggah persyaratan - persyaratan yang dibutuhkan
        </p>
        <span class="text-gray-400">Catatan : file yang di unggah berekstensi pdf / jpg</span>
      </div>
        </div>
    </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form @submit.prevent="submit">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">

            <div class="form-group">
              <div class="row offset-2">
                <div class="col-5">
                  <label>Surat Permohonan</label>
                </div>
                <div class="col-7">
                <input type="file" name="file" id="surat_pemohon" @input="st.surat_pemohon = $event.target.files[0]">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row offset-2">
                <div class="col-5">
                  <label>Scan KTP</label>
                </div>
                <div class="col-7">
                  <input type="file" name="file" id="ktp" @input="st.ktp = $event.target.files[0]">
                </div>
              </div>
            </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Scan Sertifikat Tanah</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="sertifikat_tanah" @input="st.sertifikat_tanah = $event.target.files[0]">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Kesesuaian Tata Ruang</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="ktr" @input="st.ktr = $event.target.files[0]">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Rencana Tapak/Site Plan</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="rencana_tapak" @input="st.rencana_tapak = $event.target.files[0]">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Desain Bangunan</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="desain_bangunan" @input="st.desain_bangunan = $event.target.files[0]">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Company Profile Penyusun</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="company_profile" @input="st.company_profile = $event.target.files[0]">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Sertifikat Penyususn</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="sertifikat_penyusun" @input="st.sertifikat_penyusun = $event.target.files[0]">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Dokumen Andalalin</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="dokumen_andalalin" @input="st.dokumen_andalalin = $event.target.files[0]">
            </div>
          </div>
        </div>

          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
export default {
      props: {
        errors: Object
    },
  setup () {
    const st = useForm({
          nama_pemohon: null,
          alamat_pemohon: null,
          no_tlp: null,
          jenis_usaha: null,
          alamat_usaha: null,
          luas_lahan: null,
          luas_bangunan: null,
          status_lahan: null,
          email: null,
          surat_pemohon: null,
          ktp:null,
          sertifikat_tanah:null,
          ktr: null,
          rencana_tapak: null,
          desain_bangunan: null,
    })
    function submit() {
      st.post('/st', this.st)
    }
    return { st, submit }
  },
}
</script>
