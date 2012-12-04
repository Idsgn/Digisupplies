var DSapp = DSapp || {};

window.addEvent('domready', function() {
	DSapp.getLocation();
	DSapp.getLocation2();
	DSapp.otherAddress();
	DSapp.countryCheck();
	DSapp.countryCheck2();
});

DSapp.getLocation = function() {
	var numberInput = $('number');
	var locationPlaceholder = $('locationPlaceholder');
	
	if(!numberInput || !locationPlaceholder)
	{
		return;
	}
	
	var getLocationInit = function() {
		new Request({
			url: baseurl + '_general/getLocation.php',
			data: $('register'),
			onComplete: function(response) {
				locationPlaceholder.set('html', response);
			}
		}).send();
	};

	//First time
	getLocationInit();
	
	//On blur (update)
	var numberInput = $('number');
	numberInput.addEvent('blur', function(e) {
		e.preventDefault();
		getLocationInit();
	});
}

DSapp.getLocation2 = function() {
	var numberInput = $('number2');
	var locationPlaceholder = $('locationPlaceholder2');
	
	if(!numberInput || !locationPlaceholder)
	{
		return;
	}
	
	var getLocationInit = function() {
		new Request({
			url: baseurl + '_general/getLocation.php',
			data: $('register'),
			onComplete: function(response) {
				locationPlaceholder.set('html', response);
			}
		}).send();
	};

	//First time
	getLocationInit();
	
	//On blur (update)
	var numberInput = $('number2');
	numberInput.addEvent('blur', function(e) {
		e.preventDefault();
		getLocationInit();
	});
}

DSapp.otherAddress = function() {
	var otherAddressA = $('otherAddressA');
	
	if(!otherAddressA)
		return;
	
	var otherAddress = $('otherAddress');
	
	otherAddressA.addEvent('click', function(e){
		e.stop();
		if(otherAddress.getStyle('height').toInt() == 0)
		{
			otherAddress.setStyle('height', 'auto');
		}
		else
		{
			otherAddress.setStyle('height', 0);
		}
	});
};

DSapp.countryCheck = function() {
	var countryCheck = $('countryCheck');
	
	if(!countryCheck)
		return;
	
	var streetContainer = $('streetContainer');
		
	countryCheck.addEvent('change', function(){
		console.log(countryCheck.options.selectedIndex);
		if(countryCheck.options.selectedIndex == 1)
		{
			streetContainer.setStyle('height', 'auto');
		}
		else
		{
			streetContainer.setStyle('height', 0);
		}
	});
};

DSapp.countryCheck2 = function() {
	var countryCheck = $('countryCheck2');
	
	if(!countryCheck)
		return;
	
	var streetContainer = $('streetContainer2');
		
	countryCheck.addEvent('change', function(){
		console.log(countryCheck.options.selectedIndex);
		if(countryCheck.options.selectedIndex == 1)
		{
			streetContainer.setStyle('height', 'auto');
		}
		else
		{
			streetContainer.setStyle('height', 0);
		}
	});
};