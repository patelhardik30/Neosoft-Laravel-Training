$(document).ready(function(){
    $("#user_first_name").change(function(){
        check_firstname();
    });

    $("#user_last_name").change(function(){
		check_lastname();

    });
    
    function check_firstname(){
		var flength = $("#user_first_name").val().length;
		if(flength < 2 || flength > 20){
			alert("Please fill  Proper FirstName");
		}
	}
	function check_lastname(){
		var llength = $("#user_last_name").val().length;
		if(llength <2 || llength >20){
			alert("Please fill  Proper LastName");
		}

	}
});