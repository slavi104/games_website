
var earth = new Image();

function moveRaft(num){
  var move = setInterval(function(){
		draw(num); num++; 
		if(num==600)
		{
			clearInterval(move);
		}
	},1);
}

function draw(num) {
  var ctx = document.getElementById('canvas').getContext('2d');
  ctx.clearRect(0,0,900,900); // clear canvas
  ctx.save();
  ctx.translate(15+num,30);
  ctx.drawImage(earth,0,0);
  ctx.restore();
}