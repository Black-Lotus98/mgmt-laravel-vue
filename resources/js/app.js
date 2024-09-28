import "./bootstrap";
import "../sass/app.scss";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";

// pinia
import { createPinia } from "pinia";

// i18n
import { initializeI18n } from "../js/libs/i18n"; // Import the initialize function
import { useLanguageStore } from "./store/language"; // Import the language store

// Vuetify
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

const vuetify = createVuetify({
    components,
    directives,
});

const appName = import.meta.env.VITE_APP_NAME || "Fannoun Group";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        const pinia = createPinia();

        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(ZiggyVue)
            .use(vuetify);

        const languageStore = useLanguageStore();
        const i18n = initializeI18n(languageStore);

        app.use(i18n);
        app.mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
