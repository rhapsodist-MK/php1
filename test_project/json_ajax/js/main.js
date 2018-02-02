var pageCounter = 1;

var btn = document.getElementById('btn');
var animalContainer = document.getElementById('animal-info');


btn.addEventListener('click', function(){
	var ourRequest = new XMLHttpRequest(); // 외부 자료를 가져올때
	ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-' + pageCounter + '.json');
	ourRequest.onload = function(){ //onload : 실제 데이터가 load되었을때
		if(ourRequest.status >= 200 && ourRequest.status < 400){
			var ourData = JSON.parse(ourRequest.responseText); //평범한 txt파일을 json 파일이라고 알려줌
			renderHTML(ourData);	
		}else{
			console.log("We connected to the server, but it returned an error");
		}

			
	}

	ourRequest.onerror = function(){
		console.log("connection error");
	}

	ourRequest.send();

	pageCounter++;
	if(pageCounter > 3){
		btn.classList.add("hide-me");
	}
});

function renderHTML(data){
	var htmlString = ""

	for(var i = 0; i < data.length; i++){
		htmlString += "<p>" + data[i].name + " is a " + data[i].species + " that likes to eat ";

		for(var ii = 0; ii < data[i].foods.likes.length; ii++){
			if(ii == 0){
				htmlString += data[i].foods.likes[ii];
			}else{
				htmlString += " and " + data[i].foods.likes[ii];
			}
		}

		htmlString += ' and dislikes ';

		for(var ii = 0; ii < data[i].foods.dislikes.length; ii++){
			if(ii == 0){
				htmlString += data[i].foods.dislikes[ii];
			}else{
				htmlString += " and " + data[i].foods.dislikes[ii];
			}
		}


		htmlString += "</p>";
	}


	animalContainer.insertAdjacentHTML('beforeend', htmlString);
}