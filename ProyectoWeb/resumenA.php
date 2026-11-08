<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resumen - Weirdo Comics</title>
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
          <a href="resumenA.php" class="sidebar-item active">Resumen</a>
          <a href="productosA.php" class="sidebar-item">Productos</a>
          <a href="inventarioA.php" class="sidebar-item">Inventario</a>
          <a href="proveedoresA.php" class="sidebar-item">Proveedores</a>
          <a href="pedidosA.php" class="sidebar-item">Pedidos</a>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>RESUMEN</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">LUNES, 2 DE NOVIEMBRE</span>
            <h1 class="page-title">Hola, Karen. Todo en orden.</h1>
            <p class="page-subtitle">Esto es lo que está pasando hoy en Weirdo Comics.</p>
          </div>

          <a href="ventasA.php" class="btn-top-action">
            + Nueva venta
          </a>
        </div>

        <div class="kpi-row">
          <div class="kpi-card kpi-dark">
            <div>
              <div class="kpi-label">Ventas de hoy</div>
              <div class="kpi-value">$12,450</div>
            </div>
            <div class="kpi-subtext">↑ 18.4% vs. ayer</div>
          </div>

          <div class="kpi-card">
            <div>
              <div class="kpi-label">Operaciones</div>
              <div class="kpi-value">38</div>
            </div>
          </div>

          <div class="kpi-card">
            <div>
              <div class="kpi-label">Productos activos</div>
              <div class="kpi-value">1,284</div>
            </div>
          </div>

          <div class="kpi-card">
            <div>
              <div class="kpi-label">Stock bajo</div>
              <div class="kpi-value">19</div>
            </div>
            <div class="kpi-subtext text-orange">Requieren atención</div>
          </div>
        </div>

        <div class="weekly-bars-box">
          <h3 class="panel-title" style="font-size: 0.95rem;">Ventas de la semana</h3>

          <div class="bars-chart">
            <div class="bar-column">
              <div class="bar-fill-lime" style="height: 40px;"></div>
              <span class="bar-day-name">Lun</span>
            </div>
            <div class="bar-column">
              <div class="bar-fill-lime" style="height: 60px;"></div>
              <span class="bar-day-name">Mar</span>
            </div>
            <div class="bar-column">
              <div class="bar-fill-lime" style="height: 35px;"></div>
              <span class="bar-day-name">Mie</span>
            </div>
            <div class="bar-column">
              <div class="bar-fill-lime" style="height: 15px;"></div>
              <span class="bar-day-name">Jue</span>
            </div>
            <div class="bar-column">
              <div class="bar-fill-lime" style="height: 55px;"></div>
              <span class="bar-day-name">Vie</span>
            </div>
            <div class="bar-column">
              <div class="bar-fill-lime" style="height: 100px;"></div>
              <span class="bar-day-name">Sab</span>
            </div>
            <div class="bar-column">
              <div class="bar-fill-lime" style="height: 115px;"></div>
              <span class="bar-day-name">Dom</span>
            </div>
          </div>
        </div>

        <div class="panel-white">
          <div class="panel-header-flex">
            <div>
              <h3 class="panel-title">Ventas recientes</h3>
              <p class="panel-subtitle">Últimas operaciones registradas</p>
            </div>
            <a href="reportesA.php" class="panel-action-link">Ver reporte</a>
          </div>

          <div class="table-responsive">
            <table class="data-table">
              <thead>
                <tr>
                  <th>FOLIO</th>
                  <th>HORA</th>
                  <th>ARTÍCULOS</th>
                  <th>TOTAL</th>
                  <th>ESTADO</th>
                  <th>ACCIÓN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>#1049</strong></td>
                  <td>14:32</td>
                  <td>3 artículos</td>
                  <td><strong>$1,227</strong></td>
                  <td><span class="status-pill completado">Completado</span></td>
                  <td><a href="ticketsA.php" class="action-link">Ver ticket →</a></td>
                </tr>
                <tr>
                  <td><strong>#1048</strong></td>
                  <td>13:15</td>
                  <td>1 artículos</td>
                  <td><strong>$599</strong></td>
                  <td><span class="status-pill completado">Completado</span></td>
                  <td><a href="ticketsA.php" class="action-link">Ver ticket</a></td>
                </tr>
                <tr>
                  <td><strong>#1047</strong></td>
                  <td>12:40</td>
                  <td>3 artículos</td>
                  <td><strong>$1,987</strong></td>
                  <td><span class="status-pill completado">Completado</span></td>
                  <td><a href="ticketsA.php" class="action-link">Ver ticket</a></td>
                </tr>
                <tr>
                  <td><strong>#1046</strong></td>
                  <td>11:20</td>
                  <td>3 artículos</td>
                  <td><strong>$827</strong></td>
                  <td><span class="status-pill completado">Completado</span></td>
                  <td><a href="ticketsA.php" class="action-link">Ver ticket</a></td>
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
