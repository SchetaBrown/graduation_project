<script setup>
import Logotype from "./Logotype.vue";
import HeaderNav from "./HeaderNav.vue";
import Profile from "./Profile.vue";
</script>

<template>
  <header
    class="flex items-center justify-center bg-white rounded-b-md mb-20 min-h-25"
  >
    <div class="container flex items-center justify-between max-w-360 px-7.5">
      <Logotype></Logotype>
      <div class="flex items-center">
        <HeaderNav></HeaderNav>
        <Profile></Profile>
      </div>
    </div>
  </header>
</template>
