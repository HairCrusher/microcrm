<template>
    <button type="button" class="btn btn-light disabled">
        <i class="fas fa-user-tag"></i>
        <b>{{getRole(role)}}</b>
    </button>
</template>

<script>
    export default {
        name: "BadgeRole",
        props: ['role'],
        computed: {
            getRole() {
                return this.$store.getters['userRoles/getRole'];
            },
        }
    }
</script>

<style scoped>

</style>