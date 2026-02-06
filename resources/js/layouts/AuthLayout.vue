<script setup>
import ChooseRole from "../components/sections/auth/ChooseRoleSection.vue";
</script>
<template>
  <body class="bg-(--gray-color)">
    <main class="flex items-center justify-center min-h-screen">
      <div class="flex flex-col gap-5 max-w-125 w-full">
        <ChooseRole v-if="!route('login.create')"></ChooseRole>
        <slot></slot>
      </div>
    </main>
  </body>
</template>
