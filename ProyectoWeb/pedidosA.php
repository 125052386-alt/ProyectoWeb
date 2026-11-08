<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos - Weirdo Comics</title>
  <link rel="stylesheet" href="./CSS/estilos.css">

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
          <a href="pedidosA.php" class="sidebar-item active">Pedidos</a>
          <a href="ventasA.php" class="sidebar-item ">Ventas</a>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>PEDIDOS</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">ABASTECIMIENTO</span>
            <h1 class="page-title">Pedidos</h1>
            <p class="page-subtitle">Seguimiento de órdenes a proveedores.</p>
          </div>

          <button class="btn-top-action">
            + Registrar pedido
          </button>
        </div>

        <div class="tabs-row">
          <button class="tab-btn active">Todos 24</button>
          <button class="tab-btn">Pendientes 4</button>
          <button class="tab-btn">En tránsito 3</button>
          <button class="tab-btn">Recibidos</button>
        </div>

        <div class="panel-white">
          <div class="table-responsive">
            <table class="data-table">
              <thead>
                <tr>
                  <th>PEDIDO</th>
                  <th>PROVEEDOR</th>
                  <th>FECHA</th>
                  <th>CONTENIDO</th>
                  <th>TOTAL</th>
                  <th>ESTADO</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>PED-0248</strong></td>
                  <td>Diamond Comics</td>
                  <td>22 may 2025</td>
                  <td>48 artículos</td>
                  <td><strong>$18,420</strong></td>
                  <td><span class="status-badge-blue">En tránsito</span></td>
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
