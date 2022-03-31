export default [
	{
		path: '/',
		component: () => import('../pages/Home.vue'),
		name: 'home',
		meta: {
			header: true,
			footer: false
		}
	},
	{
		path: '/news',
		component: () => import('../pages/News.vue'),
		name: 'news',
		meta: {
			header: true,
			footer: true
		}
	},
	{
		path: '/about',
		component: () => import('../pages/About.vue'),
		name: 'about',
		meta: {
			header: true,
			footer: true
		}
	},
	{
		path: '/admin',
		component: () => import('../pages/admin/index.vue'),
		name: 'admin',
      meta: {
			guard: 'auth',
			header: false,
			footer: false
		},
		children: [
			{
			  path: '',
			  component: () => import('../pages/admin/main.vue'),
			},
			{
			  path: 'news',
			  component: () => import('../pages/admin/News.vue'),
			},
		 ],
	},
	{
		path: '/login',
		component: () => import('../pages/Login.vue'),
		name: 'login',
		meta: {
			guard: 'guest',
			header: true,
			footer: true
		}
	},
	{
		path: '/:pathMatch(.*)*',
		redirect: '/',
	}
];