jQuery(document).ready(function($) {

    //check if local storage variable is available
    var lS = localStorage.getItem("smrtctrlrvar");
    if (lS !== null) { //if passkey is existing get associated url then redirect
       
        $.ajax({
				type: "POST",
				url: base_url + "process/get_assigned_url",
				data: { pckey : lS },
				success: function(response) {
				    var data = JSON.parse(response);
					window.location.replace(data.pcurl);
				}
			});
    }
        
    $('.register').on('submit', '.frmRegisterPC', function(e) {
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		
		$.rloader();
			$.ajax({
				method: "POST",
				url: base_url + "process/save_registration",
				contentType: false,
				cache: false,
				processData: false,
				data: formData,
				success: function(response) {
				    
					var data = JSON.parse(response);
					
					if(data.status) {
					    
					    localStorage.setItem("smrtctrlrvar", data.passkey);
					    
						$.ralert("Success", data.response, 'success', "Close", function() { window.location.replace(data.pcurl); });
					} else {
						$.ralert("Error", data.response, 'error');
					}
					$.rloader.hide();
				}
			});

		
	});



});