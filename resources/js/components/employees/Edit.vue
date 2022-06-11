<template>
	<div>
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Employees</h1>
		</div>

		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">Update Employees
								<router-link
									:to="{name: 'EmployeesIndex'}"
									class="float-right"
								>Back</router-link>
							</div>
			
							<div class="card-body">
								<form @submit.prevent="updateEmployee">
									<div class="form-group row">
										<label for="first_name" class="col-md-4 col-form-label text-md-end">First Name</label>
			
										<div class="col-md-6">
											<input 
												id="first_name" 
												v-model="form.first_name"
												type="text" 
												class="form-control" 
												required
											/>
										</div>
									</div>

									<div class="form-group row">
										<label for="middle_name" class="col-md-4 col-form-label text-md-end">Middle Name</label>
			
										<div class="col-md-6">
											<input 
												id="middle_name" 
												v-model="form.middle_name"
												type="text" 
												class="form-control" 
												required
											/>
										</div>
									</div>
									<div class="form-group row">
										<label for="last_name" class="col-md-4 col-form-label text-md-end">Last Name</label>
			
										<div class="col-md-6">
											<input 
												id="last_name" 
												v-model="form.last_name"
												type="text" 
												class="form-control" 
												required
											/>
										</div>
									</div>

									<div class="form-group row">
										<label for="address" class="col-md-4 col-form-label text-md-end">Address</label>
			
										<div class="col-md-6">
											<input 
												id="address" 
												v-model="form.address"
												type="text" 
												class="form-control" 
												required
											/>
										</div>
									</div>

									<div class="form-group row">
										<label for="country" class="col-md-4 col-form-label text-md-end">Country</label>
			
										<div class="col-md-6">
											<select
												v-model="form.country_id"
												@change="getStates()"
												name="country_id"
												class="form-control"
												aria-label="Default select example"
											>											
												<option selected v-for="country in countries" :key="country.id" :value="country.id">
													{{ country.name }}
												</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="state" class="col-md-4 col-form-label text-md-end">State</label>
			
										<div class="col-md-6">
											<select
												v-model="form.state_id"
												@change="getCities()"
												name="state"
												class="form-control"
												aria-label="Default select example"
											>											
												<option selected v-for="state in states" :key="state.id" :value="state.id">
													{{ state.name }}
												</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="city" class="col-md-4 col-form-label text-md-end">City</label>
			
										<div class="col-md-6">
											<select
												v-model="form.city_id"
												name="city"
												class="form-control"
												aria-label="Default select example"
											>											
												<option selected v-for="city in cities" :key="city.id" :value="city.id">
													{{ city.name }}
												</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="department" class="col-md-4 col-form-label text-md-end">Department</label>
			
										<div class="col-md-6">
											<select
												v-model="form.department_id"
												name="department"
												class="form-control"
												aria-label="Default select example"
											>											
												<option selected v-for="department in departments" :key="department.id" :value="department.id">
													{{ department.name }}
												</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="address" class="col-md-4 col-form-label text-md-end">Zip Code</label>
			
										<div class="col-md-6">
											<input 
												id="zip_code" 
												v-model="form.zip_code"
												type="text" 
												class="form-control" 
												required
											/>
										</div>
									</div>

									<div class="form-group row">
										<label for="birthdate" class="col-md-4 col-form-label text-md-end">Birth Date</label>
			
										<div class="col-md-6">
											<datepicker 
												id="birtdate"
												v-model="form.birthdate"
												name="birthdate" input-class="form-control" value="state.date">
											</datepicker>
										</div>
									</div>

									<div class="form-group row">
										<label for="datehired" class="col-md-4 col-form-label text-md-end">Date Hired</label>
			
										<div class="col-md-6">
											<datepicker
											id="date_hired"
											v-model="form.date_hired" 
											name="datehired" input-class="form-control" value="state.date"></datepicker>
										</div>
									</div>


									<div class="response" v-show="response">
										<div v-html="message" :class="reponseClass">
											{{ message }}
										</div>
									</div>
			
									<div class="form-group row">
										<div class="col-md-6 offset-md-4">
											<button type="submit" class="btn btn-primary">
												Save
											</button>
										</div>
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import Datepicker from 'vuejs-datepicker';
import moment from 'moment';
export default {
	components:{
		Datepicker
	},
	data(){
		return {
			reponseClass: "",
			message: "",
			response: true,
			countries: [],
			states: [],
			departments: [],
			cities: [],
			form: {
				first_name: '',
				last_name: '',
				middle_name: '',
				address: '',
				country_id: '',
				state_id: '',
				department_id: '',
				city_id: '',
				zip_code: '',
				birthdate: null,
				date_hired: null
			}
		}
	},
	created() {
		this.getCountries();
		this.getDepartments();
        this.getEmployee();
	},
	methods:{
 		getEmployee(){
			axios.get('/api/employees/'+ this.$route.params.id)
				.then( res =>{
					//this.countries = res.data
                    this.form = res.data.data;
                    this.getStates();
                    this.getCities();
				}).catch(error => {
					console.log(console.error)
			})

		},       
		getCountries(){
			axios.get('/api/employees/countries')
				.then( res =>{
					this.countries = res.data
				}).catch(error => {
					console.log(console.error)
			})

		},
		getStates(){
	
			axios.get("/api/employees/"+ this.form.country_id +"/states")
				.then( res =>{
					this.states = res.data
				}).catch(error => {
					console.log(console.error)
			})
			this.cities = [];
		},
		getCities(){
			axios.get("/api/employees/"+ this.form.state_id +"/cities")
				.then( res =>{
					this.cities = res.data
				}).catch(error => {
					console.log(console.error)
			})
		},
		getDepartments()
		{
			axios.get("/api/employees/departments")
				.then( res =>{
					this.departments = res.data
				}).catch(error => {
					console.log(console.error)
			})
		},
		updateEmployee()
		{
			axios.put("/api/employees/"+ this.$route.params.id,{
				first_name: this.form.first_name,
				last_name: this.form.last_name,
				middle_name: this.form.middle_name,
				address: this.form.address,
				country_id: this.form.country_id,
				state_id: this.form.state_id,
				department_id: this.form.department_id,
				city_id: this.form.city_id,
				zip_code: this.form.zip_code,
				birthdate: this.format_date(this.form.birthdate),
				date_hired: this.format_date(this.form.date_hired)
			})
			.then(res => {
				//console.log(res);
				if(res.status == 200)
				{
					// this.response = true
					// this.reponseClass = "alert alert-success"
					// this.message = this.form.first_name+" successfully saved.";
					// return false;
					this.$router.push({name: 'EmployeesIndex'});
				}

			}).catch(error=>{
				this.reponseClass = "alert alert-danger";
				console.log("Error: ",error.response.data);
				console.log("Error: ",error.response.status);
				if(error.response.status == 422)
				{
					this.message = "<ul>";
					let errors = error.response.data.errors;
					for (let field of Object.keys(errors)) {
						console.log(errors[field][0]);
						this.message += "<li>"+errors[field][0]+"</li>";
					}
					this.message += "</ul>";
					//this.errors = error.response.data.errors;
					// console.log(this.errors);
					// this.message = error.response.data.message;
				}

			})

		},
		format_date(value)
		{
			if(value)
			{
				return moment(String(value)).format('YYYYMMDD')
			}
		}

	}
}
</script>

<style>

</style>