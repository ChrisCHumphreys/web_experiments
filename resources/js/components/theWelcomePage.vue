<template>
    <div>
        <router-link to="/">
            <h1 class="title is-1 has-text-grey-dark">Chris Humphreys</h1>
        </router-link>
        <div class="tabs">
            <ul>
                <li>
                    <router-link to="/conway-checkers">Conway Checkers</router-link>
                </li>
                <li>
                <router-link to="/conway-life">Conway's Game of Life</router-link>
                </li>
                <li>
                    <router-link to="/testing">Component Testing</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "theWelcomePage",
    }
</script>

<style scoped>

</style>