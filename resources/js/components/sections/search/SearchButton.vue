<script setup>
import IconMagnify from "../../icons/IconMagnify.vue";
defineEmits(["send-data"]);
</script>

<template>
  <button class="flex items-center justify-center w-20 h-12.5 rounded-md bg-(--blue-color)" type="submit">
    <IconMagnify></IconMagnify>
  </button>
</template>
