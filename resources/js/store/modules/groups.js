import {getAll, addGroup} from '../api/groups'

const state = {
    list: [],
    loading: false
};

// const getters = {
//   all: state => state.all
// }

const mutations = {
    setList(state, payload) {
        state.list = payload;
    },
    setLoading(state, loading) {
        state.loading = loading;
    }
};

const actions = {
    fetchList({commit}) {
        commit('setLoading', true);
        getAll().then(resp => {
            if (resp.data.success)
                commit('setList', resp.data.data);

            commit('setLoading', false);
        });
    },
    addGroup(store, id) {
        addGroup(id).then(resp => {
            store.dispatch('fetchList');
        });
    }
};

export default {namespaced: true, state, mutations, actions};