export default {
    state:{
        thanks: false
    },
    getters: {
        isThanks(state){
            return state.thanks
        }
    },
    mutations:{
        changeThanks(state){
            state.thanks = !state.thanks
        }
    },
    actions: {
        viewOrHideThanks({commit}){
            commit('changeThanks')
        }
    }
};
