<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

defineProps({
    errors: Object
})

const form = reactive({
    item_name: null,
    price: null,
    explain: null,
    image: null,
    order_condition: null,
    item_num: null,
    stock: null
})

const storeItem = () => {
    Inertia.post('/items', form)
}

</script>

<template>
    <Head title="商品登録" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                商品登録
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <section class="text-gray-600 body-font relative">
                            <form @submit.prevent="storeItem">
                            <div class="container px-5 py-8 mx-auto">
                              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="name" class="leading-7 text-sm text-gray-600">商品名</label>
                                      <input type="text" id="name" name="name" v-model="form.name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="price" class="leading-7 text-sm text-gray-600">商品価格</label>
                                      <input type="number" id="price" name="price" v-model="form.price" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="explain" class="leading-7 text-sm text-gray-600">商品説明</label>
                                      <textarea id="explain" name="explain" v-model="form.explain" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="image" class="leading-7 text-sm text-gray-600">商品画像</label>
                                      <input type="text" id="image" name="image" v-model="form.image" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="order_condition" class="leading-7 text-sm text-gray-600">発注条件</label>
                                      <textarea id="order_condition" name="order_condition" v-model="form.order_condition" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="item_num" class="leading-7 text-sm text-gray-600">品番</label>
                                      <input type="number" id="item_num" name="item_num" v-model="form.item_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="stock" class="leading-7 text-sm text-gray-600">在庫数</label>
                                      <input type="number" id="stock" name="stock" v-model="form.stock" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">商品登録</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </form>
                          </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>