<template>
    <div>
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <button @click="DummyLogin()" class="btn btn-success btn-lg"><i class="fab fa-vk"></i> Авторизироваться</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LogIn",
        methods: {
            DummyLogin(){
                this.$auth.login({
                    url: 'auth/login',
                    fetchUser: true,
                    rememberMe: true
                });
            },
        }
    }
</script>

<style scoped>
    .d-flex{
        height: calc(100vh - 94px);
    }
</style>