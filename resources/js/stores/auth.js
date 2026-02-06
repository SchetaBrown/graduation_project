import { defineStore } from "pinia";
import { ref } from "vue";

export const useAuthStore = defineStore("auth", () => {
    // Свойства
    const authStatus = ref(false);

    // Сеттеры
    function setAuthStatus(status) {
        authStatus.value = status;
    }

    return {
        authStatus,
        setAuthStatus,
    };
});
