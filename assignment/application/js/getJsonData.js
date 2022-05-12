// JavaScript Document
$(document).ready(function(){

    //AJAX service request to get the main text data from the json data store
    $.getJSON('./model/data.json', function(jsonObj) {
       console.log(jsonObj);
       //Get the home page main text data
       $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
       $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
       $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');
       
        //Get the home page 1st column text data
       $('#title_one').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
       $('#subTitle_one').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
       $('#description_one').html('<p>' + jsonObj.pageTextData[1].description + '</p>');	
       
       //Get the home page 2nd column text data
       $('#title_two').html('<h2>' + jsonObj.pageTextData[2].title + '<h2>');
       $('#subTitle_two').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
       $('#description_two').html('<p>' + jsonObj.pageTextData[2].description + '</p>');	
       
       //Get the home page 3rd column text data
       $('#title_three').html('<h2>' + jsonObj.pageTextData[3].title + '<h2>');
       $('#subTitle_three').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
       $('#description_three').html('<p>' + jsonObj.pageTextData[3].description + '</p>');	
       
       //Get the fanta main text data
       $('#x3dModelTitle_fanta').html('<h2>' + jsonObj.pageTextData[5].x3dModelTitle + '<h2>');
       $('#x3dCreationMethod_fanta').html('<p>' + jsonObj.pageTextData[5].x3dCreationMethod + '<p>');
       $('#title_fanta').html('<h2>' + jsonObj.pageTextData[5].title + '<h2>');
       $('#subTitle_fanta').html('<h3>' + jsonObj.pageTextData[5].subTitle + '</h3>');
       $('#description_fanta').html('<p>' + jsonObj.pageTextData[5].description + '</p>');	
     
       //Get the coke main text data
       $('#x3dModelTitle_coke').html('<h2>' + jsonObj.pageTextData[4].x3dModelTitle + '<h2>');
       $('#x3dCreationMethod_coke').html('<p>' + jsonObj.pageTextData[4].x3dCreationMethod + '<p>');
       $('#title_coke').html('<h2>' + jsonObj.pageTextData[4].title + '<h2>');
       $('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[4].subTitle + '</h3>');
       $('#description_coke').html('<p>' + jsonObj.pageTextData[4].description + '</p>');	

       //Get the pepper main text data
       $('#x3dModelTitle_pepper').html('<h2>' + jsonObj.pageTextData[6].x3dModelTitle + '<h2>');
       $('#x3dCreationMethod_pepper').html('<p>' + jsonObj.pageTextData[6].x3dCreationMethod + '<p>');
        $('#title_pepper').html('<h2>' + jsonObj.pageTextData[6].title + '<h2>');
       $('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[6].subTitle + '</h3>');
       $('#description_pepper').html('<p>' + jsonObj.pageTextData[6].description + '</p>');
       
       //Get the gallery contents data
       $('.title_gallery').html('<h2>' + jsonObj.pageTextData[7].galleryTitle + '<h2>');
       $('.description_gallery').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

       //Get camera contents data
       $('.x3dCameraTitle').html('<h2>' + jsonObj.pageTextData[8].CameraTitle + '<h2>');
       $('.x3dCameraSubtitle').html('<p>' + jsonObj.pageTextData[8].CameraSubtitle + '<p');

    });
});