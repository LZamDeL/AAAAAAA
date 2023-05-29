<?php
// Verificar las credenciales del usuario
$validUsername = 'as'; // Usuario válido
$validPassword = 'as'; // Contraseña válida

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $validUsername && $password === $validPassword) {
  // Las credenciales son correctas, redirigir a la nueva página
  header('Location: Login/BarraMenu/BarraMenu.html');
  exit();
} else {
  // Las credenciales son incorrectas, redirigir al formulario de inicio de sesión con un mensaje de error
  header('Location: index.html?error=true');
  exit();
}
?>
