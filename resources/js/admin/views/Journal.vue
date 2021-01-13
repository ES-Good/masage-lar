<template>
  <div>
    <div class="page-title">
      <h3>Журнал записей</h3>
    </div>

    <div class="filter-form">
        <b>Фильтр</b>
        <form>
            <div class="row">
                <div class="input-field col s2">
                    <input v-model="name" id="first_name" type="text" class="validate">
                    <label for="first_name">Имя</label>
                </div>
                <div class="input-field col s2">
                    <input v-model="phone" id="last_name" type="text">
                    <label for="last_name" class="">Телефон</label>
                </div>
                <div class="input-field col s2">
                        <select v-model="status">
                            <option value="" disabled selected>Выбрать статус</option>
                            <option value="new">Новый</option>
                            <option value="cancel">Отменен</option>
                        </select>
                        <label>Статус</label>
                </div>
                <div class="input-field col s3">
                    <button class="btn waves-effect waves-light red" type="submit" name="action" @click.prevent="fetch">
                       Применить
                    </button>
                </div>
                <div class="input-field col s3">
                    <button type="submit" class="btn waves-effect waves-light btn-small red lighten-1"><i class="material-icons">refresh</i></button>
                </div>
            </div>
        </form>
    </div>
      <div v-if="isLoad" class="progress red lighten-4">
          <div class="indeterminate red"></div>
      </div>
    <section>
      <table class="responsive-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Статус</th>
            <th>Дата создания</th>
            <th>Открыть</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="(order, index) in orders" :key="index">

            <td>{{ ++index }}</td>
            <td>{{ order.name}}</td>
            <td>{{ order.phone }}</td>
            <td><span class="white-text badge red" :class="{'red': order.status === 'cancel', 'green': order.status === 'new'}">{{ filterStatus(order.status) }}</span></td>
            <td>
                {{ order.created_at }}
            </td>
            <td>
              <button class="btn-small btn">
                <i class="material-icons">open_in_new</i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>
</template>
<script>
export default {
    name: 'Journal',
    data: ()=> ({
        isLoad: false,
        orders: {},
        name: null,
        phone: null,
        status: null,
    }),
    methods:{
        async fetch(){
            this.isLoad = true
           await axios.get('/api/orders',{
               params:{
                   name: this.name,
                   phone: this.phone,
                   status: this.status,
               }
           }).then(response => {
                console.log(response.data.length)
                this.orders = response.data
                this.isLoad = false
            })
        },
        filterStatus(value){
            if (value === 'new')
                return 'Новый'
            if (value === 'cancel')
                return 'Отменен'
        }
    },
    mounted() {
        const select = document.querySelectorAll('select');
        const selectInstances = M.FormSelect.init(select);

        this.fetch()
    }
}
</script>
<style scoped>
.filter-form{
    padding: 20px 10px;
    background-color: #fafafa;
}
</style>
