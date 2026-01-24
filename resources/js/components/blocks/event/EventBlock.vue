<script setup>
import { computed } from "vue";

defineProps(["title", "description", "status", "limit", "count", "startDate"]);

const getStatusProperties = computed((status) => {
  switch (status) {
    case "открыта регистрация":
      return {
        title: status,
        divClass: "bg-(--light-green-color)",
        titleClass: "text-(--green-color)",
      };
    default: {
      return 1;
    }
  }
});
</script>
<template>
  <Link
    :href="route('index')"
    class="flex flex-col justify-between bg-white rounded-md px-6.25 py-7.5 border-(--light-grey-color)"
  >
    <h1 class="font-semibold text-[20px]">
      {{ title ?? "Название олимпиады" }}
    </h1>
    <p class="mt-2.5 text-(--dark-grey-color)">
      {{ description ?? "Описание олимпиады" }}
    </p>
    <div class="flex items-center justify-between mt-7.5">
      <div
        class="flex items-center justify-center px-7.5 py-2 rounded-[15px] bg-(--light-green-color)"
      >
        {{ status ?? "Нет статуса" }}
      </div>
      <div class="flex gap-3.75">
        <p class="font-medium">{{ count }} / {{ limit }}</p>
      </div>
    </div>
  </Link>
</template>
