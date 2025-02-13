
<script setup>
const props = defineProps({
  bookCatalogs: Array,
});
</script>


<template>
  <div class="content">
    <h1 class="text-2xl font-bold mb-4">Book Catalogs</h1>
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">Name</th>
          <th class="py-2 px-4 border-b">Description</th>
          <th class="py-2 px-4 border-b">Author</th>
          <th class="py-2 px-4 border-b">Publisher</th>
          <th class="py-2 px-4 border-b">Category</th>
          <th class="py-2 px-4 border-b">Language</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="book in props.bookCatalogs" :key="book.id" class="hover:bg-gray-50">
          <td class="py-2 px-4 border-b">{{ book.name || 'N/A' }}</td>
          <td class="py-2 px-4 border-b">{{ book.description || 'N/A' }}</td>
          <td class="py-2 px-4 border-b">{{ book.author || 'N/A' }}</td>
          <td class="py-2 px-4 border-b">{{ book.publisher || 'N/A' }}</td>
          <td class="py-2 px-4 border-b">{{ book.category || 'N/A' }}</td>
          <td class="py-2 px-4 border-b">{{ book.language || 'N/A' }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
