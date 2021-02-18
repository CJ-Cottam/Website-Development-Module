/*Adapted Timyboy12345's rating Jquery Plugin. As he originally had the script being called in the html file.
Now I have a created a function which loads his function by using the onload event from the div tag in the html files from album-pages*/
$(function rating_system()
{
  $("#Rating").rating({
    "half": true,
    "click": function (e) {
    console.log(e);
    $("#Rating").val(e.stars);
  }
})
});
  
 /*--Coming Soon Timer*/
 $(function coming_soon()
 {
   $("#timer").load(timer());
   function timer()
   {
     var countDownDate = new Date("Oct 28, 2020 18:00:00").getTime();
     var x = setInterval(function()
     {
       var now = new Date().getTime();
       var distance = countDownDate - now;
   
         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         var seconds = Math.floor((distance % (1000 * 60)) / (1000));
        //If the distance time is less than or equal to 0 then the timer elements are replaced with a choose a size select and a button to purchase the item
         if (distance <= 0) {
         clearInterval(x);
         //Gets the btn2 element and clones it to a new variable called cln
         var x = document.getElementById("btn2");
         var cln = x.cloneNode(true);
         //Gets the elements/options of the select tag and clones it to a new variables as before with the btn2
         var q = document.getElementById("sizes_list");
         var cln2 = q.cloneNode(true);
         //I created a text node for the sizes then replaces the elements in the id's below
         var text = document.createTextNode("Choose a Size ");
         document.getElementById("counter").replaceWith(cln);
         document.getElementById("size_hidden").replaceWith(text,cln2);
         }
         else{
           document.getElementById("day").innerHTML = days;
           document.getElementById("hour").innerHTML = hours;
           document.getElementById("minute").innerHTML = minutes;
           document.getElementById("second").innerHTML = seconds;
         }
       })
      }
 });

//This is used in the about_us.html, where the user clicks a button to show more text or hide them
function showMore()
{
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if(dots.style.display === "none")
  {
    dots.style.display = "inline";
    btnText.innerHTML = "Read More"
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read Less"
    moreText.style.display = "inline";
  }
}

//Concert Tickets Purchased
$(document).ready(function(){
  $('button.btn_concert').click(function(){
    var $this = $(this);
    $this.toggleClass('btn_concert');
    if($this.hasClass('btn_concert')){
      $this.text('Purchase Tickets');			
    } else {
      $this.text('Purchased');
    }
  })
});
//When the user hovers over any nav-item the background colour is changed to gold and a black border is placed then I change the colour of the text to black
$(document).ready(function(){
  $("a.nav-link").hover(function(){
    $(this).css("background-color", "gold")
    $(this).css("border", "3px solid black")
    $(this).css("color", "black");
    }, function(){ //This then reverts the changes back
    $(this).css("background-color", "revert");
    $(this).css("border", "1px solid white")
    $(this).css("color", "#66fcf1");
  });
});

$(document).ready(function(){
  $("div.aside-content h3").hover(function(){
    $(this).css("background-color", "gold")
    $(this).css("border", "3px solid black")
    $(this).css("color", "black");
    }, function(){ //This then reverts the changes back
    $(this).css("background-color", "revert");
    $(this).css("border", "2px solid aqua")
    $(this).css("color", "#66fcf1");
  });
});

/*Inserts an image into the navbar, in turn I'm using jQuery in conjunction with the DOM to append an image*/
$(document).ready(function(){
  var img_src = '../photos/queen_photos/queen-navbar.png';
  var image = new Image();
  image.src = img_src;
  document.getElementById('navbar-brand').appendChild(image);
});

/*This function is used to setup the details of the cookie-popup plugin*/
$(document).ready(function popup_settings()
{
  var options = {
    title: '&#x1F36A; Accept Cookies & Privacy Policy?',
    message: 'There are no cookies used on this site, but if there were this message could be customised to provide more details. Click the <strong>accept</strong> button below to see the optional callback in action...',
    delay: 600,
    //The cookies expire after a day.
    expires: 1,
    link: 'cookie_policy.html',
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