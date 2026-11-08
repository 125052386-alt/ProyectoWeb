<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crea tu cuenta - Weirdo Comics</title>
  <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>

  <div class="auth-wrapper">
    <div class="auth-left">
      <div class="auth-brand">
        <div class="brand-badge">W</div>
        <div class="brand-text-stack">
          WEIRDO<br>COMICS
        </div>
      </div>

      <div class="auth-hero-center">
        <span class="eyebrow-tag">DONDE LO EXTRAÑO ENCUENTRA HOGAR</span>
        <h1 class="auth-hero-title">
          Tu tienda.<br>
          <span class="lime-word">Bajo control</span>
        </h1>
      </div>

      <div class="auth-version-foot">
        Sistema administrativo 
      </div>
    </div>

    <div class="auth-right">
      <div class="auth-form-card">
        <span class="eyebrow-tag">ÚNETE AL EQUIPO</span>
        <h2 class="form-header-title">Crea tu cuenta</h2>
        <p class="form-header-sub">Registra tus datos para solicitar acceso.</p>

        <form action="resumenA.php" method="GET">
          <div class="field-group">
            <label class="field-label" for="nombre">Nombre completo</label>
            <input type="text" id="nombre" class="text-input" placeholder="Tu nombre" required>
          </div>

          <div class="field-group">
            <label class="field-label" for="reg-usuario">Usuario</label>
            <input type="text" id="reg-usuario" class="text-input" placeholder="Ej. karen.hernandez" required>
          </div>

          <div class="field-group">
            <label class="field-label" for="reg-password">Contraseña</label>
            <input type="password" id="reg-password" class="text-input" placeholder="••••••••" required>
          </div>

          <button type="submit" class="btn-primary-action">
            Registrarse
          </button>

          <p class="auth-bottom-link">
            ¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a>
          </p>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
