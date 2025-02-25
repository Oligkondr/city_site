<script setup lang="ts">

import Layout from "@/Components/Layout.vue";
import List from "@/Components/News/List.vue";

defineProps({list: Array});
</script>

<template>
    <Layout>
        <h1>Новости</h1>
        <List
            v-for="news in list"
            :news="news"
        />
    </Layout>
</template>

<style scoped>

</style>
