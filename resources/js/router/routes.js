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
		path: '/post/:id',
		component: () => import('../pages/Post.vue'),
		name: 'post',
		meta: {
			header: true,
			footer: true
		}
	},
	{
		path: '/services',
		component: () => import('../pages/Services.vue'),
		name: 'services',
		meta: {
			header: true,
			footer: true
		}
	},
	{
		path: '/contacts',
		component: () => import('../pages/Contacts.vue'),
		name: 'contacts',
		meta: {
			header: true,
			footer: true
		}
	},
	{
		path: '/printed',
		component: () => import('../pages/Printed.vue'),
		name: 'printed',
		meta: {
			header: true,
			footer: true
		}
	},
	{
		path: '/information',
		component: () => import('../pages/Information.vue'),
		name: 'information',
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
				component: () => import('../pages/admin/news.vue'),
			},
			{
				path: 'services',
				component: () => import('../pages/admin/services.vue'),
			},
			{
				path: 'about',
				component: () => import('../pages/admin/about.vue'),
			},
			{
				path: 'printed',
				component: () => import('../pages/admin/printed.vue'),
			},
			{
				path: 'information',
				component: () => import('../pages/admin/information.vue'),
			},
			{
				path: 'contacts',
				component: () => import('../pages/admin/contacts.vue'),
			},
			{
				path: 'addnews',
				component: () => import('../pages/admin/addnews.vue'),
			},
			{
				path: 'postedit/:id',
				name: 'postedit',
				component: () => import('../pages/admin/postEdit.vue'),
			},
		 ],
	},
	{
		path: '/login',
		component: () => import('../pages/Login.vue'),
		name: 'login',
		meta: {
			guard: 'guest',
			header: false,
			footer: false
		}
	},
	{
		path: '/:pathMatch(.*)*',
		redirect: '/',
	}
];