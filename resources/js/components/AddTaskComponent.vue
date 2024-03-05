<template>
  <div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add task
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="taskStore">
              <div class="form-group">
                <label for="name">Task</label>
                <textarea v-model="name" id="name" rows="4" class="form-control"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" @click="taskStore" data-dismiss="modal">Create Task</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      name: ''
    }
  },methods: {
  taskStore() {
    axios.post('http://127.0.0.1:8000/tasksList', {
      name: this.name
    })
    .then(response => this.$emit('task-added' , response ))
    .catch(error => console.log(error)); 
  }
}

};
</script>
