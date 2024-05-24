<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $feedback = isset($_POST["feedback"]) ? implode(", ", $_POST["feedback"]) : "Não especificado";
        $comentarios = isset($_POST["comentarios"]) ? $_POST["comentarios"] : "Nenhum comentário";
        echo "<h3>Obrigado por seu feedback!</h3>";
        echo "<p>Feedback: $feedback</p>";
        echo "<p>Comentários: $comentarios</p>";
    }
?>
