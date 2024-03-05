<template>
  <div>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="submitForm">
              <div class="form-group">
                <label for="task">Task</label>
                <textarea id="name" rows="4" class="form-control" v-model="taskToEdit.name"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" @click="submitForm" data-dismiss="modal">Edit Task</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['taskToEdit', 'tasks'], // Ajout de la prop 'tasks'
  data() {
    return {
      editedTask: { ...this.taskToEdit } // Utilisation d'une copie pour l'édition
    };
  },
  methods: {
    submitForm() {
      // Émettre un événement pour mettre à jour la prop avec la nouvelle valeur
      //this.$emit('update:taskToEdit', this.editedTask);
      // Fermer le modal après l'édition
     // $('#editModal').modal('hide');

     axios.patch('http://127.0.0.1:8000/tasks/edit/ '+ this.taskToEdit.id , {

name : this.taskToEdit.name
     })
     .then(response =>this.$emit('task-updated', response) )
     .catch(error => console.log(error));
    },
    getTaskById(id) {
      // Recherche de la tâche par ID dans la liste des tâches
      return this.tasks.find(task => task.id === id);
    }
  }
};
</script>
