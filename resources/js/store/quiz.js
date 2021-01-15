export default {
    state:{
        questionAnswer:[
            {
                question : 'Какой вид кредита вас интересует?',
                answers: [
                    'Кредит наличными',
                    'Автокредит',
                    'Карта рассрочки'
                ]
            },
            {
                question : 'Укажите сумму кредита?',
                answers: [
                    'От 100 000 до 500 000 руб.',
                    'От 500 000 до 1 000 000 руб.',
                    'От 1 мил. до 10 млн. руб.',
                    'Более 10 млн. руб.'
                ]
            },
            {
                question : 'Какие у Вас проблемы, связанные с отказами в банках и сложностью в получении кредита?',
                answers: [
                    'Плохая кредитная история',
                    'Неоф. трудоустройство',
                    'Судимость',
                    'Нет проблем',
                    'Отсутствие прописки',
                    'Кредит с просрочками',
                    'Отказали банки'
                ]
            }
        ],
        data: [],
        step: 0,
        lastStep: false
    },
    getters: {
        getQuestions(state){
            return state.questionAnswer
        },
        getStep(state){
            return state.step
        },
        getLastStep(state){
            return state.lastStep
        },
        getDataAnswer(state){
            return state.data
        }
    },
    mutations: {
        changeStep(state,payload){
            state.step += payload
        },
        set(state,payload){
            state.data[state.step] = payload
            //console.log(state.data)
        }
    },
    actions: {
        prevNext({state, commit}, value) {
            if (value < 0) {
                commit('changeStep', value)
            } else {
                if (state.step === state.questionAnswer.length - 1) {
                    state.lastStep = !state.lastStep
                    return false
                }
                if (!state.data[state.step]) {
                    alert('Выберите вариант ответа!')
                    return false
                }
                commit('changeStep', value)
            }

        },
        setData({commit}, value) {
            commit('set', value)
        }
    }

};
