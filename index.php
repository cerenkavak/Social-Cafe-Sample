<?php
/**
* Copyright 2011 Facebook, Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may
* not use this file except in compliance with the License. You may obtain
* a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations
* under the License.
*/

 
<html>
  <head>
    <title>BuniDepo'ya Hoşgeldiniz!</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel=StyleSheet href="css/sc.css" type="text/css" />
  </head>
  <body>

   <script>
     function submitForm(index) {
		    document.forms[0].elements[0].value=index;
    		document.forms[0].submit();
     };
   </script>

  <div class="header" > 
    <h1><a href="<?php echo $app_url; ?>"><img src="img/header.jpg" width="135px" height="100px" /> BuniDepo</a></h1>
    <div class="controls"><a href="<?php echo $login_url; ?>">Giriş Yap</a> <a href="<?php echo $facebook->getLogoutUrl(); ?>">Çıkış Yap</a></div>
  </div>

    <div class="contents"> 
      <div class="top_msg">

<?php
   if(!$facebook->getUser()) {
     echo '<a href="' . $login_url . '">Giriş Yap</a>';
   } else {
?>
	

  
  
  	  </div>
<?php } //end: if(!$facebook->getUser()) 
?>

  </body>
</html>


