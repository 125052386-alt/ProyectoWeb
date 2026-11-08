<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios y Roles - Weirdo Comics</title>
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
          <a href="proveedoresA.php" class="sidebar-item">Proveedores</a>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>USUARIOS Y ROLES</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">SEGURIDAD & ACCESO</span>
            <h1 class="page-title">Usuarios y roles</h1>
            <p class="page-subtitle">Control de cuentas del personal, roles de caja y niveles de permiso.</p>
          </div>

          <button class="btn-top-action">
            + Nuevo usuario
          </button>
        </div>

        <div class="panel-white">
          <div class="table-responsive">
            <table class="data-table">
              <thead>
                <tr>
                  <th>USUARIO</th>
                  <th>ROL</th>
                  <th>PERMISOS ASIGNADOS</th>
                  <th>ESTADO</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="comic-cell">
                      <div class="user-avatar-initials" style="background-color: #111111; color: #ffffff; width: 36px; height: 36px;">
                        KP
                      </div>
                      <div>
                        <div class="comic-title">Kevin Piña</div>
                        <div class="comic-sub">@kevin.pina · kevin.pina@weirdocomics.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge-role-admin">Vendedor</span>
                  </td>
                  <td>Acceso a ventas · Inventario · Tickets</td>
                  <td>
                    <span class="status-pill disponible">Activo</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </main>
  </div>

</body>
</html>
