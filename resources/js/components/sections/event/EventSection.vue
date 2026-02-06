<script setup>
const props = defineProps(["events"]);
import EventCard from "../../cards/event/EventCard.vue";
</script>
<template>
  <section class="grid grid-cols-2 gap-7.5 mt-10">
    <EventCard
      v-for="event in events"
      :key="event.id"
      :id="event.id"
      :title="event.title"
      :description="event.description"
      :status="event.status.status"
    ></EventCard>
  </section>
</template>
