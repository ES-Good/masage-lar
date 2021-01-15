<template>
    <div class="container">

        <!-- 1 card -->
        <div v-if="!lastStep" class="poll-card position-relative">
            <div class="substrate-quiz position-absolute"></div>
            <div class="poll-quiz position-relative d-flex align-items-center">

                <img class="gig-cash" src="/img/poll/big-cash.png" alt="деньги">

                <div class="poll-quiz--right">
                    <h3 class="title-quiz">Узнать ставку сейчас</h3>
                    <p class="pool-quiz__text">Пройдите небольшой тест и узнайте свою ставку по кредиту (всего 3 вопроса)</p>
                    <h4 class="subtitle-quiz">{{ questions[step].question }}</h4>

                    <div class="btn-group btn-group-toggle d-flex flex-column flex-wrap" data-toggle="buttons">
                        <label v-for="(answer,index) in questions[step].answers" :key="index" :class="{'mb-3': index !== questions[step].answers.length-1, 'active focus': answer === getDataAnswer }"  class=" btn-quiz btn btn-secondary mr-1">
                            <input  v-model="dataAnswer" @change="setAnswer" :value="answer" type="radio" name="options"> {{ answer }}
                        </label>
                    </div>

                    <div class="quiz-bottim__block d-flex">
                        <button v-if="step > 0" class="quiz-back" @click="prevNext(-1)">Назад</button>
                        <button v-if="step !== questions.length " class="btn-further" @click="prevNext(1)">Далее</button>
                    </div>
                    <img class="kupyra position-absolute" src="/img/poll/kupyra.png" alt="">
                </div>
            </div>
        </div>
        <last-step  v-if="lastStep"></last-step>
    </div>
</template>

<script>
export default {
    name: "Quiz",
    data: () => ({
        dataAnswer:''
    }),
    computed:{
        questions(){
            return this.$store.getters.getQuestions
        },
        step(){
            return this.$store.getters.getStep
        },
        lastStep(){
            return this.$store.getters.getLastStep
        },
        getDataAnswer(){
            if (this.$store.getters.getDataAnswer[this.step])
                return this.$store.getters.getDataAnswer[this.step].answer
            return false
        }
    },
    methods:{
        removeActiveClass(){
            const elements = document.querySelectorAll('.btn-quiz')
            elements.forEach( (el) => {
                el.classList.remove('active')
            });
        },
        prevNext(val){
            this.removeActiveClass()
            this.$store.dispatch('prevNext',val)
        },
        setAnswer(){
            const object = {
                question: this.questions[this.step].question,
                answer: this.dataAnswer
            }
            //console.log(object)
            this.$store.dispatch('setData',object)
        }

    },
}
</script>

<style scoped>

</style>
