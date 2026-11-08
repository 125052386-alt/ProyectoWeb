<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tickets - Weirdo Comics</title>
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
          <a href="ticketsA.php" class="sidebar-item active">Tickets</a>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>TICKETS</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">AUDITORÍA & COMPROBANTES</span>
            <h1 class="page-title">Tickets</h1>
            <p class="page-subtitle">Registro de comprobantes fiscales simplificados y reimpresión térmica.</p>
          </div>
        </div>

        <div class="panel-white">
          <div class="table-responsive">
            <table class="data-table">
              <thead>
                <tr>
                  <th>FOLIO</th>
                  <th>HORA</th>
                  <th>CAJERO</th>
                  <th>MÉTODO</th>
                  <th>TOTAL</th>
                  <th>ACCIÓN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>#1049</strong></td>
                  <td>14:32</td>
                  <td>Karen Hernández</td>
                  <td>Tarjeta de Débito</td>
                  <td><strong>$1,227</strong></td>
                  <td>
                    <button class="btn-pill-reimprimir">Reimprimir</button>
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
