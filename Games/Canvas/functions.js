//initialise
	var c = document.getElementById("canvas");
	var ctx = c.getContext("2d");
	c.addEventListener("mousedown", doMouseDown, false);
	var raftIsBeyond = false;
	var borderline = 450;
	var pixelsToMove = 206;
	var raft = new Raft("images/raft.png", "raft", 200, 100, 260, 150, 460, 50);
	var people = new Array();
	people[0] = new Person("images/honey1.png", "honey", 50, 50, 80, 50, 760, 50); 
	people[1] = new Person("images/honey2.png", "honey", 50, 50, 130, 90, 700, 10); 
	people[2] = new Person("images/carrot1.png", "carrot", 50, 50, 60, 230, 760, 230); 
	people[3] = new Person("images/carrot2.png", "carrot", 50, 50, 100, 240, 700, 240); 
	people[4] = new Person("images/pooh.png", "pooh", 80, 130, 0, 170, 830, 170); 
	people[5] = new Person("images/rabbit.png", "rabbit", 75, 140, 0, 0, 820, 0); 
	people[6] = new Person("images/backson.png", "backson", 200, 150, 80, 330, 750, 330); 
	people[7] = new Person("images/christopher.png", "christopher", 50, 150, 0, 310, 700, 310); 
	var go = new Image();
	var background = new Image();
	background.src = "images/background.png";
	go.src = "images/go.png";
	(raft.img).addEventListener("load", function() {
		ctx.drawImage(raft.img,raft.positionX, raft.positionY);
	}, false);
	go.addEventListener("load", function() {
		ctx.drawImage(go,raft.positionX + 50, raft.positionY + 170);
	}, false);
	
	(people[0].img).addEventListener("load", function() {
		ctx.drawImage(people[0].img,people[0].positionX, people[0].positionY);
	}, false);
	(people[1].img).addEventListener("load", function() {
		ctx.drawImage(people[1].img,people[1].positionX, people[1].positionY);
	}, false);
	(people[2].img).addEventListener("load", function() {
		ctx.drawImage(people[2].img,people[2].positionX, people[2].positionY);
	}, false);
	(people[3].img).addEventListener("load", function() {
		ctx.drawImage(people[3].img,people[3].positionX, people[3].positionY);
	}, false);
	(people[4].img).addEventListener("load", function() {
		ctx.drawImage(people[4].img,people[4].positionX, people[4].positionY);
	}, false);
	(people[5].img).addEventListener("load", function() {
		ctx.drawImage(people[5].img,people[5].positionX, people[5].positionY);
	}, false);
	(people[6].img).addEventListener("load", function() {
		ctx.drawImage(people[6].img,people[6].positionX, people[6].positionY);
	}, false);
	(people[7].img).addEventListener("load", function() {
		ctx.drawImage(people[7].img,people[7].positionX, people[7].positionY);
	}, false);
		
//handle click event
function doMouseDown(event)
{
	canvas_X = event.pageX;
	canvas_Y = event.pageY;
	for(var i=0;i<8;i++)
	{
		if(people[i].isPressed(canvas_X, canvas_Y))
		{
			if(raft.positionX == raft.endPositionX+6 && people[i].isBeyond(borderline))
			{
				if(raft.isOnRaft(people[i]))
				{
					people[i].changePosition(people[i].endPositionX, people[i].endPositionY);
					drawAll();
				}
				else
				{
					people[i].getOnRaft(raft.positionX, raft.positionY, raft.peopleOnRaft(people));
				}
			}
			else if(raft.positionX == raft.startPositionX && !people[i].isBeyond(borderline))
			{
				if(raft.isOnRaft(people[i]))
				{
					people[i].changePosition(people[i].startPositionX, people[i].startPositionY);
					drawAll();
				}
				else
				{
					people[i].getOnRaft(raft.positionX, raft.positionY, raft.peopleOnRaft(people));
				}
			}
			drawAll();
		}
	}
	
	//move the raft only if when button is pressed the raft is not moving!!
	if((buttonPressed(canvas_X, canvas_Y) && raft.positionX == raft.startPositionX) || (buttonPressed(canvas_X, canvas_Y) && raft.positionX == raft.endPositionX+6))
	{
		if(buttonPressed(canvas_X, canvas_Y) &&raft.peopleOnRaft(people)==0)
		{
			alert("Raft can't sail without any people!");
		}
		else
		{
			var canGo = true;
			for(var i=0;i<8;i++)
			{
				if(raft.isOnRaft(people[i]) && people[i].canGo(people, borderline, raft) == false)
				{
					canGo = false;
				}
			}
			if(canGo == true)
			{
				if(buttonPressed(canvas_X, canvas_Y) && !raft.isBeyond(borderline))
				{
					moveRaft(0);
				}
				else if(buttonPressed(canvas_X, canvas_Y) && raft.isBeyond(borderline))
				{
					moveRaft(pixelsToMove);
				}
			}
		}
	}
}

