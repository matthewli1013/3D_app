// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#fantaDescription').hide();
	$('#cokeDescription').hide(); 
	$('#pepperDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#fantaDescription').hide();
		$('#cokeDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#fantaDescription').hide();
		$('#cokeDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#fantaDescription').show();
		$('#cokeDescription').hide(); 
		$('#pepperDescription').hide();
		$("#x3dModelTitle_fanta").show();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_pepper").hide();
		$("#x3dCreationMethod_fanta").show();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_pepper").hide(); 
	});
}


function fantaDescription() {
	$("button").click(function(){
		
		$("#fantaDescription").show();
        $("#cokeDescription").hide();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_fanta").show();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_fanta").show();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_pepper").hide();

    }); 
}

function cokeDescription() {
    $("button").click(function(){

        $("#fantaDescription").hide();
        $("#cokeDescription").show();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_pepper").hide();
    }); 
}

function pepperDescription() {
    $("button").click(function(){

        $("#fantaDescription").hide();
        $("#cokeDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_pepper").show();

		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_pepper").show();
    }); 
}
