<template>
    <div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>First</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone #</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Last Updated At</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr v-for="user in records">
                        <td>
                            <p>
                                {{ user.first_name }}
                            </p>
                        </td>

                        <td>
                            <p>
                                {{ user.last_name }}
                            </p>
                        </td>

                        <td>
                            <p>
                                {{ user.email }}
                            </p>
                        </td>

                        <td>
                            <p>
                                {{ user.profile.phone_number }}
                            </p>
                        </td>

                        <td>
                            <p>
                                {{ user.profile.address_line_1 }}
                                <br>
                                {{ user.profile.address_line_2 }}
                                <br>
                                {{ user.profile.city }}, {{ user.profile.state }}
                                <br>
                                {{ user.profile.postal_code }}
                            </p>

                            

                        </td>

                        <td>
                            <p>
                                {{ user.profile.country }}
                            </p>
                        </td>

                        <td>
                            <p>
                                {{ user.updated_at | fulldate }}
                            </p>
                        </td>

                        <td>
                            More
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <ul class="pagination right-align" id="paginationLog">
            <li v-if="logPagination.current_page > 1">
                <a href="#" aria-label="Previous" @click="getRecords(logPagination.current_page-1)">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
            </li>          
            <li v-for="page in pagesNumber" :class="[ page == isActived ? 'active' : '']">
                <a href="#" @click="getRecords(page)" >
                    {{ page }}
                </a>
            </li>
            <li v-if="logPagination.current_page < logPagination.last_page">
                <a href="#" @click="getRecords(logPagination.current_page + 1)">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
        
    </div>
</template>

<script>
export default {

    props:['userRecords'],


    data()
    {
        return {
            logArr:[], 
            q:'',
            statusFilter:'all', 
            dateFilter:'', 
            logPagination: {
                total: 0,
                per_page: 2,
                from: 1,
                to: 0,
                current_page: 1,
                last_page:''
            },

            offset: 1,

            records:[], 

            recordsEndpoint:"/user/records/all", 

            fetchingRecords:false, 

            statusItems:[],
        }; 
    },  


    computed:
    {

        isActived:function() 
        {
                // return this.logPagination.current_page;
            },


            pagesNumber:function() 
            {
                if (!this.logPagination.to) {
                    return [];
                }
                var from = this.logPagination.current_page - this.offset;
                if (from < 1) {
                    from = 1;
                }
                var to = this.logPagination.last_page;

                var pagesArray = [];
                while (from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            },
        },


        watch:
        {
            q()
            {
                console.log("watching the search query."); 

                // this.search(); 
            }, 


            isActived()
            {
                this.getRecords(this.isActived); 
            }
        }, 


        filters: 
        {
            fulldate:function(date) 
            {
                return !date ? "—" : moment(date).format("D MMM, YYYY HH:mm:ss");
            },

            removeEmpty(value)
            {
                return !value ? "—" : value;  
            }, 
        }, 


        methods:
        {
            init()
            {
                this.getRecords(); 
            }, 



            getRecords(pageNumber)
            {
                let page = !pageNumber ? this.logPagination.current_page : pageNumber; 

                if(this.fetchingRecords) return ; 

                this.logPagination.current_page = page;

                this.records = []; 

                this.fetchRecords(this.recordsEndpoint + "?page=" + page + "&q=" + this.q + "&status=" + this.statusFilter + "&date=" + this.dateFilter); 

                // axios.get(this.recordsEndpoint)
                // .then(data => data.data.data)
                // .then(data => {
                //     console.log("received the user data"); 
                //     console.log(data); 
                //     this.records = data.data; 
                // }); 
}, 



fetchRecords(endPoint)
{   
    console.log("fetching the records..."); 

    this.fetchingRecords = true; 

    return axios.get(endPoint)
    .then(data => data.data.data)
    .then(data => {
        console.log("received the data"); 
        console.log(data); 
        this.logPagination.total = data.total; 
        this.logPagination.per_page = data.per_page; 
        this.logPagination.from = data.from; 
        this.logPagination.to = data.to; 
        this.logPagination.current_page = data.current_page; 
        this.logPagination.last_page = data.last_page; 
        this.records = data.data; 
        this.fetchingRecords = false; 
    }); 
},

}, 

mounted() {
    console.log('users list mounted.'); 

    this.init(); 
}
}
</script>
