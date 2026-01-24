<script setup>
import EventBlock from "../../blocks/event/EventBlock.vue";
const props = defineProps(["events"]);
</script>
<template>
  <section
    class="grid grid-cols-2 gap-7.5 mt-10 max-md:grid-cols-1 max-lg:gap-5"
  >
    <EventBlock
      v-for="event in events.data"
      :key="event.id"
      :title="event.title"
      :description="event.description"
      :status="event.event_status"
      :limit="event.players_limit"
      :count="event.players_count"
      :startDate="event.start_date"
    ></EventBlock>
  </section>
</template>
