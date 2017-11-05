<template>
    <div class="panel">

        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Address</h3>
        </header>


        <div class="panel-body">
            <!-- address line 1 -->
            <div class="form-group">
                <label class="font-10">Address Line 1</label>
                <input type="text" name="address_1" id="address1" class="form-control" v-model="profile.profile.address_line_1">
            </div>
            
            
            <!-- address line 2 -->
            <div class="form-group">
                <label class="font-10">Address Line 2</label>
                <input type="text" name="address_2" id="address2" class="form-control" v-model="profile.profile.address_line_2">
            </div>
            
            
            <!-- city/town -->
            <div class="form-group">
                <label class="font-10">City/Town</label>
                <input type="text" name="city" id="city" class="form-control" v-model="profile.profile.city">
            </div>
            
            
            
            
            <!-- city/town -->
            <div class="form-group">
                <label class="font-10">State / Province / Region</label>
                <input type="text" name="state" id="state" class="form-control" v-model="profile.profile.state">
            </div>
            
            
            <!-- zip/postal -->
            <div class="form-group">
                <label class="font-10">Zip / Postal Code</label>
                <input type="text" name="postal_code" id="postalCode" class="form-control" v-model="profile.profile.postal_code">
            </div>
            
            
            <!-- country -->
            <div class="form-group">
                <label class="font-10">Country</label>
                <select name="country" id="country" class="form-control" v-model="profile.profile.country">
                    <option value="Malaysia">Malaysia</option>
                </select>
            </div>
            
            
            
            <!-- button -->
            <div class="form-group">
                <button class="btn btn-success pull-right btn-sm btn-flat playground__primary-btn form-control">Save</button>
            </div>
        </div>


    </div>
</template>

<script>
export default {

    props:['userProfile'], 


    data()
    {
        return {
            profile:this.userProfile
        }; 
    }, 


    mounted() {
        console.log('User address details mounted.')
    }
}
</script>
