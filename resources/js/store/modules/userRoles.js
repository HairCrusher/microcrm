const state = {
    creator: 'Создатель',
    admin: 'Администратор',
    moder: 'Модератор'
};

const getters = {
    getRole: state => slug => {
        return state[slug];
    },
};


export default {namespaced: true, state, getters}