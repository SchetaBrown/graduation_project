<script setup>
import { AUTH_LINKS } from "../../../../../constants/links.js";
const linkProperties = AUTH_LINKS.register;
</script>
<template>
  <Link
    :href="route(`${linkProperties.route}`)"
    class="flex items-center justify-center bg-(--blue-color) rounded-md px-5.75"
  >
    <span class="text-[18px] font-semibold text-white">{{
      linkProperties.title
    }}</span>
  </Link>
</template>
