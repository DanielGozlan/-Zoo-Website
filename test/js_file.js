

function openNav()
{
  var x = document.getElementById('collapsibleNavbar');
  if (x.className === 'collapse navbar-collapse')
  {
	x.className = 'navbar-collapse responsive';
  } 
  else 
  {
    x.className = 'collapse navbar-collapse';
  }
}

function cal(num,val)
{
	//kdffjd
	if(val=="day1" || val== "day2")
		window.alert( " מחיר הסיור" + " " + num*80 +" " + "שקלים " );
	if(val== "kids1" || val== "kids2" || val=="kids3")
		window.alert (" מחיר הסיור" + " " + num*60 +" " + "שקלים ");
	if(val== "night" )
		window.alert (" מחיר הסיור" + " " + num*90 +" " + "שקלים ");
	
}

var myIndex = 0;

function carousel() {
  var i;
  debugger;
  var x = document.getElementsByClassName('mySlides');
  for (i = 0; i < x.length; i++) {
    x[i].style.display = 'none';  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = 'block';  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}




