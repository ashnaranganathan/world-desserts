function changeImage(x) {
  var image=document.getElementById("myimg");
  if(x.id=="link_italian"){
	image.src = "./../images/italiandessertsbackground.jpg";
  }
  if(x.id=="link_mexican"){
	image.src = "./../images/mexicandessertsbackground.jpg";
  }
  if(x.id=="link_thai"){
	image.src = "./../images/thaidessertsbackground.jpg";
  }
  if(x.id=="link_indian"){
	image.src = "./../images/indiandessertsbackground.jpg";
  }
  if(x.id=="link_medi"){
	image.src = "./../images/greek-desserts.jpg";
  }

}
