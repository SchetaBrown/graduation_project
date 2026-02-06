<script setup>
import AppLayout from "../layouts/AppLayout.vue";
import SearchSection from "../components/sections/search/SearchSection.vue";
import EventSection from "../components/sections/event/EventSection.vue";
import { useAuthStore } from "../stores/auth.js";

const props = defineProps([
  "events",
  "event_statuses",
  "event_directions",
  "event_types",
  "isAuth",
]);
</script>
<template>
  <AppLayout title="Главная страница">
    <SearchSection> </SearchSection>
    <EventSection :events="events.data"> </EventSection>
  </AppLayout>
</template>
