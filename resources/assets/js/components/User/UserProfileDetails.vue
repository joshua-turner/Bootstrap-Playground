<template>
    <div>

        <label class="black-text">Personal Information</label>

        <hr>

        <!-- first name -->
        <div class="form-group">
            <label class="font-10">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
        </div>


        <!-- last_name -->
        <div class="form-group">
            <label class="font-10">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
        </div>


        <!-- phone number -->
        <div class="form-group">
            <label class="font-10">Phone Number</label>
            <input type="text" name="phone_no" id="mobile_no" class="form-control">
        </div>


        <!-- country -->
        <!-- <div class="form-group">
            <label class="font-10">Country</label>
            <select class="form-control" id="country">
                <option>India</option>
            </select>
        </div> -->



        <!-- zipcode -->
        <!-- <div class="form-group">
            <label class="font-10">ZipCode</label>
            <input type="text" name="zipcode" id="zipcode" class="form-control">
        </div> -->





        <!-- button -->
        <div class="form-group">
            <button class="btn btn-success pull-right btn-sm btn-flat playground__primary-btn form-control">Save</button>
        </div>

    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
