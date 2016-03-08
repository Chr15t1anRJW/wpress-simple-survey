



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
          m = "You could benefit from learning strategies to help you combat negative thought patterns and change your core beliefs.";
        }else if(k > 12 && k < 25){
           m = "You have plenty of room for growth. Learning how to train your brain to think differently could help you take big strides toward reaching your greatest potential.";
        }else if(k > 25 && k < 37){ 	  
		  m = "You have some unproductive thinking patterns, and learning how to train your brain to think differently could prove beneficial.";
        }else{  
		    m = "You tend to be a realistic yet positive thinker, overall. However, there may be certain moods or situations that trigger unproductive thinking patterns.";
        }

      document.getElementById("score").innerHTML = k;
      document.getElementById("msg").innerHTML = m;




    }