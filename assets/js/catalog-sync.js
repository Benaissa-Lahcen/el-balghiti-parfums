/**
 * El Balghiti Parfums — Dynamic Catalog Synchronizer
 * Connects the Catalogue Grid & Search with Supabase / Local Admin Database
 */

(function () {
  'use strict';

  let allProducts = [];
  let currentCategory = 'ALL';

  function initCatalog() {
    const grid = document.getElementById('catalog-grid');
    if (!grid) return;

    // Filter clicks
    const filterContainer = document.querySelector('.overflow-x-auto');
    if (filterContainer) {
      const filterLinks = filterContainer.querySelectorAll('a');
      filterLinks.forEach(link => {
        link.addEventListener('click', (e) => {
          e.preventDefault();
          filterLinks.forEach(l => {
            l.classList.remove('border-b', 'border-black', 'dark:border-white', 'text-[var(--t-text)]');
            l.classList.add('text-[var(--t-text-muted)]');
          });
          link.classList.add('border-b', 'border-black', 'dark:border-white', 'text-[var(--t-text)]');
          link.classList.remove('text-[var(--t-text-muted)]');

          const key = link.getAttribute('data-i18n') || link.innerText.trim();
          if (key === 'filterAll' || link.innerText.trim().toLowerCase() === 'all') {
            currentCategory = 'ALL';
          } else if (key === 'filterExtraits' || link.innerText.includes('Extrait')) {
            currentCategory = 'Extraits de Parfum';
          } else if (key === 'filterRawOils' || link.innerText.includes('Raw')) {
            currentCategory = 'Raw Oils';
          } else if (key === 'filterDiscovery' || link.innerText.includes('Discovery')) {
            currentCategory = 'Discovery Packs';
          } else if (link.innerText.includes('Dupe') || link.innerText.includes('Branded')) {
            currentCategory = 'Branded Dupes';
          } else {
            currentCategory = 'ALL';
          }

          renderGrid();
        });
      });
    }

    loadProducts();
  }

  async function loadProducts() {
    const grid = document.getElementById('catalog-grid');
    if (!grid) return;

    if (window.elBalghitiDB && typeof window.elBalghitiDB.getPerfumes === 'function') {
      try {
        allProducts = await window.elBalghitiDB.getPerfumes();
        
        // Update global perfumeCatalog in app.js for Smart Search
        if (typeof perfumeCatalog !== 'undefined' && Array.isArray(perfumeCatalog)) {
          allProducts.forEach(p => {
            const exists = perfumeCatalog.find(item => item.name.toLowerCase() === p.name.toLowerCase());
            if (!exists) {
              perfumeCatalog.push({
                name: p.name,
                brand: p.brand || 'El Balghiti',
                inspiredBy: p.inspired_by ? p.inspired_by.split(',').map(s => s.trim()) : [],
                type: p.category,
                notes: p.notes,
                price: (p.price_dh || 0) + ' DH',
                image: p.image_url || 'assets/images/bottle-oud.png',
                url: p.product_url || 'shop.html'
              });
            }
          });
        }

        renderGrid();
      } catch (e) {
        console.warn('Could not load dynamic products, retaining static cards:', e);
      }
    }
  }

  function renderGrid() {
    const grid = document.getElementById('catalog-grid');
    if (!grid || !allProducts || allProducts.length === 0) return;

    const filtered = allProducts.filter(p => {
      if (currentCategory === 'ALL') return true;
      if (currentCategory === 'Extraits de Parfum') {
        return p.category === 'Extraits de Parfum' || p.category === 'Branded Dupes';
      }
      return p.category === currentCategory;
    });

    if (filtered.length === 0) {
      grid.innerHTML = `
        <div class="col-span-full py-16 text-center text-[var(--t-text-muted)] font-cormorant text-xl">
          Aucun parfum trouvé dans cette catégorie.
        </div>
      `;
      return;
    }

    grid.innerHTML = filtered.map(p => {
      const isOut = p.is_in_stock === false;
      const targetUrl = p.product_url || 'shop.html';
      const isExternalOrSub = targetUrl.includes('.html') ? targetUrl : 'shop.html';

      return `
        <article class="product-card group relative">
          <a href="${targetUrl}" class="product-image-link block mb-6 overflow-hidden relative" aria-label="Découvrir ${p.name}">
            <div class="aspect-[4/5] bg-[var(--t-border)] relative flex items-center justify-center p-2 overflow-hidden">
              <img src="${p.image_url || 'assets/images/bottle-oud.png'}" 
                   alt="${p.name}" 
                   class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 ${isOut ? 'opacity-60 grayscale' : ''}">
              
              ${isOut ? `
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                  <span class="bg-black/90 text-white border border-white/20 text-[0.62rem] font-mono tracking-[0.25em] uppercase px-3 py-1.5 rounded-sm">
                    Épuisé / Out of Stock
                  </span>
                </div>
              ` : ''}

              ${p.is_featured ? `
                <div class="absolute top-3 left-3">
                  <span class="bg-[#d4af37] text-black font-semibold text-[0.58rem] tracking-[0.2em] uppercase px-2 py-0.5 rounded-sm font-mono shadow">
                    Vedette
                  </span>
                </div>
              ` : ''}
            </div>
          </a>

          <div class="text-center">
            <span class="block font-mono text-[0.62rem] uppercase tracking-widest text-[var(--t-text-muted)] mb-1">
              ${p.brand || 'El Balghiti'} • ${p.price_dh} DH
            </span>
            <h3 class="font-montserrat font-medium text-xs tracking-[0.3em] uppercase text-[var(--t-text)] mb-2">
              <a href="${targetUrl}" class="hover:text-[var(--t-text-secondary)] transition-colors">${p.name}</a>
            </h3>
            <p class="font-cormorant text-lg italic text-[var(--t-text-secondary)] mb-4 max-w-xs mx-auto truncate">
              ${p.notes || ''}
            </p>
            <div class="flex items-center justify-center gap-4">
              <a href="${targetUrl}" class="product-discover text-[0.62rem] tracking-[0.25em] uppercase text-[var(--t-text-muted)] hover:text-[var(--t-text)] border-b border-transparent hover:border-[var(--t-text)] pb-0.5 transition-all">
                Découvrir
              </a>
            </div>
          </div>
        </article>
      `;
    }).join('');
  }

  // Hook up when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCatalog);
  } else {
    initCatalog();
  }

})();
