



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

        
		
		
		var m
        if (k < 13) {
          m = "You could benefit from new strategies to help you control your emotions so your emotions don't control you.";
        }else if(k > 12 && k < 25){
          
		  m = "You have plenty of room for growth. Learning how to regulate your emotions could help you take big strides toward reaching your greatest potential.";
        }else if(k > 25 && k < 37){
          
		  m = "There may be times that your emotions hold you back from being your best and strongest self. Improving your ability to regulate your feelings could prove beneficial.";
		  
        }else{
              
		 m = "You tend to regulate your emotions fairly well. However, there may be certain situations or emotions that can still hold you back";
		
		
		}

		
		
		

      document.getElementById("score").innerHTML = k;
      document.getElementById("msg").innerHTML = m;




    }