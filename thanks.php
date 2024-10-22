<?php
session_start();
?>
<html>
<head>
	<title>Thanks For Contact Wih Us</title>
	<!-- Event snippet for Contact us conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16668265291/cZnoCNPx2t8ZEMuWhow-'});
</script>

	<!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-21MJWHDSEF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-21MJWHDSEF');
</script> 

	
	<!-- Event snippet for Purchase conversion page -->
 <script>
  gtag('event', 'conversion', {
      'send_to': 'AW-16668265291/o-dpCLWXxc0ZEMuWhow-',
      'value': 1.0,
      'currency': 'INR',
      'transaction_id': ''
  });
</script> 
</head>
<body>
<style>
*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#5892FF ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#5892FF;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:3.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:100%;
  margin:0 auto;
  margin-top:100px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
</style>


<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you for Contacting Us. <?php echo $_SESSION['name'];?></h1>
      <p>Thanks for Contacting Us.  </p>
      <p>We will contact you as soon as possible </p>
     
    </div>
    <div class="footer-like">
      <p>Go Back To Homepage
       <a href="https://www.stsmedicals.com/">Click here to go back</a>
      </p>
    </div>
</div>
</div>


<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

 <script>
function today_meeting_refresh_data() {
window.location.href='index.php';s
   }
    t = setInterval(today_meeting_refresh_data,2000);
   </script></p>
</body>
</html>