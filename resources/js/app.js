import './bootstrap';

const app = new Vue({
    el: '#app', // o cualquier otro selector que coincida con el contenedor de tu aplicación
    // Otros componentes, opciones, etc.
});

Vue.component('follow-button', require('./components/FollowButton.vue').default);
