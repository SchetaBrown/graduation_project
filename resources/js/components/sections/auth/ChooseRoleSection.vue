<script setup>
defineEmits(["activeTab"]);

const buttons = [
  {
    id: "participant",
    title: "Участник",
  },
  {
    id: "manager",
    title: "Руководитель",
  },
];

const classes = {
  active: "bg-(--blue-color) text-white",
  disable: "bg-white text-(--dark-gray-color) border-(--light-gray-color)",
};
</script>
<template>
  <section
    class="flex items-center gap-2.5 bg-white rounded-md border border-(--light-gray-color) p-2.5"
  >
    <button
      v-for="button in buttons"
      :key="button.id"
      :id="button.id"
      class="flex items-center justify-center h-12.5 w-65 rounded-md"
    >
      {{ button.title }}
    </button>
  </section>
</template>
