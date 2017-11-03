module.exports = {

	inactiveCount:0, 


	keepPolling:true, 


	connectionStatus:'Active', 


	pollTimer:6000, 


	maxAttempts:3, 


	statKeys:{
		user:'#userStats', 
		visits:'#visitsStats', 
		clicks:'#totalClicks', 
		items:'#itemsStats', 
	}, 


	init()
	{
		console.log("initializing the polling logic"); 

		// this.listenForEcho(); 
			
		this.getConfigOptions().then(_ => {

			console.log("the config options are: "); 
			console.log(this.pollTimer, this.maxAttempts); 


			this.handleInactiveCount(); 

			this.addDocumentEventListeners(); 


			this.getStatsElements(); 

			this.getStatsData().then(_ => this.keepPollingFromServer()); 
		}); 

	}, 



	getConfigOptions()
	{
		console.log("get the config options"); 

		return axios.get('/dashboard/polling/options')
		.then(data => data.data.data)
		.then(data => {
			this.maxAttempts = data.max_attempts; 
			this.pollTimer = data.poll_timer; 
			return data; 
		}); 
	}, 



	listenForEcho()
	{
		console.log("listening for echo"); 
		Echo.channel('user-notified')
	    .listen("NotifyUser", (e) => {
	    	console.log("user notified"); 
	        console.log(e.notification);
	    });
	}, 



	addDocumentEventListeners()
	{
		document.addEventListener("mousemove", this.initInactiveCount.bind(this));
		document.addEventListener("keypress", this.initInactiveCount.bind(this)); 
	}, 



	handleInactiveCount()
	{
		setInterval(_ => {
			this.inactiveCount++; 
			console.log("inactive count"); 
			console.log(this.inactiveCount); 

			if(this.inactiveCount > this.maxAttempts)
				this.keepPolling = false; 


			this.setConnectionStatusValue(); 

		}, this.pollTimer); 
	}, 



	initInactiveCount()
	{
		console.log("re init inactive count"); 
		this.inactiveCount = 0; 
		this.keepPolling = true; 
	}, 



	getStatsElements()
	{
		console.log("getting the stats elements"); 

		this.statKeys = _.mapValues(
			this.statKeys, 
			(selector, key) => document.querySelector(selector)
		); 

		console.log(this.statKeys); 
	}, 



	getStatsData()
	{
		if(!this.keepPolling) return ; 

		console.log("getting the stats data");

		return axios.get('/dashboard/user/stats')
		.then(data => data.data.data)
		.then(stats => {
			console.log("received the data"); 
			console.log(stats); 
			console.log(this); 

			_.map(stats, (value, key) => {
				console.log("looping through the keys"); 
				console.log(value, key); 
				this.setStats(key, value); 
			}); 

		});  
	}, 


	setStats(key, value)
	{
		console.log(this.statKeys); 
		console.log(this.statKeys[key]); 
		if(!this.statKeys[key]) return ; 

		this.statKeys[key].innerHTML = value; 
	}, 



	keepPollingFromServer()
	{
		console.log("polling for the data"); 
		setInterval(this.getStatsData.bind(this), this.pollTimer); 
	}, 



	setConnectionStatusValue()
	{
		console.log("setting the connection value"); 


		this.connectionStatus = this.keepPolling ? "Active" : "Inactive"; 

		console.log(this.connectionStatus); 

		document.querySelector('#connectionStatus').innerHTML = this.connectionStatus; 

	}, 

}