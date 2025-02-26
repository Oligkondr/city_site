<script setup>
import Header from '@/Components/Header.vue';

import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage();

const user = computed(() => page.props.auth.user);

</script>

<template>
    <div class="mx-auto max-w-5xl">
        <Header :user="user"/>
        <slot/>
    </div>
</template>

<style scoped>

</style>
