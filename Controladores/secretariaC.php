<?php

class SecretariaC
{
    public function ingresarSecretariaC()
    {
        // var_dump($_POST["clave-ing"]);
        if(isset($_POST["usuario-ing"]))
        {
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-ing"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave-ing"]))
            {
                $tabalBD = "secretarias";
                var_dump($_POST["usuario-ing"]);

                $datosC = array("usuario" => $_POST["usuario-ing"], "clave" => $_POST["clave-ing"]);

                $resultado = SecretariaM::ingresarSecretariaM($tabalBD, $datosC);

                if($resultado['usuario'] == $_POST["usuario-ing"] && ($resultado['clave'] == $_POST["clave-ing"]))
                {
                    $_SESSION['Ingresar'] = true;
                    $_SESSION['id'] = $resultado['id']; 
                    $_SESSION['usuario'] = $resultado['usuario']; 
                    $_SESSION['clave'] = $resultado['clave']; 
                    $_SESSION['nombre'] = $resultado['nombre']; 
                    $_SESSION['apellido'] = $resultado['apellido'];
                    $_SESSION['foto'] = $resultado['foto']; 
                    $_SESSION['rol'] = $resultado['rol'];

                    echo    '<script>
                                window.location = "inicio"
                            </script>';
                }
                else
                {
                    echo "<div class='alert alert-danger'>Error al ingresar</div>";
                }
            }
        }
    }
}

