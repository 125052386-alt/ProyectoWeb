<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario (Vendedor) - Weirdo Comics</title>
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
          <a href="resumenV.php" class="sidebar-item">Resumen</a>
          <a href="productosV.php" class="sidebar-item">Productos</a>
          <a href="inventarioV.php" class="sidebar-item active">Inventario</a>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>INVENTARIO</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">CONTROL DE EXISTENCIAS</span>
            <h1 class="page-title">Inventario</h1>
            <p class="page-subtitle">Consulta y actualiza las unidades disponibles.</p>
          </div>
        </div>

        <div class="kpi-row" style="grid-template-columns: 1.1fr 1.1fr 1.1fr;">
          <div class="kpi-card kpi-dark" style="min-height: 140px;">
            <div class="kpi-label">Unidades totales</div>
            <div class="kpi-value" style="font-size: 2.75rem;">46</div>
          </div>

          <div class="kpi-card" style="min-height: 140px;">
            <div class="kpi-label">Valor del inventario</div>
            <div class="kpi-value" style="font-size: 2.75rem;">$16,934</div>
          </div>

          <div class="kpi-card kpi-lime" style="min-height: 140px;">
            <div class="kpi-label">Requieren reposición</div>
            <div class="kpi-value" style="font-size: 2.75rem;">3</div>
          </div>
        </div>

         <div class="filter-bar-row">
          <input
            type="text"
            class="search-field-wide"
            placeholder="Buscar producto"
          >
        </div>

        <div class="inventory-list">
          <div class="inventory-card-item">
            <div class="comic-cell">
              <div class="comic-avatar sp">SP</div>
              <div>
                <div class="comic-title">Spider-Man: Blue</div>
                <div class="comic-sub">MAR-001 · Marvel · $449 c/u</div>
              </div>
            </div>

            <div style="display: flex; align-items: center; gap: 2.5rem;">
              <span class="status-pill disponible">Disponible</span>
              <div class="qty-counter-group">
                <span class="qty-number">12</span>
              </div>
            </div>
          </div>

          <div class="inventory-card-item">
            <div class="comic-cell">
              <div class="comic-avatar bm">BM</div>
              <div>
                <div class="comic-title">Batman: The Long Halloween</div>
                <div class="comic-sub">DC-024 · DC Comics · $599 c/u</div>
              </div>
            </div>

            <div style="display: flex; align-items: center; gap: 2.5rem;">
              <span class="status-pill disponible">Disponible</span>
              <div class="qty-counter-group">
                <span class="qty-number">8</span>
              </div>
            </div>
          </div>

          <div class="inventory-card-item">
            <div class="comic-cell">
              <div class="comic-avatar sg">SG</div>
              <div>
                <div class="comic-title">Saga Vol. 1</div>
                <div class="comic-sub">IND-018 · Independiente · $329 c/u</div>
              </div>
            </div>

            <div style="display: flex; align-items: center; gap: 2.5rem;">
              <span class="status-pill stock-bajo">Stock bajo</span>
              <div class="qty-counter-group">
                <span class="qty-number">3</span>
              </div>
            </div>
          </div>

          <div class="inventory-card-item">
            <div class="comic-cell">
              <div class="comic-avatar cm">CM</div>
              <div>
                <div class="comic-title">Chainsaw Man Vol. 12</div>
                <div class="comic-sub">MAN-042 · Manga · $189 c/u</div>
              </div>
            </div>

            <div style="display: flex; align-items: center; gap: 2.5rem;">
              <span class="status-pill disponible">Disponible</span>
              <div class="qty-counter-group">
                <span class="qty-number">21</span>
              </div>
            </div>
          </div>

          <div class="inventory-card-item">
            <div class="comic-cell">
              <div class="comic-avatar wm">WM</div>
              <div>
                <div class="comic-title">Watchmen — Edición Deluxe</div>
                <div class="comic-sub">DC-037 · DC Comics · $899 c/u</div>
              </div>
            </div>

            <div style="display: flex; align-items: center; gap: 2.5rem;">
              <span class="status-pill stock-bajo">Stock bajo</span>
              <div class="qty-counter-group">
                <span class="qty-number">2</span>
              </div>
            </div>
          </div>

          <div class="inventory-card-item">
            <div class="comic-cell">
              <div class="comic-avatar dd">DD</div>
              <div>
                <div class="comic-title">Daredevil: Born Again</div>
                <div class="comic-sub">MAR-054 · Marvel · $479 c/u</div>
              </div>
            </div>

            <div style="display: flex; align-items: center; gap: 2.5rem;">
              <span class="status-pill agotado">Agotado</span>
              <div class="qty-counter-group">
                <span class="qty-number">0</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

</body>
</html>
