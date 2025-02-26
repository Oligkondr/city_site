<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

defineProps({news: Object});
</script>

<template>
    <div>
        <Link :href="route('news.detail', {news: news.slug})">
            {{ news.title }}
        </Link>
    </div>
</template>

<style scoped>

</style>
