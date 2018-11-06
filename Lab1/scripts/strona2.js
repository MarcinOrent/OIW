var newDiv = null;
function addElement(){
	newDiv = document.createElement("div");
	newDiv.setAttribute("id","div1");
	newDiv.style.width="100px";
	newDiv.style.height="100px";
	newDiv.style.backgroundColor="blue";
	newDiv.style.border="2px solid black";
	document.body.appendChild(newDiv);
}