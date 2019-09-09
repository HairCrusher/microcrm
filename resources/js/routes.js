import VueRouter from 'vue-router'
import LogIn from './pages/Auth/LogIn'
import GroupsList from './pages/Groups/GroupsList'
import PerformersList from './pages/Performers/Index'
import PerformerSingle from './pages/Performers/Single'
import EventsList from './pages/Events/Index'
import TasksList from './pages/Tasks/Index'

export default new VueRouter ({
    linkActiveClass: 'active',
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: LogIn
        },
        {
            path: '/',
            name: 'performers',
            component: PerformersList,
            meta: {auth: true},
        },
        {
            path: '/performers/:id',
            name: 'performerShow',
            component: PerformerSingle,
            meta: {auth: true},
        },
        {
            path: '/events',
            name: 'events',
            component: EventsList,
            meta: {auth: true},
        },
        {
            path: '/tasks',
            name: 'tasks',
            component: TasksList,
            meta: {auth: true},
        },
        {
            path: '/groups',
            name: 'groups',
            component: GroupsList,
            meta: {auth: true},
        },
    ]
})