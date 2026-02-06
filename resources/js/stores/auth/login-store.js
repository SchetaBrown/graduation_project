import { useForm } from "@inertiajs/inertia-vue3";
import { defineStore } from "pinia";
import { ref } from "vue";

export const useLoginStore = defineStore("login", () => {
    // Свойства
    const form = useForm({
        email: "",
        password: "",
    });

    // Геттеры

    // Сеттеры

    // Действия
    function sendData() {
        if (form.email !== null && form.password !== null) {
            form.post(route("login.store"), {
                onSuccess: () => {
                    authStore.setAuthStatus(true);
                    form.reset("password");
                },
                onError: () => {
                    form.reset("password");
                },
            });
        }
    }

    return {};
});
