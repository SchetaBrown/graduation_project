import "../css/main.css";
import { createApp, h } from "vue";
import { createPinia } from "pinia";
import { createInertiaApp, Link } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/index.js";
import { InertiaProgress } from "@inertiajs/progress";

const appName = import.meta.env.VITE_APP_NAME || "EventHub";
InertiaProgress.init();

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./pages/${name}.vue`,
            import.meta.glob("./pages/**/*.vue", {
                eager: false
            }),
        ),
    setup({ el, App, props, plugin }) {
        const pinia = createPinia();
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(ZiggyVue)
            .component("Link", Link)
            .mount(el);
    },
});
