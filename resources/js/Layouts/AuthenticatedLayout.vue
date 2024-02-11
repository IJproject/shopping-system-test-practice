<script setup>
const props = defineProps({
    title: String,
});

const navigation_list = [
    {
        id: 1,
        icon: "mdi-store",
        label: "商品一覧",
        href: "/shopping",
    },
    {
        id: 2,
        icon: "mdi-cart",
        label: "買い物カゴ",
        href: "/shopping/cart",
    },
];
</script>

<template>
    <v-app>
        <v-navigation-drawer
            image="https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg"
            permanent
            theme="dark"
        >
            <v-list nav>
                <v-list-item
                    v-for="item in navigation_list"
                    :key="item.id"
                    :prepend-icon="item.icon"
                    :href="item.href"
                >
                    {{ item.label }}
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        <v-main>
            <v-container>
                <v-row class="my-2">
                    <v-col cols="auto" class="text-h4 font-weight-bold">{{ title }}</v-col>
                </v-row>
                <slot />
            </v-container>
        </v-main>
    </v-app>
</template>
