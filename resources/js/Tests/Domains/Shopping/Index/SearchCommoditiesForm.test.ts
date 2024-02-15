import SearchCommoditiesForm from "@/Components/Domains/Shopping/Index/SearchCommoditiesForm.vue";
import { describe, it, expect } from 'vitest';
import { mount } from '@vue/test-utils';

describe('Shopping/Index/SearchCommoditiesForm', () => {
    const wrapper = mount(SearchCommoditiesForm)

    it('検索機能が正常に動作するか', () => {
        expect(wrapper.find('input[type="text"]').exists()).toBeTruthy();
    })
});