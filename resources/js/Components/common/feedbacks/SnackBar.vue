<!-- 
    <Snackbar
        :is_open="開閉状況を表す変数"
        @update:is_open="開閉状況を表す変数 = $event"
        content="中の文章"
        color="色を表す文字列" (現状は'success'か'error'のみ対応)
        timeout="2000" (ミリ秒)
    />
 -->

<script setup>
import { ref, watch } from "vue";
const props = defineProps({
    is_open: Boolean,
    content: String,
    color: String,
    timeout: Number,
});
const emit = defineEmits(["update:is_open"]);

const is_snackbar_open = ref(props.is_open);

watch(
    () => props.is_open,
    (new_val) => {
        is_snackbar_open.value = new_val;
    }
);

const updateSnackbarOpen = (new_val) => {
    is_snackbar_open.value = new_val;
    emit("update:is_open", new_val);
};
</script>

<template>
    <v-snackbar
        v-model="is_snackbar_open"
        @update:modelValue="updateSnackbarOpen"
        :color="color"
        :timeout="timeout"
        location="top"
    >
        <v-row>
            <!-- アイコンを設定 -->
            <v-col cols="auto" class="align-self-center">
                <template v-if="color === 'success'">
                    <v-icon icon="mdi-check-circle"></v-icon>
                </template>
                <template v-if="color === 'error'">
                    <v-icon icon="mdi-alert-rhombus"></v-icon>
                </template>
            </v-col>
            <!-- スナックバー内の文を設定 -->
            <v-col cols="auto" class="align-self-center">
                {{ content }}
            </v-col>
        </v-row>

        <template v-slot:actions>
            <v-btn
                @click="is_snackbar_open = false"
                color="white"
                icon="mdi-close"
                size="small"
            >
            </v-btn>
        </template>
    </v-snackbar>
</template>
