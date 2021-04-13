
<?php
  if($_POST){
     $emailTo="priyachowdhury06583@gmail.com";
     $content=$_POST['content'];
     $headers='From: '.$_POST['email'];

  if(mail($emailTo,$content,$headers)){
     echo '<div class="container alert alert-success text-center">
            Your message was sent, we will back to you ASAP!</div>';
    }else{
     echo '<div class="container alert alert-danger text-center">
            Your message was not sent, Please try again!</div>';
    }
 }
 ?>



