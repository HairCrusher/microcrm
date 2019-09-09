<template>
    <nav class="navbar navbar-expand-lg mb-3 navbar-dark bg-primary">
        <a class="navbar-brand" href="/">MicroCRM</a>
        <div v-if="$auth.check()" class="menu-wrapper">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'performers'}" exact>Мои исполнители</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'events'}">Эвенты</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'tasks'}">Мои задачи</router-link>
                    </li>
                    <li class="flex-grow-1"></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $auth.user().last_name }} {{ $auth.user().first_name }} [{{ $auth.user().vk_id }} - {{ $auth.user().vk_name }}]
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <router-link class="dropdown-item" to="/groups">Группы в VK</router-link>
                            <button class="dropdown-item" @click="$auth.logout({redirect: 'login'})">Выход</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "navbar",
    }
</script>

<style scoped>
    .menu-wrapper, ul {
        width: 100%;
    }
</style>