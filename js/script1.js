function fun1()
{
	var a = document.getElementById("id4").value;
	var b = document.getElementById("id5").value;
	if(id4.value != 'null' && id5.value != 'null')
	{
	alert("login successfully");
	return true;
	}  
	else
	{
		alert("error");
		return false;
	}

}
function fun2()
{
	var a = document.getElementById("id1").value;
	var b = document.getElementById("id2").value;
	var c = document.getElementById("id3").value;
	if(id1.value != "null" && id2.value != "null" && id3.value != "null")
	{
		alert("session created");
		return true;
	}
	else{
	alert("error");
	return false;
	}
}