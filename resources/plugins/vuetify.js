import Vue from 'vue'
import Vuetify from 'vuetify'
import '@mdi/font/css/materialdesignicons.css'
Vue.use(Vuetify)

const opts = {
    theme: {
        themes: {
            light: {
                primary: '#01BAEF'
            }
        }
    }
}
export default new Vuetify(opts)
