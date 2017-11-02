<template>
    <div>

        <label class="black-text">Email & Passwords</label>

        <hr>

        <!-- first name -->
        <div class="form-group">
            <label class="font-10">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>


        <!-- last_name -->
        <div class="form-group">
            <label class="font-10">New Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>


        <!-- last_name -->
        <div class="form-group">
            <label class="font-10">Confirm Password</label>
            <input type="password" name="confirmed_password" id="last_name" class="form-control">
        </div>




        <!-- button -->
        <div class="form-group">
            <button class="btn btn-success pull-right btn-sm btn-flat playground__primary-btn form-control">Save</button>
        </div>

    </div>
</template>

<script>
export default {
    mounted() {
        console.log('User email details mounted.')
    }
}
</script>
