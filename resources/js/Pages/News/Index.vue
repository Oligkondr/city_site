<script setup lang="ts">

import Layout from "@/Components/Layout.vue";
import List from "@/Components/News/List.vue";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    list: Object,
    categories: Array,
    currentCategory: String
});

const changeCategory = (e) => {
    window.location.href = route('news.index', {category: e.target.value})
}
</script>

<template>
    <Layout>
        <div class="flex justify-between">
            <h1 class="my-4 font-bold">Все новости</h1>
            <select :value="currentCategory" @change="changeCategory">
                <option value="">Без категории</option>
                <option
                    v-for="category in categories"
                    :key="category.id"
                    :value="category.slug"
                >
                    {{ category.name }}
                </option>
            </select>
        </div>
        <List
            v-for="news in list.data"
            :key="news.id"
            :news="news"
        />
        <Pagination :list="list"/>
    </Layout>
</template>

<style scoped>

</style>
