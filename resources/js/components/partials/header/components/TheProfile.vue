<script setup>
import { UserIcon } from "@heroicons/vue/24/solid";
import LoginLink from "./links/LoginLink.vue";
import RegisterLink from "./links/RegisterLink.vue";

const props = defineProps(["status"]);

console.log(props.status)
</script>
<template>
  <Link
    v-if="status"
    class="flex items-center justify-center size-12.5 rounded-full bg-(--light-gray-color)"
  >
    <UserIcon class="size-7.5"></UserIcon>
  </Link>
  <ul class="flex gap-2.5" v-else>
    <LoginLink></LoginLink>
    <RegisterLink></RegisterLink>
  </ul>
</template>
