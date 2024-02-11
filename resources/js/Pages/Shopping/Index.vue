<script setup lang="ts">
import { ref } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Common/Feedbacks/Pagination.vue';
import SearchCommoditiesForm from '@/Components/Domains/Shopping/Index/SearchCommoditiesForm.vue';
import CommoditiesList from '@/Components/Domains/Shopping/Index/CommoditiesList.vue';
import { PaginationTypes } from '@/Types/common';
import { CommodityTypes } from '@/Types/commodity';

const props = defineProps<{
	commodities: PaginationTypes<CommodityTypes[]>;
}>();

</script>

<template>
    <AuthenticatedLayout title="商品一覧">
        <SearchCommoditiesForm />
        <CommoditiesList :commodities="commodities.data" />
        <Pagination :links="commodities.links" :last_page="commodities.last_page" />
    </AuthenticatedLayout>
</template>