    
        
    function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.round(Math.random() * 15)];
        } 
        return color;
    }   
        
    var clickedTime; var createdTime; var reactionTime;
        
    Date.now();
        
    function makeBox() {
        
        var x = Math.random();
        x = x*5000;
        
        setTimeout(function() { 
            
            if (Math.random() >0.5) {
                document.getElementById("box").style.borderRadius="50%";
            } else {
                document.getElementById("box").style.borderRadius="0";
            }
            
            var top = Math.random(); var left = Math.random();
            top = top*200;
            left = left*900;
        
            document.getElementById("box").style.top= top+"px";
            document.getElementById("box").style.left= left+"px";
            
            document.getElementById("box").style.backgroundColor=getRandomColor();
            document.getElementById("box").style.display="block";
            createdTime = Date.now();
        }, x);
    
    }    
        
    document.getElementById("box").onclick = function () {
        
        clickedTime = Date.now();
        reactionTime = (clickedTime - createdTime)/1000;
        
        document.getElementById("time").innerHTML = reactionTime;
        
        this.style.display="none"; 
        makeBox();
    }
    
    makeBox();