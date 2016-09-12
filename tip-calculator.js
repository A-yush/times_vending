//custom function
function calculate_tip(){
	//store input data
	var billamount=document.getElementById("billamount").value;
	var service_quality=document.getElementById("service_quality").value;
	var people=document.getElementById("people").value; 
	
	/*checking if input is correct*/
	if(billamount===""|| service_quality== 0){
	window.alert("please enter some values to get this running");
	return;
	}
	
	if(people==""|| people <=1){
	people= 1;
	document.getElementById("each").style.display="none";
	}else{
	document.getElementById("each").style.display="block";
	}
	
	//doing math
	var total= (billamount*service_quality)/people;
	total=Math.round(total*1000)/1000
	
	//display the tip
	document.getElementById("totaltip").style.display="block";
	document.getElementById("tip").innerHTML= total;
}
//hide the tip amount on load
    document.getElementById("totaltip").style.display= "none";
    document.getElementById("each").style.display= "none";

//clicking the button calls our custom function
    document.getElementById("calculate").onclick=function(){calculate_tip();};