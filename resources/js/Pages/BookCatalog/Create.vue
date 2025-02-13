<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm } from '@inertiajs/vue3';

// Define the form using Inertia's useForm
const form = useForm({
  name: '',
  description: '',
  author: '',
  publisher: '',
  category: '',
  language: '',
  cover_image: '',
});

// Function to handle form submission
const submit = () => {
  form.post('/book-catalogs', {
    onSuccess: () => {
      form.reset(); // Reset the form after successful submission
    },
  });
};
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add New Book</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6">
            <form @submit.prevent="submit" class="space-y-4">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input
                  v-model="form.name"
                  type="text"
                  id="name"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                />
                <p v-if="form.errors.name" class="text-sm text-red-500">{{ form.errors.name }}</p>
              </div>

              <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input
                  v-model="form.description"
                  type="text"
                  id="description"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                />
                <p v-if="form.errors.description" class="text-sm text-red-500">{{ form.errors.description }}</p>
              </div>

              <div>
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input
                  v-model="form.author"
                  type="text"
                  id="author"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                />
                <p v-if="form.errors.author" class="text-sm text-red-500">{{ form.errors.author }}</p>
              </div>

              <div>
                <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
                <input
                  v-model="form.publisher"
                  type="text"
                  id="publisher"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                />
                <p v-if="form.errors.publisher" class="text-sm text-red-500">{{ form.errors.publisher }}</p>
              </div>

              <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <input
                  v-model="form.category"
                  type="text"
                  id="category"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                />
                <p v-if="form.errors.category" class="text-sm text-red-500">{{ form.errors.category }}</p>
              </div>

              <div>
                <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                <input
                  v-model="form.language"
                  type="text"
                  id="language"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                />
                <p v-if="form.errors.language" class="text-sm text-red-500">{{ form.errors.language }}</p>
              </div>

              <div>
                <button
                  type="submit"
                  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"
                  :disabled="form.processing"
                >
                  Add Book
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>