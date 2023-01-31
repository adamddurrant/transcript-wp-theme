// Create a new, plain <span> element
var sp1 = document.createElement("span");

// Get a reference to the element, before we want to insert the element
var sp2 = document.getElementById("childElement");
// Get a reference to the parent element
var parentDiv = sp2.parentNode;

// Insert the new element into the DOM before sp2
parentDiv.insertBefore(sp1, sp2);
