<script setup lang="ts">
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";

const search_form = useForm({
    search_word: "",
});

const search = () => {
    search_form.get(route("shopping.index"));
};
</script>

<template>
    <v-form @submit.prevent="search">
        <v-text-field
            v-model="search_form.search_word"
            append-inner-icon="mdi-magnify"
            @click:append-inner="search"
            type="text"
            color="primary"
            variant="outlined"
            placeholder="商品名を入力してください"
        ></v-text-field>
    </v-form>
</template>
