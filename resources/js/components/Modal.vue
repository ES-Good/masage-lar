<template>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button pt-0 pb-0 type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="pr-4" aria-hidden="true">Закрыть</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="modal-body--content d-flex justify-content-between">
                        <div class="modal-body--content__left">
                            <h5 class="modal-title title-modal mb-3" id="staticBackdropLabel">Подать заявку</h5>
                            <p class="modal-body__text">
                                Для получения кредита, оставьте номер телефона и ваше имя. Наш специалист расскажет вам все подробнее.
                            </p>
                            <form id="modal-form" action="" @submit.prevent="addOrder" class="d-flex flex-column mb-4">
                                <div class="invalid-feedback-head">
                                <input
                                    v-model="name"
                                    :class="{'is-invalid':($v.name.$dirty && !$v.name.required) || ($v.name.$dirty && !$v.name.minLength)}"
                                    id="modal-name"
                                    class="mb-4 pl-4 py-3 style-input"
                                    type="text"
                                    placeholder="Имя">
                                    <div  class="invalid-feedback" v-if="!$v.name.required">Обязательное поле.</div>
                                    <div  class="invalid-feedback" v-else-if="!$v.name.minLength">Имя должно быть больше 3 букв</div>
                                </div>
                                <div class="invalid-feedback-head">
                                    <input
                                        v-model="summa"
                                        :class="{'is-invalid':($v.summa.$dirty && !$v.summa.required) || ($v.summa.$dirty && !$v.summa.between)}"
                                        id="modal-summ"
                                        class="mb-4 pl-4 py-3 style-input"
                                        type="text"
                                        placeholder="Сумма кредита">
                                    <div  class="invalid-feedback" v-if="!$v.summa.required">Обязательное поле.</div>
                                    <div  class="invalid-feedback" v-else-if="!$v.summa.between">Сумма кредита от {{$v.summa.$params.between.min}} до {{$v.summa.$params.between.max}}</div>
                                </div>
                                <div class="invalid-feedback-head">
                                    <select
                                    form="modal-form"
                                    class="mb-4 pl-4 py-3 w-100 select-style"
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
                                        id="modal-phone"
                                        class=" pl-4 py-3 style-input"
                                        type="text"
                                        placeholder="+7 (___) - ___ - __ - __">
                                    <div  class="invalid-feedback" v-if="!$v.phone.required">Обязательное поле.</div>
                                    <div  class="invalid-feedback" v-else-if="!$v.phone.isPhone">Неверный формат номера</div>
                                </div>
                            </form>
                            <label class="label-radio">
                                <input
                                    v-model="checkbox"
                                    ref="checkbox"
                                    :checked="{ 'checked' : checkbox }"
                                    @change="!checkbox"
                                    :disabled='isDisabled'
                                    type="checkbox"
                                    name="people-number "
                                    class="real-radio ">
                                <div class="custom-radio"><img v-if="checkbox" src="/img/modal/chek.svg" alt=""></div>
                                <p class="custom-radio--text" :class="{'is-invalid-checkbox': $v.checkbox.$error}">Согласие на обработку своих персональных данных</p>
                            </label>
                            <div class="modal-footer">
                                <button id="modal-submit" type="submit" form="modal-form" class="btn btn-primary bg-pink" :disabled='isDisabled'>
                                    <div v-if="isDisabled" class="spinner-border text-light" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    Подать заявку
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Inputmask from "inputmask";
import { required, minLength, between } from "vuelidate/lib/validators";
export default {
    name: "Modal",
    data:() => ({
        name: '',
        phone: '',
        cities: 'Москва',
        options: [
            { text: 'Москва', value: 'Москва' },
            { text: 'Московская область', value: 'Московская область' },
            { text: 'Другой город', value: 'Другой город' }
        ],
        summa: '',
        checkbox: true,
        isDisabled: false,
        isAlert: false,
        counters: null,
    }),
    methods:{
        clearData() {
            this.name = '';
            this.phone = '';
            this.summa = '';
            this.checkbox = false;
        },
        addOrder(){
            if (this.$v.$invalid) {
                this.$v.$touch()
                return
            }
            this.isDisabled = true
            axios.post('/api/order',{
                name:this.name,
                summa: this.summa,
                phone: this.phone.replace(/\D/g, ""),
                checkbox: this.checkbox,
            })
                .then( response => {
                    this.clearData()
                    this.$v.$reset()
                    this.isDisabled = false
                    if(response.status === 200) {
                        $('#staticBackdrop').modal('hide')
                        //console.log(response.data)
                        if (this.counters.ym) ym(this.counters.ym,'reachGoal','order')
                        if (this.counters.fbq) fbq('track', 'Contact')
                        setTimeout( () => this.$store.dispatch('viewOrHideThanks') , 500)
                    }
                })
                .catch( error => {
                    this.isDisabled = false
                    console.log(error.message)
                })
        }
    },
    validations: {
        name: { required , minLength: minLength(3)},
        summa: {
            required,between: between(100000, 20000000)
        },
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
                return false;
            }
        },
        checkbox: { isCheck: (check) => check },
    },
    created() {
        axios.get('/api/counters').then(response => {
            this.counters = response.data
        }).catch( error => {
            console.log(error.message)
        })
    },
    mounted() {
        Inputmask({"mask": "+7 (999) - 999 - 99 - 99"}).mask("#modal-phone");
    }
}
</script>

<style scoped>
.is-invalid{
    border-bottom:1px solid #dc3545;
    color: #dc3545;
}

button[type="submit"]:disabled{
    color: #fff;
}
.alert{
    font-size: 1.6rem;
}
.invalid-feedback-head{
    position: relative;
}
.invalid-feedback{
    position:absolute;
    top: -1.5rem;
    left: 0;
    width: 100%;
}

.is-invalid-checkbox{
    color: red;
}

input{
    width: 100%;
}
</style>
