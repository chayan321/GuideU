function getID(elem) {
	var option = elem.getAttribute("id");
	alert(option);
	document.getElementById("active_option").value = option;
}

function ExpandCollege(){
	document.getElementById("sem-list").style.display="block";


}
