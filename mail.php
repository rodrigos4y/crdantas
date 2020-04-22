<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contato@crdantasadv.com.br";
    $email_subject = "Contato do site";
 
    function died($error) {
        // your error code can go here
        echo "Nos deculpe mas houve um erro no envio do seu formulário. ";
        echo $error."<br /><br />";
        echo "Tente enviar novamente.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('Nos deculpe mas houve um erro no envio do seu formulário.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Esse e-mail que você colocou não parece válido.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'Esse nome não parece ser válido.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'Os comentários que foram colocados não parecem ser válidos.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details belowDetalhes do formulário.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Obrigado pelo contato. Retornaremos em breve.
 
<?php
 
}
?>