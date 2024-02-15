<script setup lang="ts">
import { ref } from "vue";
import { CommodityTypes } from "@/Types/commodity";

const props = defineProps<{
    commodities: CommodityTypes[];
}>();
</script>

<template>
    <v-card
        v-for="commodity in commodities"
        :key="commodity.id"
        :href="route('shopping.show', commodity.id)"
        class="pa-2 my-4"
    >
        <v-card-text>
            <v-row>
                <v-col cols="auto">
                    <v-img :src="commodity.image_url" width="150"></v-img>
                </v-col>
                <v-col>
                    <v-row class="text-h6">{{ commodity.name }}</v-row>
                    <v-row class="text-subtitle-2">{{ commodity.price }}円</v-row>
                    <v-row class="text-caption mt-4">{{ commodity.description }}</v-row>
                </v-col>
            </v-row>
        </v-card-text>
    </v-card>
</template>
