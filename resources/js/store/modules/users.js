import {get} from '../api/users'

const state = {
    list: []
};

const getters = {
    vkUserLink: state => user => {
        return user ? `<a href="https://vk.com/${user.vk_name}">${user.first_name} ${user.last_name}</a>`: '';
    },
    get: state => id => {
        return state.list.find(x => x.id === parseInt(id));
    },
};

const mutations =  {
    addToList(state, user) {
        if(user.constructor === Array)
            state.list.concat(user);
        else
            state.list.push(user);
    },
};

const actions = {
    getUser({commit}, id){
        get(id).then(resp => {
            if(resp.data.success)
                commit('addToList', resp.data.data);
        });
    }
};

export default {namespaced: true, state, getters, mutations, actions}