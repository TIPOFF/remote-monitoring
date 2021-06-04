import Vue from 'vue';
import Vuex from 'vuex';
import LaravelAgoraModule from './vendor/laravel-agora-api/modules/LaravelAgoraModule';
import AgoraVideoDisplay from './vendor/laravel-agora-api/components/AgoraVideoDisplay.vue';
import AgoraUserList from './vendor/laravel-agora-api/components/AgoraUserList.vue';
import AgoraIncomingCallAlert from './vendor/laravel-agora-api/components/AgoraIncomingCallAlert.vue';
import AgoraCallOutgoingAlert from './vendor/laravel-agora-api/components/AgoraCallOutgoingAlert.vue';

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        agora: LaravelAgoraModule
    }
})

Vue.component('agora-video-display', AgoraVideoDisplay);
Vue.component('agora-user-list', AgoraUserList);
Vue.component('agora-incoming-call-alert', AgoraIncomingCallAlert);
Vue.component('agora-outgoing-call-alert', AgoraCallOutgoingAlert);

const app = new Vue({
    el: '#app',
    store: store
});
