<template>
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <h3>User Profile</h3>

            <hr>


            <div class="col-md-3 col-sm-4">

                <div class="row">
                    <div class="col-md-12">

                        <div class="profile__picture">
                            <img src="http://via.placeholder.com/200x200" onerror="this.src='/default.png'" id="profile_img_id" height="200" width="100%">
                        </div>

                    </div>
                    
                </div>


                <div class="vertical__tabs-wrapper">
                    
                    <a href="#" v-for="(tab, key) in tabs" 
                    :class="getTabClass(tab.isActive)" 
                    @click="changeTabs(key)">
                        {{ tab.name }}
                    </a>
                    
                </div>

            </div>



            <div class="col-md-9">
                <keep-alive v-for="(tab, key) in tabs" v-if="tab.component" :key="key">
                    <component :is="tab.component" v-show="tab.isActive"></component>
                </keep-alive> 
            </div>

        </div>



    </div>

</div>
</template>

<script>
export default {

    props:[], 


    data()
    {
        return {

            tabs:
            {
                userProfileDetails:{
                    name:'Profile', 
                    component:'user-profile-details', 
                    target:'userProfileDetails', 
                    display:true,
                    isActive:true,
                },

                userEmailDetails:{
                    name:'Email', 
                    component:'user-email-details', 
                    target:'userEmailDetails', 
                    display:true,
                    isActive:false,
                },


                userAddressDetails:{
                    name:'Address', 
                    component:'user-address-details', 
                    target:'userAddressDetails', 
                    display:true,
                    isActive:false,
                },


                account:{
                    name:'Account', 
                    component:'', 
                    target:'userAccountDetails', 
                    display:true,
                    isActive:false,
                },


                contacts:{
                    name:'Contacts', 
                    component:'', 
                    target:'userContactDetails', 
                    display:true,
                    isActive:false,
                },


                notifications:{
                    name:'Notifications', 
                    component:'', 
                    target:'userNotificationDetails', 
                    display:true,
                    isActive:false,
                },

                work:{
                    name:'Work', 
                    component:'', 
                    target:'userWorkDetails', 
                    display:true,
                    isActive:false,
                },

            }, 


        }; 
    }, 


    methods:
    {
        init()
        {

        }, 




        getTabClass(flag)
        {
            let classes = [
                'vertical__tab', 
                'vertical__tab--active'
            ]; 

            return flag ? classes.join(' ') : classes[0]; 
        }, 



        changeTabs(key)
        {
            console.log("changing the tabs"); 

            console.log(key); 

            this.deactivateTabs();

            console.log("setting the tab with key to true"); 

            this.tabs[key].isActive = true; 

        }, 



        deactivateTabs()
        {
            console.log("deactivating the tabs"); 

            for(let key in this.tabs)  this.tabs[key].isActive = false; 

        }, 



        findTabByKey(key)
        {
            console.log("filtering the tabs by the key"); 
            console.log(key); 
            return _.filter(this.tabs, (tab, index) => index === key); 
        }

    }, 


    mounted() {
        console.log('profile vue mounted.'); 

        this.init(); 
    }
}
</script>
