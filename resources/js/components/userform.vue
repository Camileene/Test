<template>
      <form @submit.prevent="submit">
            <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" required/>
                  <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
            </div>
            <div class="form-group">
                  <label for="surname">Surname</label>
                  <input type="text" class="form-control" name="surname" id="surname" required/>
                  <div v-if="errors && errors.name" class="text-danger">{{ errors.surname[0] }}</div>
            </div>

            <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required/>
                  <div v-if="errors && errors.name" class="text-danger">{{ errors.email[0] }}</div>
            </div>
            <div class="mt-3">
                  <button @click="submit">Submit</button>
            </div>
            <div v-if="success" class="mt-3 alert alert-success mt-3">
            Message sent!
        </div>
      </form>
</template>
<script>
import FormMixin from '../../assets/FormMixin';
export default {
  mixins: [ FormMixin ],
  data() {
    return {
      'action': '/submit',
    }
  }
}
</script>
