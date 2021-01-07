const { createApp, defineAsyncComponent } = require("vue");

const Counter = defineAsyncComponent(() => import('../../../../components/Counter.vue'));
const Counter2 = defineAsyncComponent(() => import('../../../../components/Counter2.vue'));
let appConfig = {};
if (typeof APP !== 'undefined') {
    appConfig = APP;
}

const app = createApp(appConfig);
app.component('counter', Counter);
app.component('counter2', Counter2);
app.mount('#app');