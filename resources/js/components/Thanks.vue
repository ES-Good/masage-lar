<template>
    <div class="modal-thanks">
        <div class="modal-thanks__grey position-absolute"></div>
        <div class="modal-thanks__content d-flex flex-column align-items-center justify-content-center">
            <img class="mb-5" src="/img/modal/green.png" alt="">
            <h5 class="modal-title title-modal mb-5 text-center" id="staticBackdropLabel">Заявка<br>отправлена
            </h5>
            <p class="thanks__content--text">
                Мы получили вашу заявку.<br>Наш менеджер свяжится с вами.
            </p>
        </div>
        <div class="modal-thanks__pink position-absolute"></div>
    </div>
</template>

<script>
export default {
    name: "Thanks",
    mounted() {
        setTimeout(()=>{
            this.$store.dispatch('viewOrHideThanks')
        },5000)
    }
}
</script>

<style scoped>

</style>
