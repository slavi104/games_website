
//Class Object for all the Image objects in the game
function GameImage(imgSrc, name, width, height, startPositionX, startPositionY, endPositionX, endPositionY)
{
	this.imgSrc = imgSrc;
	this.name = name;
	this.positionX = startPositionX;
	this.positionY = startPositionY;
	this.passedTheRiver = false;
	this.img = new Image();
	this.img.src = this.imgSrc;
	this.width = width;
	this.height = height;
	this.startPositionX = startPositionX;
	this.startPositionY = startPositionY;
	this.endPositionX = endPositionX;
	this.endPositionY = endPositionY;
}
//Checks if the object is on the other side of the river
GameImage.prototype.isBeyond = function(middleOfTheField)
{
	if(this.positionX >= middleOfTheField)
	{
		return true;
	}
	return false;
};
GameImage.prototype.isPressed = function(positionX, positionY)
{
	if(positionX >= this.positionX && positionX <= this.positionX + this.width)
	{
		if(positionY >= this.positionY && positionY <= this.positionY + this.height)
		{
			return true;
		}
	}
	return false;
};
GameImage.prototype.changePosition = function(positionX, positionY)
{
	this.positionX = positionX;
	this.positionY = positionY;
};

//Class for people objects - extends the GameImage Class
function Person(imgSrc, name, width, height, startPositionX, startPositionY, endPositionX, endPositionY)
{
	GameImage.call(this, imgSrc, name, width, height, startPositionX, startPositionY, endPositionX, endPositionY);
}
Person.prototype = new GameImage("", " ", 0, 0, 0, 0, 0, 0);
Person.prototype.getOnRaft = function(raftPositionX, raftPositionY, peopleOnRaft)
{
	var plus = 0;
	if(this.height < 150)
	{
		plus = 150 - this.height;
	}
	if(peopleOnRaft == 0)
	{
		this.positionX = raftPositionX + 21;
		this.positionY = raftPositionY + plus;
	}
	else if(peopleOnRaft == 1)
	{
		this.positionX = raftPositionX + 101;
		this.positionY = raftPositionY + plus;
	}
	else
	{
		alert("Raft can't sail with more than 2 people on it!");
	}
};
Person.prototype.canGo = function(people, middle, raft)
{
	var result = true;
	var count = 0;
	var someoneElse = false;
	if(this.name == 'honey' || this.name == 'carrot')
	{
		for(var i=0; i<8; i++)
		{
			if(raft.isOnRaft(people[i]) && people[i] != this)
			{
				someoneElse = true;
			}
			if(raft.isOnRaft(people[i]) && people[i] != this && (people[i].name == 'honey' || people[i].name=='carrot'))
			{
				return false;
				setInterval(function(){count++; showAnimation("There are no people/animals to drive the raft!", count);},1000);
				break;
			}
		}
		if(someoneElse == false)
		{
			setInterval(function(){count++; showAnimation("There are no people/animals to drive the raft!", count);},1000);
			return false;
		}
	}
	switch(this.name)
	{
		case 'honey': {
			console.log("honey");
			//if honey and pooh are on the raft together
			if(raft.isOnRaft(people[4]) == true)
			{alert("Pooh eats the honey!");return false;}
			
			//if honey and backson are on different lands AND christopher is not on the same land as backson AND christopher is not on the raft
			if(people[6].isBeyond(middle) == !this.isBeyond(middle) && people[7].isBeyond(middle) == this.isBeyond(middle) && raft.isOnRaft(people[7]) == false)
			{alert("Backson eats the honey!");return false;}
			
			//If honey and pooh are on different lands AND honey and rabbit are on same land AND rabbit is not on the raft
			if((people[4].isBeyond(middle) == !this.isBeyond(middle)) && (people[5].isBeyond(middle) == this.isBeyond(middle)) &&  raft.isOnRaft(people[5])==false)
			{alert("Pooh eats the honey!");return false;}
			
			break; 
		}
		case 'carrot': {
			console.log("carrot");
			//if carrot and rabbit are on the raft together
			if(raft.isOnRaft(people[5]) == true)
			{alert("Rabbit eats the carrot!");return false;}
			
			//if carrot and backson are on different lands AND christopher is not on the same land as backson AND christopher is not on the raft
			if(people[6].isBeyond(middle) == !this.isBeyond(middle) && people[7].isBeyond(middle) == this.isBeyond(middle) && raft.isOnRaft(people[7]) == false)
			{alert("Backson eats the carrot!");return false;}
			
			//If carrot and rabbit are on different lands AND carrot and pooh are on same land AND pooh is not on the raft
			if((people[5].isBeyond(middle) == !this.isBeyond(middle)) && (people[4].isBeyond(middle) == this.isBeyond(middle)) &&  raft.isOnRaft(people[4])==false)
			{alert("Rabbit eats the carrot!");return false;}
			
			break;
		}
		case 'rabbit': {
			console.log("rabbit");
			//if rabbit and backson are on different lands AND christopher is not on the same land as backson AND christopher is not on the raft
			if(people[6].isBeyond(middle) == !this.isBeyond(middle) && people[7].isBeyond(middle) == this.isBeyond(middle) && raft.isOnRaft(people[7]) == false)
			{alert("Backson eats the rabbit!");return false;}
			
			//If honey and rabbit are on the same land AND pooh is on the same land too AND honey is not on the raft AND pooh is not on raft
			if((people[0].isBeyond(middle) == this.isBeyond(middle)) && (people[4].isBeyond(middle) == this.isBeyond(middle)) &&  
			raft.isOnRaft(people[0])==false && raft.isOnRaft(people[4])==false)
			{alert("Pooh eats the honey!");return false;}
			
			//If honey and rabbit are on the same land AND pooh is on the same land too AND honey is not on the raft AND pooh is not on raft
			if((people[1].isBeyond(middle) == this.isBeyond(middle)) && (people[4].isBeyond(middle) == this.isBeyond(middle)) &&  
			raft.isOnRaft(people[1])==false && raft.isOnRaft(people[4])==false)
			{alert("Pooh eats the honey!");return false;}
			
			//If carrot and rabbit are on different lands AND pooh is on the same land with rabbit AND pooh is not on raft
			if((people[2].isBeyond(middle) == !this.isBeyond(middle)) && (people[4].isBeyond(middle) == this.isBeyond(middle)) 
			&& raft.isOnRaft(people[4])==false)
			{alert("Rabbit eats the carrot!"); return false;}
			
			//If carrot and rabbit are on different lands AND pooh is on the same land with rabbit AND pooh is not on raft
			if((people[3].isBeyond(middle) == !this.isBeyond(middle)) && (people[4].isBeyond(middle) == this.isBeyond(middle))
			&& raft.isOnRaft(people[4])==false)
			{ alert("Rabbit eats the carrot!"); return false; }
			
			break;
		}
		case 'pooh': {
			console.log("pooh");
			//if pooh and backson are on different lands AND christopher is not on the same land as backson AND christopher is not on the raft
			if(people[6].isBeyond(middle) == !this.isBeyond(middle) && people[7].isBeyond(middle) == this.isBeyond(middle) && raft.isOnRaft(people[7]) == false)
			{alert("Backson eats the Pooh!"); return false;}
			
			//If carrot and pooh are on the same land AND rabbit is on the same land too AND carrot is not on the raft AND rabbit is not on the raft
			if((people[2].isBeyond(middle) == this.isBeyond(middle)) && (people[5].isBeyond(middle) == this.isBeyond(middle)) &&  
			raft.isOnRaft(people[2])==false && raft.isOnRaft(people[5])==false)
			{alert("Rabbit eats the carrot!");return false;}
			
			//If carrot and pooh are on the same land AND rabbit is on the same land too AND carrot is not on the raft AND rabbit is not on the raft
			if((people[3].isBeyond(middle) == this.isBeyond(middle)) && (people[5].isBeyond(middle) == this.isBeyond(middle)) &&  
			raft.isOnRaft(people[3])==false && raft.isOnRaft(people[5])==false)
			{alert("Rabbit eats the carrot!");return false;}
			
			//If honey and pooh are on different lands AND rabbit is on the same land with pooh AND rabbit is not on the raft
			if((people[0].isBeyond(middle) == !this.isBeyond(middle)) && (people[5].isBeyond(middle) == this.isBeyond(middle)) &&  
			raft.isOnRaft(people[5])==false)
			{alert("Pooh eats the honey!");return false;}
			
			//If honey and pooh are on different lands AND rabbit is on the same land with pooh AND rabbit is not on the raft
			if((people[1].isBeyond(middle) == !this.isBeyond(middle)) && (people[5].isBeyond(middle) == this.isBeyond(middle)) &&  
			raft.isOnRaft(people[5])==false)
			{alert("Pooh eats the honey!");return false;}
			
			break;
		}
		case 'backson': {
			console.log("backson");
			//If backson and one of the others are on different lands AND christopher is not on the other land AND christopher is not on the raft
			if(((people[0].isBeyond(middle) == !this.isBeyond(middle)) || (people[1].isBeyond(middle) == !this.isBeyond(middle)) ||  
			(people[2].isBeyond(middle) == !this.isBeyond(middle)) || (people[3].isBeyond(middle) == !this.isBeyond(middle)) ||
			(people[4].isBeyond(middle) == !this.isBeyond(middle)) || (people[5].isBeyond(middle) == !this.isBeyond(middle))) && 
			((people[7].isBeyond(middle) == this.isBeyond(middle)) && raft.isOnRaft(people[7]) == false))
			{alert("Backson eats something on the other side!");return false;}
			
			//If backson is on the raft with somebody that is not christopher
			if((raft.isOnRaft(people[0]) == true || raft.isOnRaft(people[1]) == true || 
			raft.isOnRaft(people[2]) == true || raft.isOnRaft(people[3]) == true || 
			raft.isOnRaft(people[4]) == true || raft.isOnRaft(people[5]) == true))
			{alert("Backson eats something that is next to him!");return false;}
			
			//If backson is on the raft alone
			if(raft.isOnRaft(people[7]) == false)
			{alert("Backson can't sail alone!");return false;}
			
			break;
			
		}
		case 'christopher': {
			console.log("christopher");
			//If backson stays in the same land with something!
			if((((people[0].isBeyond(middle) == this.isBeyond(middle)) && raft.isOnRaft(people[0]) == false) || 
			((people[1].isBeyond(middle) == this.isBeyond(middle))&& raft.isOnRaft(people[1]) == false) ||  
			((people[2].isBeyond(middle) == this.isBeyond(middle))&& raft.isOnRaft(people[1]) == false) || 
			((people[3].isBeyond(middle) == this.isBeyond(middle))&& raft.isOnRaft(people[1]) == false) ||
			((people[4].isBeyond(middle) == this.isBeyond(middle))&& raft.isOnRaft(people[1]) == false) || 
			((people[5].isBeyond(middle) == this.isBeyond(middle)) && raft.isOnRaft(people[1]) == false)) && 
			((people[6].isBeyond(middle) == this.isBeyond(middle)) && raft.isOnRaft(people[6]) == false))
			{alert("Backson eats somebody!");return false;}
			
			break;
		}
	}
	return result;
};


//Class for raft
function Raft(imgSrc, name, width, height, startPositionX, startPositionY, endPositionX, endPositionY)
{
	GameImage.call(this, imgSrc, name, width, height, startPositionX, startPositionY, endPositionX, endPositionY);
}
Raft.prototype = new GameImage("", " ", 0, 0, 0, 0, 0, 0);
//Checks if the given person is on the boat
Raft.prototype.isOnRaft = function(person)
{
	if(person.positionX >= this.positionX && person.positionX<= (this.positionX + 200) && person.positionY>=50 && person.positionY<=250)
	{
		return true;
	}
	return false;
};
//Checks how many people are on the raft/boat
Raft.prototype.peopleOnRaft = function(people)
{
	var count = 0;
	for(var i=0; i<8; i++)
	{
		if(raft.isOnRaft(people[i]))
		{
			count++;
		}
	}
	return count;
};