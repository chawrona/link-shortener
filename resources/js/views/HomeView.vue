<script setup>
    import { ref } from 'vue';
    import router from "../router/app";
    import Navigation from "../components/Navigation.vue";
    import Header from "../components/Header.vue";

    const original_url = ref("");
    const error = ref("");

    const handleSubmit = async () => {
        error.value = "";
        try {
            const response = await axios.post("/api/link", { original_url: original_url.value });
            router.push(response.data);
        } catch (err) {
            if (err.response && err.response.status === 422) {
                error.value = "Wrong URL format.";
            } else {
                error.value = "Something's wrong. Try again later.";
            }
        }
    };

</script>

<template>

    <Header />
    <Navigation />
    <p v-if="error" class="error">{{ error }}</p>
    <form @submit.prevent="handleSubmit">
        <input type="text" placeholder="https://yourlink.com/verylongpath" v-model="original_url">
        <button type="submit">Shorten!</button>
    </form>

</template>


<style scoped>
    form {
        display: flex;
        width: 100%;
        gap: 0.5rem;
    }

    input {
        font-size: 1.5rem;
        width: 29ch;
        padding: 0.25em 0.5em;
    }

    button {
        display: block;
        padding: 0.75rem 1.5rem;
        background-color: #005b43;
        text-decoration: none;
        color: white;
        font-weight: bold;
        border-radius: 0.25rem;
        border: none;
        cursor: pointer;
        box-shadow: 2px 2px 6px 0px rgba(66, 68, 90, 0.196);

        &:hover {
            background-color: #046b50;
        }
    }

    .error {
        color: red;
    }
</style>
