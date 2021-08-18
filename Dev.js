// config/prod.env.js
module.exports = {
    NODE_ENV: "production",
    API: "http://api0e1dev.com/"
}

//config/dev.env.js
module.exports = {
    NODE_ENV: '"production"',
    API: '"http://localhost:9001"'
}

// src/main.js
import VueResource from "vue-resource"
Vue.use(VueResource)
// Define a base da URL das requisições AJAX será
// a constante API que configuramos
Vue.http.options.root = process.env.API


// src/main.js
// Routes
const routes = [
    {
        path: '/',
        redirect: '/login'
    }
    {

        path: '/signup',
        component: SignUp,
        meta: {auth: true}

    }
    {

        path: '/login',
        component: Login,
        meta: {auth: false}
    }
    }
]

// src/main.js
// Routes
const routes = [
    {

        path: '/admin',
        component: Admin,
        meta: {auth: 'admin'}
    },
    {

        path: '/manager',
        component: Manager,
        meta: {auth: 'manager'}
    }
    }
]