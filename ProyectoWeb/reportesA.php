<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reportes - Weirdo Comics</title>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>REPORTES</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">INTELIGENCIA DEL NEGOCIO</span>
            <h1 class="page-title">Reportes</h1>
            <p class="page-subtitle">Indicadores para tomar mejores decisiones.</p>
          </div>

          <button class="btn-top-action-white">
            Exportar reporte
          </button>
        </div>

        <div class="kpi-row" style="grid-template-columns: 1.2fr 1fr 1fr;">
          <div class="kpi-card kpi-dark">
            <div>
              <div class="kpi-label">Ventas del mes</div>
              <div class="kpi-value">$284,650</div>
            </div>
            <div class="kpi-subtext">↑ 12.8% contra abril</div>
          </div>

          <div class="kpi-card">
            <div>
              <div class="kpi-label">Ticket promedio</div>
              <div class="kpi-value">$486</div>
            </div>
          </div>

          <div class="kpi-card">
            <div>
              <div class="kpi-label">Productos vendidos</div>
              <div class="kpi-value">1,748</div>
            </div>
          </div>
        </div>

        <div class="reports-two-col">
          <div class="panel-white" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <h3 class="panel-title" style="font-size: 1rem;">Ventas por categoría</h3>
              <p class="panel-subtitle" style="margin-bottom: 1.5rem;">Distribución del mes actual</p>

              <div style="display: flex; align-items: center; justify-content: space-around; gap: 1.5rem; margin: 1.5rem 0;">
                <div class="donut-representation">
                  <div class="donut-inner-hole">
                    <span>100%</span>
                    <span style="font-size: 0.65rem; color: #8e8e93; font-weight: 500;">ventas</span>
                  </div>
                </div>

                <div style="width: 170px;">
                  <div class="donut-legend-row">
                    <span style="display: flex; align-items: center; gap: 0.4rem;">
                      <span class="legend-swatch" style="background-color: #d4f934;"></span> Marvel
                    </span>
                    <strong>34%</strong>
                  </div>
                  <div class="donut-legend-row">
                    <span style="display: flex; align-items: center; gap: 0.4rem;">
                      <span class="legend-swatch" style="background-color: #111111;"></span> DC Comics
                    </span>
                    <strong>28%</strong>
                  </div>
                  <div class="donut-legend-row">
                    <span style="display: flex; align-items: center; gap: 0.4rem;">
                      <span class="legend-swatch" style="background-color: #6b46c1;"></span> Manga
                    </span>
                    <strong>23%</strong>
                  </div>
                  <div class="donut-legend-row">
                    <span style="display: flex; align-items: center; gap: 0.4rem;">
                      <span class="legend-swatch" style="background-color: #d97736;"></span> Independiente
                    </span>
                    <strong>15%</strong>
                  </div>
                </div>
              </div>
            </div>

            <div style="border-top: 1px solid #ececf0; padding-top: 0.85rem; display: flex; justify-content: space-between; font-size: 0.75rem;">
              <span style="color: #6e6e73;">Mayor crecimiento intermensual:</span>
              <strong>Manga (+18%)</strong>
            </div>
          </div>

          <div class="panel-white" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <h3 class="panel-title" style="font-size: 1rem;">Productos más vendidos</h3>
              <p class="panel-subtitle" style="margin-bottom: 1.25rem;">Top 5 del mes</p>

              <div>
                <div class="top-product-row">
                  <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <span class="top-rank-num">1</span>
                    <div class="comic-avatar sp">SP</div>
                    <div>
                      <div class="comic-title">Spider-Man: Blue</div>
                      <div class="comic-sub">Marvel</div>
                    </div>
                  </div>
                  <strong>82 uds.</strong>
                </div>

                <div class="top-product-row">
                  <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <span class="top-rank-num">2</span>
                    <div class="comic-avatar bm">BM</div>
                    <div>
                      <div class="comic-title">Batman: The Long Halloween</div>
                      <div class="comic-sub">DC Comics</div>
                    </div>
                  </div>
                  <strong>74 uds.</strong>
                </div>

                <div class="top-product-row">
                  <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <span class="top-rank-num">3</span>
                    <div class="comic-avatar sg">SG</div>
                    <div>
                      <div class="comic-title">Saga Vol. 1</div>
                      <div class="comic-sub">Independiente</div>
                    </div>
                  </div>
                  <strong>61 uds.</strong>
                </div>

                <div class="top-product-row">
                  <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <span class="top-rank-num">4</span>
                    <div class="comic-avatar cm">CM</div>
                    <div>
                      <div class="comic-title">Chainsaw Man Vol. 12</div>
                      <div class="comic-sub">Manga</div>
                    </div>
                  </div>
                  <strong>58 uds.</strong>
                </div>

                <div class="top-product-row">
                  <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <span class="top-rank-num">5</span>
                    <div class="comic-avatar wm">WM</div>
                    <div>
                      <div class="comic-title">Watchmen — Edición Deluxe</div>
                      <div class="comic-sub">DC Comics</div>
                    </div>
                  </div>
                  <strong>43 uds.</strong>
                </div>
              </div>
            </div>

            <div style="border-top: 1px solid #ececf0; padding-top: 0.85rem; display: flex; justify-content: space-between; font-size: 0.75rem;">
              <span style="color: #6e6e73;">Aporte del top 5 a la facturación:</span>
              <strong>48.2% del volumen</strong>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

</body>
</html>
