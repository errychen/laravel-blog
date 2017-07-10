import Home from '../components/Home.vue';
import Example from '../components/Example.vue';
import Login from '../components/Login.vue';

export default [{
    path: '',
        redirect: '/home'
    },
    //首页
    {
        path: '/home',
        component: Home
    },
    {
        path: '/example',
        component: Example
    },
    {
        path: '/login',
        component: Login
    }
];