<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

const props = defineProps({list: Object});
</script>

<template>
    <div class="mt-3 text-sm pagination">
        <span class="mr-5">Страница {{ list.current_page }} из {{ list.last_page }}</span>

        <Link
            class="mr-1"
            v-if="props.list.prev_page_url"
            :href="props.list.prev_page_url"
        >
            Назад
        </Link>
        <span v-else class="mr-1 text-gray-400 cursor-default">Назад</span>

        <Link
            v-if="props.list.next_page_url"
            :href="props.list.next_page_url"
        >
            Вперед
        </Link>
        <span v-else class="text-gray-400 cursor-default">Вперед</span>
    </div>
</template>

<style scoped>

</style>
