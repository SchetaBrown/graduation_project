<script setup>
import { AUTH_LINKS } from "../../../../../constants/links.js";
const linkProperties = AUTH_LINKS.login;
</script>
<template>
  <Link :href="route(`${linkProperties.route}`)" class="flex items-center justify-center bg-white border-2 border-(--blue-color) rounded-md w-25 h-12.5">
    <span
      class="text-[18px] font-semibold text-(--blue-color)"
      >{{ linkProperties.title }}</span
    >
  </Link>
</template>
