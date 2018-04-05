var xyz = document.getElementById("loginmodel");
var but = Document.getElementsByClassName("btnignup");
var inline =Document.getElementsByClassName("close")[0];
but.onclick = function()
{
	xyz.style.display="block";

}
inline.onclick=function()
{
	xyz.style.display="none";
}
window.onclick=function(event)
{
	if(event.target == xyz)
	{
		xyz.style.display="none";
	}
}