
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    data: {
      todos: [],
      new_todo: ''
    },
    methods: {
      fetchTodos: function() {
        axios.get('api/get').then((res) => {
          this.todos = res.data
        });
      },
      addTodo: function() {
        axios.post('/api/add', {
          title: this.new_todo
        }).then((res) => {
            this.todos = res.data;
            this.new_todo = '';
        });
      },
    
    deleteTodo: function(task_id){
      axios.post('/api/del',{
          id: task_id
      }).then((res)=>{
          this.todos = res.data;
      });
    }
  },
    created() {
        this.fetchTodos();
    }
});
