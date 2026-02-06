<script setup>
import Logotype from "./components/Logotype.vue";
import TheProfile from "./components/TheProfile.vue";
import TheHeaderNav from "./components/TheHeaderNav.vue";
import { useAuthStore } from "../../../stores/auth.js";
const authStore = useAuthStore();

const isAuth = authStore.authStatus;
</script>
<template>
  <header class="flex min-h-25 bg-white">
    <div class="container flex items-center justify-between mx-auto max-w-360">
      <Logotype></Logotype>
      <TheProfile :status="isAuth"></TheProfile>
    </div>
  </header>
</template>
