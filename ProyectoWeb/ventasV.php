<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Punto de Venta - Weirdo Comics</title>
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
          <a href="inventarioV.php" class="sidebar-item">Inventario</a>
          <a href="ventasV.php" class="sidebar-item active">Punto de venta</a>
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
        <div class="breadcrumb-label">WEIRDO COMICS / <strong>PUNTO DE VENTA</strong></div>
        <div class="header-date-badge">Lunes, 2 noviembre</div>
      </div>

      <div class="content-body">
        <div class="page-header-row">
          <div>
            <span class="eyebrow-tag">MOSTRADOR</span>
            <h1 class="page-title">Nueva venta</h1>
            <p class="page-subtitle">Folio #1049 · Caja 01</p>
          </div>
        </div>

        <div class="pos-container">
          <div class="pos-catalog-panel">
            <div style="display: flex; align-items: center; justify-content: space-between; gap: 1rem;">
              <h3 class="panel-title" style="font-size: 0.95rem; white-space: nowrap;">Selecciona productos</h3>
              <input
                type="text"
                class="search-field-wide"
                placeholder="🔍 Buscar título o código..."
                style="max-width: 320px; padding: 0.55rem 0.85rem;"
              >
            </div>

            <div class="pos-items-grid">
              <div class="pos-product-card">
                <div class="comic-cell">
                  <div class="comic-avatar sp">SP</div>
                  <div>
                    <div class="comic-title" style="font-size: 0.8rem;">Spider-Man: Blue</div>
                    <div class="comic-sub">Marvel</div>
                    <div style="font-size: 0.75rem; font-weight: 700; margin-top: 2px;">
                      $449 <span style="font-weight: 400; color: #8e8e93;">12 disponibles</span>
                    </div>
                  </div>
                </div>
                <button class="pos-add-btn">+</button>
              </div>

              <div class="pos-product-card">
                <div class="comic-cell">
                  <div class="comic-avatar bm">BM</div>
                  <div>
                    <div class="comic-title" style="font-size: 0.8rem;">Batman: The Long Hallo..</div>
                    <div class="comic-sub">DC Comics</div>
                    <div style="font-size: 0.75rem; font-weight: 700; margin-top: 2px;">
                      $599 <span style="font-weight: 400; color: #8e8e93;">8 disponibles</span>
                    </div>
                  </div>
                </div>
                <button class="pos-add-btn">+</button>
              </div>

              <div class="pos-product-card">
                <div class="comic-cell">
                  <div class="comic-avatar sg">SG</div>
                  <div>
                    <div class="comic-title" style="font-size: 0.8rem;">Saga Vol. 1</div>
                    <div class="comic-sub">Independiente</div>
                    <div style="font-size: 0.75rem; font-weight: 700; margin-top: 2px;">
                      $329 <span style="font-weight: 400; color: #8e8e93;">3 disponibles</span>
                    </div>
                  </div>
                </div>
                <button class="pos-add-btn">+</button>
              </div>

              <div class="pos-product-card">
                <div class="comic-cell">
                  <div class="comic-avatar cm">CM</div>
                  <div>
                    <div class="comic-title" style="font-size: 0.8rem;">Chainsaw Man Vol. 12</div>
                    <div class="comic-sub">Manga</div>
                    <div style="font-size: 0.75rem; font-weight: 700; margin-top: 2px;">
                      $189 <span style="font-weight: 400; color: #8e8e93;">21 disponibles</span>
                    </div>
                  </div>
                </div>
                <button class="pos-add-btn">+</button>
              </div>

              <div class="pos-product-card">
                <div class="comic-cell">
                  <div class="comic-avatar wm">WM</div>
                  <div>
                    <div class="comic-title" style="font-size: 0.8rem;">Watchmen — Edición Del..</div>
                    <div class="comic-sub">DC Comics</div>
                    <div style="font-size: 0.75rem; font-weight: 700; margin-top: 2px;">
                      $899 <span style="font-weight: 400; color: #8e8e93;">2 disponibles</span>
                    </div>
                  </div>
                </div>
                <button class="pos-add-btn">+</button>
              </div>

              <div class="pos-product-card" style="opacity: 0.65;">
                <div class="comic-cell">
                  <div class="comic-avatar dd">DD</div>
                  <div>
                    <div class="comic-title" style="font-size: 0.8rem;">Daredevil: Born Again</div>
                    <div class="comic-sub">Marvel</div>
                    <div style="font-size: 0.75rem; font-weight: 700; margin-top: 2px;">
                      $479 <span style="color: #dc2626;">Agotado</span>
                    </div>
                  </div>
                </div>
                <button class="pos-add-btn" disabled>+</button>
              </div>
            </div>
          </div>

          <div class="pos-ticket-panel">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: baseline;">
                <h3 class="panel-title" style="font-size: 0.95rem;">Venta actual</h3>
                <span style="font-size: 0.75rem; color: #8e8e93;">0 artículos</span>
              </div>

              <div class="pos-empty-state">
                <div class="cart-icon-circle">🛒</div>
                <strong style="color: #111111; font-size: 0.85rem; margin-bottom: 0.25rem;">Tu venta está vacía</strong>
                <p style="font-size: 0.75rem;">Selecciona productos del catálogo para comenzar.</p>
              </div>
            </div>

            <div>
              <div style="font-size: 0.65rem; font-weight: 800; color: #666666; text-transform: uppercase;">MÉTODO DE PAGO</div>

              <div class="payment-methods-row">
                <button class="pay-btn active">💳 Débito</button>
                <button class="pay-btn">💳 Crédito</button>
                <button class="pay-btn">💵 Efectivo</button>
              </div>

              <div class="ticket-totals-box">
                <div class="totals-line">
                  <span>Subtotal</span>
                  <span>$0.00</span>
                </div>
                <div class="totals-line">
                  <span>IVA (16%)</span>
                  <span>$0.00</span>
                </div>

                <div class="totals-final">
                  <span>Total</span>
                  <span>$0</span>
                </div>

                <button class="btn-checkout-disabled">
                  Cobrar e imprimir ticket 
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

</body>
</html>
