//<![CDATA[
    jQuery(document).ready(function() 
    {
    	function updateClock()
		{
			var currentTime = new Date ( );
			var currentHours = currentTime.getHours ( );
			var currentMinutes = currentTime.getMinutes ( );
			currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
			var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
			currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
			currentHours = ( currentHours == 0 ) ? 12 : currentHours;
			var currentTimeString = currentHours + ":" + currentMinutes + " " + timeOfDay;
			document.getElementById("clock").firstChild.nodeValue = currentTimeString;
		};
		updateClock();
		setInterval(updateClock, 10000);
    	$('.contentSection').css('min-height', $(window).height());
    	$('[data-toggle=offcanvas]').click(function()
    	{
    		$('.row-offcanvas').toggleClass('active');
  		});
  		$('#academicToggleBottom').click(function()
  		{
			 $('#myTabs a[href="#Academic"]').tab('show');
  		});
  		$('#FinancialToggleBottom').click(function()
  		{
			 $('#myTabs a[href="#Financial"]').tab('show');
  		});
    });
//]]>