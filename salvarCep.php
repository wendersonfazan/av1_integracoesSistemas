<?php
include_once 'topo.php';
$url = 'viacep.com.br/ws/' .$_POST['cep'] .'/json/';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);

$dados = json_decode($result);

try {
    $conn = new PDO('mysql:host=localhost;dbname=buscarcep', "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $conn->prepare('INSERT INTO cep (cep, logradouro, complemento, bairro, localidade, uf) VALUES(:cep, :logradouro, :complemento, :bairro, :localidade, :uf)');
    $stmt->execute(array(
        ':cep' => $dados->cep,
        ':logradouro' => $dados->logradouro,
        ':complemento' => $dados->complemento,
        ':bairro' => $dados->bairro,
        ':localidade' => $dados->localidade,
        ':uf' => $dados->uf
    ));

    echo $stmt->rowCount(); 
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>