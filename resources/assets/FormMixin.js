export default {
      name: 'userform',
      data() {
        return {
          fields: {},
          errors: {},
          success: false,
          loaded: true,
          action: '',
        }
      },
      methods: {
        submit() {
          if (this.loaded) {
            this.loaded = false;
            this.success = false;
            this.errors = {};
            axios.post('/submit', this.fields).then(response => {
                  alert('hello');
              this.fields = {}; 
              this.loaded = true;
              this.success = true;
            }).catch(error => {
              this.loaded = true;
              if (error.response.status === 422) {
                this.errors = error.response.data.errors || {};
              }
            });
          }
        },
      },
    }