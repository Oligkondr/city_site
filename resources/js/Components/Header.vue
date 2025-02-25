<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({ user: Object });

</script>

<template>
    <div class="bg-gray-300 p-4 grid grid-cols-2">
        <div class="flex">
            <Link :href="route('welcome')">
                <span class="ml-2 font-bold text-xl">
                    Городской портал
                </span>
            </Link>
        </div>
        <div class="flex justify-end">
            <Link :href="route('news.index')">
                Все новости
            </Link>
        </div>
    </div>
</template>

<style scoped>

</style>
