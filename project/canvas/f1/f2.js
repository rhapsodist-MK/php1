var canvas = document.querySelector('canvas');

canvas.width = window.innerWidth; // canvas창의 가로 크기 지정 // innerWidth : 전체 창 가로 크기
canvas.height = window.innerHeight; // canvas창의 세로 크기 지정 // innerHeight : 전체 창 세로 크기

var c = canvas.getContext('2d');	// 2d의 형식들을 사용가능
/*
c.fillStyle  = 'rgba(255, 0, 0, 0.5)'; //색상지정
c.fillRect(100, 100, 100, 100); //(시작위치 x, 시작위치 y, width, height)
c.fillStyle = 'rgba(0,0,255,0.5)';
c.fillRect(400, 100, 100, 100);
c.fillStyle = 'rgba(0,255,0,0.5)';
c.fillRect(300, 300, 100, 100);

//Line
c.beginPath();	//시작하겠다! 선언
c.moveTo(50,300); // (x,y) 시작할 지점
c.lineTo(300, 100);	//(x,y) 어디로 보내겠다!
c.lineTo(400, 300);
c.strokeStyle = '#fa34a3'; //색상 지정
c.stroke();	//그리겠다!
*/

/*//Arc / Circle
c.beginPath();
c.arc(300, 300, 30, 0, Math.PI * 2, false); //(x, y, 반지름, )
c.strokeStyle = 'blue';
c.stroke();*/


/*for(var i = 0; i < 100; i++){
	var x = Math.random() * window.innerWidth;
	var y = Math.random() * window.innerHeight;
	var r = Math.random() * 255;
	var g = Math.random() * 255;
	var b = Math.random() * 255;
	c.beginPath();
	c.arc(x , y, 30, 0, Math.PI * 2, false); //(x, y, 반지름, )
	c.strokeStyle = 'rgb(' + r + ',' +  g + ',' + b + ')';
	c.stroke();	
}*/


window.addEventListener('mousemove', function(event){
	console.log(event);
});


function Circle(x, y, dx, dy, radius){
	this.x = x;
	this.y = y;
	this.dx = dx;
	this.dy = dy;
	this.radius = radius;

	this.draw = function(){
		c.beginPath();
		c.arc(this.x , this.y, this.radius, 0, Math.PI * 2, false); //(x, y, 반지름, )
		c.strokeStyle = 'blue';
		c.stroke();
		c.fill();
	}

	this.update = function(){
		if(this.x + this.radius  > innerWidth || this.x - this.radius < 0){
			this.dx = -this.dx;
		}

		if(this.y + this.radius  > innerHeight || this.y - this.radius < 0){
			this.dy = -this.dy;
		}

		this.x += this.dx;
		this.y += this.dy;

		this.draw();
	}
}

var circleArray = [];

for(var i = 0; i < 100; i++){
	var radius = 30;
	var x = Math.random() * (innerWidth - radius * 2) + radius;
	var y = Math.random() * (innerHeight - radius * 2) + radius;
	var dx = (Math.random() - 0.5) * 5;
	var dy = (Math.random() - 0.5) * 5;
	circleArray.push(new Circle(x, y, dx, dy, radius));
}

function animate(){
	requestAnimationFrame(animate);	// 기본적으로 roop를 걸어줌

	c.clearRect(0, 0, innerWidth, innerHeight); // 사각형을 기준으로 해서 화면 clear해줌

	for(var i = 0; i < circleArray.length; i++){
		circleArray[i].update();
	}
}

animate();