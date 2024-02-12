import { config } from '@vue/test-utils';
import route from 'ziggy-js';
import { Ziggy } from '../ziggy';
import { createVuetify } from 'vuetify'
import { vi } from 'vitest';

const vuetify = createVuetify()

// global.route = vi.fn((name) => `mocked-route-for-${name}`);

config.global.mocks.route = vi.fn((name) => Ziggy.routes[name]);
// config.global.mocks.route = (name) => route(name, undefined, undefined, Ziggy);
config.global.plugins = [vuetify];
