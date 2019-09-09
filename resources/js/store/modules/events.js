import {getAll} from '../api/events'

const state = {
    list: [],
    loading: false
};

const getters = {
    getById: state => id => {
        return state.list.find(x => x.id === parseInt(id));
    },
};

const mutations = {
    setList(state, payload) {
        state.list = payload;
    },
    setLoading(state, loading) {
        state.loading = loading;
    },
};

const actions = {
    fetchList({state, commit}, force = false) {
        if (state.list.length === 0 || force) {
            commit('setLoading', true);
            getAll('performers').then(resp => {
                if (resp.data.success)
                    commit('setList', resp.data.data);

                commit('setLoading', false);
            });
        }
    },
};

export default {namespaced: true, state, getters, mutations, actions}