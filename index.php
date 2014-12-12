<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>PseudoAj Focal Length Conversion</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
 <script>
    function PostData() {
    // 1. Create XHR instance - Start
    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
        throw new Error("Ajax is not supported by this browser");
    }
    // 1. Create XHR instance - End
    
    // 2. Define what to do when XHR feed you the response from the server - Start
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
                document.getElementById('divRes').innerHTML = xhr.responseText;
            }
        }
    }
    // 2. Define what to do when XHR feed you the response from the server - Start

    var focalpx = document.getElementById("focalpx").value;
    var ccdwidth = document.getElementById("ccdwidth").value;
    var imgwidth = document.getElementById("imgwidth").value;

    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', 'convert.php');
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("focalpx=" + focalpx + "&ccdwidth=" + ccdwidth + "&imgwidth=" + imgwidth);
    // 3. Specify your action, location and Send to the server - End
}
</script>
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
<h1 class="page-header" align="center">PseudoAj Convert Focal Length From px to mm</h1>
<p class="nav" align="center">The converstion of focal length from the pixels to mm involves focal length(in px), focal length(in mm), image width(in px) CCD width(in mm) and equation: Focal Length(in px)*CCD(in mm)=Image Width(in px)*Focal Length(in mm).<br>Ref: <a href="http://phototour.cs.washington.edu/focal.html">http://phototour.cs.washington.edu/focal.html</a></p>
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Enter Values</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" id="focalpx" class="form-control input-lg" placeholder="Focal Length in px"/>
            </div>
            <div class="form-group">
              <input type="text" id="ccdwidth" class="form-control input-lg" placeholder="CCD Width in mm"/>
            </div>
            <div class="form-group">
              <input type="text" id="imgwidth" class="form-control input-lg" placeholder="Image Width in px"/>
            </div>
            <div class="form-group" id="divRes">
            </div>

            <div class="form-group">
           	  <input type="button" class="form-control input-lg" value="Convert" onclick="PostData()"/>
            
            </div>
          </form>
 
      </div>
      <div class="modal-footer">
     
       </div>

      </div>
  </div>
  <div class="col-lg-12 text-center v-center" style="font-size:39pt;">
     <a href="https://plus.google.com/+ajaykrishnatejakavuri"><i class="icon-google-plus"></i></a> <a href="https://www.facebook.com/ajaykrishnateja"><i class="icon-facebook"></i></a>  <a href="https://twitter.com/PseudoAj"><i class="icon-twitter"></i></a> <a href="https://github.com/PseudoAj"><i class="icon-github"></i></a>
          
        </div>         
   
        
  </div>
  
</div>
   
<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        
	</body>
</html>