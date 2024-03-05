<template>
  <div class="container">
      <add-task @task-added="refresh"></add-task>

      <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center" v-for="task in tasks" :key="task.id">
              <a href="#">
                  {{ task.name }}
              </a>
              <div>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal" @click="getTask(task.id)">
                      Edit
                  </button>
                  <button type="button" class="btn btn-danger" @click="deleteTask(task.id)">Delete</button>
              </div>
          </li>
          <edit-task v-bind:taskToEdit="taskToEdit" @task-updated="refresh"></edit-task>
      </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
      return {
          tasks: [],
          taskToEdit: ''
      }
  },
  methods: {
      getTask(id) {
          axios.get('http://127.0.0.1:8000/tasks/edit/' + id)
              .then(response => this.taskToEdit = response.data)
              .catch(error => console.log(error));
      },
      deleteTask(id) {
          axios.delete('http://127.0.0.1:8000/tasks/' + id)
              .then(response => {
                  this.refresh(response);
              })
              .catch(error => console.log(error));  
      },
      refresh(tasks) {
          this.tasks = tasks.data;
      }
  },
  mounted() {
      axios.get('http://127.0.0.1:8000/tasksList')
          .then(response => {
              this.tasks = response.data;
          })
          .catch(error => {
              console.error(error);
          });
  }
}
</script>
