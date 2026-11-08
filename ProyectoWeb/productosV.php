<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos - Weirdo Comics</title>
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
          <a href="resumenV.php" class="sidebar-item">Resumen</a>
          <a href="productosV.php" class="sidebar-item active">Productos</a>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>PRODUCTOS</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">CATÁLOGO</span>
            <h1 class="page-title">Productos</h1>
            <p class="page-subtitle">6 productos en el catálogo activo.</p>
          </div>

          <button class="btn-top-action">
            + Agregar producto
          </button>
        </div>

        <div class="filter-bar-row">
          <input
            type="text"
            class="search-field-wide"
            placeholder="Buscar por nombre, código o categoría"
          >

          <button class="dropdown-pill">
            Todas las categorías
          </button>
        </div>

        <div class="panel-white">
          <div class="table-responsive">
            <table class="data-table">
              <thead>
                <tr>
                  <th>PRODUCTO</th>
                  <th>CATEGORÍA</th>
                  <th>PRECIO</th>
                  <th>EXISTENCIAS</th>
                  <th>ESTADO</th>
                  <th>ACCIÓN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="comic-cell">
                      <div class="comic-avatar sp">SP</div>
                      <div>
                        <div class="comic-title">Spider-Man: Blue</div>
                        <div class="comic-sub">MAR-001</div>
                      </div>
                    </div>
                  </td>
                  <td>Marvel</td>
                  <td><strong>$449</strong></td>
                  <td>12 unidades</td>
                  <td><span class="status-pill disponible">Disponible</span></td>
                  <td><a href="ventasA.php" class="action-link">Vender →</a></td>
                </tr>

                <tr>
                  <td>
                    <div class="comic-cell">
                      <div class="comic-avatar bm">BM</div>
                      <div>
                        <div class="comic-title">Batman: The Long Halloween</div>
                        <div class="comic-sub">DC-024</div>
                      </div>
                    </div>
                  </td>
                  <td>DC Comics</td>
                  <td><strong>$599</strong></td>
                  <td>8 unidades</td>
                  <td><span class="status-pill disponible">Disponible</span></td>
                  <td><a href="ventasA.php" class="action-link">Vender →</a></td>
                </tr>

                <tr>
                  <td>
                    <div class="comic-cell">
                      <div class="comic-avatar sg">SG</div>
                      <div>
                        <div class="comic-title">Saga Vol. 1</div>
                        <div class="comic-sub">IND-018</div>
                      </div>
                    </div>
                  </td>
                  <td>Independiente</td>
                  <td><strong>$329</strong></td>
                  <td>3 unidades</td>
                  <td><span class="status-pill stock-bajo">Stock bajo</span></td>
                  <td><a href="ventasA.php" class="action-link">Vender →</a></td>
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
