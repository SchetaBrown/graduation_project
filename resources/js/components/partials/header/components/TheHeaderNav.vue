<script setup>
const links = [
  {
    title: "Олимпиады",
    href: "",
  },
  {
    title: "Команды",
    href: "",
  },
  {
    title: "Контакты",
    href: "",
  },
];
</script>
<template>
  <nav>
    <ul class="flex gap-5">
      <li v-for="link in links" :key="link.title">
        <Link class="font-semibold text-[18px]">{{ link.title }}</Link>
      </li>
    </ul>
  </nav>
</template>
