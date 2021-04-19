<template>
    <!-- 4 card -->
    <div class="poll-card position-relative" >
        <div class="substrate-quiz position-absolute"></div>
        <div class="poll-quiz position-relative d-flex align-items-center">

            <img class="gig-cash" src="/img/poll/big-cash.png" alt="деньги">

            <div class="poll-quiz--right">
                <h3 class="title-quiz">Предварительно<br>одобрен</h3>

                <div class="credit-at-rate d-flex align-items-center">
                    <h3 class="at-rare__title">кредит по ставке 4% годовых</h3>
                    <img src="/img/poll/quiz-money.png" alt="" class="at-rate__money">
                </div>

                <p class="quiz-text--info__top">Мы работаем с самыми крупными банками России, вероятность одобрения кредита с нашей помощью составляет 99%!</p>
                <p class="quiz-text--info__bottom">Успей получить кредит сейчас!</p>
                <form id="form-quiz" action="" @submit.prevent="addOrder">
                <div class="btn-group h-auto btn-group-toggle d-flex flex-column flex-wrap">
                    <div class="invalid-feedback-head">
                        <input
                            v-model="name"
                            :class="{'is-invalid':($v.name.$dirty && !$v.name.required) || ($v.name.$dirty && !$v.name.minLength)}"
                            id="quiz-name"
                            class="input--number mb-2"
                            type="text"
                            placeholder="Имя">
                        <div  class="invalid-feedback" v-if="!$v.name.required">Обязательное поле.</div>
                        <div  class="invalid-feedback" v-else-if="!$v.name.minLength">Имя должно быть больше 3 букв</div>
                    </div>
                    <div class="invalid-feedback-head">
                        <select
                        form="modal-form"
                        class="mb-4 mt-2 pl-4 py-3 w-100 select-style select-style-quiz"
                        v-model="cities"
                        name="cities"
                        >   
                            <option v-for="option in options">
                                {{ option.text }}
                            </option>
                        </select>
                    </div>
                    <div class="invalid-feedback-head">
                        <input
                            v-model="phone"
                            :class="{'is-invalid':($v.phone.$dirty && !$v.phone.required) || ($v.phone.$dirty && !$v.phone.isPhone)}"
                            :disabled="isAlert||isDisabled"
                            class="input--number"
                            type="text"
                            placeholder="+7 (___) - ___ - __ - __"
                            name="options"
                            id="quiz-phone">
                        <div  class="invalid-feedback" v-if="!$v.phone.required">Обязательное поле.</div>
                        <div  class="invalid-feedback" v-else-if="!$v.phone.isPhone">Неверный формат номера</div>
                    </div>
                </div>
                    <div v-if="isAlert" class="alert alert-primary" role="alert">
                        Мы получили вашу заявку. Наш менеджер свяжится с вами!
                    </div>
                <div class="quiz-bottim__block d-flex">
                    <button id="quiz-send" :disabled="isAlert||isDisabled" type="submit" class="btn-further" style="padding: 15px 30px;">
                        <div v-if="isDisabled" class="spinner-border text-light" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        Оставить заявку</button>
                </div>
                </form>
                <img class="kupyra position-absolute" src="/img/poll/kupyra.png" alt="">
            </div>
        </div>
    </div>
</template>

<script>
import Inputmask from "inputmask";
import {minLength, required} from "vuelidate/lib/validators";

export default {
    name: "LastStep",
    data:() => ({
        name: '',
        phone: '',
        cities: 'Москва',
        options: [
            { text: 'Москва', value: 'Москва' },
            { text: 'Московская область', value: 'Московская область' },
            { text: 'Другой город', value: 'Другой город' }
        ],
        isDisabled: false,
        isAlert: false,
        counters: null
    }),
    computed:{
        getData(){
            return this.$store.getters.getDataAnswer
        }
    },
    methods:{
        clearData() {
            this.name = '';
            this.phone = '';
        },
        addOrder(){
            if (this.$v.$invalid) {
                this.$v.$touch()
                return
            }
            this.isDisabled = true
            axios.post('/api/order-quiz',{
                name:this.name,
                phone: this.phone.replace(/\D/g, ""),
                data: this.getData
            })
                .then( response => {
                    this.clearData()
                    this.$v.$reset()
                    this.isDisabled = false
                    if(response.status === 200) {
                        console.log(response.data)
                        this.isAlert = true
                        if (this.counters.ym) ym(this.counters.ym,'reachGoal','order')
                        if (this.counters.fbq) fbq('track', 'Contact')
                    }
                })
                .catch( error => {
                    this.isDisabled = false
                    this.isAlert = false
                    console.log(error.message)
                })
        }
    },
    validations: {
        name: { required , minLength: minLength(3)},
        cities:{
            isCity: (cities) =>{
                if (cities == 'Другой город') {
                    alert('Извените но мы не работаем с другими городами');
                    return false;
                }else{
                    return true;
                }
            }
        },
        phone: {
            required,
            isPhone: (phone)=> {
                const phoneRe = /^(8|7)[\d]{10}$/;
                if (phone){
                    const digits = phone.replace(/\D/g, "");
                    return phoneRe.test(digits)
                }
                return false
            }
        }
    },
    created() {
        axios.get('/api/counters').then(response => {
            this.counters = response.data
        }).catch( error => {
            console.log(error.message)
        })
    },
    mounted() {
        Inputmask({"mask": "+7 (999) - 999 - 99 - 99"}).mask("#quiz-phone");
    }
}
</script>

<style scoped>
.is-invalid{
    border:1px solid #dc3545;
    color: #dc3545;
}

button[type="submit"]:disabled{
    color: #fff;
}

.invalid-feedback-head{
    position: relative;
}
.invalid-feedback{
    position:absolute;
    top: -0.1rem;
    left: 0.5rem;
    width: 100%;
}
</style>
