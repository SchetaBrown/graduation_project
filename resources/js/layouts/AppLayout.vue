<script setup>
import AppHeader from "../components/partials/header/AppHeader.vue";
import AppFooter from "../components/partials/footer/AppFooter.vue";
</script>
<template>
  <AppHeader></AppHeader>
  <main class="container mx-auto px-7.5 max-w-360">
    <slot></slot>
  </main>
  <AppFooter></AppFooter>
</template>
