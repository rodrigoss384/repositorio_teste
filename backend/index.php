<?
header("Access-Control-Allow-Origin: *");
include 'conexao.php';

$id = rand(1, 999);
$nome = $_POST["nome"];
$mensagem = $_POST["mensagem"];

$query = "INSERT INTO mensagens(id, nome, mensagem) VALUES ('$id, '$nome', '$mensagem')";

if ($link->query($query) === TRUE) {
    echo "Nova inserção criada com sucesso!!"; 
} else {
    echo "Erro: " . $link->error;
}
?>