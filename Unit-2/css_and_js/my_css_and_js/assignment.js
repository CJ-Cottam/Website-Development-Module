
//This AJAX Jquery Function resets the text box and displays an error message. Also reloads the location to display the comments without actually clicking on the refresh button.
$(document).ready(function(){
  $('#comment_form').on('submit', function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
      method:"POST",
      url:"../includes/post-comments.php",
      data:form_data,
      dataType:"JSON",
      success:function(data)
      {

        if(data.error != '')
        {
          $('#comment_form')[0].reset();
          $('#comment_message').html(data.error);

        }
      }
    });
    //This part loads the comments specific to which the album the user is on 
    var x = document.getElementById("comment_id").value;
    console.log(x);
    $.ajax({
    url:"../includes/load-comments.php",
    method:"POST",
    data:{page_id : x},
    success:function(data)
    {
      $('#display_comment').html(data);
    }
    });
  });
});

$(document).ready(function(){
 //This part loads the comments specific to which the album the user is on 
 var x = document.getElementById("comment_id").value;
 console.log(x);
 $.ajax({
 url:"../includes/load-comments.php",
 method:"POST",
 data:{page_id : x},
 success:function(data)
 {
  $('#display_comment').html(data);
 }
});
});




//This AJAX function fetches the GDPR policy photo when a user has clicked on the button, on the cookie_policy page.
function loadImg()
{
  //Create a new XML Request and GET the photo from our photos directory
  xhr = new XMLHttpRequest();
  xhr.open("GET", "../photos/gdpr_policy.jpg"); 
  xhr.send(null);
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4){
        if ((xhr.status == 200) || (xhr.status == 0)){
            var image = document.getElementById("img-GDPR"); // We get the image id and set the source to be the photo. Updates without refreshing
            image.src = "../photos/gdpr_policy.jpg";
        }else{
            alert("Something misconfiguration : " + 
                "\nError Code : " + xhr.status + 
                "\nError Message : " + xhr.responseText);
        } 
    }
}; 
}

//Uploading section
//This section of code is used, when uploading the profile image.
//Displaying a Profile Image after first upload.
$(document).ready(function()
{
  $('#formAjax').on('submit', function()
  {
    var myForm = document.getElementById('formAjax');  //  Upload form's ID
    var myFile = document.getElementById('fileAjax');  // the file' ID
    var statusP = document.getElementById('status');
    imageUpload(myForm,myFile, statusP);
    //Updates the innerHTML in the status id to show that it's uploading
    statusP.innerHTML = 'Uploading...';
    // Get the files from the form input
    var files = myFile.files;

    // Create a FormData object
    var formData = new FormData();

    // Select only the first file from the input array
    var file = files[0]; 

    // Check that the file is a png type.
    if (!file.type.match('image.png')) {
      statusP.innerHTML = 'The image has to be a png filetype';
      return;
    }
    else if(file.size < 5000 ) //This IF statement checks that the file size is less than 5MB
    {
      statusP.innerHTML = 'The image is too big';
      return;
    }
    else
    {
      // Add the file to the AJAX request
      formData.append('fileAjax', file, file.name); //We then append the file, and the file name to the FormData.

      // Set up the request
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function()
      {
        if(xhr.readyState == 4 && xhr.status == 200)
        {
          statusP.innerHTML = 'Upload complete!'; //Display a message confirming the upload and triggering an ImageUp Function which uses AJAX to fetch the profile picture
        }
        else
        {
          statusP.innerHTML = 'Upload error. Try again.';
        }
      }
      // Open the connection
      xhr.open('POST', '../includes/uploads.php', true);
      xhr.send(formData);
      // Send the data.
    }
  });
});

//Updating image src
$(document).ready(function(){
  xhr = new XMLHttpRequest();
  var x = document.getElementById("profile_pic").getAttribute('value'); //The value being the id
  var image = document.getElementById("profile_pic"); // We get the image id and set the source to be the photo. Updates without refreshing
  var path = 'https://mayar.abertay.ac.uk/~1901441/cmp204/coursework2/photos/profile_images/'; // the directory of where the image is stored
  var full_Path = path.concat(x); // We then add both strings together
  xhr.open("GET", full_Path);  
  xhr.send(null);
  console.log(full_Path);
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4){
        if ((xhr.status == 200) || (xhr.status == 0)){
          
            document.getElementById("profile_pic").src = full_Path;  //Pass in the Full_path to a function, which then adds the src of the new image
            document.getElementById("status").innerHTML = "Note: Please refresh browser after every image upload for changes to appear!";  //a refresh will now display the image profile.

          }else{
            alert("Something misconfiguration : " + 
                "\nError Code : " + xhr.status + 
                "\nError Message : " + xhr.responseText);
        } 
       }
  };
});


//Cookie Popup settings
//Source = https://www.jqueryscript.net/other/GDPR-Cookie-Consent-Popup-Plugin.html
//Creator = ketanmistry
$(document).ready(function popup_settings()
{
  var options = {
    title: '&#x1F36A; Accept Cookies & Privacy Policy?',
    message: 'There are no cookies used on this site, but if there were this message could be customized to provide more details. Click the <strong>accept</strong> button below to see the optional callback in action. Press the more information link to see the cookie and GDPR policy!',
    delay: 600,
    //The cookies expire after a day.
    expires: 1,
    link: 'https://mayar.abertay.ac.uk/~1901441/cmp204/coursework2/main-pages/privacy-policy.php',
    onAccept: function(){
        var myPreferences = $.fn.ihavecookies.cookie();
        console.log('Yay! The following preferences were saved...');
        console.log(myPreferences);
    },
    uncheckBoxes: true,
    acceptBtnLabel: 'Accept Cookies',
    moreInfoLabel: 'More information',
    cookieTypesTitle: 'Select which cookies you want to accept',
    fixedCookieTypeLabel: 'Essential',
    fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
  }

  $(document).ready(function() {
    $('body').ihavecookies(options);

    if ($.fn.ihavecookies.preference('marketing') === true) {
        console.log('This should run because marketing is accepted.');
    }
    //This function calls to the ihavecookies function in the plugin js file to execute the javascript file.
    $('#ihavecookiesBtn').on('click', function(){
        $('body').ihavecookies(options, 'reinit');
    });
  });
});


//This section, We do a GET request of two txt files that contain a description of the GDPR and cookie policy and a
window.onload = prepareText();

function prepareText()
{ 
  loadText("cookie-des", "https://mayar.abertay.ac.uk/~1901441/cmp204/coursework2/css_and_js/my_css_and_js/cookie_des.txt");
  loadText("GDPR-des", "https://mayar.abertay.ac.uk/~1901441/cmp204/coursework2/css_and_js/my_css_and_js/GDPR_des.txt");

}
//This function GETS and adds the contains of the text file to the innerHtml
function loadText(id, file)
{
  
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      document.getElementById(id).innerHTML = this.responseText;
      
    }
  };
  xhr.open("GET",file,true);
  xhr.send();
}