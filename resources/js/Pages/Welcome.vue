<script setup lang="ts">
import { ref } from "vue";
import Snackbar from "@/Components/Common/Feedbacks/SnackBar.vue";

const is_open = ref(true);
</script>

<template>
    <h1>テスト</h1>
    <Snackbar
        :is_open="is_open"
        @update:is_open="is_open = $event"
        content="更新処理が完了しました。"
        color="success"
        :timeout="2000"
    />
</template>
