-- ====================================================================
-- EL BALGHITI PARFUMS — SUPABASE DATABASE SCHEMA
-- Run this script in the Supabase SQL Editor (https://supabase.com/dashboard)
-- ====================================================================

-- 1. Create the `perfumes` table
CREATE TABLE IF NOT EXISTS public.perfumes (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    created_at TIMESTAMP WITH TIME ZONE DEFAULT timezone('utc'::text, now()) NOT NULL,
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT timezone('utc'::text, now()) NOT NULL,
    name TEXT NOT NULL,
    brand TEXT NOT NULL DEFAULT 'El Balghiti',
    category TEXT NOT NULL DEFAULT 'Extraits de Parfum',
    price_dh NUMERIC(10, 2) NOT NULL,
    notes TEXT,
    inspired_by TEXT,
    image_url TEXT,
    product_url TEXT DEFAULT 'shop.html',
    description TEXT,
    is_in_stock BOOLEAN DEFAULT true,
    is_featured BOOLEAN DEFAULT false,
    display_order INT DEFAULT 0
);

-- 2. Enable Row Level Security (RLS)
ALTER TABLE public.perfumes ENABLE ROW LEVEL SECURITY;

-- 3. RLS Policies:
-- Allow ANYONE (public visitors) to view all perfumes
CREATE POLICY "Public Read Access" 
ON public.perfumes 
FOR SELECT 
USING (true);

-- Allow only authenticated admins to INSERT perfumes
CREATE POLICY "Admin Insert Access" 
ON public.perfumes 
FOR INSERT 
TO authenticated 
WITH CHECK (true);

-- Allow only authenticated admins to UPDATE perfumes
CREATE POLICY "Admin Update Access" 
ON public.perfumes 
FOR UPDATE 
TO authenticated 
USING (true)
WITH CHECK (true);

-- Allow only authenticated admins to DELETE perfumes
CREATE POLICY "Admin Delete Access" 
ON public.perfumes 
FOR DELETE 
TO authenticated 
USING (true);

-- 4. Create the Storage Bucket for perfume product photos
INSERT INTO storage.buckets (id, name, public) 
VALUES ('perfumes', 'perfumes', true)
ON CONFLICT (id) DO NOTHING;

-- 5. Storage Policies:
-- Allow anyone to view perfume images
CREATE POLICY "Public Image Access" 
ON storage.objects 
FOR SELECT 
USING (bucket_id = 'perfumes');

-- Allow authenticated admins to upload perfume images
CREATE POLICY "Admin Upload Image" 
ON storage.objects 
FOR INSERT 
TO authenticated 
WITH CHECK (bucket_id = 'perfumes');

-- Allow authenticated admins to update/delete perfume images
CREATE POLICY "Admin Modify Image" 
ON storage.objects 
FOR UPDATE 
TO authenticated 
USING (bucket_id = 'perfumes');

CREATE POLICY "Admin Delete Image" 
ON storage.objects 
FOR DELETE 
TO authenticated 
USING (bucket_id = 'perfumes');

-- 6. Seed initial flagship perfumes
INSERT INTO public.perfumes (name, brand, category, price_dh, notes, inspired_by, image_url, product_url, is_featured, display_order)
VALUES 
    ('Oud Al-Balghiti', 'El Balghiti', 'Extraits de Parfum', 1200, 'Oud, Leather, Patchouli', 'Signature, Oud, Leather', 'assets/images/bottle-oud.png', 'product-oud.html', true, 1),
    ('Rose de Fès', 'El Balghiti', 'Extraits de Parfum', 1100, 'Damask Rose, Saffron, Amber', 'Signature, Rose, Saffron', 'assets/images/bottle-rose.png', 'shop.html', false, 2),
    ('Ambre Saharien', 'El Balghiti', 'Extraits de Parfum', 1150, 'Amber, Benzoin, Vanilla Absolute', 'Signature, Amber, Vanilla', 'assets/images/bottle-amber.png', 'shop.html', false, 3),
    ('Discovery Set', 'El Balghiti', 'Discovery Packs', 450, '3 x 10ml Extraits de Parfum', 'Packs, Samples', 'assets/images/discovery-set.png', 'packs.html', true, 4),
    ('Vulcan Feu', 'French Avenue', 'Branded Dupes', 370, 'Mango, Lemon, Amber & Dry Wood', 'God of Fire, SHL, Stephane Humbert Lucas', 'assets/images/vulcain-fire.jpg', 'product-vulcan-feu.html', true, 5),
    ('Baroque Rouge 540', 'Maison Alhambra', 'Branded Dupes', 350, 'Saffron, Jasmine, Cedar', 'Baccarat Rouge 540, MFK', 'assets/images/baroque.jpg', 'shop.html', false, 6),
    ('Pure Musk Tahara', 'El Balghiti', 'Raw Oils', 150, 'White Lotus, Vanilla, Musk', 'White Musk, Clean', 'assets/images/tahara.jpg', 'shop.html', false, 7),
    ('Ombre Leather Extract', 'Custom Atelier', 'Custom Blends', 250, 'Cardamom, Leather, Patchouli', 'Tom Ford, Ombre Leather', 'assets/images/ombre.jpg', 'shop.html', false, 8)
ON CONFLICT DO NOTHING;
