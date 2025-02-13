<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Index from '@/Pages/BookCatalog/Index.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    bookCatalogs: Array,
});
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <Index :bookCatalogs="props.bookCatalogs"></Index>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
