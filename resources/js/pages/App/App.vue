<template>
    <div>
        <navbar></navbar>
        <div v-if="$auth.ready()" class="container">
            <router-view></router-view>
        </div>
        <div v-if="!$auth.ready()" class="container"><h1>ЗАГРУЗКА</h1></div>
    </div>
</template>

<script>
    export default {
        name: "app",
        mounted() {
            this.$store.dispatch('performers/fetchList');
            this.$store.dispatch('groups/fetchList');
            // this.$store.dispatch('userRoles/fetchList');
        }
    }
</script>

<style scoped>

</style>