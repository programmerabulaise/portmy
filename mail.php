 <?php if (
     isset($_REQUEST['name']) &&
     isset($_REQUEST['email']) &&
     isset($_REQUEST['phone_number']) &&
     isset($_REQUEST['messeage'])
 ) {
     $to = 'abulaise2022@gmil.com';
     $usename = $_REQUEST['name'];
     $useremail = $_REQUEST['email'];
     $userphon = $_REQUEST['phone_number'];
     $usermesseage = $_REQUEST['messeage'];
     $subject = 'Client messeage';

     $message =
         'Client name ' .
         $usename .
         "\n\n" .
         'Client Email ' .
         $useremail .
         "\n\n" .
         'Client Phone number ' .
         $userphon .
         "\n\n" .
         'client messeage ' .
         $usermesseage;

     $headers = 'From:' . $useremail;
 
     if (mail($to, $subject, $message, $headers)) {
         header('location:index.php?action=Scuccessfull');
     } else {
         header('location:index.php?acton2=contact_with_email');
     }
 } ?>  
 
 
 

 
 