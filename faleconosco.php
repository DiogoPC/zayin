<?php
 //variaveis
 
 //$equipe = 'Personal Oncologia';
 $quebra_linha = "\n\r";
 
 $email_to = 'contato@zayin.site'; // email para envio.
 $nome    = $_POST["nome"];
 $email   = $_POST["email"];
 //$phone   = $_POST["phone"];
 $subject = $_POST["assunto"];
 $mensagem = $_POST["mensagem"];
 
// $headers = "MIME-Version: 1.1".$quebra_linha;
//$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
 $headers .= "De: $nome - $email".$quebra_linha;
 //$headers .= "To: $email_to;  Assunto:$subject".$quebra_linha;
// $headers .= "Reply-To:".$email_to .$quebra_linha;
// $headers .= "Retrun-Path:".$email_to .$quebra_linha;
 
   
       $corpo  = "Sitema de Mensagem - Personal Oncologia \n";
       $corpo .= "Nome: "        .$nome . "\n";
       $corpo .= "Email: "       .$email. "\n";
	     $corpo .= "Assunto:"      .$subject. "\n";
       $corpo .= "Mensagem: " . $mensagem . "\n";
 
   $status = mail($email_to,$headers,$corpo); //enviando o email.
   
if($status) 
    {
  echo "<script>alert('$nome, recebemos sua mensagem! Nossa equipe retornara em breve!');location.href='index.html' </script>";  
    }else
	  {
	 echo "<script>alert('Sua solicitação não pode ser executada ! Verefique se digitou todos os campos corretamente seu e-mail. \n Ou tente novamente mais tarde.');location.href='index.html'</script>";
	  }
?>