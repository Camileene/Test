<template>
  <div>
      <form id="userForm" @submit.prevent="userForm" v-if="!success">
            <div class="form-group">
                  <label for="name">Name</label>
                  <input v-model="user.name" type="text" class="form-control danger" name="name" id="name" required/>
                  <div v-if="errors && errors.name" class="text-danger">{{ errors.name }}</div>
            </div>
            
            <div class="form-group">
                  <label for="surname">Surname</label> 
                  <input v-model="user.surname" type="text" class="form-control" name="surname" id="surname" required/>
                  <div v-if="errors && errors.name" class="text-danger">{{ errors.surname }}</div>
            </div>

            <div class="form-group">
                  <label for="email">E-mail</label>
                  <input v-model="user.email" type="email" class="form-control" name="email" id="email" required/>
                  <div v-if="errors && errors.name" class="text-danger">{{ errors.email }}</div>
            </div>
            <div class="mt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
      <div v-if="success">
            <div class="mt-3 alert alert-success mt-3">
                  Message sent!
            </div>
            <h3>Your data</h3>
            <p>Name: {{ user.name }}</p>
            <p>Surname: {{ user.urname }}</p>
            <p>Email: {{ user.email }}</p>
            <button @click="resetInput" type="button" class="btn btn-info">Click to restart</button>
      </div>
       
  </div>
      
</template>
<script>
      import Mixin from '../../assets/Mixin';
      export default {
            mixins: [ Mixin ],
            data() {
                  return {
                        'action': '/userForm',
                  }
            }
      }
</script>  