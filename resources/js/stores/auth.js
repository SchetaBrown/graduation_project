import { defineStore } from "pinia";
import { ref } from "vue";

export const useAuthStore = defineStore("auth", () => {
    // Свойства (можно сказать приватные)
    const authStatus = ref(false);

    // Геттеры
    function getAuthStatus() {
        return authStatus.value;
    }

    console.log(authStatus.value)

    // Сеттеры
    function setAuthStatus(status) {
        authStatus.value = status;
    }

    return {
        setAuthStatus,
        getAuthStatus,
    };
});
