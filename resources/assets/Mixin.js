import axios from "axios";

export default {
      name: 'userForm',
      data() {
            return {
                  user: {
                        name: "",
                        surname: "",
                        email: "", 
                  },
                  errors: {},
                  success: false,
                  action: '',
                  usersData: []
            };
      },
      methods: {

            userForm: function () {
                  axios.post('/userSubmit', this.user).then(response => {
                        this.usersData = response.data;
                        this.success = true;
                  }).catch(error => {
                        if(error.response.status === 422) {
                              this.errors = error.response.data.errors || {};
                        }
                  });

            },

            resetInput() {
                  this.user = {}
                  this.success = false;
            }
      }
}