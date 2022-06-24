<template>
      <div>
            <form id="userForm" @submit.prevent="userForm" v-if="!success" >
                  <div class="card">
                        <div class="card-header">
                              <h2>Add user</h2>
                              <p>Please fill the form below with all the informations.</p>
                        </div>
                        <div class="card-body">
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
                                    <button type="submit" class="btn btn-primary btn-md btn-block mt-5">Submit</button>
                              </div>
                        </div>
                  </div>
            </form>
            <div v-if="success" class="mb-5 text-center">
                  <div class="mt-3 alert alert-success mt-3">
                        Message sent!
                  </div>
                  <h3>Your last data</h3>
                  <p>Name: {{ user.name }}</p>
                  <p>Surname: {{ user.surname }}</p>
                  <p>Email: {{ user.email }}</p>
                  <button @click="resetInput" type="button" class="btn btn-info mb-5">Click to restart</button>
                  <div class="card">
                        <div class="card-header">
                              <h2>User Added</h2>
                              <p>Here is your data.</p>
                        </div>
                        <div class="card-body">
                              <table class="table">
                                    <thead>
                                          <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Email</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr v-for="user in usersData">
                                                <th scope="row">{{user.id}}</th>
                                                <td>{{user.name}}</td>
                                                <td>{{user.surname}}</td>
                                                <td>{{user.email}}</td>
                                          </tr>
                                    </tbody>
                              </table>
                        </div>
                  </div>
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