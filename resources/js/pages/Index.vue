<script setup>
import AppLayout from "../layouts/AppLayout.vue";
import SearchForm from "../components/sections/search/SearchForm.vue";
import EventSection from "../components/sections/event/EventSection.vue";
const props = defineProps([
  "events",
  "event_statuses",
  "event_directions",
  "event_types",
]);
</script>
<template>
  <AppLayout>
    <h1 class="text-center mb-10 font-bold text-4xl">Все олимпиады</h1>
    <SearchForm></SearchForm>
    <EventSection :events="events"></EventSection>
  </AppLayout>
</template>
