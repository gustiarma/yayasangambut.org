import Vue from 'vue'
import Router from 'vue-router'





Vue.use(Router)

// import component
import Aplikasi from './Aplikasi'

// import post
import postList from './components/posts/Index'
import postEdit from './components/posts/Edit'

import pageList from './components/pages/Index'
import pageEdit from './components/pages/Edit'

import UserNavigator from './components/UserNavigator'


export default new Router({
    mode: 'history',
    // linkActiveClass : 'active',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/web-admin',
            name: 'webAdmin',
            component: Aplikasi,
            children: [
                {
                    path: 'post',
                    name: 'PostIndex',
                    component: UserNavigator,
                    children: [
                        {
                            path: 'all-post',
                            name: 'postList',
                            component: postList,

                        },
                        {
                            path: 'edit/:id',
                            name: 'postEdit',
                            component: postEdit,

                        },
                        {
                            path: 'add-new',
                            name: 'postAdd',
                            component: postEdit,

                        }
                    ]

                },
                {
                    path: 'page',
                    name: 'pageIndex',
                    component: UserNavigator,
                    children: [
                        {
                            path: 'all-page',
                            name: 'pageList',
                            component: pageList,

                        },
                        {
                            path: 'edit/:id',
                            name: 'pageEdit',
                            component: pageEdit,

                        },
                        {
                            path: 'add-new',
                            name: 'pageAdd',
                            component: pageEdit,

                        }
                    ]

                }
            ]

        }

    ]
})
