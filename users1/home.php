<html>
<head>
<title>User :Home</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="../css/bootstrap.min.css" rel="stylesheet">
<style>
@-ms-viewport     { width: device-width; }
@-o-viewport      { width: device-width; }
@viewport         { width: device-width; }
a,
a:focus,
a:hover {
  color: #fff;
}
.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: 1px solid #fff;
}

html,
body {
  height: 100%;
  background-color: #333;
 background-attachment: fixed;
}
body {
  color: #fff;
   background-attachment: fixed;
}

.site-wrapper {
  display: table;
  width: 100%;
  height: 100%; /* For at least Firefox */
  min-height: 100%;
  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
          box-shadow: inset 0 0 100px rgba(0,0,0,.5);
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

.inner {
  padding: 30px;
}


.masthead-brand {
  margin-top: 10px;
  margin-bottom: 10px;
}

.masthead-nav > li {
  display: inline-block;
}
.masthead-nav > li + li {
  margin-left: 20px;
}
.masthead-nav > li > a {
  padding-right: 0;
  padding-left: 0;
  font-size: 16px;
  font-weight: bold;
  color: #fff; /* IE8 proofing */
  color: rgba(255,255,255,.75);
  border-bottom: 2px solid transparent;
}
.masthead-nav > li > a:hover,
.masthead-nav > li > a:focus {
  background-color: transparent;
  border-bottom-color: #a9a9a9;
  border-bottom-color: rgba(255,255,255,.25);
}
.masthead-nav > .active > a,
.masthead-nav > .active > a:hover,
.masthead-nav > .active > a:focus {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 768px) {
  .masthead-brand {
    float: left;
  }
  .masthead-nav {
    float: right;
  }
}



@media (min-width: 992px) {
  .masthead,
  .mastfoot,
  .cover-container {
    width: 700px;
  }
}

.main{
 	margin-top: 70px;
}

h1.title,h4 { 
	font-size: 18px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	color: black ;
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

</style>
  
    </head>
  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">
         
        <div class="cover-container">
		<div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Supply Chain Management</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li  class="active"><a href="#">Home</a></li>
                  <li><a href="user_data_entry.html">Data Entry</a></li>
				  <li><a href="#">Inbox</a></li>
             
				  <li><a href="../login_user.html">Log Out</a></li>
                </ul>
              </nav>
			  </div>
			 </div>
			 <br>
			 <h4>Product Details<h4><br><br>
<?php
include('../dbcon.php');
	
	$select_post_per_users = mysqli_query($conn,"SELECT DISTINCT name FROM product p WHERE   p.level='0'");
	
	if($select_post_per_users){
		
		while($array_get_users = mysqli_fetch_array($select_post_per_users)){
			$user_name = $array_get_users['name'];
					
			echo "<h4>Product Name :     $user_name</h4>";
			echo "<form action='product_details.php' method='get'>
					<button type='submit' value='$user_name'  name='view' class='btn btn-primary'>View</button>
					</tr>
					</table>
				</form>";
			
		}
	}else{
		echo "Data Retriving Error";
	}

?>	
	
 	  </div>
	  </div>
	  </div>
 </body>
</html>
