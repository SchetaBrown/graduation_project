<script setup>
import { BookmarkSquareIcon } from "@heroicons/vue/24/outline";
</script>
<template>
  <Link :href="route('index')" class="flex items-center gap-1.25">
    <div
      class="flex items-center justify-center size-15 rounded-[18px] bg-(--blue-color)"
    >
      <BookmarkSquareIcon class="size-10 text-white"></BookmarkSquareIcon>
    </div>
    <span class="font-semibold text-[18px] text-(--blue-color)">EVENT HUB</span>
  </Link>
</template>