//checks if button "Go" is pressed
function buttonPressed(X,Y)
{
	if(X >= (raft.positionX + 50) && X<=(raft.positionX + 50 + 100) && Y>=(raft.positionY+170) && Y<=(raft.positionY+170 + 50))
	{	
		return true;
	}
	return false;
}

//Draws all elements on the canvas
function drawAll()
{
	ctx.clearRect(0,0,900,900); //clear Canvas
	//ctx.fillStyle = "#fff";
	//ctx.fillRect(0,0,500,900);
	ctx.drawImage(raft.img,raft.positionX, raft.positionY);
	ctx.drawImage(go,raft.positionX + 50, raft.positionY + 170);
	for(var i=0; i<8; i++)
	{
		ctx.drawImage(people[i].img,people[i].positionX, people[i].positionY);
	}
	ctx.font="20px Georgia";
	ctx.fillStyle = "#000";
	ctx.fillText(raft.peopleOnRaft(people) + "/2",raft.positionX + 160,raft.positionY + 200);
}

//moves the raft from one side to another
function moveRaft(num){
	if(num==0)
	{
		var move = setInterval(function(){
		draw(1); num++; 
		if(num==pixelsToMove)
		{
			clearInterval(move);
		}
		},1);
	}
	else
	{
		var move = setInterval(function(){
		draw(-1); num--; 
		if(num==0)
		{
			clearInterval(move);
		}
		},1);
	}
}

//moves the raft with one point
function draw(num) {
	var ctx = document.getElementById('canvas').getContext('2d');
	
	raft.positionX = raft.positionX+num;
	raft.positionY = raft.positionY;
	for(var i=0; i<8; i++)
	{
		if(raft.isOnRaft(people[i]))
		{
			people[i].positionX += num;
		}
	}
	ctx.restore();
	if(raft.positionX == raft.endPositionX && raftIsBeyond==false)
	{
		var ctx = document.getElementById('canvas').getContext('2d');
		drawAll();
		ctx.save();
		for(var i=0; i<8; i++)
		{
			if(raft.isOnRaft(people[i]))
			{
				people[i].positionX = people[i].endPositionX;
				people[i].positionY = people[i].endPositionY;
			}
		}
		ctx.restore();
		raftIsBeyond = true;
	}
	else if(raft.positionX == raft.startPositionX && raftIsBeyond==true)
	{
		var ctx = document.getElementById('canvas').getContext('2d');
		drawAll();
		ctx.save();
		for(var i=0; i<8; i++)
		{
			if(raft.isOnRaft(people[i]))
			{
				people[i].positionX = people[i].startPositionX;
				people[i].positionY = people[i].startPositionY;
			}
		}
		ctx.restore();
		raftIsBeyond = false;
	}
	drawAll();
	ctx.save();
}
var showAnimation = function(msg, count)
{
	if(count==2)
	{
		document.getElementById("animationBox").style.display="none";
		clearInterval(showAnimation);
	}
	if(count==1)
	{
	document.getElementById("animationBox").style.display="block";
	document.getElementById("animationBox").innerHTML=msg;
	}
	
}
