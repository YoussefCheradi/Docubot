<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['question'])) {
  $question = $_POST['question'];

  // Appel au WS pour stocker la question dans la BD
  // Remplacez l'URL par l'URL réelle de votre WS et ajustez les paramètres selon vos besoins
  $url = 'http://localhost/api/store_unanswered_question';
  $data = array('question' => $question);

  // Utilisez cURL pour l'appel API
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);
  curl_close($ch);

  // Vérifiez la réponse du WS et agissez en conséquence
  // Pour cet exemple, nous allons simplement rediriger tous les cas
  echo $response;
}
?>
