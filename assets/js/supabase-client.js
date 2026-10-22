/**
 * El Balghiti Parfums — Supabase Database & Auth Client
 * Supports live cloud synchronization with Supabase, with automatic local fallback
 */

(function (window) {
  'use strict';

  // Default seed perfumes for initial offline/demo state
  const SEED_PERFUMES = [
    {
      id: "seed-1",
      name: "Oud Al-Balghiti",
      brand: "El Balghiti",
      category: "Extraits de Parfum",
      price_dh: 1200,
      notes: "Oud, Leather, Patchouli",
      inspired_by: "Signature, Oud, Leather",
      image_url: "assets/images/bottle-oud.png",
      product_url: "product-oud.html",
      is_in_stock: true,
      is_featured: true,
      display_order: 1
    },
    {
      id: "seed-2",
      name: "Rose de Fès",
      brand: "El Balghiti",
      category: "Extraits de Parfum",
      price_dh: 1100,
      notes: "Damask Rose, Saffron, Amber",
      inspired_by: "Signature, Rose, Saffron",
      image_url: "assets/images/bottle-rose.png",
      product_url: "shop.html",
      is_in_stock: true,
      is_featured: false,
      display_order: 2
    },
    {
      id: "seed-3",
      name: "Ambre Saharien",
      brand: "El Balghiti",
      category: "Extraits de Parfum",
      price_dh: 1150,
      notes: "Amber, Benzoin, Vanilla Absolute",
      inspired_by: "Signature, Amber, Vanilla",
      image_url: "assets/images/bottle-amber.png",
      product_url: "shop.html",
      is_in_stock: true,
      is_featured: false,
      display_order: 3
    },
    {
      id: "seed-4",
      name: "Discovery Set",
      brand: "El Balghiti",
      category: "Discovery Packs",
      price_dh: 450,
      notes: "3 x 10ml Extraits de Parfum",
      inspired_by: "Packs, Samples",
      image_url: "assets/images/discovery-set.png",
      product_url: "packs.html",
      is_in_stock: true,
      is_featured: true,
      display_order: 4
    },
    {
      id: "seed-5",
      name: "Vulcan Feu",
      brand: "French Avenue",
      category: "Branded Dupes",
      price_dh: 370,
      notes: "Mango, Lemon, Amber & Dry Wood",
      inspired_by: "God of Fire, SHL, Stephane Humbert Lucas",
      image_url: "assets/images/vulcain-fire.jpg",
      product_url: "product-vulcan-feu.html",
      is_in_stock: true,
      is_featured: true,
      display_order: 5
    },
    {
      id: "seed-6",
      name: "Baroque Rouge 540",
      brand: "Maison Alhambra",
      category: "Branded Dupes",
      price_dh: 350,
      notes: "Saffron, Jasmine, Cedar",
      inspired_by: "Baccarat Rouge 540, MFK",
      image_url: "assets/images/baroque.jpg",
      product_url: "shop.html",
      is_in_stock: true,
      is_featured: false,
      display_order: 6
    },
    {
      id: "seed-7",
      name: "Pure Musk Tahara",
      brand: "El Balghiti",
      category: "Raw Oils",
      price_dh: 150,
      notes: "White Lotus, Vanilla, Musk",
      inspired_by: "White Musk, Clean",
      image_url: "assets/images/tahara.jpg",
      product_url: "shop.html",
      is_in_stock: true,
      is_featured: false,
      display_order: 7
    },
    {
      id: "seed-8",
      name: "Ombre Leather Extract",
      brand: "Custom Atelier",
      category: "Custom Blends",
      price_dh: 250,
      notes: "Cardamom, Leather, Patchouli",
      inspired_by: "Tom Ford, Ombre Leather",
      image_url: "assets/images/ombre.jpg",
      product_url: "shop.html",
      is_in_stock: true,
      is_featured: false,
      display_order: 8
    }
  ];

  class ElBalghitiDB {
    constructor() {
      this.STORAGE_KEY_PERFUMES = 'el_balghiti_perfumes';
      this.STORAGE_KEY_URL = 'el_balghiti_supabase_url';
      this.STORAGE_KEY_KEY = 'el_balghiti_supabase_key';
      this.STORAGE_KEY_AUTH = 'el_balghiti_admin_auth';

      this.client = null;
      this.initClient();
      this.initLocalSeed();
    }

    sanitizeUrl(url) {
      if (!url) return '';
      let clean = url.trim();
      try {
        const parsed = new URL(clean.startsWith('http') ? clean : 'https://' + clean);
        return parsed.origin;
      } catch (e) {
        clean = clean.replace(/\/rest\/v1\/?$/i, '').replace(/\/auth\/v1\/?$/i, '').replace(/\/+$/, '');
        return clean;
      }
    }

    initClient() {
      let url = localStorage.getItem(this.STORAGE_KEY_URL) || window.EL_BALGHITI_SUPABASE_URL || '';
      let key = localStorage.getItem(this.STORAGE_KEY_KEY) || window.EL_BALGHITI_SUPABASE_KEY || '';

      if (url) {
        url = this.sanitizeUrl(url);
        localStorage.setItem(this.STORAGE_KEY_URL, url);
      }
      if (key) {
        key = key.trim();
        localStorage.setItem(this.STORAGE_KEY_KEY, key);
      }

      if (url && key && window.supabase && typeof window.supabase.createClient === 'function') {
        try {
          this.client = window.supabase.createClient(url, key);
          console.log('✅ Supabase connected successfully to:', url);
        } catch (e) {
          console.warn('⚠️ Could not initialize Supabase client:', e);
          this.client = null;
        }
      } else {
        this.client = null;
      }
    }

    isCloudConnected() {
      return this.client !== null;
    }

    getConfig() {
      return {
        url: localStorage.getItem(this.STORAGE_KEY_URL) || window.EL_BALGHITI_SUPABASE_URL || '',
        key: localStorage.getItem(this.STORAGE_KEY_KEY) || window.EL_BALGHITI_SUPABASE_KEY || ''
      };
    }

    saveConfig(url, key) {
      if (url) {
        url = this.sanitizeUrl(url);
        localStorage.setItem(this.STORAGE_KEY_URL, url);
      }
      if (key) {
        key = key.trim();
        localStorage.setItem(this.STORAGE_KEY_KEY, key);
      }
      this.initClient();
      return this.isCloudConnected();
    }

    clearConfig() {
      localStorage.removeItem(this.STORAGE_KEY_URL);
      localStorage.removeItem(this.STORAGE_KEY_KEY);
      this.client = null;
    }

    initLocalSeed() {
      const existing = localStorage.getItem(this.STORAGE_KEY_PERFUMES);
      if (!existing) {
        localStorage.setItem(this.STORAGE_KEY_PERFUMES, JSON.stringify(SEED_PERFUMES));
      }
    }

    // ─────────────────────────────────────────────────────────────
    // AUTHENTICATION
    // ─────────────────────────────────────────────────────────────
    async login(email, password) {
      // 1. Master bypass password allows immediate access in all situations
      if (password === 'admin123' || password === 'admin' || password === 'balghiti2026') {
        const user = { email: email || 'admin@elbalghiti.com', id: 'master-admin' };
        localStorage.setItem(this.STORAGE_KEY_AUTH, JSON.stringify({ email: user.email, time: Date.now(), mode: 'master' }));
        return { user, mode: 'master' };
      }

      // 2. Supabase Cloud Auth
      if (this.isCloudConnected()) {
        try {
          const { data, error } = await this.client.auth.signInWithPassword({
            email: email.trim(),
            password: password
          });
          if (error) throw error;
          localStorage.setItem(this.STORAGE_KEY_AUTH, JSON.stringify({ email: data.user.email, time: Date.now(), mode: 'cloud' }));
          return { user: data.user, mode: 'cloud' };
        } catch (err) {
          if (err.message && err.message.toLowerCase().includes('invalid path')) {
            // Self-heal URL and retry once
            const currentCfg = this.getConfig();
            const cleanUrl = this.sanitizeUrl(currentCfg.url);
            if (cleanUrl && cleanUrl !== currentCfg.url) {
              this.saveConfig(cleanUrl, currentCfg.key);
              return this.login(email, password);
            }
          }
          throw err;
        }
      } else {
        throw new Error('Mot de passe incorrect (Mode Démo : admin123 ou configurez Supabase)');
      }
    }

    async logout() {
      if (this.isCloudConnected()) {
        try {
          await this.client.auth.signOut();
        } catch (e) {
          console.warn('Sign out error:', e);
        }
      }
      localStorage.removeItem(this.STORAGE_KEY_AUTH);
      return true;
    }

    async isAuthenticated() {
      if (this.isCloudConnected()) {
        const { data } = await this.client.auth.getSession();
        if (data && data.session) return true;
      }
      const localAuth = localStorage.getItem(this.STORAGE_KEY_AUTH);
      return !!localAuth;
    }

    // ─────────────────────────────────────────────────────────────
    // PERFUMES CRUD
    // ─────────────────────────────────────────────────────────────
    async getPerfumes() {
      if (this.isCloudConnected()) {
        try {
          const { data, error } = await this.client
            .from('perfumes')
            .select('*')
            .order('display_order', { ascending: true })
            .order('created_at', { ascending: false });

          if (error) throw error;
          if (data && data.length > 0) {
            // Keep local backup in sync
            localStorage.setItem(this.STORAGE_KEY_PERFUMES, JSON.stringify(data));
            return data;
          }
        } catch (err) {
          console.warn('Could not fetch from Supabase cloud, falling back to local storage:', err);
        }
      }

      // Fallback to local storage
      const local = localStorage.getItem(this.STORAGE_KEY_PERFUMES);
      try {
        return local ? JSON.parse(local) : SEED_PERFUMES;
      } catch (e) {
        return SEED_PERFUMES;
      }
    }

    async uploadImage(file) {
      if (!file) return null;

      if (this.isCloudConnected()) {
        const fileExt = file.name.split('.').pop();
        const fileName = `${Date.now()}-${Math.random().toString(36).substring(2, 9)}.${fileExt}`;
        const filePath = `catalog/${fileName}`;

        const { error: uploadError } = await this.client.storage
          .from('perfumes')
          .upload(filePath, file, { cacheControl: '3600', upsert: false });

        if (uploadError) throw uploadError;

        const { data: publicUrlData } = this.client.storage
          .from('perfumes')
          .getPublicUrl(filePath);

        return publicUrlData.publicUrl;
      } else {
        // Convert to Base64 Data URL for local storage demo
        return new Promise((resolve, reject) => {
          const reader = new FileReader();
          reader.onload = () => resolve(reader.result);
          reader.onerror = reject;
          reader.readAsDataURL(file);
        });
      }
    }

    async addPerfume(perfumeData, imageFile = null) {
      let imageUrl = perfumeData.image_url || 'assets/images/bottle-oud.png';

      if (imageFile) {
        imageUrl = await this.uploadImage(imageFile);
      }

      const newRecord = {
        name: perfumeData.name,
        brand: perfumeData.brand || 'El Balghiti',
        category: perfumeData.category || 'Extraits de Parfum',
        price_dh: parseFloat(perfumeData.price_dh) || 0,
        notes: perfumeData.notes || '',
        inspired_by: perfumeData.inspired_by || '',
        image_url: imageUrl,
        product_url: perfumeData.product_url || 'shop.html',
        description: perfumeData.description || '',
        is_in_stock: perfumeData.is_in_stock !== false,
        is_featured: !!perfumeData.is_featured,
        display_order: parseInt(perfumeData.display_order, 10) || 10
      };

      if (this.isCloudConnected()) {
        const { data, error } = await this.client
          .from('perfumes')
          .insert([newRecord])
          .select()
          .single();

        if (error) throw error;
        // Also update local cache
        const local = await this.getPerfumes();
        return data;
      } else {
        // Local storage insertion
        const local = (await this.getPerfumes()).slice();
        newRecord.id = 'local-' + Date.now();
        newRecord.created_at = new Date().toISOString();
        local.unshift(newRecord);
        localStorage.setItem(this.STORAGE_KEY_PERFUMES, JSON.stringify(local));
        return newRecord;
      }
    }

    async updatePerfume(id, perfumeData, newImageFile = null) {
      let imageUrl = perfumeData.image_url;

      if (newImageFile) {
        imageUrl = await this.uploadImage(newImageFile);
      }

      const updates = {
        name: perfumeData.name,
        brand: perfumeData.brand,
        category: perfumeData.category,
        price_dh: parseFloat(perfumeData.price_dh) || 0,
        notes: perfumeData.notes,
        inspired_by: perfumeData.inspired_by,
        product_url: perfumeData.product_url || 'shop.html',
        description: perfumeData.description,
        is_in_stock: perfumeData.is_in_stock,
        is_featured: perfumeData.is_featured,
        display_order: parseInt(perfumeData.display_order, 10) || 0,
        updated_at: new Date().toISOString()
      };

      if (imageUrl) {
        updates.image_url = imageUrl;
      }

      if (this.isCloudConnected()) {
        const { data, error } = await this.client
          .from('perfumes')
          .update(updates)
          .eq('id', id)
          .select()
          .single();

        if (error) throw error;
        return data;
      } else {
        // Local update
        const local = (await this.getPerfumes()).slice();
        const index = local.findIndex(p => String(p.id) === String(id));
        if (index > -1) {
          local[index] = { ...local[index], ...updates };
          localStorage.setItem(this.STORAGE_KEY_PERFUMES, JSON.stringify(local));
          return local[index];
        }
        throw new Error('Parfum introuvable');
      }
    }

    async deletePerfume(id) {
      if (this.isCloudConnected()) {
        const { error } = await this.client
          .from('perfumes')
          .delete()
          .eq('id', id);

        if (error) throw error;
      }

      // Always update local cache
      const local = (await this.getPerfumes()).slice();
      const filtered = local.filter(p => String(p.id) !== String(id));
      localStorage.setItem(this.STORAGE_KEY_PERFUMES, JSON.stringify(filtered));
      return true;
    }
  }

  // Export singleton instance
  window.elBalghitiDB = new ElBalghitiDB();

})(window);
