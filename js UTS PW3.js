var clicks = 1;

function textchange(){
  var message = "";
  if(clicks==0){
		title = "Why Quora?";
		message = title.bold() +
		"<br/><br/>1. There is absolutely no shortage of topics on Quora. "+
		"You can explore questions and answers based on your selected "+
		"topics and see them in your feed. There are topics like science, "+
		"math, philosophy, movies, photography, mobile apps, baking, "+
		"creative writing and lots more.<br/><br/> "+
		"2. Quora is interesting, fun and engaging. It is a knowledge hub "+
		"where people share their thoughts, insights as well as secrets! "+
		"That’s right - controversial questions get some really controversial "+
		"answers as well. That’s not all – even famous people have verified "+
		"accounts on Quora. Barack Obama, Ashton Kutcher, Irrfan Khan all "+
		"have answered questions on this platform. It’s a treat to read "+
		"experiences of people from different walks of life."; 
		clicks=1;
		}
  else{
		title = "Why NOT Quora?<br/><br/>";
		smallmessage =
		"If you dig a little deeper and find questions related to "+
		"spirituality, suicide and more vague stuff, the answers are so preachy "+
		"and cringe worthy as to make one gag.";
		message = title.bold() + smallmessage.fontsize(5);
		clicks=0;
		}
  document.getElementById("paragraph").innerHTML = message;
}