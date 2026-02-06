<script setup>
import { computed } from "vue";

const props = defineProps([
  "id",
  "title",
  "description",
  "status",
  "player_count",
  "palyer_limit",
]);

const statusProperties = computed((status) => {
  if (status !== null && typeof status === "string") {
    if (status.includes("открыто")) {
      return {
        div: "bg-(--light-green-color)",
        title: status,
      };
    }
  }
});
</script>
<template>
  <div
    class="flex flex-col justify-between bg-white rounded-md px-6.25 py-7.5 border border-(--light-gray-color)"
  >
    <div class="flex flex-col">
      <h2 class="font-semibold text-[20px] mb-2.5">
        {{ title ?? "Нет названия" }}
      </h2>
      <p class="text-(--dark-gray-color) font-normal text-[1rem] mb-7.5">
        {{ description ?? "Нет описания" }}
      </p>

    </div>
    <div class="flex flex-col">
      <div class="flex items-center justify-between mb-5">
        <span class="px-10 rounded-[15px] py-2 bg-(--light-green-color)">
          {{ status }}
        </span>
      </div>
      <hr class="text-(--light-gray-color) mb-5" />
      <Link class="text-(--blue-color)">Подробнее</Link>
    </div>
  </div>
</template>
