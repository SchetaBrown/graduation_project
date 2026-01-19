<script setup>
const props = defineProps(["placeholder", "type"]);
</script>
<template>
  <input
    :type="type ?? 'text'"
    :placeholder="placeholder ?? 'Введите значение...'"
    :name="name ? name : 'base_name'"
  />
</template>
