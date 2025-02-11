<script setup>
  import { defineProps } from 'vue';

   defineProps({
        original_url: String,
        shortened_url: String,
    });

</script>

<template>

    <div class="row">
        <a :href="original_url" class="original">{{ original_url }}</a>
        <a :href="shortened_url" class="shortened">{{ shortened_url }}</a>
    </div>

</template>

<style scoped>

.row {
    display: flex;
    width: 100%;
    margin: 1rem 0;
    flex-direction: column;
    gap: 0.5rem;

    a {
        display: block;
        width: 100%;
        border-radius: 0.25rem;
        padding: 0.25rem 0.75rem;
        background-color: #fff;
        border: 1px solid #008bcd;
    }

    .original {
        background-color: #008bcd;
        color: white;
        border: 1px solid #008bcd;

        &:hover {
            background-color: #0a98d9;;
        }
    }

    .shortened {
        color: black;

        &:hover {
            background-color: #eaeaea;
        }
    }
}

</style>
