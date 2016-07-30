function Field(c)
{
	var ctx = c.getContext("2d");
	c.addEventListener("mousedown", click, false);
	this.people = new Array();
	this.people[0] = new Person("images/girl.png", "girl", 0, 0, 100, 200); 
	this.people[1] = new Person("images/boy.png", "boy", 30, 130, 100, 200); 
	this.people[2] = new Person("images/mother.png", "mother", 0, 270, 150, 200); 
	this.people[3] = new Person("images/father.jpg", "father", 0, 150, 50, 50); 
	this.raftImg = new Image();
	this.raftImg.src = "images/raft.png";
	this.raftImg.addEventListener("load", function() {
			ctx.drawImage(this.raftImg,160,50);
		}, false);
		(this.people[0].img).addEventListener("load", function() {
			ctx.drawImage(this.people[0].img,this.people[0].positionX, this.people[0].positionY);
		}, false);
		(this.people[1].img).addEventListener("load", function() {
			ctx.drawImage(this.people[1].img,this.people[1].positionX, this.people[1].positionY);
		}, false);
		(this.people[2].img).addEventListener("load", function() {
			ctx.drawImage(this.people[2].img,this.people[2].positionX, this.people[2].positionY);
		}, false);
	
	function click(event)
	{
		canvas_X = event.pageX;
		canvas_Y = event.pageY;
		for(var i=0;i<3;i++)
		{
			if(people[i].isIn(canvas_X, canvas_Y))
			{
				people[i].changePosition(160, 50);
				this.drawAll();
				ctx.drawImage(people[i].img,people[i].positionX, people[i].positionY);
			}
		}
		alert("X=" + canvas_X + " Y= " + canvas_Y);
	}
}
Field.prototype.drawAll = function()
{
	this.ctx.fillStyle = "#fff";
	this.ctx.fillRect(0,0,500,900);
	//raft.addEventListener("load", function() {
			this.ctx.drawImage(raft,160, 50);
		//}, false);
	for(var i=0; i<3; i++)
	{
		this.ctx.drawImage(people[i].img,people[i].positionX, people[i].positionY);
	}
}