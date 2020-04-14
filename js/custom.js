function fun(){
var vname = document.getElementById("id11").value;
 if (vname.length>20 || vname.length<4 || vname == Null ) {
	document.getElementById("nameval").innerHTML = "<span class='text-danger'>Name must < 20 and >4 Characters</span>";
		   }
 
var vemail = document.getElementById("id22").value;
 if ( vemail.length<4 || vemail == null ) {
	document.getElementById("emailval").innerHTML = "<span class='text-danger'>Enter a Correct Email Address</span>";
		   }

var vmbno = document.getElementById("id33").value;
 if ( vmbno.length>10 || vmbno.length<10 || vmbno.length==0) {
	document.getElementById("mobval").innerHTML = "<span class='text-danger'>Enter 10 digit Mobile Number</span>";
		   }
  var vclgname = document.getElementById("id44").value;
 if (vclgname.length == 0 ) {
	document.getElementById("clgval").innerHTML = "<span class='text-danger'>Enter A College Name</span>";
		   }
	var vfile = document.getElementById("id55").value;
var vdescr = document.getElementById("id66").value;

}