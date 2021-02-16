//taz.harding.edu/~aabdulamir/racers

var moving, winner;
var RaceNames = [];

window.addEventListener("DOMContentLoaded", domloaded);

function domloaded()
{
    
    document.querySelector("#pickBtn").addEventListener("click",NameFun);
}


function NameFun()
{
    
    var Textare_names = document.querySelector("#MyInput");
    var Names_array = Textare_names.value.split("\n");
    
    for( var i = 0; i < Names_array.length; i++)
    {
        if(Names_array[i] !="" && Names_array[i] != undefined)
           RaceNames.push(Names_array[i]);
    }

    if(Names_array.length < 4)
    {
        alert("Insert 4 Names");
    }
    else
    {
      RaceNames.sort(function(a, b){return 0.5 - Math.random()}); //code generated from: https://teamtreehouse.com/community/return-mathrandom05
      

      AddingImgandNames();
      

    }

   
}

function AddingImgandNames() {

    

  for (var i = 0; i < 4; i++){
    var MyPlayer = document.querySelector("#name"+(i+1));
    var MyImgPlayer = document.createElement('img');
    MyImgPlayer.src = "ball" + (i + 1) + ".png";
    MyPlayer.appendChild(MyImgPlayer);
    var NamePlayer =  document.createElement('p');
    NamePlayer.innerHTML = RaceNames[i];
    MyPlayer.appendChild(NamePlayer);

  }
  SettingRace();
  
}





function SettingRace()
{
   

    document.querySelector("#EnterNamesBox").style.display = "none";
    document.querySelector("#Players_Screen").style.display = "";
    document.querySelector("#StartButton").addEventListener("click", StartGame);
    document.querySelector("#CancelButton").addEventListener("click",function(){
    document.querySelector("#MyInput").innerHTML = "";
    document.querySelector("#EnterNamesBox").style.display = "";    
    document.querySelector("#Players_Screen").style.display = "none";

    for (var i = 0; i < 4; i++){
      var MyPlayer = document.querySelector("#name"+(i+1));
      MyPlayer.innerHTML = "";

    }

    });
}




function ImgMov()
{

    for(var i = 1; i <= 4; i++)
    {
        var player = document.querySelector("#player"+i);
      
				var total= parseInt( player.style.marginLeft);


	    if (total > window.innerWidth - 180)
        {
            clearInterval(moving);
          
		 winner = i;
            var result = setTimeout(showWinner,1500);
        }


        var increment = Math.floor(Math.random() * 5) + 1;

        player.style.marginLeft = ""+(total + increment) + "px"; //code idea genrated from: https://www.tutorialspoint.com/javascript/javascript_animation.htm

        
		
				total = parseInt(player);
    }
  
}


function StartGame()
{
    document.querySelector("#Players_Screen").style.display = "none";
    document.querySelector("#pageRace").style.display = "";
    setTimeout(StartAnnouncement, 2000);
}


function StartAnnouncement(){
    var begin = document.querySelector("#begin");
    
	begin.play();
    document.querySelector("#go").innerHTML = "GO!"
    moving = setInterval(ImgMov, 20);
}






function showWinner()
{
    document.querySelector("#pageRace").style.display = "none";
    
	document.querySelector("#pageWin").style.display = "";


    var winnerImg = document.querySelector("#winner");
    winnerImg.src = "ball" + winner 
	+ ".png";
	
	
    var winnerName = document.querySelector("#winnerName");
    winnerName.innerHTML = RaceNames[winner-1];

   

    var newGame = document.querySelector("#NewGameButton");
		newGame.addEventListener("click",function(){
        document.querySelector("#pageWin").style.display = "none";
        document.querySelector("#MyInput").innerHTML = "";
        document.querySelector("#EnterNamesBox").style.display = "";
				for(var i = 1; i <= 4; i++)
				{
					var player = document.querySelector("#player" + i);
					player.style.marginLeft = "0px";
				}


				for (var i = 0; i < 4; i++)
				{
					var MyPlayer = document.querySelector("#name"+(i+1));
					MyPlayer.innerHTML = "";

            }
            
    });

    
}






