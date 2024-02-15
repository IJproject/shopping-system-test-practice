import { config } from '@vue/test-utils';
import route from 'ziggy-js';
import { Config, RouteParams } from 'ziggy-js';
import { Ziggy } from '../ziggy';
import { createVuetify } from 'vuetify'

const vuetify = createVuetify()

// config.global.mocks.route = (name: string) => route(name, undefined, undefined, Ziggy as Config);
config.global.mocks.route = (name: string, params?: RouteParams<any>) => route(name, params, undefined, Ziggy as Config);
config.global.plugins = [vuetify];
