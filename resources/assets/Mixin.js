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
                  loaded: true,
                  action: ''
            };
      },
      methods: {
            userForm: function () {
                  this.success = true;
            },
            resetInput() {
                  this.user.name = "";
                  this.user.surname = "";
                  this.user.email = "";
                  this.user.success = false;
            },
      }
}