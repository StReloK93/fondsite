import { createStore } from 'vuex'

export default createStore({
    state() {
        return {
            user: null,
            grid: null,
            gridData: [],
            context: false,
            activeContext: null,
            scroll: false
        }
    },
    mutations: {
        setUser(state, user) {
            state.user = user
        },

    },
    actions: {
        async login({ state, dispatch }, data) {
            await axios.get('/sanctum/csrf-cookie', { baseURL: '/' })
            var login = await axios.post('login', data)
            if (login.status == 299) state.logined = login.data.message
            else {
                state.logined = null
                await dispatch('getUser')
                router.push({ name: 'home' })
            }
        },
        async register({ dispatch }, props) {
            const result = await axios.post('register', props)
            if (result.status == 200) dispatch('login', props)
        },
        async getUser({ commit }) {
            await axios.get('user').then((res) => {
                console.log(res);
                commit('setUser', res.data);
            }).catch(() => { console.clear() })
        },
        async logout({ commit }) {
            const data = await axios.get('logout')
            if (data.status == 200) {
                commit('setUser', null)
                router.push({ name: 'login' })
            }
        },

        async delDeptor({state},payload){
            const data = await axios.post('/debtors/delete', payload)
            if(data.status = 200) {
                state.grid.applyTransaction({ remove: [payload] });
                state.context = false
            }
        },

        async delDeptor({state},payload){
            const data = await axios.post('/debtors/recover', payload)
            if(data.status = 200) {
                state.grid.applyTransaction({ remove: [payload] });
                state.context = false
            }
        }
    },
})
