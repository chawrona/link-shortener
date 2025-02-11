<script setup>
    import {RouterView} from 'vue-router';
</script>

<template>
    <div class="app-container">
        <RouterView />
    </div>
</template>

<style scoped>
    .app-container {
        display: flex;
        flex-direction: column;
        align-items: start;
        width: 100%;

    }
</style>
