$(document).ready(function(){
	
	$("#state").on('change',function(){
		if ($(this).val() != 0) {
			$("#city-form-group").show();
		}
		else {
			$("#city-form-group").hide();
			erasePriceEstimate();
		}		
	});
	
	$(".onChangeGetPriceEstimate").on('change',function(){
		erasePriceEstimate();
		getAjaxPriceEstimate();
	});
	
	$("#continue").on('click',function(){
		$("#form_continue").show();
		getAjaxPriceEstimate();
	});
	
	$("#city").autocomplete({
		source: function( request, response ) { $.getJSON(
			"ajax/autocompleteCity", 
			{ city: request.term, state: $('#state option:selected').text()},
			response
		)},
		minLength: 2,
		select: function( event, ui ) {
			$( "#city_id" ).val(ui.item.id );
			getAjaxPriceEstimate();
		}
	});
	
	sendAjaxBookingFormData = function() {
		var data=$("#booking-form").serialize();
		
		$.ajax({
			type: 'POST',
			url: 'ajax/index',
			data: data,
			success:function(data){
				alert(data); 
			},
			error: function(data) { // if error occured
				alert("Error occured.please try again");
			},
			dataType:'html'
		});
		
		return false;
	};
	
	getAjaxPriceEstimate = function() {
		var data=$("#booking-form").serialize();
		$.ajax({
			type: 'GET',
			url: 'ajax/estimate',
			data: data,
			success:function(data){
				$("#priceEstimateContainer").show();
				if (parseInt(data) > 0) {
					$("#price_estimate").html(data + "$");
				}
				else {
					$("#price_estimate").html(data);
				}
			},
			error: function(data) { // if error occured
				erasePriceEstimate();
			},
			dataType:'html'
		});
	};
	
	erasePriceEstimate = function() {
		$("#priceEstimateContainer").hide();
		$("#price_estimate").html('');
	}
});