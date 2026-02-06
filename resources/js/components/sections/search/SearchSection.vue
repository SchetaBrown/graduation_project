<script setup>
import { MagnifyingGlassIcon } from "@heroicons/vue/24/solid";
</script>
<template>
  <section class="flex flex-col gap-10">
    <h1 class="font-extrabold text-[36px] text-center">Все олимпиады</h1>
    <form @submit.prevent="">
      <div class="flex gap-2.5">
        <input
          type="text"
          class="w-full min-h-12.5 rounded-md border-2 border-(--light-gray-color) text-(--dark-gray-color) pl-6.25 bg-white"
          placeholder="Введите название олимпиады"
          maxlength="100"
        />
        <button
          type="submit"
          class="flex items-center justify-center bg-(--blue-color) w-20 h-12.5 rounded-md"
        >
          <MagnifyingGlassIcon
            class="text-white size-6.25"
          ></MagnifyingGlassIcon>
        </button>
      </div>

      <div class="flex gap-2.5 mt-5">
        <select
          name=""
          id=""
          class="min-w-52.5 h-10 rounded-md border border-(--light-gray-color) px-3.75 bg-white"
        >
          <option value="">Выберите опцию</option>
        </select>
        <select
          name=""
          id=""
          class="min-w-52.5 h-10 rounded-md border border-(--light-gray-color) px-3.75 bg-white"
        >
          <option value="">Выберите опцию</option>
        </select>
        <select
          name=""
          id=""
          class="min-w-52.5 h-10 rounded-md border border-(--light-gray-color) px-3.75 bg-white"
        >
          <option value="">Выберите опцию</option>
        </select>
      </div>
    </form>
  </section>
</template>
