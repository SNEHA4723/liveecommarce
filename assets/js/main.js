/*owl carousole*/

  $(document).ready(function(){
         $('#owl-carousel').owlCarousel({
            loop: true,
            margin: 50,
            autoplay:true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 4,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: true
                }
            }
        });
    });

   // lens
 
 


/*eye*/
const pwShowHide = document.querySelectorAll(".pw_hide");
 pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector(".eye");
    if (getPwInput.type === "eye") {
      getPwInput.type = "text";
      icon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
      getPwInput.type = "eye";
      icon.classList.replace("fa-eye", "fa-eye-slash");
    }
  });
});
/*header sticky*/
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


 $(document).ready(function(){
  $("#icacon").click(function(){
      $("#accound2").toggle();
  });
});



// function reply_click()
// {
//     var a = $(".wish_icon").attr("id");
//     alert(a);
// }

// function wishcolor()
// {
// document.getElementById("wishicon0").style.color="red";
// //alert('hi');
// }
    
