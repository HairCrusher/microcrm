import Vue from 'vue'
import Vuex from 'vuex'
import performers from './modules/performers'
import userRoles from './modules/userRoles'
import groups from './modules/groups'
import users from './modules/users'
import events from './modules/events'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        performers,
        userRoles,
        groups,
        users,
        events
    },
});