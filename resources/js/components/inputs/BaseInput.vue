<script setup>
const props = defineProps(["placeholder", "type"]);
import AppLayout from '../';
</script>
<template>
  <input
    :type="type ?? 'text'"
    :placeholder="placeholder ?? 'Введите значение...'"
    :name="name ? name : 'base_name'"
  />
  lasldt
</template>
