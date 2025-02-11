<script setup>
    import { ref, onMounted } from 'vue';
    import Navigation from "../components/Navigation.vue";
    import Header from "../components/Header.vue";
    import LinkRow from "../components/LinkRow.vue";


    const links = ref([]);

    onMounted(async () => {
        const response = await axios.get("/api/link");
        links.value = response.data;
    })

</script>

<template>
    <Header />
    <Navigation />
    <h3>Links</h3>

    <LinkRow v-for="(link, index) in links"
        :key="index"
        :original_url="link.original_url"
        :shorten_url="link.shorten_url"
    />

</template>
