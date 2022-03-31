import { createStore } from 'vuex'

export default createStore({
    state() {
        return {
            user: null,
            scroll: false
        }
    },
    mutations: {
        setUser(state, user) {
            state.user = user
        }
    },
    actions: {

        async login({ state, dispatch }, data) {
            const result = await axios.post('login', data)

            if (result.status == 299) state.logined = result.data.message
            else {
                localStorage.setItem('token', `${result.data.type} ${result.data.token}`) // local
                state.logined = null
                await dispatch('getUser')
                router.push({ path: '/admin' })
            }
        },
        async register({ dispatch }, props) {
            const result = await axios.post('register', props)
            
            if (result.status == 200) {
                localStorage.setItem('token', `${result.data.type} ${result.data.token}`) // local
                dispatch('login', props)
            }
        },
        async logout({ commit }) {
            const data = await axios.get('logout')
            if (data.status == 200) {
                axios.defaults.headers.common['Authorization'] = null
                localStorage.removeItem('token')
                commit('setUser', null)
                router.push({ name: 'login' })
            }
        },


        async getUser({ commit }) {
            axios.defaults.headers.common['Authorization'] = localStorage.getItem('token')
            await axios.get('user').then((res) => {
                commit('setUser', res.data);
            }).catch(() => { console.clear() })
        },
    },
})
