<template>
    <div>

        <label class="black-text">Address</label>

        <hr>

        <!-- address line 1 -->
        <div class="form-group">
            <label class="font-10">Address Line 1</label>
            <input type="text" name="address_1" id="address1" class="form-control">
        </div>


        <!-- address line 2 -->
        <div class="form-group">
            <label class="font-10">Address Line 2</label>
            <input type="text" name="address_2" id="address2" class="form-control">
        </div>


        <!-- city/town -->
        <div class="form-group">
            <label class="font-10">City/Town</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>




        <!-- city/town -->
        <div class="form-group">
            <label class="font-10">State / Province / Region</label>
            <input type="text" name="state" id="state" class="form-control">
        </div>


        <!-- zip/postal -->
        <div class="form-group">
            <label class="font-10">Zip / Postal Code</label>
            <input type="text" name="postal_code" id="postalCode" class="form-control">
        </div>


        <!-- country -->
        <div class="form-group">
            <label class="font-10">Country</label>
            <select name="country" id="country" class="form-control">
                <option value="Malaysia">Malaysia</option>
            </select>
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
        console.log('User address details mounted.')
    }
}
</script>
