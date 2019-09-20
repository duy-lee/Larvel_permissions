<template>
  <section>
    <br />
    <div class="form-group">
      <button
        @click.prevent="clearVal()"
        type="button"
        data-target="#createEmployeeModal"
        data-toggle="modal"
        class="btn btn-success btn-sm"
      >Create</button>
    </div>
    <table class="table table-striped table-responsive-lg">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Gender</th>
          <th scope="col">Date of birth</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>
          <th scope="col">Phone number</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(employee, index) in data" :value="employee.id" :key="employee.name">
          <td>{{ index+1 }}</td>
          <td :id="employee.id">{{ employee.name }}</td>
          <td v-if="employee.gender == 1">Male</td>
          <td v-else>Female</td>
          <td>{{ employee.date_of_birth }}</td>
          <td>{{ employee.address }}</td>
          <td>{{ employee.email }}</td>
          <td>{{ employee.phone }}</td>
          <td>
            <button
              @click="setVal(employee, index)"
              type="button"
              data-target="#editEmployeeModal"
              data-toggle="modal"
              class="btn btn-primary btn-sm"
            >Edit</button>
            <button
              @click="setVal(employee, index)"
              type="button"
              data-target="#deleteEmployeeModal"
              data-toggle="modal"
              class="btn btn-danger btn-sm"
            >Delete</button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- popup create -->
    <div
      class="modal fade"
      id="createEmployeeModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Employee!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div slot="body">
              Name:
              <input
                type="text"
                class="form-control"
                id="e_name"
                name="name"
                required
                v-model="e_name"
              />
              <label class="col-form-label">Gender</label>
              <div>
                <div class="custom-control custom-radio custom-control-inline col-form-label">
                  <input
                    type="radio"
                    class="custom-control-input"
                    id="customRadio"
                    name="gender"
                    value="1"
                    v-model="e_gender"
                  />
                  <label class="custom-control-label" for="customRadio">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline col-form-label">
                  <input
                    type="radio"
                    class="custom-control-input"
                    id="customRadio2"
                    name="gender"
                    value="2"
                    v-model="e_gender"
                  />
                  <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
              </div>Date of birth:
              <input
                type="date"
                class="form-control"
                id="e_date_of_birth"
                name="date_of_birth"
                required
                v-model="e_date_of_birth"
              />
              Address:
              <input
                type="text"
                class="form-control"
                id="e_address"
                name="address"
                required
                v-model="e_address"
              />
              Email:
              <input
                type="text"
                class="form-control"
                id="e_email"
                name="email"
                required
                v-model="e_email"
              />
              Phone:
              <input
                type="text"
                class="form-control"
                id="e_phone"
                name="phone"
                required
                v-model="e_phone"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button
              @click.prevent="createItem()"
              class="btn btn-success"
              data-dismiss="modal"
            >Create</button>
          </div>
        </div>
      </div>
    </div>

    <!-- popup edit -->
    <div
      class="modal fade"
      id="editEmployeeModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Employee!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div slot="body">
              Name:
              <input
                type="text"
                class="form-control"
                id="e_name"
                name="name"
                required
                v-model="e_name"
              />
              <label class="col-form-label">Gender</label>
              <div>
                <div class="custom-control custom-radio custom-control-inline col-form-label">
                  <input
                    type="radio"
                    class="custom-control-input"
                    id="customRadio"
                    name="gender"
                    value="1"
                    v-model="e_gender"
                  />
                  <label class="custom-control-label" for="customRadio">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline col-form-label">
                  <input
                    type="radio"
                    class="custom-control-input"
                    id="customRadio2"
                    name="gender"
                    value="2"
                    v-model="e_gender"
                  />
                  <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
              </div>Date of birth:
              <input
                type="date"
                class="form-control"
                id="e_date_of_birth"
                name="date_of_birth"
                required
                v-model="e_date_of_birth"
              />
              Address:
              <input
                type="text"
                class="form-control"
                id="e_address"
                name="address"
                required
                v-model="e_address"
              />
              Email:
              <input
                type="text"
                class="form-control"
                id="e_email"
                name="email"
                required
                v-model="e_email"
              />
              Phone:
              <input
                type="text"
                class="form-control"
                id="e_phone"
                name="phone"
                required
                v-model="e_phone"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button @click.prevent="editItem()" class="btn btn-success" data-dismiss="modal">Update</button>
          </div>
        </div>
      </div>
    </div>

    <!-- popup delete -->
    <div
      class="modal fade"
      id="deleteEmployeeModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Delete employee "{{ e_name }}"?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button @click.prevent="deleteItem()" class="btn btn-danger" data-dismiss="modal">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Toasted from 'vue-toasted';
Vue.use(Toasted, {
    duration: 3000,
    position: "top-center",
    theme: "toasted-primary",
  });

export default {
  props: ["employees"],

  data() {
    return {
      data: this.employees,
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),

      index: null,
      e_id: "",
      e_name: "",
      e_gender: "",
      e_date_of_birth: "",
      e_address: "",
      e_email: "",
      e_phone: ""
    };
  },

  methods: {
    setVal(val_employee, val_index) {
      this.index = val_index;
      this.e_id = val_employee.id;
      this.e_name = val_employee.name;
      this.e_gender = val_employee.gender;
      this.e_date_of_birth = val_employee.date_of_birth;
      this.e_address = val_employee.address;
      this.e_email = val_employee.email;
      this.e_phone = val_employee.phone;
    },

    clearVal() {
      this.index = "";
      this.e_id = "";
      this.e_name = "";
      this.e_gender = "";
      this.e_date_of_birth = "";
      this.e_address = "";
      this.e_email = "";
      this.e_phone = "";
    },

    createItem: function createItem() {
      var _this = this;
      axios
        .post("employees", {
          name: _this.e_name,
          gender: _this.e_gender,
          date_of_birth: _this.e_date_of_birth,
          address: _this.e_address,
          email: _this.e_email,
          phone: _this.e_phone
        })
        .then(function(response) {
          if(response.data.message.match('Successfully created!')){
            _this.data.push(response.data.data);
          }
          _this.clearVal();
          Vue.toasted.show(response.data.message);
        })
        .catch(function(error) {
          Vue.toasted.show("Error happened! Please contact the support team");
        });
    },

    deleteItem: function deleteItem() {
      var _this = this;
      axios
        .delete("employees/" + _this.e_id)
        .then(function(response) {
          _this.data.splice(_this.index, 1);
          Vue.toasted.show(response.data.message);
        })
        .catch(function(error) {
          Vue.toasted.show("Error happened! Please contact the support team");
        });
    },

    editItem: function editItem() {
      var _this = this;
      axios
        .put("employees/" + _this.e_id, {
          name: _this.e_name,
          gender: _this.e_gender,
          date_of_birth: _this.e_date_of_birth,
          address: _this.e_address,
          email: _this.e_email,
          phone: _this.e_phone
        })
        .then(function(response) {

          if(response.data.message.match('Successfully updated!')){
            _this.data[_this.index].name = _this.e_name;
            _this.data[_this.index].gender = _this.e_gender;
            _this.data[_this.index].date_of_birth = _this.e_date_of_birth;
            _this.data[_this.index].address = _this.e_address;
            _this.data[_this.index].email = _this.e_email;
            _this.data[_this.index].phone = _this.e_phone;
          }

          Vue.toasted.show(response.data.message);
        })
        .catch(function(error) {
          Vue.toasted.show("Error happened! Please contact the support team");
        });
    }
  }
};
</script>
