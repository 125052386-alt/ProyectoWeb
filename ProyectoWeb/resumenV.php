<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resumen (Vendedor) - Weirdo Comics</title>
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
          <a href="resumenV.php" class="sidebar-item active">Resumen</a>
          <a href="productosV.php" class="sidebar-item">Productos</a>
          <a href="inventarioV.php" class="sidebar-item">Inventario</a>
          <a href="ventasV.php" class="sidebar-item">Punto de venta</a>
          <a href="ticketsV.php" class="sidebar-item">Tickets</a>
        </nav>
      </div>

      <div class="sidebar-user-card">
        <div class="user-avatar-initials" style="background-color: #1e293b; color: #38bdf8;">KP</div>
        <div class="user-details">
          <div class="user-name">Kevin Piña</div>
          <div class="user-role-label">Vendedor</div>
        </div>
      </div>
    </aside>

    <main class="main-content">
      <div class="top-nav-bar">
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>RESUMEN (VENDEDOR)</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag blue">TURNO VESPERTINO · CAJA 01</span>
            <h1 class="page-title">
              Hola, Kevin. <span style="color: #84cc16;">Listo para vender.</span>
            </h1>
            <p class="page-subtitle">Resumen operativo de tu mostrador hoy en Weirdo Comics.</p>
          </div>

          <a href="ventasV.php" class="btn-top-action" style="padding: 0.75rem 1.4rem; font-size: 0.825rem;">
            Abrir Punto de Venta
          </a>
        </div>

        <div class="kpi-row" style="grid-template-columns: 1.1fr 1fr 1.1fr; margin-bottom: 1.5rem;">
          <div class="kpi-card kpi-dark">
            <div>
              <div class="kpi-label">Venta de mi turno</div>
              <div class="kpi-value">$4,820</div>
            </div>
            <div class="kpi-subtext" style="color: #4ade80;">Meta turno: 80% completada</div>
          </div>

          <div class="kpi-card">
            <div>
              <div class="kpi-label">Tickets emitidos</div>
              <div class="kpi-value">14</div>
            </div>
            <div class="kpi-subtext" style="color: #16a34a;">Promedio: $385 / ticket</div>
          </div>

          <div class="kpi-card">
            <div>
              <div class="kpi-label">Más vendido en turno</div>
              <div class="kpi-product-title">Chainsaw Man 12</div>
            </div>
            <div class="kpi-subtext">6 copias vendidas hoy</div>
          </div>
        </div>

        <div class="banner-quick-pos">
          <div class="banner-quick-info">
            <div class="banner-quick-eyebrow">ACCESO RÁPIDO A CAJA</div>
            <h3 class="banner-quick-title">¿Cliente en mostrador listo para pagar?</h3>
            <p class="banner-quick-desc">
              Abre el punto de venta para escanear cómics, calcular IVA y emitir ticket térmico.
            </p>
          </div>

          <a href="ventasV.php" class="btn-cobrar-ahora">
            Cobrar Ahora
          </a>
        </div>

        <div class="panel-white">
          <div class="panel-header-flex" style="margin-bottom: 1.25rem;">
            <div>
              <h3 class="panel-title">Mis tickets emitidos hoy</h3>
              <p class="panel-subtitle">Operaciones cobradas en esta estación</p>
            </div>
          </div>

          <div class="table-responsive">
            <table class="data-table">
              <thead>
                <tr>
                  <th>FOLIO</th>
                  <th>HORA</th>
                  <th>MÉTODO</th>
                  <th>TOTAL</th>
                  <th>ACCIÓN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>#1048</strong></td>
                  <td>13:15</td>
                  <td>Efectivo</td>
                  <td><strong>$599</strong></td>
                  <td>
                    <a href="ticketsV.php" class="btn-pill-reimprimir">Ver Ticket</a>
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
