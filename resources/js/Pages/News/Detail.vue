<script setup lang="ts">

import Layout from "@/Components/Layout.vue";

defineProps({news: Object});
</script>

<template>
    <Layout>
        <article>
            <h1 class="my-4 font-bold">{{ news.title }}</h1>
            <div v-if="news.image_url">
                <img :src="news.image_url" :alt="news.title">
            </div>
            <div>
                {{ news.content }}
            </div>
            <div>
                {{ news.author }}
            </div>
            <div>
                {{ news.publish_at }}
            </div>
        </article>
    </Layout>
</template>

<style scoped>

</style>
