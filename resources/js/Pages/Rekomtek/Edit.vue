<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Rekom Teknis
      </h2>
    </template>

    <div class="py-20">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <form @submit.prevent="submit">
            <div class="form-group">
                <label>Status</label>
                <input type="text" v-model="form.verifikasi">
            </div>
            <button type="submit">Update</button>
        </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
          AppLayout,
        },
            data(){
        return{
            form: {
                verifikasi: this.rt.verifikasi,
            }
        }
    },
    props: {
        rt: Object
    },
    methods: {
        submit(){
            this.$inertia.put('/rt/' + this.rt.id, this.form)
        },
    }
    })
</script>

