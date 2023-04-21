window.addEventListener("scroll", function(){
    var navb = document.getElementById("navb");
    if(window.pageYOffset > 0){
        
      navb.style.height = "13vh";
    }
    else{
        navb.style.height = "14vh";
    }

  });