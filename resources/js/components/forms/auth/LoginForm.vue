<script setup>
import { AUTH_LINKS } from "../../../constants/links.js";
import { useForm } from "@inertiajs/vue3";

import InputDiv from "./components/InputDiv.vue";
import SendButton from "./components/SendButton.vue";
import AuthLayout from "../../../layouts/AuthLayout.vue";
import RegisterLink from "./components/RegisterLink.vue";
import { computed, watch } from "vue";

const form = useForm({
  email: null,
  password: null,
});

const sendData = computed((data) => {
  if (form.email !== null && form.password !== null) {
    form.post(route("login.store"), {
      onSuccess: (success) => {
        console.log(form)
      },
      onError: (error) => {
        console.log("Ошибки формы:", form.errors);
        console.log(error);
        form.reset("password");
      },
    });
  }
});

const handleInput = (field, value) => {
  form[field] = value;
};
</script>
<template>
  <AuthLayout>
    <form
      @submit.prevent="sendData"
      class="py-10 px-6.25 rounded-md border border-(--light-gray-color) w-full"
      method="POST"
    >
      <h1 class="font-semibold text-2xl text-(--blue-color) mb-7.5 text-center">
        Вход в систему
      </h1>

      <div class="flex flex-col gap-2.5">
        <InputDiv
          @input-value="(value) => handleInput('email', value)"
          :name="'email'"
          :label="'Email'"
          :errors="form.errors.email"
        ></InputDiv>
        <InputDiv
          @input-value="(value) => handleInput('password', value)"
          :name="'password'"
          :label="'Пароль'"
          :errors="form.errors.password"
        ></InputDiv>
      </div>
      <SendButton></SendButton>
      <RegisterLink></RegisterLink>
    </form>
  </AuthLayout>
</template>
