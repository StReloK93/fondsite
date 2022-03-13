export default [
	{
		path: '/',
		component: () => import('../pages/Home.vue'),
		name: 'home',
        meta: {
			guard: 'auth'
		},
	},
	{
		path: '/news',
		component: () => import('../pages/News.vue'),
		name: 'news',
        meta: {
			guard: 'auth'
		},
	},
	{
		path: '/about',
		component: () => import('../pages/About.vue'),
		name: 'about',
        meta: {
			guard: 'auth'
		},
	},
	// {
	// 	path: '/settings',
	// 	component: () => import('../pages/Settings.vue'),
	// 	name: 'settings',
    //     meta: {
	// 		guard: 'auth'
	// 	},
	// },
	// {
	// 	path: '/login',
	// 	component: () => import('../pages/Login.vue'),
	// 	name: 'login',
	// 	meta: {
	// 		guard: 'guest'
	// 	}
	// },
	// {
	// 	path: '/register', 
	// 	component: () => import('../pages/Register.vue'),
	// 	meta: {
	// 		guard: 'guest'
	// 	}
	// },
	// {
	// 	path: '/:pathMatch(.*)*',
	// 	redirect: '/',
	// }
];