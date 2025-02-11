<script setup>
  import { defineProps } from 'vue';

   defineProps({
        original_url: String,
        shorten_url: String,
    });

</script>

<template>

    <div class="row">
        <div>Original: {{ original_url }}</div>
        <div>Shorten: {{ shorten_url }}</div>
    </div>

</template>

<style scoped>

.row {
    display: flex;
    margin: 1rem 0;
    flex-direction: column;

    div {
        padding: 0.25rem 0.75rem;
    }
}

</style>
