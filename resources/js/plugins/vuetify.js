import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    treeShake: true,
    components,
    directives,
    icons: {
        defaultSet: 'mdi',
    },
    locale: {
        locale: 'fa',
        fallback: 'fa',
    },
})

export default vuetify;
