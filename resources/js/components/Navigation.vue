<script setup>
    import {RouterLink} from 'vue-router';
</script>

<template>
    <nav class="primary-navigation">
        <ul>
            <li>
                <RouterLink to="/" >Home</RouterLink>
            </li>
            <li>
                <RouterLink to="/links">All Links</RouterLink>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
    .primary-navigation {
        width: 100%;
        margin: 1rem 0;
    }

    .primary-navigation ul {
        display: flex;
        flex-direction: row;
        width: 100%;
        list-style: none;
        gap: 2rem;
    }

    a {
        display: block;
        font-size: 0.9rem;
        padding: 0.5rem 1.5rem;
        background-color: #008bcd;
        text-decoration: none;
        color: white;
        font-weight: bold;
        border-radius: 0.25rem;
        box-shadow: 2px 2px 6px 0px rgba(66, 68, 90, 0.196);

        &:hover {
            background-color: #0481bb;
        }
    }

</style>
