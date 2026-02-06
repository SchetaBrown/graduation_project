<script setup>
import TheHeader from "../components/partials/header/TheHeader.vue";
import TheFooter from "../components/partials/footer/TheFooter.vue";

import { Head } from "@inertiajs/vue3";
import { onBeforeMount } from "vue";

const props = defineProps(["title"]);

onBeforeMount(() => {
  document.title = `${props.title} - EventHub` ?? "EventHub";
});
</script>
<template>
  <body class="flex flex-col gap-20 justify-between font-sans antialiased">
    <TheHeader></TheHeader>
    <main class="container mx-auto max-w-360">
      <slot></slot>
    </main>
    <TheFooter></TheFooter>
  </body>
</template>
