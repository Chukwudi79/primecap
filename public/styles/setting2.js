$(document).ready(function(){
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
	var percent =  parseFloat(document.getElementById("Ultra").value); 
	var minMoney 	= [10,1000.00,3000.00,50.00,100.00 ];
	var maxMoney	= [5001.00,5001.00,8001.00,5001.00,5001.00 ];
	$("#money").val(minMoney[0]);
	console.log($("#money").val(minMoney[0]));
	
	//Calculator
	function calc(){
		var money = parseFloat($("#money").val());
		switch (percent) {
		    case 0:
		        if( (money >= 10 && money <= 600)){
		        	var profitDaily = money / 100 * 104;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 601 && money <= 1800) {
		        	var profitDaily = money / 100 * 105;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1801 && money <= 5400) {
		        	var profitDaily = money / 100 * 107;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5401 && money <= 10800) {
		        	var profitDaily = money / 100 * 112;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10801 && money <= 20000) {
		        	var profitDaily = money / 100 * 120;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 20001 && money <= 50000) {
		        	var profitDaily = money / 100 * 130;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 100000) {
		        	var profitDaily = money / 100 * 135;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		
				//} else if(isNaN(money) == true) {
				} if (money < 10){
					$("#profitDaily").text("Min: $10");
				}
		  
		        
		        break;
			case 1:
		        if( (money >= 10 && money <= 600)){
		        	var profitDaily = money / 100 * 125;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 601 && money <= 1800) {
		        	var profitDaily = money / 100 * 130;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1801 && money <= 5400) {
		        	var profitDaily = money / 100 * 140;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5401 && money <= 10800) {
		        	var profitDaily = money / 100 * 175;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10801 && money <= 20000) {
		        	var profitDaily = money / 100 * 225;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 20001 && money <= 50000) {
		        	var profitDaily = money / 100 * 265;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 100000) {
		        	var profitDaily = money / 100 * 300;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
					
				//} else if(isNaN(money) == true) {
				} if (money < 10){
					$("#profitDaily").text("Min: $10");
				}
		  
		        break;
		    case 2:
		    	if( (money >= 10 && money <= 600)){
		        	var profitDaily = money / 100 * 170;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 601 && money <= 1800) {
		        	var profitDaily = money / 100 * 180;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1801 && money <= 5400) {
		        	var profitDaily = money / 100 * 200;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5401 && money <= 10800) {
		        	var profitDaily = money / 100 * 300;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10801 && money <= 20000) {
		        	var profitDaily = money / 100 * 400;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 20001 && money <= 50000) {
		        	var profitDaily = money / 100 * 500;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 100000) {
		        	var profitDaily = money / 100 * 600;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
				//} else if(isNaN(money) == true) {
				} if (money < 10){
					$("#profitDaily").text("Min: $10");
				}
		  
		        break;
		    case 3:
		    	if( (money >= 10 && money <= 600)){
		        	var profitDaily = money / 100 * 300;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 601 && money <= 1800) {
		        	var profitDaily = money / 100 * 320;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1801 && money <= 5400) {
		        	var profitDaily = money / 100 * 360;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5401 && money <= 10800) {
		        	var profitDaily = money / 100 * 650;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10801 && money <= 20000) {
		        	var profitDaily = money / 100 * 900;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 20001 && money <= 50000) {
		        	var profitDaily = money / 100 * 1050;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 100000) {
		        	var profitDaily = money / 100 * 1200;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
				//} else if(isNaN(money) == true) {
				} if (money < 10){
					$("#profitDaily").text("Min: $10");
				}
		  
		        break;
		    case 4:
		    	if( (money >= 10 && money <= 600)){
		        	var profitDaily = money / 100 * 700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 601 && money <= 1800) {
		        	var profitDaily = money / 100 * 800;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1801 && money <= 5400) {
		        	var profitDaily = money / 100 * 900;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5401 && money <= 10800) {
		        	var profitDaily = money / 100 * 1650;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10801 && money <= 20000) {
		        	var profitDaily = money / 100 * 2100;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 20001 && money <= 50000) {
		        	var profitDaily = money / 100 * 2300;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 100000) {
		        	var profitDaily = money / 100 * 2500;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
					
				//} else if(isNaN(money) == true) {
				} if (money < 10){
					$("#profitDaily").text("Min: $10");
				}
		  
		        
		        
		        
		        break;
		        
		    case 5:
		    	if( (money >= 10 && money <= 2000)){
		        	var profitDaily = money / 100 * 1600;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 2001 && money <= 1000000) {
		        	var profitDaily = money / 100 * 3000;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
					
		        //} else if(isNaN(money) == true) {
				} if (money < 10){
					$("#profitDaily").text("Min: $10");
				}
		  
		        
		        
		        
		        break;    
		        
		    case 6:
		    	if( (money >= 10000 && money <= 100000)){
		        	var profitDaily = money / 100 *  1000;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        
		       //} else if(isNaN(money) == true) {
				} if (money < 10000){
					$("#profitDaily").text("Min: $10000");
				}
		  
		        
		        break;
		    case 7:
		    	if( (money >= 10000 && money <= 100000)){
		        	var profitDaily = money / 100 *  2000;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		         //} else if(isNaN(money) == true) {
				} if (money < 10000){
					$("#profitDaily").text("Min: $10000");
				}
		  
		        break;
		    case 8:
		    	if( (money >= 10000 && money <= 100000)){
		        	var profitDaily = money / 100 *  3500;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		          //} else if(isNaN(money) == true) {
				} if (money < 10000){
					$("#profitDaily").text("Min: $10000");
				}
		        break;
		}
	}
	if($("#money").length){
		calc();
	}
	$("#money").keyup(function(){
		calc();
	});

	$("#Ultra").on('change', function() {
		percent = parseFloat(this.value);
		calc();
	})
});
