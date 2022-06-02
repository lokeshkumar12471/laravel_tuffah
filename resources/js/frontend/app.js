require('./bootstrap')
require('./custom')

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

const feather = require('feather-icons')

window.feather = feather
