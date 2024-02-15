import CommoditiesList from '@/Components/Domains/Shopping/Index/CommoditiesList.vue';
import { describe, it, expect } from 'vitest';
import { mount } from '@vue/test-utils';
import { commodities } from '@/Tests/Utils/sampleData';

describe('Shopping/Index/CommoditiesList', () => {
    // コンポーネントをマウントし、propsに商品データを渡す
    const wrapper = mount(CommoditiesList, {
        props: { commodities: commodities },
    });

    it('renders commodities correctly', () => {
        // 商品の数が正しくレンダリングされているか確認
        const commodityCards = wrapper.findAll('.v-card'); // v-cardクラスを持つ要素を全て見つける
        expect(commodityCards.length).toBe(commodities.length); // 商品の数と一致するかチェック
    
        // 各商品の情報が正しく表示されているか確認
        commodities.forEach((commodity, index) => {
            const card = commodityCards[index];
            expect(card.text()).toContain(commodity.name);
            expect(card.text()).toContain(`${commodity.price}円`);
            expect(card.text()).toContain(commodity.description);
            expect(card.find('img').attributes('src')).toBe(commodity.image_url);
        });
    });
});