<script setup>
import SearchInput from "./SeachInput.vue";
import SearchButton from "./SearchButton.vue";
import { useForm } from "@inertiajs/vue3";
const form = useForm({});
</script>
<template>
  <section>
    <form @submit.prevent="route()" class="flex gap-2.5">
      <SearchInput></SearchInput>
      <SearchButton></SearchButton>
    </form>
  </section>
</template>
