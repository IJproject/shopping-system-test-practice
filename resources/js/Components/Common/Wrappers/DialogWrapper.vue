<!-- 
    <DialogWrapper
        title="タイトルをここに入力" 
        :is_open="開閉状況の変数名"
        @update:is_open="開閉状況の変数名 = $event"
    >
        <form @submit.prevent="フォーム送信関数はここ">
            フォームの中身
            <v-row>
                <v-col cols="auto" class="mx-auto">
                    各種ボタン
                </v-col>
            </v-row>
        </form>
    </DialogWrapper>
-->

<script setup lang="ts">
import { ref, watch } from 'vue';

const props = defineProps({
	is_open: Boolean,
	title: String || undefined,
});
const emit = defineEmits(['update:is_open']);

const is_dialog_open = ref(props.is_open);

watch(
	() => props.is_open,
	(new_val) => {
		is_dialog_open.value = new_val;
	}
);

const updateDialogOpen = (new_val) => {
	is_dialog_open.value = new_val;
	emit('update:is_open', new_val);
};
</script>

<template>
	<v-dialog
		v-model="is_dialog_open"
		@update:modelValue="updateDialogOpen"
		:scrollable="false"
		min-width="300"
		max-width="600"
	>
		<v-card>
			<v-card-title>
				<v-row>
					<v-col cols="auto" class="align-self-center">
						<h3 class="text-h5">{{ title }}</h3>
					</v-col>
					<v-spacer></v-spacer>
					<v-col cols="auto">
						<v-btn
							variant="text"
							icon="mdi-close"
							@click="updateDialogOpen(false)"
						>
						</v-btn>
					</v-col>
				</v-row>
			</v-card-title>
			<v-card-text>
				<slot />
			</v-card-text>
			<!-- <v-card-actions>
				<v-row>
					<v-col cols="auto" class="mx-auto">
						<slot name="actions" />
					</v-col>
				</v-row>
			</v-card-actions> -->
		</v-card>
	</v-dialog>
</template>
