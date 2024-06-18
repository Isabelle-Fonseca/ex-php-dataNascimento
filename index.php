<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora de Idade</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Idade</h2>
        <form method="POST">
            <div class="form-content">
                <label for="nascDate">Data de Nascimento:</label>
                <input type="date" id="nascDate" name="nascDate" required>
            </div>
            <button type="submit">Calcular Idade</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dataNascimento = $_POST['nascDate'];
        
            $dataNasc = new DateTime($dataNascimento);
            $hoje = new DateTime();
            //diff calcula o intervalo de diferença entre duas datas
            $intervalo = $hoje->diff($dataNasc);

            //componentes da idade e formatando 
            $anos = $intervalo->y;
            $meses = $intervalo->m;
            $dias = $intervalo->d;

            echo "<div class='resultado'>";
            echo "<h3>Calculo idade:</h3>";
            echo "<p><strong>Anos:</strong> $anos</p>";
            echo "<p><strong>Meses:</strong> $meses</p>";
            echo "<p><strong>Dias:</strong> $dias</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>

