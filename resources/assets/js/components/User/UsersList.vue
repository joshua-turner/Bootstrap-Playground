<template>
    <div>

        <div class="row">
            <div class="col-md-5">
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>
                                First
                
                                <span @click="filterRecordsByKey('first_name','users')">
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                
                            </th>
                
                            <th>
                                Last Name
                
                                <span @click="filterRecordsByKey('last_name','users')">
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                                
                            </th>
                
                            <th>
                                Email
                
                                <span @click="filterRecordsByKey('email','users')">
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                            </th>
                
                            <th>
                                Phone #
                                <span @click="filterRecordsByKey('phone_number','profile')">
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                
                            </th>
                
                            <th>
                                Address
                                <span @click="filterRecordsByKey('address_line_1','profile')">
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                
                                
                            </th>
                
                            <th>
                                Country
                                <span @click="filterRecordsByKey('country','profile')">
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                
                                
                            </th>
                
                            <th>
                                Last Updated At
                
                                <span @click="filterRecordsByKey('updated_at','users')">
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                
                                
                            </th>
                
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
            </div>
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

            // page:1, 

            records:[], 

            recordsEndpoint:"/user/records/all", 

            fetchingRecords:false, 

            statusItems:[],


            orderRecords:{
                column:'first_name', 
                orderType:'asc',
                table:'users',  
            }, 

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

                // this.fetchRecords(this.recordsEndpoint + "?page=" + page + "&q=" + this.q + "&status=" + this.statusFilter + "&date=" + this.dateFilter);

                this.fetchRecords(this.getRecordsEndpoint(page)); 

            }, 



            filterRecordsByKey(key, table)
            {

                this.orderRecords.column = key; 
                this.orderRecords.table = table; 
                this.orderRecords.orderType = this.orderRecords.orderType == "asc" ? "desc" : "asc"; 


                this.fetchRecords(this.getRecordsEndpoint());

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


            getRecordsEndpoint(page)
            {

                let baseEndpoint = this.recordsEndpoint + '?';

                console.log("building the endpoint to get the records"); 
                let args = [
                    'page=' + (!page ? this.logPagination.current_page : page), 
                    'q=' + this.q, 
                    'status=' + this.statusFilter, 
                    'date=' + this.dateFilter, 
                    'orderBy=' + this.orderRecords.column, 
                    'orderFrom=' + this.orderRecords.table, 
                    'orderType=' + this.orderRecords.orderType, 
                ];  

                console.log(args.join('&')); 

                return baseEndpoint + args.join('&'); 
            }

        }, 

        mounted() {
            console.log('users list mounted.'); 

            this.init(); 
        }
    }
    </script>
