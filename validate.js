function emailchk()
{
var x=document.form2.email.value
if (x.indexOf("@")==-1)
{
	alert("It seems you entered an invalid email address.")
	document.form2.email.focus()
}
}
