<script setup>
import IconProfile from "../../icons/IconProfile.vue";
</script>
<template>
  <Link
    :href="route('login.create')"
    class="flex items-center justify-center size-12.5 rounded-full bg-(--light-grey-color)"
  >
    <IconProfile></IconProfile>
  </Link>
</template>
