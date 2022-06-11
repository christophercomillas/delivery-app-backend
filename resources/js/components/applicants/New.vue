<template>
    <div>
        <div class="card shadow mb-12">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">New Applicant</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="phone_number">Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+</span>
                                    </div>
                                    <input 
                                        v-model="form.phone_number"
                                        type="text" 
                                        name="phone_number" 
                                        id="phone_number" 
                                        class="form-control" 
                                        aria-label="phone_number"
                                    >
                                </div>
                                <small class="helper">include country, area or network codes</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="mobile_number">Mobile Number &nbsp;<span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+</span>
                                    </div>
                                    <input type="text" name="mobile_number" id="mobile_number" class="form-control" aria-label="mobile_number">
                                </div>
                                <small class="helper">include country, area or network codes</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="email_address">Email Address &nbsp;<span class="required">*</span></label>
                                <input type="text" name="email_address" id="email_address" class="form-control" aria-label="email_address" placeholder="email@domain.com">
                                <small class="helper">Gmail or Yahoo Mail only</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="confirm_email">Confirm Email Address &nbsp;<span class="required">*</span></label>
                                <input type="text" name="confirm_email" id="confirm_email" class="form-control" aria-label="confirm_email" placeholder="email@domain.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="last_name">Last Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="last_name" id="last_name" class="form-control" aria-label="last_name" placeholder="E.G. MERCADO RIZAL">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="first_name">First Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="first_name" id="first_name" class="form-control" aria-label="first_name" placeholder="E.G. JOSE PROTANCIO JR">
                                <small class="helper">Include suffix name on first name</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="middle_name">Middle Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="middle_name" id="middle_name" class="form-control" aria-label="middle_name" placeholder="E.G. ALONZO REALONDA">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="confirm_email">Date of Birth &nbsp;<span class="required">*</span></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
											<select
												id="birth_month" 
												v-model="form.birth_month"
												name="birth_month"
												class="form-control"
												aria-label="birth_month"
											>											
                                                <option selected value=""> MM </option>
												<option v-for="month in months" :key="month" :value="month">
													{{ month }}
												</option>
											</select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
											<select
												id="birth_day" 
												v-model="form.birth_day"
												name="birth_day"
												class="form-control"
												aria-label="birth_day"
											>											
                                                <option selected value=""> DD </option>
												<option v-for="day in days" :key="day" :value="day">
													{{ day }}
												</option>
											</select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
											<select
												id="birth_year" 
												v-model="form.birth_year"
												name="birth_year"
												class="form-control"
												aria-label="birth_year"
											>											
                                                <option selected value=""> YYYY </option>
												<option v-for="year in years" :key="year" :value="year">
													{{ year }}
												</option>

											</select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="gender">Gender &nbsp;<span class="required">*</span></label>
                                <div class="row">
                                    <label class="col-md-4 ml-3 mt-2">
                                        <span class="radio">
                                            <input id="Gender" name="Gender" type="radio" value="M">
                                            Male
                                        </span>
                                    </label>
                                    <label class="col-md-4 mt-2">
                                        <span class="radio">
                                            <input id="Gender" name="Gender" type="radio" value="F">
                                            Female
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="confirm_email">Civil Status &nbsp;<span class="required">*</span></label>
                                <select
                                    id="civil_status" 
                                    name="civil_status"
                                    class="form-control"
                                    aria-label="civil_status"
                                >											
                                    <option selected value="">- SELECT CIVIL STATUS -</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="confirm_email">Birth Legitimacy &nbsp;<span class="required">*</span></label>
                                <select
                                    id="birth_legitimacy" 
                                    name="birth_legitimacy"
                                    class="form-control"
                                    aria-label="birth_legitimacy"
                                >											
                                    <option selected value="">- SELECT BIRTH OF LEGITIMACY -</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="confirm_email">Country of Birth &nbsp;<span class="required">*</span></label>
                                <select
                                    id="birth_legitimacy" 
                                    name="birth_legitimacy"
                                    class="form-control"
                                    aria-label="birth_legitimacy"
                                >											
                                    <option selected value="">- SELECT COUNTRY OF BIRTH -</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="province">Province &nbsp;<span class="required">*</span></label>
                                <select
                                    id="province" 
                                    name="province"
                                    class="form-control"
                                    aria-label="province"
                                >											
                                    <option selected value="">- SELECT PROVINCE -</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="city_municipality">City/Municipality &nbsp;<span class="required">*</span></label>
                                <select
                                    id="city_municipality" 
                                    name="city_municipality"
                                    class="form-control"
                                    aria-label="city_municipality"
                                >											
                                    <option selected value="">- SELECT CITY/MUNICIPALITY -</option>
                                </select>
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="uline"><label class="col-form-label col-form-label-sm blk" for="father_info">Father's Information</label></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="last_name">Last Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="last_name" id="last_name" class="form-control" aria-label="last_name" placeholder="E.G. MERCADO RIZAL">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="first_name">First Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="first_name" id="first_name" class="form-control" aria-label="first_name" placeholder="E.G. JOSE PROTANCIO JR">
                                <small class="helper">Include suffix name on first name</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="middle_name">Middle Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="middle_name" id="middle_name" class="form-control" aria-label="middle_name" placeholder="E.G. ALONZO REALONDA">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="confirm_email">Country Citizenship &nbsp;<span class="required">*</span></label>
                                <select
                                    id="birth_legitimacy" 
                                    name="birth_legitimacy"
                                    class="form-control"
                                    aria-label="birth_legitimacy"
                                >											
                                    <option selected value="">- SELECT COUNTRY OF BIRTH -</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="uline"><label class="col-form-label col-form-label-sm blk" for="father_info">Mother's Information</label></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="last_name">Last Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="last_name" id="last_name" class="form-control" aria-label="last_name" placeholder="E.G. MERCADO RIZAL">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="first_name">First Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="first_name" id="first_name" class="form-control" aria-label="first_name" placeholder="E.G. JOSE PROTANCIO JR">
                                <small class="helper">Include suffix name on first name</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="middle_name">Middle Name &nbsp;<span class="required">*</span></label>
                                <input type="text" name="middle_name" id="middle_name" class="form-control" aria-label="middle_name" placeholder="E.G. ALONZO REALONDA">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="confirm_email">Country Citizenship &nbsp;<span class="required">*</span></label>
                                <select
                                    id="birth_legitimacy" 
                                    name="birth_legitimacy"
                                    class="form-control"
                                    aria-label="birth_legitimacy"
                                >											
                                    <option selected value="">- SELECT COUNTRY OF BIRTH -</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="application_type">Application Type &nbsp;<span class="required">*</span></label>
                                <select
                                    id="application_type" 
                                    name="application_type"
                                    class="form-control"
                                    aria-label="application_type"
                                >											
                                    <option selected value="">- SELECT APPLICATION TYPE -</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="basis_phil_citizenship">Basis of Philippine Citizenship &nbsp;<span class="required">*</span></label>
                                <select
                                    id="basis_phil_citizenship" 
                                    name="basis_phil_citizenship"
                                    class="form-control"
                                    aria-label="basis_phil_citizenship"
                                >											
                                    <option selected value="">- SELECT BASIS OF PHILIPPINE CITIZENSHIP -</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="gender">Foreign Passport Holder &nbsp;<span class="required">*</span></label>
                                <div class="row">
                                    <label class="col-md-4 ml-3 mt-2">
                                        <span class="radio">
                                            <input id="foreign_passport_holder" name="foreign_passport_holder" type="radio" value="M">
                                            YES
                                        </span>
                                    </label>
                                    <label class="col-md-4 mt-2">
                                        <span class="radio">
                                            <input id="foreign_passport_holder" name="foreign_passport_holder" type="radio" value="F" checked>
                                            NO
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="middle_name">Emergency Contact Person &nbsp;<span class="required">*</span></label>
                                <input type="text" name="emergency_contact_person" id="emergency_contact_person" class="form-control" aria-label="emergency_contact_person" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="contact_number">Contact Number &nbsp;<span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+</span>
                                    </div>
                                    <input type="text" name="contact_number" id="contact_number" class="form-control" aria-label="contact_number">
                                </div>
                                <small class="helper">include country, area or network codes</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8  mb-3">
                            <label class="col-form-label col-form-label-sm blk" for="application_type">Current Address &nbsp;<span class="required">*</span></label>
                            <textarea name="current_address" id="" class="form-control" cols="30" rows="2"></textarea>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="city">City &nbsp;<span class="required">*</span></label>
                                <input type="text" name="city" id="city" class="form-control" aria-label="city">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="city">Province/State/Country &nbsp;<span class="required">*</span></label>
                                <input type="text" name="city" id="city" class="form-control" aria-label="city">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="occupation">Occupation &nbsp;<span class="required">*</span></label>
                                <input type="text" name="occupation" id="occupation" class="form-control" aria-label="occupation">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="office_number">Office Number &nbsp;<span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+</span>
                                    </div>
                                    <input type="text" name="office_number" id="office_number" class="form-control" aria-label="office_number">
                                </div>
                                <small class="helper">include country, area or network codes</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8  mb-3">
                            <label class="col-form-label col-form-label-sm blk" for="office_address">Office Address &nbsp;<span class="required">*</span></label>
                            <textarea name="office_address" id="" class="form-control" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm blk" for="application_status">Application Status &nbsp;<span class="required">*</span></label>
                                <select
                                    id="application_status" 
                                    name="application_status"
                                    class="form-control"
                                    aria-label="application_status"
                                >											
                                    <option selected value="">- SELECT APPLICATION STATUS -</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12  mb-4">
                            <label class="col-form-label col-form-label-sm blk" for="office_address">Notes &nbsp;<span class="required">*</span></label>
                            <textarea name="notes" id="" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center mb-4">
                            <button type="submit" class="btn btn-secondary">
                                &nbsp;<i class="fa-solid fa-trash-can-arrow-up"></i>&nbsp;&nbsp;
                                Reset &nbsp;
                            </button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary">
                                &nbsp;<i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;
                                Save &nbsp;
                            </button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-info">
                                &nbsp;<i class="fa-regular fa-floppy-disk"></i>&nbsp;&nbsp;
                                Save New &nbsp;
                            </button>&nbsp;&nbsp;
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
export default {
    data(){
        return {
            months:[],
            num_of_days:0,
            days:[],
            years:[],
            current_year: new Date().getFullYear(),
            year_to_minus: 100,
			form: {
                birth_month: '',
                birth_day: '',
                birth_year: '',
                phone_number: ''
            }
        }
    },
    created(){
        this.getMonths();
        this.getDays();
        this.getYears();
    },
    methods: {
        getMonths(){
            this.months = moment.monthsShort();
            // this.months.reverse();
            //this.months.push("-");
        },
        getDays(){
            this.num_of_days = moment().daysInMonth();
            for (let i =1; i <= this.num_of_days; i++) {
                this.days.push(i);
            }            
        },
        getYears()
        {
            let year_m = this.current_year;
            for (let i = 1; i <= 100; i++) {
                year_m--;
                this.years.push(year_m);
            }    
        }
    }
}
</script>

<style>

</style>