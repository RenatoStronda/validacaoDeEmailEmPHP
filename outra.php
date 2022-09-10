<?php
        $email = $_POST["email"];
        if (isset($email) && !empty($email))
        {
            $email = (filter_var($email, FILTER_SANITIZE_EMAIL));

            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo "<p> Seu Email <strong>$email</strong> É Válido!</p>";
                session_start();
                $_SESSION["email"] = $email;
                header("location:outra_page.php");
            }
            else
            {
                echo "<p> Seu Email <strong>$email</strong> É Inválido!</p>";
            }
        }
        /* SEGUNDA SOLUÇÃO 
        if (isset($email) && !empty($email))
        {
            session
        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
        echo preg_match($regex, $email) ? "<p> Seu Email <strong>$email</strong> 
        É Válido!</p>" : "<p> Seu Email <strong>$email</strong> É Inválido!</p>";
        }
        FINAL DA SEGUNDA SOLUÇÃO */
?>