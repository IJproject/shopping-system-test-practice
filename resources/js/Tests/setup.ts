import { config } from '@vue/test-utils';
import route from 'ziggy-js';
import { Ziggy } from '../ziggy';
import { createVuetify } from 'vuetify'

const vuetify = createVuetify()

config.global.mocks.route = (name) => route(name, undefined, undefined, Ziggy);
config.global.plugins = [vuetify];
