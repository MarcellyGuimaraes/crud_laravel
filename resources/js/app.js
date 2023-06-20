import { createApp } from 'vue';
import Example from './components/Example.vue';
import './bootstrap';

const app = createApp({
    components: {
        Example
    }
})

app.mount("#app");