require('bootstrap')

import Glide, { Autoplay, Controls, Swipe } from '@glidejs/glide/dist/glide.modular.esm'

import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'


window.jQuery = require("jquery")
window.$ = require("jquery")
window.Glide = Glide
// new Glide('.glide').mount({ Controls, Breakpoints })


new Glide('.glide', {
    autoplay: 30000,
    hoverpause: true,
    dragThreshold: 120,
    animationDuration: 300,
    type: 'carousel',
    startAt: 1,
}).mount({ Autoplay, Controls, Swipe });





