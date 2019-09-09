import {getAll, store, update, getUsers, provideAccess} from "../api/performers"

const state = {
    list: [],
    loading: false,
    admins: [],
    moders: [],
    usersLoading: false
};

const getters = {
    findAuthRole: state => (performer, user) => {
        return performer.users.find(x => x.id === user.id).pivot.role_id;
    },
    performerOwner: state => performer => {
        return performer.users.find(x => x.id === performer.user_id);
    },
    getById: state => id => {
        return state.list.find(x => x.id === parseInt(id));
    },
    getUsers: state => {
        return state.admins.map(user => {
            return {...user, role:'admin'}
        }).concat(state.moders.map(user => {
            return {...user, role:'moder'}
        }));
    },
    userLoading: state => {
        return state.usersLoading;
    }
};

const mutations = {
    setList(state, payload) {
        state.list = payload;
    },
    setLoading(state, loading) {
        state.loading = loading;
    },
    setUsersLoading(state, loading){
        state.usersLoading = loading;
    },
    setUsers(state, users){
        state.admins = users.admin;
        state.moders = users.moder;
    },
    flashUsers(state){
        state.users = [];
    }
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
    store({dispatch}, payload) {
        store(payload).then(resp => {
            if (resp.data.success)
                dispatch('fetchList', true);
        });
    },
    update({dispatch}, payload) {
        update(payload).then(resp => {
            if (resp.data.success)
                dispatch('fetchList', true);
        });
    },
    getPerformerUsers({commit}, id){
        commit('flashUsers');
        commit('setUsersLoading', true);
        getUsers(id).then(resp => {
            if (resp.data.success){
                commit('setUsers', resp.data.data);
            }
            commit('setUsersLoading', false);
        });
    },
    provideAccess({dispatch}, payload) {
        provideAccess(payload).then(resp => {
            if (resp.data.success){
                $('.modal').modal('hide');
                dispatch('fetchList', true);
            }
        });
    }
};

export default {namespaced: true, state, getters, mutations, actions}