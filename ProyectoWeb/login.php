<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicia sesión - Weirdo Comics</title>
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
          <span class="lime-word">Bajo control.</span>
        </h1>
        <p class="auth-hero-desc">
          Productos, inventario y ventas en un solo lugar. Menos caos, más historias.
        </p>

        <div class="comic-visual-box">
          <div class="bam-badge">BAM!</div>
          <div class="comic-card-art">
            <div class="comic-card-num">07</div>
            <div class="comic-card-label">BEYOND THE VOID</div>
          </div>
        </div>
      </div>

      <div class="auth-version-foot">
        Sistema administrativo
      </div>
    </div>

    <div class="auth-right">
      <div class="auth-form-card">
        <span class="eyebrow-tag">BIENVENIDO DE VUELTA</span>
        <h2 class="form-header-title">Inicia sesión</h2>
        <p class="form-header-sub">Ingresa tus datos para acceder al sistema.</p>

        <form action="resumenV.php" method="GET">
          <div class="field-group">
            <label class="field-label" for="usuario">Usuario</label>
            <input type="text" id="usuario" class="text-input" placeholder="Ej. karen.hernandez" required>
          </div>

          <div class="field-group">
            <label class="field-label" for="password">Contraseña</label>
            <input type="password" id="password" class="text-input" placeholder="••••••••" required>
          </div>

          <button type="submit" class="btn-primary-action">
            Entrar al sistema
          </button>

          <p class="auth-bottom-link">
            ¿No tienes una cuenta? <a href="crearC.php">Regístrate</a>
          </p>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
