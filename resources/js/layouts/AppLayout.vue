<script setup>
import AppHeader from "../components/partials/header/AppHeader.vue";
</script>
<template>
  <AppHeader></AppHeader>
  <main class="containter">
    <slot></slot>
  </main>
</template>
