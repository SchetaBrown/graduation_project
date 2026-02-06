<script setup>
import AppLayout from "../layouts/AppLayout.vue";
import SearchSection from "../components/sections/search/SearchSection.vue";
import EventSection from "../components/sections/event/EventSection.vue";
import { useAuthStore } from "../stores/auth.js";
import { computed, onBeforeMount } from "vue";

const props = defineProps([
  "events",
  "event_statuses",
  "event_directions",
  "event_types",
  "isAuth",
  "title",
]);

const authStore = useAuthStore();

const isAuth = () => {
  const authStatus = props.isAuth ?? null;
  if (authStatus === null || !authStatus) {
    return false;
  }

  return true;
};

authStore.setAuthStatus(isAuth(props.isAuth));
</script>
<template>
  <AppLayout :title="props.title">
    <SearchSection> </SearchSection>
    <EventSection :events="events.data"> </EventSection>
  </AppLayout>
</template>
