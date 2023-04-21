// set up text to print, each item in array is new line
var aText = new Array(
  "Notre association est fière de présenter ses merveilleux compagnons canins et félins à la recherche d'une nouvelle famille aimante. Nous sommes convaincus que chaque animal a une personnalité unique et nous nous engageons à trouver le foyer parfait pour chacun d'entre eux.", 
  "Nous invitons tous les amoureux des animaux à venir rencontrer nos adorables chiens et chats, et peut-être trouver leur nouveau meilleur ami à quatre pattes."
  );
  var iSpeed = 20; // time delay of print out
  var iIndex = 0; // start printing array at this posision
  var iArrLength = aText[0].length; // the length of the text array
  var iScrollAt = 20; // start scrolling up at this many lines
   
  var iTextPos = 0; // initialise text position
  var sContents = ''; // initialise contents variable
  var iRow; // initialise current row
   
  function typewriter()
  {
   sContents =  ' ';
   iRow = Math.max(0, iIndex-iScrollAt);
   var destination = document.getElementById("typedtext");
   
   while ( iRow < iIndex ) {
    sContents += aText[iRow++] + '<br />';
   }
   destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
   if ( iTextPos++ == iArrLength ) {
    iTextPos = 0;
    iIndex++;
    if ( iIndex != aText.length ) {
     iArrLength = aText[iIndex].length;
     setTimeout("typewriter()", 500);
    }
   } else {
    setTimeout("typewriter()", iSpeed);
   }
  }
  
  
  typewriter();