<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proveedores - Weirdo Comics</title>
  <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>

  <div class="app-container">
    <aside class="sidebar">
      <div class="sidebar-top">
        <div class="sidebar-brand">
          <div class="brand-badge">W</div>
          <div class="brand-text-stack">
            WEIRDO<br>COMICS
          </div>
        </div>

        <div class="sidebar-category-title">OPERACIÓN</div>
        <nav class="sidebar-menu">
          <a href="resumenA.php" class="sidebar-item">Resumen</a>
          <a href="productosA.php" class="sidebar-item">Productos</a>
          <a href="inventarioA.php" class="sidebar-item">Inventario</a>
          <a href="proveedoresA.php" class="sidebar-item active">Proveedores</a>
          <a href="pedidosA.php" class="sidebar-item">Pedidos</a>
          <a href="ventasA.php" class="sidebar-item">Ventas</a>
          <a href="ticketsA.php" class="sidebar-item">Tickets</a>
        </nav>

        <div class="sidebar-category-title" style="margin-top: 1.5rem;">ANÁLISIS</div>
        <nav class="sidebar-menu">
          <a href="reportesA.php" class="sidebar-item">Reportes</a>
          <a href="usuariosA.php" class="sidebar-item">Usuarios y roles</a>
        </nav>
      </div>

      <div class="sidebar-user-card">
        <div class="user-avatar-initials">KH</div>
        <div class="user-details">
          <div class="user-name">Karen Hernández</div>
          <div class="user-role-label">Administradora</div>
        </div>
      </div>
    </aside>

    <main class="main-content">
      <div class="top-nav-bar">
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>PROVEEDORES</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">DIRECTORIO COMERCIAL</span>
            <h1 class="page-title">Proveedores</h1>
            <p class="page-subtitle">Administra contactos y fuentes de abastecimiento.</p>
          </div>

          <button class="btn-top-action">
            + Nuevo proveedor
          </button>
        </div>

        <div class="providers-grid">
          <div class="provider-card">
            <div>
              <div class="comic-avatar dc" style="margin-bottom: 1rem;">DC</div>
              <h3 class="comic-title" style="font-size: 1rem;">Diamond Comic Dist.</h3>
              <p class="comic-sub">Internacional</p>

              <div class="provider-meta-row">
                <div class="provider-meta-label">Contacto</div>
                <div class="provider-meta-val">contact@diamondcomics.com</div>

                <div class="provider-meta-label">Catálogo vinculado</div>
                <div class="provider-meta-val">48 productos</div>
              </div>
            </div>

            <button class="btn-provider-action">
              Ver proveedor →
            </button>
          </div>

          <div class="provider-card">
            <div>
              <div class="comic-avatar pm" style="margin-bottom: 1rem;">PM</div>
              <h3 class="comic-title" style="font-size: 1rem;">Panini México</h3>
              <p class="comic-sub">Nacional</p>

              <div class="provider-meta-row">
                <div class="provider-meta-label">Contacto</div>
                <div class="provider-meta-val">ventas@panini.com.mx</div>

                <div class="provider-meta-label">Catálogo vinculado</div>
                <div class="provider-meta-val">32 productos</div>
              </div>
            </div>

            <button class="btn-provider-action">
              Ver proveedor →
            </button>
          </div>
        </div>

      </div>
    </main>
  </div>

</body>
</html>
