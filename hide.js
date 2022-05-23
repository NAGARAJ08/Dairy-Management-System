// showHide.js
//   Illustrates visibility control of elements
     
// The event handler function to toggle the visibility 
//    of the images of Saturn 

function hidetext() {
  dom = document.getElementById("receipt").style;  

// Flip the visibility adjective to whatever it is not now 

 if (dom.visibility == "vissible")
   dom.visibility = "hidden";
 else
   dom.visibility = "visible";
}