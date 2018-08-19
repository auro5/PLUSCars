
var pagetop,menu,ypos;
function vscroll(){
pagetop=document.getElementById('nav');
page=document.getElementById('logo');
page1=document.getElementById('navbar');
ypos=window.pageYOffset;
if(ypos > 50){
    pagetop.style.height="70px";
	pagetop.style.width="100%";
    pagetop.style.paddingTop="0px";
    // pagetop.style.paddingLeft="20px";
    pagetop.style.fontSize = "15px";
	page1.style.marginTop="10px";
	page1.style.textAlign="center";
    pagetop.style.textAlign="left"; 
    pagetop.style.WebkitTransition="all 0.3s"; 
	
    page.style.width="12%";
	page.style.height="60%";
    page.style.bottom="100px";

    document.getElementById("login-btn").className = "login";
}
else
{
    pagetop.style.height="90px";
    pagetop.style.paddingTop="23px";
    pagetop.style.fontSize = "22px";
    pagetop.style.WebkitTransition="all 0.3s";
    pagetop.style.textAlign="left";
	page.style.width="15%";
	page.style.height="70%";
	page1.style.marginTop="-10px";
    document.getElementById("login-btn").className = "login login-full-navbar";
	
}
}
window.addEventListener("scroll",vscroll);