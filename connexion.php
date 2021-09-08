<?php
if (!empty($_POST)) {
    $securizedDataFromForm = treatFormData($_POST, "email", "password",);
    extract($securizedDataFromForm, EXTR_OVERWRITE);
    $data = openDB();
    $users = $data["user"];
    $correctEmail = false;
    foreach ($users as $user) {
        if($email == $user["email"]) {
            $cansConnect = password_verify($password, $user["password"]);
            if($cansConnect) {
                $_SESSION["user"] = [
                    "name" => $user["name"],
                    "firstName" => $user["firstName"],
                    "email" => $user ["email"],
                    "role" => $user ["role"],
                ];
                header("Location: /");
            }
            else {
                $badPassword = true;
            }
        }
    }
    if ($badPassword && $correctEmail) {
        $errorMessage = "L'email ou le mot de passe est invalide.";
    }
    };
?>
    