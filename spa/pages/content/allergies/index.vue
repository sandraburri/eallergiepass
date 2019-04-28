<!--
This is the allergies guide. If the affected person has
clicked on this on his main view he will find here further topics
which he can click on. If he clicks on these again, he arrives at
the appropriate topic councellor and from there also again back.
-->

<template>
    <section class="container-fluid">

        <ul class="list-group">
            <li class="list-group-item list-group-item-action">
                <nuxt-link to="/content/allergies/house-mites">
                    Hausstaubmilbenallergie
                    <span class="icon-left">
                        <fa :icon="['fas', 'book']" />
                    </span>
                    <span class="icon-right">
                        <fa :icon="['fas', 'chevron-right']" />
                    </span>
                </nuxt-link>
            </li>
        </ul>


    </section>
</template>

<script>
</script>

<style>
</style>