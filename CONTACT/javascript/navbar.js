window.addEventListener("scroll", function(){
    var navb = document.getElementById("navb");
    if(window.pageYOffset > 0){
        
      navb.style.height = "13%";
    }
    else{
        navb.style.height = "15%";
    }
  
  });