import './bootstrap';

import { createApp } from 'vue';
import FollowButton from './components/FollowButton.vue';

const app = createApp({
    // Configuración de la aplicación, como componentes, opciones globales, etc.
});

app.component('follow-button', FollowButton);

app.mount('#app'); // Monta la aplicación en el elemento con el id 'app' o en cualquier otro selector que desees utilizar



