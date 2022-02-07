<?php 
    // EGPCE - Conecta ao Moodle, vai navegando nas pastas até a raiz do Moodle
    require_once('../../config.php'); 

    // EGPCE - Necessidade de login para acessar
    require_login();

    // EGPCE - Utiliza as variáveis globais do Moodle
    global $CFG;

    // EGPCE - Reporta os erros
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // EGPCE - Pega a sessão do usuário no Moodle
    $NomeUsuario = $_SESSION['USER']->firstname;
?>
