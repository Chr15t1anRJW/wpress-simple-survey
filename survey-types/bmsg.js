



    function myFunction() {
        var a = $('input[name=radios-1]:checked').val();
        var b = $('input[name=radios-2]:checked').val();
        var c = $('input[name=radios-3]:checked').val();
        var d = $('input[name=radios-4]:checked').val();
        var e = $('input[name=radios-5]:checked').val();
        var f = $('input[name=radios-6]:checked').val();
        var g = $('input[name=radios-7]:checked').val();
        var h = $('input[name=radios-8]:checked').val();
        var i = $('input[name=radios-9]:checked').val();
        var j = $('input[name=radios-10]:checked').val();
        var k = parseInt(a)+ parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e) + parseInt(f)+ parseInt(g)+ parseInt(h) + parseInt(i) + parseInt(j);

       
		
		

		
		if (k < 13) {
			 m = "You could benefit from learning strategies to change your behavior.";
          
        }else if(k > 12 && k < 25){
           m = "You have plenty of room for growth. Learning how to perform at your peak could help you take big strides toward reaching your greatest potential.";
		   
        }else if(k > 25 && k < 37){	  
		  m = "You may have a few unproductive behaviors that are holding you back.";
		  
        }else{
		  m = "Your behavior is productive overall. However, there may be certain situations that prevent you from performing at your peak.";
        }
		
		
		
		
		

      document.getElementById("score").innerHTML = k;
      document.getElementById("msg").innerHTML = m;




    }