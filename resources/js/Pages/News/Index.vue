<script setup lang="ts">

import Layout from "@/Components/Layout.vue";
import List from "@/Components/News/List.vue";
import Pagination from "@/Components/Pagination.vue";

defineProps({list: Object});
</script>

<template>
    <Layout>
        <h1 class="my-4 font-bold">Все новости</h1>
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
