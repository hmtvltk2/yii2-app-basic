const { createApp, defineAsyncComponent } = require("vue");

const Counter = defineAsyncComponent(() => import('../../../../components/Counter.vue'));
let appConfig = {};
if (typeof APP !== 'undefined') {
    appConfig = APP;
}

const app = createApp(appConfig);
app.component('counter', Counter);
app.mount('#app');