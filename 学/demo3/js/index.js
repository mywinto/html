function myDangdangMove() {
	var lis = document.getElementsByClassName("navUl")[0].children;
	lis[0].style.color = "red";
	var ul=document.getElementById("mydangdangUl");
	ul.style.display="block";
	
	
}

function myDangdangOut(i) {
	var lis = document.getElementsByClassName("navUl")[0].children;
	lis[i].style.color = "gray";
	var ul=document.getElementById("mydangdangUl");
	ul.style.display="none";
}
function myDangdangulout() {
	var lis = document.getElementsByClassName("navUl")[0].children;
	lis[0].style.color = "red";
	var ul=document.getElementById("mydangdangUl");
	ul.style.display="none";
}