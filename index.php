<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de idade para cachorrinhos</title>
    <!-- definição de CSS e fonte -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Underdog&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="./iconecachorro.ico">
</head>
<body>
    <!-- criação da div principal -->
    <div class="container">
        <h1>Calculadora de idade para cachorrinhos</h1><br>
        <form action="index.php" method="post">
            <label for="porte">Selecione o porte do cachorro:</label><br><br>
            <input type="radio" name="porte" value="pequeno"> Pequeno<br><br>
            <input type="radio" name="porte" value="medio"> Médio<br><br>
            <input type="radio" name="porte" value="grande" required> Grande<br><br>
            <label for="idade">Digite a idade do cachorro:</label><br><br>
            <input type="number" name="idade" placeholder="Idade do cachorro" id="box-idade" required><br><br>
            <input type="submit" value="Calcular" id="botao">
            <br><br>
        </form>  

        <!-- exibição do resultado -->
        <div id="resultado">
            <?php
            // verifica se o formulário foi enviado
            if (isset($_POST['porte']) && isset($_POST['idade'])) {
                $porte = $_POST['porte'];
                $idade = $_POST['idade']; // definição de idade e porte 
                $idadeConvertida = 0; // idade convertida com valor 0 para indicar que é um número

                $mensagem = ''; // mensagem com valor vazio entre aspas para indicar que é um texto

                switch ($porte) {
                    case 'pequeno': // caso o porte seja pequeno 
                        if ($idade <= 2) { // se a idade for menor ou igual a 2
                            $idadeConvertida = $idade * 12.5;
                            $mensagem = "Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                        } else { // se não
                            $idadeConvertida = 25 + ($idade - 2) * 4.5;
                            if ($idade > 22) {
                                $mensagem = "Uau, parabéns! Seu cachorrinho está vivendo bastante para um cachorrinho de porte pequeno!<br>Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                            } else {
                                $mensagem = "Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                            }
                        }
                        break;
                
                    case 'medio':
                        if ($idade <= 2) {
                            $idadeConvertida = $idade * 10.5;
                            $mensagem = "Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                        } else {
                            $idadeConvertida = 21 + ($idade - 2) * 5.7;
                            if ($idade > 13){
                                $mensagem = "Uau, parabéns! Seu cachorrinho está vivendo bastante para um cachorrinho de porte médio!<br>Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                            } else {
                                $mensagem = "Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                            }
                        }
                        break;
                
                    case 'grande':
                        if ($idade <= 2) {
                            $idadeConvertida = $idade * 9;
                            $mensagem = "Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                        } else {
                            $idadeConvertida = 18 + ($idade - 2) * 9;
                            if ($idade > 12){
                                $mensagem = "Uau, parabéns! Seu cachorrinho está vivendo bastante para um cachorrinho de porte grande!<br>Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                            } else {
                                $mensagem = "Seu cachorrinho possui aproximadamente $idadeConvertida anos em idade de cachorros!";
                            }
                        }
                        break;
                }
                
                // exibindo a mensagem
                echo "<p>$mensagem</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
