 <!--AUTHOR: RAJA GOPAL | TITLE : CALCULATE DEGREE BETWEEN HANDS IN CLOCK FOR 12 HRS FORMAT | CRAETED : 15th JUNE 2017 -->
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Clock Hands Angle - Calculate angle between two hands in a clock </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"  href="css/smart-forms.css">
    <link rel="stylesheet" type="text/css"  href="css/smart-themes/blue.css">    
    <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
    
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-custom.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-touch-punch.min.js"></script>
    
    <!--[if lte IE 9]>   
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
    <![endif]-->
    
    <script type="text/javascript">
	
		$(function() {
		
				var smartpickerWrapper = '<div class="smart-forms"><div class="blue-slider"></div></div>';
				$('#timepicker1').timepicker({
					timeFormat: 'hh:mm',  // time set for 12 hours
					beforeShow: function(input, inst) {
							inst.dpDiv.unwrap().unwrap(smartpickerWrapper);
							var smartpikr = inst.dpDiv.parent();
							if (!smartpikr.hasClass('smart-forms')){
								inst.dpDiv.wrap(smartpickerWrapper);
							}
					},
					onClose: function(input, inst) {
						inst.dpDiv.unwrap().unwrap(smartpickerWrapper);
					}		

				
				});

						
		});				
    
    </script>
    
    
       
</head>

<body class="woodbg">

	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-2">
        
        	<div class="form-header header-blue">
            	<h4><i class="fa fa-clock-o"></i> Clock Hands Angle Calculator </h4>
            </div><!-- end .form-header section -->
            
         <!--    <form method="post" action="/" id="smart-form"> -->

            	<div class="form-body theme-blue">
            	 <h4> Click the box below to pick a time and then click calculate button to calculate the angle between two hands in a clock  </h4>
            	 <div class="frm-row">
                        <div class="section colm colm6">
                            <label for="timepicker1" class="field prepend-icon">
                            	<input type="text" id="timepicker1" name="timepicker1" class="gui-input">
                                <span class="field-icon"><i class="fa fa-clock-o"></i></span>  
                            </label>
                        </div><!-- end section -->
                       </div><!-- end .frm-row section -->
                    </div><!-- end .form-body section -->
                <div class="form-footer">
                	<button class="button btn-blue" value="angle" onclick="angle()"> Calculate </button>
                    </div><!-- end .form-footer section -->
         <!--    </form> -->
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
    <div></div><!-- end section -->
<script type="text/javascript">
	function angle()

				{
					time = $('#timepicker1').val();  // get value from the timepicker
     			    arr = time.split(':');   // split the value keeping : as separator to get hours and minutes
     			    hour = $.trim(arr[0]);
					min = $.trim(arr[1]);
					var c= 0.5*((60*hour)-(11*min));  // calculating the degree using formula |0.5*(60*hours-11*minutes)|
					var angle = Math.abs(c);  // convert to positive value to avoid negative operator in following steps
					
					if (Number(angle)>180) {  // check if angle is greater than 180 degrees 
                     var cnew= 360-angle;  // if greater than then subtract from 360 degree
					var anglenew = Math.abs(cnew); // again convert to positive if so
					alert(anglenew + " DEGREE");  // alert result
                } else {
                	
					alert(angle + " DEGREE");  // alert result
                }
					
				}
</script>
</body>
</html>
