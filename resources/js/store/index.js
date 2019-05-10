import Vue from 'vue'
import Vuex from 'vuex'
//import createLogger from '../../../src/plugins/logger'

Vue.use(Vuex);

//const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    state: {
        count: 0,
        another: 2
    },
    mutations: {
        increment (state, sheetNumber) {
            state.count = sheetNumber;
        }
    },
    modules: {
        //cart,
        //products
    },
    //strict: debug,
    //plugins: debug ? [createLogger()] : []
})