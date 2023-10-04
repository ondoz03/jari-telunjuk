<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategoris')->delete();
        
        \DB::table('kategoris')->insert(array (
            0 => 
            array (
                'id' => 44,
                'uuid' => '8f33ea8e-8737-4c90-a9bb-fdc852ad5d13',
                'name' => 'Buku',
                'slug' => 'buku',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            1 => 
            array (
                'id' => 45,
                'uuid' => '91749f6d-535b-4cff-be2a-8d76dc141e16',
                'name' => 'Manga',
                'slug' => 'manga',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            2 => 
            array (
                'id' => 46,
                'uuid' => '34dc7a13-58aa-4ce9-a943-2552e00becee',
                'name' => 'Komik & Novel Grafis',
                'slug' => 'komik-novel-grafis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:52:19',
            ),
            3 => 
            array (
                'id' => 47,
                'uuid' => '61ffba31-6d28-4e89-a3e4-eaff2510b660',
                'name' => 'Fiksi Anak & Remaja',
                'slug' => 'fiksi-anak-remaja',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            4 => 
            array (
                'id' => 48,
                'uuid' => '2067b80d-f3c6-49e7-a3f9-fb6e7be0641c',
                'name' => 'Novel',
                'slug' => 'novel',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            5 => 
            array (
                'id' => 49,
                'uuid' => '188d1b13-54df-4c81-8f0c-6481a0b231e1',
                'name' => 'Fiksi',
                'slug' => 'fiksi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            6 => 
            array (
                'id' => 50,
                'uuid' => '81f3f563-0354-4ed6-ae00-04ed1565ecfc',
                'name' => 'Sastra',
                'slug' => 'sastra',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            7 => 
            array (
                'id' => 51,
                'uuid' => '9b778546-8c41-4c95-91ff-044bb2e0462d',
                'name' => 'Klasik',
                'slug' => 'klasik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            8 => 
            array (
                'id' => 52,
                'uuid' => '6fd804ca-de7e-4855-8371-66ca399e31f3',
                'name' => 'Romantis',
                'slug' => 'romantis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            9 => 
            array (
                'id' => 53,
                'uuid' => 'bfa4d76d-f5d7-41b6-b745-35a5cca630a5',
                'name' => 'Dongeng, Cerita Rakyat, Legenda & Mitologi',
                'slug' => 'dongeng-cerita-rakyat-legenda-mitologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            10 => 
            array (
                'id' => 54,
                'uuid' => '588fcbf3-d08c-41b8-83a1-6b47e2c47ae2',
                'name' => 'Aksi & Petualangan',
                'slug' => 'aksi-petualangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            11 => 
            array (
                'id' => 55,
                'uuid' => 'd8970184-46cb-4bfc-a8a3-a1588c429908',
                'name' => 'Kejahatan & Misteri',
                'slug' => 'kejahatan-misteri',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            12 => 
            array (
                'id' => 56,
                'uuid' => '01c02cce-eb93-4c09-a32f-0895e925d907',
                'name' => 'Biografi & Memoar',
                'slug' => 'biografi-memoar',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            13 => 
            array (
                'id' => 57,
                'uuid' => '94242207-3a6a-43ac-87da-bb8396dd3e86',
                'name' => 'Nonfiksi Anak & Remaja',
                'slug' => 'nonfiksi-anak-remaja',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            14 => 
            array (
                'id' => 58,
                'uuid' => '48a1d04c-81cc-4c07-bd60-5755a65edee2',
                'name' => 'Buku Aktivitas',
                'slug' => 'buku-aktivitas',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            15 => 
            array (
                'id' => 59,
                'uuid' => '3f761de0-1c83-4a0a-ba96-29d2e6bc3479',
                'name' => 'Pendidikan',
                'slug' => 'pendidikan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            16 => 
            array (
                'id' => 60,
                'uuid' => '3fbf3709-17ad-48fb-ac7e-e04bc80356a6',
                'name' => 'Pelajar & Kemahasiswaan',
                'slug' => 'pelajar-kemahasiswaan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            17 => 
            array (
                'id' => 61,
                'uuid' => '5ddafe89-2559-486c-979a-45975a36c1bc',
                'name' => 'Nonfiksi Dewasa',
                'slug' => 'nonfiksi-dewasa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            18 => 
            array (
                'id' => 62,
                'uuid' => 'a6fe9b6d-5bdf-4c81-9b97-19ae54c087a3',
                'name' => 'Sd',
                'slug' => 'sd',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            19 => 
            array (
                'id' => 63,
                'uuid' => '4f337658-6e39-4bad-b13e-65f699d4404f',
                'name' => 'Buku Pelajaran',
                'slug' => 'buku-pelajaran',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            20 => 
            array (
                'id' => 64,
                'uuid' => '9b54f511-10b8-4a0e-932f-e2fff2707fd5',
                'name' => 'Game & Aktivitas',
                'slug' => 'game-aktivitas',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            21 => 
            array (
                'id' => 65,
                'uuid' => '094fcfc1-98f6-44a4-9d1c-ee37d48791d1',
                'name' => 'Buku Mewarnai',
                'slug' => 'buku-mewarnai',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            22 => 
            array (
                'id' => 66,
                'uuid' => '7f18aae1-cf51-4922-91ad-5ee14070e457',
                'name' => 'Pendidikan-1',
                'slug' => 'pendidikan-1',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            23 => 
            array (
                'id' => 67,
                'uuid' => '51412ffd-cfb8-49fe-8311-b5e3ceea3178',
                'name' => 'Anak-Anak',
                'slug' => 'anak-anak',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            24 => 
            array (
                'id' => 68,
                'uuid' => '1e920c9b-d2b7-40c5-9de2-26dc3cc0a260',
                'name' => 'Pengembangan Diri',
                'slug' => 'pengembangan-diri',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            25 => 
            array (
                'id' => 69,
                'uuid' => '8bb011e1-d646-40f8-9fd1-6d37b5998231',
                'name' => 'Motivasi & Inspiratif',
                'slug' => 'motivasi-inspiratif',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            26 => 
            array (
                'id' => 70,
                'uuid' => 'fb3150c9-2eaa-4da1-8274-6026a970d6ea',
                'name' => 'Bisnis & Ekonomi',
                'slug' => 'bisnis-ekonomi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            27 => 
            array (
                'id' => 71,
                'uuid' => '38f1311b-4d78-48f1-9792-166c84cb10b7',
                'name' => 'Bayi-Balita',
                'slug' => 'bayi-balita',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:52:34',
            ),
            28 => 
            array (
                'id' => 72,
                'uuid' => '99292e4d-a8d4-4652-b394-0a9a120305ca',
                'name' => 'Sma',
                'slug' => 'sma',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            29 => 
            array (
                'id' => 73,
                'uuid' => '53e1dc78-c7b7-487c-ae4a-55038eefb3c6',
                'name' => 'Pengawas & Kepala Sekolah',
                'slug' => 'pengawas-kepala-sekolah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            30 => 
            array (
                'id' => 74,
                'uuid' => '83a1ed88-045d-44d8-b695-45c153c80c9c',
                'name' => 'Guru & Pendampingan Siswa',
                'slug' => 'guru-pendampingan-siswa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            31 => 
            array (
                'id' => 75,
                'uuid' => '94ccf86b-90f3-4235-8efc-3cee3d59e4c8',
                'name' => 'Ilmu Sosial',
                'slug' => 'ilmu-sosial',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            32 => 
            array (
                'id' => 76,
                'uuid' => 'b0a0d75e-192a-41c2-a84f-30fed2d0e646',
                'name' => 'Smp',
                'slug' => 'smp',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            33 => 
            array (
                'id' => 77,
                'uuid' => '9ea0be18-80a0-4c13-9486-d7fd6ade1273',
                'name' => 'Agama',
                'slug' => 'agama',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            34 => 
            array (
                'id' => 78,
                'uuid' => '888ac740-749d-4163-ad51-00b8c501d1e2',
                'name' => 'Konstitusi',
                'slug' => 'konstitusi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            35 => 
            array (
                'id' => 79,
                'uuid' => '5d0b8055-b840-463d-93cf-7e4956edc5ea',
                'name' => 'Hukum',
                'slug' => 'hukum',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            36 => 
            array (
                'id' => 80,
                'uuid' => '1ede7737-7d7d-4d38-965e-6cb717679a80',
                'name' => 'Filsafat',
                'slug' => 'filsafat',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            37 => 
            array (
                'id' => 81,
                'uuid' => 'ed3fe177-cf90-4122-af3f-a5ac7c071abe',
                'name' => 'Tubuh, Pikiran & Jiwa',
                'slug' => 'tubuh-pikiran-jiwa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            38 => 
            array (
                'id' => 82,
                'uuid' => '62958c3b-69a2-4feb-b7e5-82fb4681332c',
                'name' => 'Mindfulness & Meditasi',
                'slug' => 'mindfulness-meditasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            39 => 
            array (
                'id' => 83,
                'uuid' => 'd845bd1a-d6eb-4b49-a9d9-6222c2ffb204',
                'name' => 'Medis',
                'slug' => 'medis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            40 => 
            array (
                'id' => 84,
                'uuid' => 'ede677a2-cf4f-4b5b-b9ab-2083e0616ea3',
                'name' => 'Penyakit',
                'slug' => 'penyakit',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            41 => 
            array (
                'id' => 85,
                'uuid' => '1e98573c-2564-4958-bd13-0f81dd2a3a7c',
                'name' => 'Keluarga & Hubungan',
                'slug' => 'keluarga-hubungan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            42 => 
            array (
                'id' => 86,
                'uuid' => '6def1340-9bd0-4b89-b60c-8cd4d672944b',
                'name' => 'Parenting',
                'slug' => 'parenting',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            43 => 
            array (
                'id' => 87,
                'uuid' => '8d57e72b-a31d-44b0-8db9-4d6c36ea572c',
                'name' => 'Horor',
                'slug' => 'horor',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            44 => 
            array (
                'id' => 88,
                'uuid' => 'd5a5372f-8abe-4f0e-84f2-babfd41e9112',
                'name' => 'Alquran & Tulisan Suci',
                'slug' => 'alquran-tulisan-suci',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            45 => 
            array (
                'id' => 89,
                'uuid' => '9584c1f3-d801-4630-81c9-cb2ccd557b0b',
                'name' => 'Humor',
                'slug' => 'humor',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            46 => 
            array (
                'id' => 90,
                'uuid' => 'bae1dc35-6fca-49a5-96ea-4ae5d33ca127',
                'name' => 'Fantasi',
                'slug' => 'fantasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            47 => 
            array (
                'id' => 91,
                'uuid' => '300cfb2a-e51b-4ebc-adcf-ec91f21ea48f',
                'name' => 'Kewirausahaan',
                'slug' => 'kewirausahaan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            48 => 
            array (
                'id' => 92,
                'uuid' => 'b327f811-758c-4784-9752-6df1d511af4e',
                'name' => 'Olahraga',
                'slug' => 'olahraga',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            49 => 
            array (
                'id' => 93,
                'uuid' => 'db306bb9-0ed2-40d7-9463-ad331764fde8',
                'name' => 'Bahasa Inggris Sebagai Bahasa Kedua',
                'slug' => 'bahasa-inggris-sebagai-bahasa-kedua',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            50 => 
            array (
                'id' => 94,
                'uuid' => 'a73b0661-f371-45e9-a70c-198556ff6de9',
                'name' => 'Studi Bahasa Asing',
                'slug' => 'studi-bahasa-asing',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            51 => 
            array (
                'id' => 95,
                'uuid' => '899cec2f-2b77-4077-a76d-97b49a3a69aa',
                'name' => 'Biografi & Autobiografi',
                'slug' => 'biografi-autobiografi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            52 => 
            array (
                'id' => 96,
                'uuid' => 'f24c7cf4-3506-4c88-9d6a-754cc50418b2',
                'name' => 'Komputer',
                'slug' => 'komputer',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            53 => 
            array (
                'id' => 97,
                'uuid' => '19c4be9a-1f66-4d96-8f17-1d6ac908a965',
                'name' => 'Database Administrasi & Manajemen',
                'slug' => 'database-administrasi-manajemen',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            54 => 
            array (
                'id' => 98,
                'uuid' => '309c396d-b3e0-4403-bcbf-9aa5470356b3',
                'name' => 'Sejarah',
                'slug' => 'sejarah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            55 => 
            array (
                'id' => 99,
                'uuid' => 'ff3ee53a-f819-4c13-9cfa-bf84c13240ee',
                'name' => 'Kehidupan Kota',
                'slug' => 'kehidupan-kota',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            56 => 
            array (
                'id' => 100,
                'uuid' => '92fa72f3-b73d-4547-9857-b6ae897c18c5',
                'name' => 'Hak Sipil',
                'slug' => 'hak-sipil',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            57 => 
            array (
                'id' => 101,
                'uuid' => 'd3c0dd9a-9673-4965-b25b-04539fed78ef',
                'name' => 'Kesehatan & Kebugaran',
                'slug' => 'kesehatan-kebugaran',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            58 => 
            array (
                'id' => 102,
                'uuid' => 'bc9887d9-d4b1-4bf6-bc3b-314fd9f37caf',
                'name' => 'Kerajinan & Hobi',
                'slug' => 'kerajinan-hobi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:15',
                'updated_at' => '2023-09-27 13:50:15',
            ),
            59 => 
            array (
                'id' => 103,
                'uuid' => '4e032282-f328-44cc-922c-0e02531234e9',
                'name' => 'Emosi',
                'slug' => 'emosi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            60 => 
            array (
                'id' => 104,
                'uuid' => 'a02d008e-7026-40ed-81fa-cbd326885416',
                'name' => 'Kristen',
                'slug' => 'kristen',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            61 => 
            array (
                'id' => 105,
                'uuid' => '6081749c-3258-4019-98dc-10154b117264',
                'name' => 'Politik-Pemerintah',
                'slug' => 'politik-pemerintah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            62 => 
            array (
                'id' => 106,
                'uuid' => 'c07a2814-6039-4a89-a7e0-6e18beab81c0',
                'name' => 'Keuangan',
                'slug' => 'keuangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            63 => 
            array (
                'id' => 107,
                'uuid' => '30af0bf9-c2c3-4ab9-8487-ec5e2bb2206e',
                'name' => 'Arab',
                'slug' => 'arab',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            64 => 
            array (
                'id' => 108,
                'uuid' => 'a1acc734-69c2-4f6b-a39f-04d0d4bdf8c9',
                'name' => 'Sukses',
                'slug' => 'sukses',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            65 => 
            array (
                'id' => 109,
                'uuid' => '48bd3163-3bbc-46eb-8799-b652423fbc47',
                'name' => 'Buku-Pelajaran-4',
                'slug' => 'buku-pelajaran-4',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            66 => 
            array (
                'id' => 110,
                'uuid' => 'fc14e141-4695-4079-9d58-5b47728b8876',
            'name' => 'Tes Studi (Lainnya)',
                'slug' => 'tes-studi-lainnya',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            67 => 
            array (
                'id' => 111,
                'uuid' => '56305bbe-fd26-409a-bb7e-24c1bcaa2381',
                'name' => 'Persiapan Ujian',
                'slug' => 'persiapan-ujian',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            68 => 
            array (
                'id' => 112,
                'uuid' => '25568fd7-1a42-4c05-b57b-7896e06cd546',
                'name' => 'Pra-Remaja',
                'slug' => 'pra-remaja',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            69 => 
            array (
                'id' => 113,
                'uuid' => 'f0f7d307-0b11-46f6-8771-6cdc05c6e14f',
                'name' => 'Kepemimpinan',
                'slug' => 'kepemimpinan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            70 => 
            array (
                'id' => 114,
                'uuid' => '08648255-cd2e-42fc-88aa-3b010090e1df',
                'name' => 'Teknologi & Teknik',
                'slug' => 'teknologi-teknik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            71 => 
            array (
                'id' => 115,
                'uuid' => '94a794ce-cd48-4099-8a81-d72c9f859106',
                'name' => 'Psikologi',
                'slug' => 'psikologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            72 => 
            array (
                'id' => 116,
                'uuid' => '0014939e-6bb9-48ed-82ee-36314fc35395',
                'name' => 'Seni',
                'slug' => 'seni',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            73 => 
            array (
                'id' => 117,
                'uuid' => '7d03e990-63d5-4712-9a3d-d1ce00065c60',
                'name' => 'Peta',
                'slug' => 'peta',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            74 => 
            array (
                'id' => 118,
                'uuid' => '85ccbf71-cd19-48de-90c2-b7ffd393322b',
                'name' => 'Investasi & Saham',
                'slug' => 'investasi-saham',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            75 => 
            array (
                'id' => 119,
                'uuid' => 'a0a03e50-b1e6-4303-bdee-ea9e6bb765d8',
                'name' => 'Saham',
                'slug' => 'saham',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            76 => 
            array (
                'id' => 120,
                'uuid' => 'ec57b55f-9e19-4b31-ba34-3ca3f908c0fe',
                'name' => 'Fiksi Ilmiah',
                'slug' => 'fiksi-ilmiah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            77 => 
            array (
                'id' => 121,
                'uuid' => 'cd05d657-49af-40fc-9473-15f14511bc53',
                'name' => 'Diet & Nutrisi',
                'slug' => 'diet-nutrisi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            78 => 
            array (
                'id' => 122,
                'uuid' => '0b8f57ef-f3c5-4a25-993c-e8ec3148412f',
                'name' => 'Kesehatan-1',
                'slug' => 'kesehatan-1',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            79 => 
            array (
                'id' => 123,
                'uuid' => 'c311d337-46bf-48a3-b7ce-a63b2d2b4d19',
                'name' => 'Keterampilan',
                'slug' => 'keterampilan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            80 => 
            array (
                'id' => 124,
                'uuid' => '2b2c420f-9e26-47a1-8b9f-d07d56e2aeee',
                'name' => 'Komunikasi Bisnis',
                'slug' => 'komunikasi-bisnis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            81 => 
            array (
                'id' => 125,
                'uuid' => '427002f0-7839-49ee-bfc9-828764f32e29',
                'name' => 'Komunikasi & Keterampilan Sosial',
                'slug' => 'komunikasi-keterampilan-sosial',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            82 => 
            array (
                'id' => 126,
                'uuid' => 'e2e26a2d-73f9-4324-9cc5-b139caa8f4c7',
                'name' => 'Bahasa',
                'slug' => 'bahasa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            83 => 
            array (
                'id' => 127,
                'uuid' => '2491aed8-4e5e-4d56-aa25-9bc267b12247',
                'name' => 'Kristen & Katolik',
                'slug' => 'kristen-katolik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            84 => 
            array (
                'id' => 128,
                'uuid' => 'dbc52af2-4ecd-40b9-8958-e6426bf7b253',
                'name' => 'Industri',
                'slug' => 'industri',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            85 => 
            array (
                'id' => 129,
                'uuid' => 'b7bd2d9b-6e7a-426a-9fdb-f455d702faa7',
                'name' => 'Musik',
                'slug' => 'musik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            86 => 
            array (
                'id' => 130,
                'uuid' => '5d7ca16c-dc34-4aa8-b8de-dbfc2d349953',
                'name' => 'Pemasaran',
                'slug' => 'pemasaran',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            87 => 
            array (
                'id' => 131,
                'uuid' => 'd76a78c0-78ae-4327-b704-d02b448512bd',
                'name' => 'Hukum Pidana',
                'slug' => 'hukum-pidana',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            88 => 
            array (
                'id' => 132,
                'uuid' => 'a66d4310-eeff-419e-99cf-4f81aa5ac751',
                'name' => 'Anak Berkebutuhan Khusus',
                'slug' => 'anak-berkebutuhan-khusus',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            89 => 
            array (
                'id' => 133,
                'uuid' => 'c2446875-d314-4d42-9978-f7777043db26',
                'name' => 'Seni-Desain',
                'slug' => 'seni-desain',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            90 => 
            array (
                'id' => 134,
                'uuid' => '72d6fbe1-f733-4763-b65a-b9fa1ced4135',
                'name' => 'Arsitektur',
                'slug' => 'arsitektur',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            91 => 
            array (
                'id' => 135,
                'uuid' => 'f7f505dd-63e6-4a7f-aa3f-ca3ee2d5577d',
                'name' => 'Kriminologi',
                'slug' => 'kriminologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            92 => 
            array (
                'id' => 136,
                'uuid' => 'afc1fefd-7029-43b4-86f8-c1e1a9640287',
                'name' => 'Aliran & Gaya Bahasa',
                'slug' => 'aliran-gaya-bahasa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            93 => 
            array (
                'id' => 137,
                'uuid' => '1b5ad201-5532-41a3-a56f-e01a70c7cd7f',
                'name' => 'Referensi-7',
                'slug' => 'referensi-7',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            94 => 
            array (
                'id' => 138,
                'uuid' => '84583aa0-bba4-448a-8fca-8049e39afed1',
                'name' => 'Referensi',
                'slug' => 'referensi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            95 => 
            array (
                'id' => 139,
                'uuid' => '9aa4a748-752f-42d3-8ad9-3d600ba38ed5',
                'name' => 'Buku-Sekolah',
                'slug' => 'buku-sekolah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            96 => 
            array (
                'id' => 140,
                'uuid' => '7111d70b-0780-464c-916a-1e3242048e1b',
                'name' => 'Buku Parenting',
                'slug' => 'buku-parenting',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            97 => 
            array (
                'id' => 141,
                'uuid' => '53a539a0-7c54-40ad-af90-f0ffd90e830d',
                'name' => 'Pengasuhan, Penitipan & Perawatan Anak',
                'slug' => 'pengasuhan-penitipan-perawatan-anak',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            98 => 
            array (
                'id' => 142,
                'uuid' => '450037b5-8e06-41b4-8084-d0ace41aa387',
                'name' => 'Adat',
                'slug' => 'adat',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            99 => 
            array (
                'id' => 143,
                'uuid' => '2d368480-1270-4874-974f-d58de2bb6141',
                'name' => 'Hukum Perdata',
                'slug' => 'hukum-perdata',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            100 => 
            array (
                'id' => 144,
                'uuid' => '94c96dfc-c905-4323-a61c-fbbac80e348c',
                'name' => 'Sains',
                'slug' => 'sains',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            101 => 
            array (
                'id' => 145,
                'uuid' => '78606e7d-f834-4abf-8a17-d788cb800fa8',
                'name' => 'Remaja',
                'slug' => 'remaja',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            102 => 
            array (
                'id' => 146,
                'uuid' => 'c24b4f77-dbe8-4d15-b980-c0158b438794',
                'name' => 'Ritual & Praktek',
                'slug' => 'ritual-praktek',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            103 => 
            array (
                'id' => 147,
                'uuid' => 'c52a111f-2f46-4013-bda1-942a4f284a53',
                'name' => 'Ilmu Agama',
                'slug' => 'ilmu-agama',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            104 => 
            array (
                'id' => 148,
                'uuid' => '147565e9-4c27-4f05-b245-ba172a825735',
                'name' => 'Hiburan',
                'slug' => 'hiburan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            105 => 
            array (
                'id' => 149,
                'uuid' => '6fc397a3-fd72-4a47-8b34-de57ce85e00c',
                'name' => 'Buku Bergambar',
                'slug' => 'buku-bergambar',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            106 => 
            array (
                'id' => 150,
                'uuid' => 'ebf6e702-f1ab-49d0-843a-b31f5d1e59c9',
                'name' => 'Sumber Daya Manusia & Manajemen Personalia',
                'slug' => 'sumber-daya-manusia-manajemen-personalia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            107 => 
            array (
                'id' => 151,
                'uuid' => 'e475e463-b831-414f-9866-6dde01c12081',
                'name' => 'Anak',
                'slug' => 'anak',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            108 => 
            array (
                'id' => 152,
                'uuid' => 'cbccae11-ab90-4f65-9984-de078559c72d',
                'name' => 'Resep & Masakan',
                'slug' => 'resep-masakan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            109 => 
            array (
                'id' => 153,
                'uuid' => '68f36c8e-9de3-43c2-ab9b-22ea8e3d7fc8',
                'name' => 'Biografi-4',
                'slug' => 'biografi-4',
                'description' => '',
                'created_at' => '2023-09-27 13:50:16',
                'updated_at' => '2023-09-27 13:50:16',
            ),
            110 => 
            array (
                'id' => 154,
                'uuid' => '91d3bc90-a97c-4a0c-8d09-6143367e02b9',
                'name' => 'Kedokteran',
                'slug' => 'kedokteran',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            111 => 
            array (
                'id' => 155,
                'uuid' => '80a45daa-44c2-49a7-91dd-1566f0272b6d',
                'name' => 'Keperawatan',
                'slug' => 'keperawatan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            112 => 
            array (
                'id' => 156,
                'uuid' => 'fc3f221a-3637-4638-b689-15d3ce2ccccb',
                'name' => 'Ekonomi',
                'slug' => 'ekonomi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            113 => 
            array (
                'id' => 157,
                'uuid' => 'd8f90da8-acc4-41de-ad87-4006acddbb91',
                'name' => 'Manajemen',
                'slug' => 'manajemen',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            114 => 
            array (
                'id' => 158,
                'uuid' => '207459d5-fe70-4fd6-baa5-754d74fe5a0d',
                'name' => 'Internasional',
                'slug' => 'internasional',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            115 => 
            array (
                'id' => 159,
                'uuid' => 'ac148fae-32c7-4d20-a712-ce071ac01178',
                'name' => 'Pertanian',
                'slug' => 'pertanian',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            116 => 
            array (
                'id' => 160,
                'uuid' => '8e46e650-d776-43ff-a3ef-4d0d924039a7',
                'name' => 'Media Sosial',
                'slug' => 'media-sosial',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            117 => 
            array (
                'id' => 161,
                'uuid' => 'fcb41fa8-dc72-40d7-b4e9-ff83bbfb0f2f',
                'name' => 'Sistem Aplikasi',
                'slug' => 'sistem-aplikasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            118 => 
            array (
                'id' => 162,
                'uuid' => 'ded11358-5c95-4dd9-8527-f4279542bad6',
                'name' => 'Usia Sekolah',
                'slug' => 'usia-sekolah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            119 => 
            array (
                'id' => 163,
                'uuid' => '384f403f-6ad2-4707-be99-7c55e6477d11',
                'name' => 'Perbaikan Diri',
                'slug' => 'perbaikan-diri',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            120 => 
            array (
                'id' => 164,
                'uuid' => '7bcc93a2-4d5f-4753-a320-7886686aa945',
                'name' => 'Akuntansi',
                'slug' => 'akuntansi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            121 => 
            array (
                'id' => 165,
                'uuid' => '3e382371-b544-4705-a12c-2bf1429a5796',
                'name' => 'Pendidikan Anak Usia Dini',
                'slug' => 'pendidikan-anak-usia-dini',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            122 => 
            array (
                'id' => 166,
                'uuid' => '8dc1437f-802a-4939-80c3-1649d6cf71f4',
                'name' => 'Perilaku',
                'slug' => 'perilaku',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            123 => 
            array (
                'id' => 167,
                'uuid' => '77708866-66ca-48f2-bec0-09c555ccf051',
                'name' => 'Muslim',
                'slug' => 'muslim',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            124 => 
            array (
                'id' => 168,
                'uuid' => 'e143f69f-bce1-48c1-a555-ecc4f46b6424',
                'name' => 'Rumah',
                'slug' => 'rumah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            125 => 
            array (
                'id' => 169,
                'uuid' => '4f308202-e8aa-48b2-aea7-97322718f88b',
                'name' => 'Geografi',
                'slug' => 'geografi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            126 => 
            array (
                'id' => 170,
                'uuid' => 'f1df7fe6-3061-4598-b560-28895abee910',
                'name' => 'Pertanian Berkelanjutan',
                'slug' => 'pertanian-berkelanjutan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            127 => 
            array (
                'id' => 171,
                'uuid' => 'bee5dd27-e9f9-48d1-ab71-4315b056f6be',
                'name' => 'Ilmu Komputer',
                'slug' => 'ilmu-komputer',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            128 => 
            array (
                'id' => 172,
                'uuid' => '000cd7ba-4ef8-42eb-b46b-84ad5d33415c',
                'name' => 'Sipil',
                'slug' => 'sipil',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            129 => 
            array (
                'id' => 173,
                'uuid' => 'baa7b477-9682-44fd-8cd6-ecf054640c67',
                'name' => 'Budaya & Sosial',
                'slug' => 'budaya-sosial',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            130 => 
            array (
                'id' => 174,
                'uuid' => '1f0918c2-05a3-464f-9dda-53303273480f',
                'name' => 'Ekologi',
                'slug' => 'ekologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            131 => 
            array (
                'id' => 175,
                'uuid' => 'd10bf6c5-0524-48c7-81ca-e53351e2aca9',
                'name' => 'Anak Muda',
                'slug' => 'anak-muda',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            132 => 
            array (
                'id' => 176,
                'uuid' => 'db916388-87c2-48db-aa82-4a775602fdf8',
                'name' => 'Lain-Lain',
                'slug' => 'lain-lain',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            133 => 
            array (
                'id' => 177,
                'uuid' => '5471fdfd-0a90-4df3-8972-4e1fb874515f',
                'name' => 'Artis',
                'slug' => 'artis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            134 => 
            array (
                'id' => 178,
                'uuid' => '041649f4-afb2-4adf-be14-b62b746e547d',
                'name' => 'Desain',
                'slug' => 'desain',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            135 => 
            array (
                'id' => 179,
                'uuid' => 'b02a343f-9864-40c4-ac1d-36cb3a19869a',
                'name' => 'Fotografi',
                'slug' => 'fotografi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:17',
                'updated_at' => '2023-09-27 13:50:17',
            ),
            136 => 
            array (
                'id' => 180,
                'uuid' => '122ba4dd-17a3-4068-81e5-36d10909321d',
                'name' => 'Komputer & Teknologi Informasi',
                'slug' => 'komputer-teknologi-informasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            137 => 
            array (
                'id' => 181,
                'uuid' => '279f55e2-80c0-4513-b653-b1ca3fe28933',
                'name' => 'Farmasi & Bioteknologi',
                'slug' => 'farmasi-bioteknologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            138 => 
            array (
                'id' => 182,
                'uuid' => 'dd88cd46-1b45-4a3e-b45d-cac415563147',
                'name' => 'Buddha',
                'slug' => 'buddha',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            139 => 
            array (
                'id' => 183,
                'uuid' => 'c851479d-c544-4359-b391-e20d95f77436',
                'name' => 'Kamus',
                'slug' => 'kamus',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            140 => 
            array (
                'id' => 184,
                'uuid' => '04ac684d-fdc9-472d-b039-51a4eb2269db',
                'name' => 'Ebook',
                'slug' => 'ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            141 => 
            array (
                'id' => 185,
                'uuid' => '62711512-be3c-4124-accc-bdf72a965d1f',
                'name' => 'Islam-Ebook',
                'slug' => 'islam-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            142 => 
            array (
                'id' => 186,
                'uuid' => 'fd8b9134-ad44-44a0-8f9b-e6907eab5d9a',
                'name' => 'Religion_Spirituality-Ebook',
                'slug' => 'religion-spirituality-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:52:41',
            ),
            143 => 
            array (
                'id' => 187,
                'uuid' => 'c6386f45-46cb-4d8e-98a0-68d20415ea5f',
                'name' => 'Matematika',
                'slug' => 'matematika',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            144 => 
            array (
                'id' => 188,
                'uuid' => '49f535cd-95a7-417f-ad33-7ab9a1ac541d',
                'name' => 'Terapan',
                'slug' => 'terapan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            145 => 
            array (
                'id' => 189,
                'uuid' => 'f3f529ae-c44b-4a2b-a1da-05a306ab99cd',
                'name' => 'Statistik',
                'slug' => 'statistik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            146 => 
            array (
                'id' => 190,
                'uuid' => '08df47f6-94e2-4de9-9e23-5c40789bfc00',
                'name' => 'Sekolah',
                'slug' => 'sekolah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            147 => 
            array (
                'id' => 191,
                'uuid' => 'ceff92cb-c26f-4c0e-8adf-f12042791598',
                'name' => 'Lokal',
                'slug' => 'lokal',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            148 => 
            array (
                'id' => 192,
                'uuid' => '779d975d-1ef4-4225-a93e-9f603f196ae8',
                'name' => 'Gangguan Kesehatan',
                'slug' => 'gangguan-kesehatan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            149 => 
            array (
                'id' => 193,
                'uuid' => '6d4a4753-b9a7-4617-9cf0-7c9d901c7e10',
                'name' => 'Teknologi',
                'slug' => 'teknologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            150 => 
            array (
                'id' => 194,
                'uuid' => '5ec9c5cc-d348-42b8-a4bc-097a2a2f8b4d',
                'name' => 'Bisnis & Keuangan',
                'slug' => 'bisnis-keuangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            151 => 
            array (
                'id' => 195,
                'uuid' => 'cb23f568-70e5-45f0-9014-782f9d765fa8',
                'name' => 'Memoar Pribadi',
                'slug' => 'memoar-pribadi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            152 => 
            array (
                'id' => 196,
                'uuid' => 'bedb5263-cb30-44f0-ac43-5509d97975cb',
                'name' => 'Akupuntur',
                'slug' => 'akupuntur',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            153 => 
            array (
                'id' => 197,
                'uuid' => 'b6f70c00-ca7d-4238-889d-6a2a4acdb29e',
                'name' => 'Pengobatan-Alternatif',
                'slug' => 'pengobatan-alternatif',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            154 => 
            array (
                'id' => 198,
                'uuid' => '0751b422-5673-43b1-a780-9d80fa61bba9',
                'name' => 'Real Estate',
                'slug' => 'real-estate',
                'description' => '',
                'created_at' => '2023-09-27 13:50:18',
                'updated_at' => '2023-09-27 13:50:18',
            ),
            155 => 
            array (
                'id' => 199,
                'uuid' => 'bcc08f1a-6a0b-445a-952c-4bd94c7aa8ce',
                'name' => 'Kecantikan',
                'slug' => 'kecantikan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            156 => 
            array (
                'id' => 200,
                'uuid' => '3fa575d1-5ecc-45e2-8ca1-8e7a286b5555',
                'name' => 'Parenting-Family-Ebook',
                'slug' => 'parenting-family-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            157 => 
            array (
                'id' => 201,
                'uuid' => 'fa9fe594-bde4-4e1d-8957-cbd506871e24',
                'name' => 'Katolik',
                'slug' => 'katolik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            158 => 
            array (
                'id' => 202,
                'uuid' => '4f83246f-cae9-4f4a-be17-a340bc2dd645',
                'name' => 'Aplikasi Perkantoran',
                'slug' => 'aplikasi-perkantoran',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            159 => 
            array (
                'id' => 203,
                'uuid' => 'd43fea42-a3a1-450f-a7cb-c378c434a29e',
                'name' => 'Aplikasi Bisnis & Produktivitas',
                'slug' => 'aplikasi-bisnis-produktivitas',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            160 => 
            array (
                'id' => 204,
                'uuid' => '2f766095-2589-4d23-a02a-df7cc6abe646',
                'name' => 'Antropologi',
                'slug' => 'antropologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            161 => 
            array (
                'id' => 205,
                'uuid' => '5e2b2607-b6f1-4a10-80fd-2ee63254610d',
                'name' => 'Hindu',
                'slug' => 'hindu',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            162 => 
            array (
                'id' => 206,
                'uuid' => 'ee9f4ca2-1959-4f80-b809-8ca0b7905b7f',
                'name' => 'Sosiologi',
                'slug' => 'sosiologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            163 => 
            array (
                'id' => 207,
                'uuid' => '3f5b2f00-ee5d-473b-ba2e-fd58a9264bda',
                'name' => 'Aplikasi Matematika & Statistik',
                'slug' => 'aplikasi-matematika-statistik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            164 => 
            array (
                'id' => 208,
                'uuid' => 'a6e4e8b3-eb4f-471f-836d-b75ad3d34cbb',
                'name' => 'Perguruan Tinggi',
                'slug' => 'perguruan-tinggi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:52:44',
            ),
            165 => 
            array (
                'id' => 209,
                'uuid' => '4147b3b1-15f2-42ef-b21a-aae5337777ac',
                'name' => 'Probabilitas & Statistik',
                'slug' => 'probabilitas-statistik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            166 => 
            array (
                'id' => 210,
                'uuid' => 'c320cbc0-6da1-4c4a-8913-6b669ec482f8',
                'name' => 'Pemrograman',
                'slug' => 'pemrograman',
                'description' => '',
                'created_at' => '2023-09-27 13:50:19',
                'updated_at' => '2023-09-27 13:50:19',
            ),
            167 => 
            array (
                'id' => 211,
                'uuid' => '96abee02-69fa-42c9-b46c-5478f3e435ee',
                'name' => 'Kerajinan-Keterampilan',
                'slug' => 'kerajinan-keterampilan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            168 => 
            array (
                'id' => 212,
                'uuid' => '4a7825fb-050a-4278-b47d-228bed4339e7',
                'name' => 'Mainan-Game',
                'slug' => 'mainan-game',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            169 => 
            array (
                'id' => 213,
                'uuid' => '73668f57-6143-44f2-a92a-9d4a6aa1ab85',
                'name' => 'Industri Rumah Tangga',
                'slug' => 'industri-rumah-tangga',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            170 => 
            array (
                'id' => 214,
                'uuid' => '6d40af25-ba0e-4be7-b8c5-4cebad4cc06f',
                'name' => 'Mainan-Hobi',
                'slug' => 'mainan-hobi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            171 => 
            array (
                'id' => 215,
                'uuid' => '4775b875-67eb-499d-9f2e-baf6705acb12',
                'name' => 'Perilaku Konsumen',
                'slug' => 'perilaku-konsumen',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            172 => 
            array (
                'id' => 216,
                'uuid' => '1574fb87-c5d1-4e34-aa58-41b936b4e384',
                'name' => 'Pertamanan',
                'slug' => 'pertamanan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            173 => 
            array (
                'id' => 217,
                'uuid' => '50df3123-af09-4d4e-8a97-573b5d78f3e1',
                'name' => 'Peralatan-Kantor',
                'slug' => 'peralatan-kantor',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            174 => 
            array (
                'id' => 218,
                'uuid' => '37b343a0-6a6c-4c44-be19-013a77b72785',
                'name' => 'Stationery-Sekolah-Kantor',
                'slug' => 'stationery-sekolah-kantor',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            175 => 
            array (
                'id' => 219,
                'uuid' => 'fe816120-f20c-464b-bb26-942b6229612c',
                'name' => 'Film',
                'slug' => 'film',
                'description' => '',
                'created_at' => '2023-09-27 13:50:20',
                'updated_at' => '2023-09-27 13:50:20',
            ),
            176 => 
            array (
                'id' => 220,
                'uuid' => '6e2fceac-e851-4f46-8e96-12b2301047c8',
                'name' => 'Novel-Grafis',
                'slug' => 'novel-grafis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            177 => 
            array (
                'id' => 221,
                'uuid' => 'fc878b3c-0a82-498f-9e10-0204af32e0ba',
                'name' => 'Fiksi Dewasa',
                'slug' => 'fiksi-dewasa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            178 => 
            array (
                'id' => 222,
                'uuid' => 'aae613ec-5e2d-482e-8967-7c40d2dc9ed4',
                'name' => 'Kumpulan Cerpen',
                'slug' => 'kumpulan-cerpen',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            179 => 
            array (
                'id' => 223,
                'uuid' => '07efe90e-591b-4c1c-b9ba-821bc81688a3',
                'name' => 'Penyandang Disabilitas',
                'slug' => 'penyandang-disabilitas',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            180 => 
            array (
                'id' => 224,
                'uuid' => '2d0926e1-1fda-458b-a15f-115016ce3990',
                'name' => 'Properti',
                'slug' => 'properti',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            181 => 
            array (
                'id' => 225,
                'uuid' => 'd6a09c30-4341-4e85-b4b4-f198d79787eb',
                'name' => 'Pengajaran',
                'slug' => 'pengajaran',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            182 => 
            array (
                'id' => 226,
                'uuid' => '0c8297b5-692e-4338-b36e-365a9765a47a',
                'name' => 'Kesehatan & Penyembuhan',
                'slug' => 'kesehatan-penyembuhan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            183 => 
            array (
                'id' => 227,
                'uuid' => 'ff8d482e-9482-408a-8714-51f8b43e9be9',
                'name' => 'Pelatihan & Pengembangan',
                'slug' => 'pelatihan-pengembangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:21',
                'updated_at' => '2023-09-27 13:50:21',
            ),
            184 => 
            array (
                'id' => 228,
                'uuid' => '93111be6-591e-4aab-be42-20c6fa28d51b',
                'name' => 'Novel-8',
                'slug' => 'novel-8',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            185 => 
            array (
                'id' => 229,
                'uuid' => 'f7ba4bb1-6375-4d2e-91b2-c1bc0b5936b7',
                'name' => 'Hide-Mitra',
                'slug' => 'hide-mitra',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            186 => 
            array (
                'id' => 230,
                'uuid' => 'd81b0338-4467-46ae-83bf-44394bece1de',
                'name' => 'Pemerintah',
                'slug' => 'pemerintah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            187 => 
            array (
                'id' => 231,
                'uuid' => 'b5f83c51-7ced-4016-aaad-28eedc4458e7',
            'name' => 'Sastra Dunia Asia (Umum)',
                'slug' => 'sastra-dunia-asia-umum',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            188 => 
            array (
                'id' => 232,
                'uuid' => '86aaddc6-fa10-40d8-b3a9-1f0028cf37d1',
                'name' => 'Perumahan & Real Estate',
                'slug' => 'perumahan-real-estate',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            189 => 
            array (
                'id' => 233,
                'uuid' => '32651914-36bb-487c-a785-e8efc968aa6d',
                'name' => 'Kumpulan Puisi',
                'slug' => 'kumpulan-puisi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            190 => 
            array (
                'id' => 234,
                'uuid' => '7787dbb3-dba2-4300-81e8-cddd189c859a',
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            191 => 
            array (
                'id' => 235,
                'uuid' => '29639bd9-b960-4161-aa89-669d41d13672',
                'name' => 'Ensiklopedia',
                'slug' => 'ensiklopedia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            192 => 
            array (
                'id' => 236,
                'uuid' => 'b01da8b1-736f-42f7-8250-283ab94dd2d0',
                'name' => 'Komersial',
                'slug' => 'komersial',
                'description' => '',
                'created_at' => '2023-09-27 13:50:22',
                'updated_at' => '2023-09-27 13:50:22',
            ),
            193 => 
            array (
                'id' => 237,
                'uuid' => '1af21ee0-008a-463d-a251-73ea6331445c',
                'name' => 'Fisika',
                'slug' => 'fisika',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            194 => 
            array (
                'id' => 238,
                'uuid' => '25ca82db-b87c-4417-8565-5f8f8170c501',
                'name' => 'Kesehatan',
                'slug' => 'kesehatan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            195 => 
            array (
                'id' => 239,
                'uuid' => '606802e5-2c75-472e-855f-6f87e5e641d6',
                'name' => 'Kesehatan-Kecantikan',
                'slug' => 'kesehatan-kecantikan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            196 => 
            array (
                'id' => 240,
                'uuid' => '08d0a2a5-61c5-4706-b672-03745494ad80',
                'name' => 'Green Business',
                'slug' => 'green-business',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            197 => 
            array (
                'id' => 241,
                'uuid' => '98cffc26-f61e-4043-8731-b2c1a84b7884',
                'name' => 'Biologi',
                'slug' => 'biologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            198 => 
            array (
                'id' => 242,
                'uuid' => 'e3ed5fdd-1e40-4845-ade6-0c3e4e441382',
                'name' => 'Karya-Sastra-Dunia',
                'slug' => 'karya-sastra-dunia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            199 => 
            array (
                'id' => 243,
                'uuid' => '28975334-f341-4953-b25b-f4d1ff016a03',
                'name' => 'Novel-Terjemahan-1',
                'slug' => 'novel-terjemahan-1',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            200 => 
            array (
                'id' => 244,
                'uuid' => 'f5f752a1-2e72-40a4-a707-0c1523c5aa49',
                'name' => 'Sains & Alam',
                'slug' => 'sains-alam',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            201 => 
            array (
                'id' => 245,
                'uuid' => '1b907cbf-8135-4296-86e3-db3c2c6a318c',
                'name' => 'Sekolah & Pendidikan',
                'slug' => 'sekolah-pendidikan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            202 => 
            array (
                'id' => 246,
                'uuid' => '29681825-a3c4-430c-82c2-578eaeb4c46f',
                'name' => 'Topik Sosial',
                'slug' => 'topik-sosial',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            203 => 
            array (
                'id' => 247,
                'uuid' => '3f7a971d-56a5-473a-bae6-e5b8c35c1169',
                'name' => 'Memasak',
                'slug' => 'memasak',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            204 => 
            array (
                'id' => 248,
                'uuid' => '89b75379-8293-4050-9704-c920b3a05eea',
                'name' => 'Ekonomi Makro',
                'slug' => 'ekonomi-makro',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            205 => 
            array (
                'id' => 249,
                'uuid' => '5cd2504e-7f92-4111-b856-c78bfb36b136',
                'name' => 'Metode',
                'slug' => 'metode',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            206 => 
            array (
                'id' => 250,
                'uuid' => 'f5749ac8-743a-4350-b164-33ed0d29f3ff',
                'name' => 'Freelance & Wirausaha',
                'slug' => 'freelance-wirausaha',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            207 => 
            array (
                'id' => 251,
                'uuid' => '45acde8e-49fa-4645-9f4a-a4a183191516',
                'name' => 'Latihan Ujian',
                'slug' => 'latihan-ujian',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            208 => 
            array (
                'id' => 252,
                'uuid' => '587bde3c-20c0-43a6-a3ab-5cbb05b6c4af',
                'name' => 'Referensi-Sekolah',
                'slug' => 'referensi-sekolah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            209 => 
            array (
                'id' => 253,
                'uuid' => '1df98563-9208-4db6-afcb-f2f2cbc213bd',
                'name' => 'Karier',
                'slug' => 'karier',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            210 => 
            array (
                'id' => 254,
                'uuid' => '655d79bf-4d84-42b0-99d6-e7956011a031',
                'name' => 'Dekorasi-Rumah',
                'slug' => 'dekorasi-rumah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            211 => 
            array (
                'id' => 255,
                'uuid' => 'f6739e76-93be-4e9e-b8aa-e3dc43f93946',
                'name' => 'Rumah-Tangga',
                'slug' => 'rumah-tangga',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            212 => 
            array (
                'id' => 256,
                'uuid' => 'bdc23d18-ec53-487c-b8b5-926923387f63',
                'name' => 'Fantasi-3',
                'slug' => 'fantasi-3',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            213 => 
            array (
                'id' => 257,
                'uuid' => 'dd8e62c8-9879-48b0-b985-14d94f18bc43',
                'name' => 'International-Books-1',
                'slug' => 'international-books-1',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            214 => 
            array (
                'id' => 258,
                'uuid' => '7bebed67-990f-4cdc-ac7c-c6a464f57176',
                'name' => 'Thriller',
                'slug' => 'thriller',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            215 => 
            array (
                'id' => 259,
                'uuid' => 'a737f1d7-dafc-48c6-93e2-185fc032ca4c',
                'name' => 'Puisi',
                'slug' => 'puisi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            216 => 
            array (
                'id' => 260,
                'uuid' => 'd534b0bc-24b5-4b75-b185-f27366e0f193',
                'name' => 'Young Adult',
                'slug' => 'young-adult',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            217 => 
            array (
                'id' => 261,
                'uuid' => '8e7aa14b-cb4b-452b-8268-e3f0d03c435c',
                'name' => 'Novel-9',
                'slug' => 'novel-9',
                'description' => '',
                'created_at' => '2023-09-27 13:50:23',
                'updated_at' => '2023-09-27 13:50:23',
            ),
            218 => 
            array (
                'id' => 262,
                'uuid' => '7a833f28-25fd-4daf-9731-ebd53b151250',
                'name' => 'Aturan & Hukum Agama',
                'slug' => 'aturan-hukum-agama',
                'description' => '',
                'created_at' => '2023-09-27 13:50:24',
                'updated_at' => '2023-09-27 13:50:24',
            ),
            219 => 
            array (
                'id' => 263,
                'uuid' => 'ec2e9718-7c70-4d26-a855-5e2e7667df5c',
                'name' => 'Inspirasi',
                'slug' => 'inspirasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:24',
                'updated_at' => '2023-09-27 13:50:24',
            ),
            220 => 
            array (
                'id' => 264,
                'uuid' => 'a22e8d06-a398-4366-948a-9d2a2dd446ca',
                'name' => 'Soal Ulangan',
                'slug' => 'soal-ulangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:24',
                'updated_at' => '2023-09-27 13:50:24',
            ),
            221 => 
            array (
                'id' => 265,
                'uuid' => '8823ba98-d231-4f53-928e-d25a2051fe77',
                'name' => 'Pengetahuan-Umum',
                'slug' => 'pengetahuan-umum',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            222 => 
            array (
                'id' => 266,
                'uuid' => '9f2105ca-299b-4ca8-a7fd-7563d01fdea1',
                'name' => 'Parapsikologi',
                'slug' => 'parapsikologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            223 => 
            array (
                'id' => 267,
                'uuid' => '8d7be94b-1e6c-4089-b7df-131da322bc87',
                'name' => 'Obat Herbal',
                'slug' => 'obat-herbal',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            224 => 
            array (
                'id' => 268,
                'uuid' => 'bcd7cf48-534e-4868-9452-3ccc943067a0',
                'name' => 'Chiropractic',
                'slug' => 'chiropractic',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            225 => 
            array (
                'id' => 269,
                'uuid' => '6a0651bf-d054-4bb8-900f-41d632b6f494',
                'name' => 'Perlengkapan-Seni',
                'slug' => 'perlengkapan-seni',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            226 => 
            array (
                'id' => 270,
                'uuid' => '593b83a2-d4e3-4b45-80ee-20093328e91d',
                'name' => 'Perlengkapan-Menggambar',
                'slug' => 'perlengkapan-menggambar',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            227 => 
            array (
                'id' => 271,
                'uuid' => '33c7c322-6cff-41af-b0ae-f90969594bad',
                'name' => 'Sketchbook-Kertas-Gambar',
                'slug' => 'sketchbook-kertas-gambar',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            228 => 
            array (
                'id' => 272,
                'uuid' => 'f91c01cd-24f1-4adc-9b09-028ca7e915bb',
                'name' => 'Kesehatan Mental',
                'slug' => 'kesehatan-mental',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            229 => 
            array (
                'id' => 273,
                'uuid' => '3d3ab236-a145-4810-89b1-e983e4da45ba',
                'name' => 'Pengembangan & Rekayasa Perangkat Lunak',
                'slug' => 'pengembangan-rekayasa-perangkat-lunak',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            230 => 
            array (
                'id' => 274,
                'uuid' => '96be2592-6493-42e4-8808-ed97a6242f4a',
                'name' => 'Komputer-Laptop',
                'slug' => 'komputer-laptop',
                'description' => '',
                'created_at' => '2023-09-27 13:50:25',
                'updated_at' => '2023-09-27 13:50:25',
            ),
            231 => 
            array (
                'id' => 275,
                'uuid' => 'b597ced6-0240-43ac-a775-2768cb8c59ca',
                'name' => 'Ujian-Nasional',
                'slug' => 'ujian-nasional',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            232 => 
            array (
                'id' => 276,
                'uuid' => 'ecbf69ab-e0b4-4cd1-8644-6221e4370b51',
                'name' => 'Drama',
                'slug' => 'drama',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            233 => 
            array (
                'id' => 277,
                'uuid' => '726b49c7-de95-4f22-81a0-0a94d89eae15',
                'name' => 'Software',
                'slug' => 'software',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            234 => 
            array (
                'id' => 278,
                'uuid' => '44509dc0-7110-4d78-93f7-03864f91d4c4',
                'name' => 'Akuntansi & Keuangan',
                'slug' => 'akuntansi-keuangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            235 => 
            array (
                'id' => 279,
                'uuid' => 'dc2ec86c-2bb9-4637-a76c-d4f0dc369ca1',
                'name' => 'Jaringan',
                'slug' => 'jaringan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            236 => 
            array (
                'id' => 280,
                'uuid' => 'd08f0a76-5612-420d-824e-f2f94f7904e3',
                'name' => 'Psikologi Klinis',
                'slug' => 'psikologi-klinis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            237 => 
            array (
                'id' => 281,
                'uuid' => 'c0586953-85f7-4ce3-85f5-564aaa2b9fc9',
                'name' => 'Kimia',
                'slug' => 'kimia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            238 => 
            array (
                'id' => 282,
                'uuid' => 'e7f71dd5-9b8c-48bf-b409-e96061231758',
                'name' => 'Resolusi Konflik & Mediasi',
                'slug' => 'resolusi-konflik-mediasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            239 => 
            array (
                'id' => 283,
                'uuid' => '8ca71cb6-61b2-4e05-b3e9-0a8f8389068c',
                'name' => 'Energi',
                'slug' => 'energi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            240 => 
            array (
                'id' => 284,
                'uuid' => '71209af2-270b-4196-bcdc-8a67ef9df72b',
                'name' => 'Hukum-Agama',
                'slug' => 'hukum-agama',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            241 => 
            array (
                'id' => 285,
                'uuid' => '836a0a29-3a56-47a7-9df7-cbc0057ec733',
                'name' => 'Spiritualitas',
                'slug' => 'spiritualitas',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            242 => 
            array (
                'id' => 286,
                'uuid' => '7f25f1c6-ba63-426f-9d4d-b61b1cc8d6fb',
                'name' => 'Konghucu',
                'slug' => 'konghucu',
                'description' => '',
                'created_at' => '2023-09-27 13:50:26',
                'updated_at' => '2023-09-27 13:50:26',
            ),
            243 => 
            array (
                'id' => 287,
                'uuid' => '1d039abe-ee19-47f1-8f40-0ee3e112530f',
                'name' => 'Astronomi',
                'slug' => 'astronomi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            244 => 
            array (
                'id' => 288,
                'uuid' => 'f7a47cda-f3ab-43a6-b66a-9ff2e5b5b12e',
                'name' => 'Buku-Gambar-Tulis',
                'slug' => 'buku-gambar-tulis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            245 => 
            array (
                'id' => 289,
                'uuid' => '3a28b666-d7f4-458d-955c-d209b282d06d',
                'name' => 'Buku-Gambar',
                'slug' => 'buku-gambar',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            246 => 
            array (
                'id' => 290,
                'uuid' => '63fd0fbf-503b-4a1d-a768-e67e66af70cc',
                'name' => 'Produk-Kertas',
                'slug' => 'produk-kertas',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            247 => 
            array (
                'id' => 291,
                'uuid' => 'd110a5b6-fa97-43bb-bece-a9afe064f096',
                'name' => 'Konfusianisme',
                'slug' => 'konfusianisme',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            248 => 
            array (
                'id' => 292,
                'uuid' => 'ccc55f74-5820-4de3-a3a6-9bc49f29924d',
                'name' => 'Motivasi',
                'slug' => 'motivasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            249 => 
            array (
                'id' => 293,
                'uuid' => '8f1a93aa-08f9-4ad8-8077-7f7009491709',
                'name' => 'Negosiasi',
                'slug' => 'negosiasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            250 => 
            array (
                'id' => 294,
                'uuid' => '7711243b-5931-4001-89b1-da9142df7c73',
                'name' => 'Anak-Berkebutuhan-Khusus-6',
                'slug' => 'anak-berkebutuhan-khusus-6',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            251 => 
            array (
                'id' => 295,
                'uuid' => 'b3e4fd49-8b79-4ddc-af8d-eaf75aae24d4',
                'name' => 'Makanan Bayi',
                'slug' => 'makanan-bayi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:52:21',
            ),
            252 => 
            array (
                'id' => 296,
                'uuid' => 'dc739043-b47c-4466-9c23-90134f010a07',
                'name' => 'Teori Pendidikan',
                'slug' => 'teori-pendidikan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            253 => 
            array (
                'id' => 297,
                'uuid' => '174dafd2-db6c-4f4d-8a96-c53f2f2f2fba',
                'name' => 'Bank & Perbankan',
                'slug' => 'bank-perbankan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            254 => 
            array (
                'id' => 298,
                'uuid' => '82bfb74a-8e43-442f-b587-1ef39ea64a64',
                'name' => 'Media & Komunikasi',
                'slug' => 'media-komunikasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            255 => 
            array (
                'id' => 299,
                'uuid' => '13643529-3ef2-4c72-9ea7-b7b667e223a9',
                'name' => 'Public Relations',
                'slug' => 'public-relations',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            256 => 
            array (
                'id' => 300,
                'uuid' => '785cc44a-c42b-42d6-8c2e-24e188f5b612',
                'name' => 'Almanak',
                'slug' => 'almanak',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            257 => 
            array (
                'id' => 301,
                'uuid' => 'a05ceef3-f6b7-4ba2-b0a8-654d547f4a07',
                'name' => 'Ekonomi Mikro',
                'slug' => 'ekonomi-mikro',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            258 => 
            array (
                'id' => 302,
                'uuid' => 'a2aff567-8299-460c-869c-a22edf1767bb',
                'name' => 'Perbankan Islam & Keuangan',
                'slug' => 'perbankan-islam-keuangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            259 => 
            array (
                'id' => 303,
                'uuid' => 'bc8b3a04-d24d-4190-aa49-cb95380cd929',
                'name' => 'Administrasi',
                'slug' => 'administrasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            260 => 
            array (
                'id' => 304,
                'uuid' => '1382faf7-d2c1-4791-bc4c-d04e29e3c5e3',
                'name' => 'Keuangan Perusahaan',
                'slug' => 'keuangan-perusahaan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:27',
                'updated_at' => '2023-09-27 13:50:27',
            ),
            261 => 
            array (
                'id' => 305,
                'uuid' => '5b699fa8-6efb-405c-808f-16b6e6578d6d',
                'name' => 'Manufaktur',
                'slug' => 'manufaktur',
                'description' => '',
                'created_at' => '2023-09-27 13:50:28',
                'updated_at' => '2023-09-27 13:50:28',
            ),
            262 => 
            array (
                'id' => 306,
                'uuid' => '33258796-9cda-48e9-88bd-e092e8b31d08',
                'name' => 'Agribisnis',
                'slug' => 'agribisnis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:28',
                'updated_at' => '2023-09-27 13:50:28',
            ),
            263 => 
            array (
                'id' => 307,
                'uuid' => 'aab0a479-1fca-45cd-9006-b2ac260ee477',
                'name' => 'Perpajakan',
                'slug' => 'perpajakan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:28',
                'updated_at' => '2023-09-27 13:50:28',
            ),
            264 => 
            array (
                'id' => 308,
                'uuid' => '3cebc4c2-051e-4202-a0d0-c52da91bd82e',
                'name' => 'Pajak Perusahaan',
                'slug' => 'pajak-perusahaan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:28',
                'updated_at' => '2023-09-27 13:50:28',
            ),
            265 => 
            array (
                'id' => 309,
                'uuid' => '07f69ef2-b205-499d-93dc-22ce094c1fdb',
                'name' => 'Seni Grafis',
                'slug' => 'seni-grafis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:28',
                'updated_at' => '2023-09-27 13:50:28',
            ),
            266 => 
            array (
                'id' => 310,
                'uuid' => 'a98c505e-3563-4c3b-b1dc-0e1f915aaa88',
                'name' => 'Minuman',
                'slug' => 'minuman',
                'description' => '',
                'created_at' => '2023-09-27 13:50:28',
                'updated_at' => '2023-09-27 13:50:28',
            ),
            267 => 
            array (
                'id' => 311,
                'uuid' => 'abdbd6e3-970e-4156-a04c-3eeb441d87df',
                'name' => 'Psikologi Sosial',
                'slug' => 'psikologi-sosial',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            268 => 
            array (
                'id' => 312,
                'uuid' => '9f7d0f62-7d7e-4cc8-ba1d-e09ae31c518f',
                'name' => 'Cd-Musik-Digital',
                'slug' => 'cd-musik-digital',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            269 => 
            array (
                'id' => 313,
                'uuid' => 'a4192b3c-aa87-42cd-9620-9c0d3c2f16fb',
                'name' => 'Alat Musik',
                'slug' => 'alat-musik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            270 => 
            array (
                'id' => 314,
                'uuid' => 'a8f6407b-5569-4a7b-8d18-1a7f65fc2fb8',
                'name' => 'Film-Musik',
                'slug' => 'film-musik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            271 => 
            array (
                'id' => 315,
                'uuid' => '8631dc31-c542-4e79-904e-76d94bf59c24',
                'name' => 'Nonfiksi',
                'slug' => 'nonfiksi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            272 => 
            array (
                'id' => 316,
                'uuid' => 'f9cde8d6-3c43-4c82-8148-73888c0e99b9',
                'name' => 'Geografi Sejarah',
                'slug' => 'geografi-sejarah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            273 => 
            array (
                'id' => 317,
                'uuid' => '6da94b8f-4061-459b-b8b6-3bee6ca2886c',
                'name' => 'Buku Travel',
                'slug' => 'buku-travel',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            274 => 
            array (
                'id' => 318,
                'uuid' => '2564e32f-09bd-4177-993a-9fae3777e4ad',
                'name' => 'Politics-Current-Affairs-Ebook',
                'slug' => 'politics-current-affairs-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            275 => 
            array (
                'id' => 319,
                'uuid' => 'b59e3f58-c813-4e85-95b3-29675a80d1a4',
                'name' => 'Kemahiran Bahasa Inggris',
                'slug' => 'kemahiran-bahasa-inggris',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            276 => 
            array (
                'id' => 320,
                'uuid' => '058b550e-f467-4350-b09d-d8e5ea85436e',
                'name' => 'Sejarah & Kritik',
                'slug' => 'sejarah-kritik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            277 => 
            array (
                'id' => 321,
                'uuid' => 'dd275e42-3f5a-4b3a-b868-29bbf5153a70',
                'name' => 'Desain Interior',
                'slug' => 'desain-interior',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            278 => 
            array (
                'id' => 322,
                'uuid' => 'a9cae9e8-6c79-4e45-a988-9d224e57f530',
                'name' => 'Tata Kota',
                'slug' => 'tata-kota',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            279 => 
            array (
                'id' => 323,
                'uuid' => '6341d763-6f69-4141-9905-0378cb9aa841',
                'name' => 'Furnitur',
                'slug' => 'furnitur',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            280 => 
            array (
                'id' => 324,
                'uuid' => '8ed58b49-fb83-488e-b729-6db09d6cf094',
                'name' => 'Mekanik',
                'slug' => 'mekanik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            281 => 
            array (
                'id' => 325,
                'uuid' => 'f12cdfe3-6e1e-47f2-bd97-3b0077fd5a7e',
                'name' => 'Industri Makanan',
                'slug' => 'industri-makanan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            282 => 
            array (
                'id' => 326,
                'uuid' => 'c7fe362c-3388-4fd6-b896-3256a69b5893',
                'name' => 'Ilmu Pangan',
                'slug' => 'ilmu-pangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            283 => 
            array (
                'id' => 327,
                'uuid' => 'f9cb805e-2463-4e30-894f-52ecf01aa58f',
                'name' => 'Jepang',
                'slug' => 'jepang',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            284 => 
            array (
                'id' => 328,
                'uuid' => '79f951f3-f406-47fa-a027-58fa95fad16e',
                'name' => 'Perangkat Keras',
                'slug' => 'perangkat-keras',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            285 => 
            array (
                'id' => 329,
                'uuid' => '057c1000-0d4c-4eb8-ad9a-132ecefecb02',
                'name' => 'Hardware',
                'slug' => 'hardware',
                'description' => '',
                'created_at' => '2023-09-27 13:50:29',
                'updated_at' => '2023-09-27 13:50:29',
            ),
            286 => 
            array (
                'id' => 330,
                'uuid' => 'ef4d8184-6a0b-45c6-8616-5b7ceba6d5c7',
                'name' => 'Administrasi Akademik',
                'slug' => 'administrasi-akademik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            287 => 
            array (
                'id' => 331,
                'uuid' => '9e10dfee-6cf7-4de3-9883-521347f26592',
                'name' => 'Lain-Lain-4',
                'slug' => 'lain-lain-4',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            288 => 
            array (
                'id' => 332,
                'uuid' => 'd8eb6ee0-2cf8-4fc6-92cf-704dec2770b6',
                'name' => 'Ilmu Bumi',
                'slug' => 'ilmu-bumi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            289 => 
            array (
                'id' => 333,
                'uuid' => '95cac5e4-11f5-4689-80fc-8d2d15a5e29d',
                'name' => 'Bahasa-Asing',
                'slug' => 'bahasa-asing',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            290 => 
            array (
                'id' => 334,
                'uuid' => 'b4c451ea-e74d-49d5-8fca-a1182aafcde5',
                'name' => 'Asia',
                'slug' => 'asia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            291 => 
            array (
                'id' => 335,
                'uuid' => 'bcc07494-5c43-4a42-a38e-52e3f0a51e22',
                'name' => 'Otomotif',
                'slug' => 'otomotif',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            292 => 
            array (
                'id' => 336,
                'uuid' => '856a480c-01e8-4abc-b2d6-6d7002c3382f',
                'name' => 'Transportasi',
                'slug' => 'transportasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            293 => 
            array (
                'id' => 337,
                'uuid' => 'c7690993-566a-4214-bfd3-d1a718757e0a',
                'name' => 'Sejarah Ekonomi',
                'slug' => 'sejarah-ekonomi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            294 => 
            array (
                'id' => 338,
                'uuid' => 'fcd69449-e2c7-4edb-b862-05bc1cdf858b',
                'name' => 'Biografi-6',
                'slug' => 'biografi-6',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            295 => 
            array (
                'id' => 339,
                'uuid' => '64ff312e-38b5-46b0-be81-4847d12ee0a5',
                'name' => 'Autobiografi',
                'slug' => 'autobiografi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            296 => 
            array (
                'id' => 340,
                'uuid' => '8f1b636c-33af-4d76-b48f-5fe9b2bf39ac',
                'name' => 'Puzzles',
                'slug' => 'puzzles',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            297 => 
            array (
                'id' => 341,
                'uuid' => '300679bc-4a96-4380-a284-00f0c2863e09',
                'name' => 'Industri Tekstil',
                'slug' => 'industri-tekstil',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            298 => 
            array (
                'id' => 342,
                'uuid' => '1b7d69e9-19ac-4f15-b47d-28e2ff068feb',
                'name' => 'Fashion-Aksesoris',
                'slug' => 'fashion-aksesoris',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            299 => 
            array (
                'id' => 343,
                'uuid' => '6f3e6e6d-8d6b-4c71-be0f-a95d1c01cb1c',
                'name' => 'Seni & Budaya',
                'slug' => 'seni-budaya',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            300 => 
            array (
                'id' => 344,
                'uuid' => '542152e3-476d-484c-bc49-1323649ffa97',
                'name' => 'Fiksi Sejarah',
                'slug' => 'fiksi-sejarah',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            301 => 
            array (
                'id' => 345,
                'uuid' => '7bf1ceb4-6034-4e78-91fc-5627da73ac85',
                'name' => 'Kuis',
                'slug' => 'kuis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:30',
                'updated_at' => '2023-09-27 13:50:30',
            ),
            302 => 
            array (
                'id' => 346,
                'uuid' => 'dabc6576-40c8-480e-af80-378adb5e800e',
                'name' => 'Konstruksi',
                'slug' => 'konstruksi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:31',
                'updated_at' => '2023-09-27 13:50:31',
            ),
            303 => 
            array (
                'id' => 347,
                'uuid' => 'e7d3ca62-e7cf-494f-9ee0-bd5ff1a08621',
                'name' => 'Manajemen Proyek',
                'slug' => 'manajemen-proyek',
                'description' => '',
                'created_at' => '2023-09-27 13:50:31',
                'updated_at' => '2023-09-27 13:50:31',
            ),
            304 => 
            array (
                'id' => 348,
                'uuid' => 'f6974816-82c0-44c9-bbd9-5a651e35d6bc',
                'name' => 'Pertunjukan Seni',
                'slug' => 'pertunjukan-seni',
                'description' => '',
                'created_at' => '2023-09-27 13:50:31',
                'updated_at' => '2023-09-27 13:50:31',
            ),
            305 => 
            array (
                'id' => 349,
                'uuid' => '66948f69-f63a-4b01-bc28-8284656dab54',
                'name' => 'Lain-Lain-20',
                'slug' => 'lain-lain-20',
                'description' => '',
                'created_at' => '2023-09-27 13:50:31',
                'updated_at' => '2023-09-27 13:50:31',
            ),
            306 => 
            array (
                'id' => 350,
                'uuid' => '532cc9b6-99e8-4294-a7b2-1431aa198b16',
                'name' => 'Makanan-Minuman',
                'slug' => 'makanan-minuman',
                'description' => '',
                'created_at' => '2023-09-27 13:50:31',
                'updated_at' => '2023-09-27 13:50:31',
            ),
            307 => 
            array (
                'id' => 351,
                'uuid' => '3681e6c4-5466-4344-90c0-de9f1bf1f2e8',
                'name' => 'Budaya',
                'slug' => 'budaya',
                'description' => '',
                'created_at' => '2023-09-27 13:50:31',
                'updated_at' => '2023-09-27 13:50:31',
            ),
            308 => 
            array (
                'id' => 352,
                'uuid' => '788bb250-79a3-4e9b-be0d-506e558fec64',
                'name' => 'Biografi',
                'slug' => 'biografi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            309 => 
            array (
                'id' => 353,
                'uuid' => 'fdb8d990-3c89-4284-9d59-ae344a7387a9',
                'name' => 'Layanan Kesehatan',
                'slug' => 'layanan-kesehatan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            310 => 
            array (
                'id' => 354,
                'uuid' => '8cf1a2d9-1604-4c9b-bae4-3b1726e90b5e',
                'name' => 'Olahraga & Rekreasi',
                'slug' => 'olahraga-rekreasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            311 => 
            array (
                'id' => 355,
                'uuid' => 'bcba5b4a-194b-46d3-8704-6b166a87f8c5',
                'name' => 'Perencanaan Keuangan',
                'slug' => 'perencanaan-keuangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            312 => 
            array (
                'id' => 356,
                'uuid' => '42e860e9-f1d9-4bfe-a892-ea9391dadd79',
                'name' => 'Kajian & Penelitian',
                'slug' => 'kajian-penelitian',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            313 => 
            array (
                'id' => 357,
                'uuid' => '477a2d74-55cc-46b4-a839-98f05dc566b3',
                'name' => 'Financial Growth',
                'slug' => 'financial-growth',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            314 => 
            array (
                'id' => 358,
                'uuid' => '369676cc-4cd2-48f9-8135-756578040e04',
                'name' => 'Cerita Rakyat',
                'slug' => 'cerita-rakyat',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            315 => 
            array (
                'id' => 359,
                'uuid' => 'a680035b-76d8-426b-8cca-df287f91813c',
                'name' => 'Musik Klasik',
                'slug' => 'musik-klasik',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            316 => 
            array (
                'id' => 360,
                'uuid' => '5a817ae5-3b67-461c-a4dc-b15485c588e1',
                'name' => 'Panduan & Ulasan',
                'slug' => 'panduan-ulasan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            317 => 
            array (
                'id' => 361,
                'uuid' => '5d07c7cb-c93c-4c3c-b750-3c79182fea13',
                'name' => 'Gerakan',
                'slug' => 'gerakan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:32',
                'updated_at' => '2023-09-27 13:50:32',
            ),
            318 => 
            array (
                'id' => 362,
                'uuid' => 'cf2dd086-db25-41d9-97a1-3ca683193f99',
                'name' => 'Kimia & Biokimia',
                'slug' => 'kimia-biokimia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:33',
                'updated_at' => '2023-09-27 13:50:33',
            ),
            319 => 
            array (
                'id' => 363,
                'uuid' => '0ec30600-15a1-4ed9-b240-c9deb95b3d84',
                'name' => 'Kesehatan Parobaya & Lansia',
                'slug' => 'kesehatan-parobaya-lansia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:33',
                'updated_at' => '2023-09-27 13:50:33',
            ),
            320 => 
            array (
                'id' => 364,
                'uuid' => '1845a0c7-69f0-46d3-848d-5456ac184146',
                'name' => 'Peralatan-Kesehatan',
                'slug' => 'peralatan-kesehatan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:33',
                'updated_at' => '2023-09-27 13:50:33',
            ),
            321 => 
            array (
                'id' => 365,
                'uuid' => '566c6220-9c47-45ca-b4c3-f23e8900692f',
                'name' => 'Spiritualisme',
                'slug' => 'spiritualisme',
                'description' => '',
                'created_at' => '2023-09-27 13:50:33',
                'updated_at' => '2023-09-27 13:50:33',
            ),
            322 => 
            array (
                'id' => 366,
                'uuid' => 'ab9b5eb5-92e6-4673-9e02-fc92aebcd522',
                'name' => 'Kajian-Penelitian-1',
                'slug' => 'kajian-penelitian-1',
                'description' => '',
                'created_at' => '2023-09-27 13:50:33',
                'updated_at' => '2023-09-27 13:50:33',
            ),
            323 => 
            array (
                'id' => 367,
                'uuid' => '5708c04b-564c-4e57-963f-79b2a1884af8',
                'name' => 'Makanan-Kesehatan',
                'slug' => 'makanan-kesehatan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:33',
                'updated_at' => '2023-09-27 13:50:33',
            ),
            324 => 
            array (
                'id' => 368,
                'uuid' => '37668092-7463-4298-a9d5-de9bea805f1b',
                'name' => 'Perikanan & Akuakultur',
                'slug' => 'perikanan-akuakultur',
                'description' => '',
                'created_at' => '2023-09-27 13:50:34',
                'updated_at' => '2023-09-27 13:50:34',
            ),
            325 => 
            array (
                'id' => 369,
                'uuid' => '9e40f65e-bd2f-428b-8023-98a2a3ec97a0',
                'name' => 'Mainan-Aksi',
                'slug' => 'mainan-aksi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:35',
                'updated_at' => '2023-09-27 13:50:35',
            ),
            326 => 
            array (
                'id' => 370,
                'uuid' => '1f9e5c7c-dac4-4abc-a288-decc810c9336',
                'name' => 'Dewasa',
                'slug' => 'dewasa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:35',
                'updated_at' => '2023-09-27 13:50:35',
            ),
            327 => 
            array (
                'id' => 371,
                'uuid' => 'ce10f27a-4586-4fc5-9058-ecfb9a7d974f',
                'name' => 'Slice Of Life',
                'slug' => 'slice-of-life',
                'description' => '',
                'created_at' => '2023-09-27 13:50:35',
                'updated_at' => '2023-09-27 13:50:35',
            ),
            328 => 
            array (
                'id' => 372,
                'uuid' => 'a877c217-31c4-4914-9939-f155262dda49',
                'name' => 'Komik Eropa',
                'slug' => 'komik-eropa',
                'description' => '',
                'created_at' => '2023-09-27 13:50:36',
                'updated_at' => '2023-09-27 13:50:36',
            ),
            329 => 
            array (
                'id' => 373,
                'uuid' => 'b832b1b3-3003-4913-8d7f-90e087835353',
                'name' => 'Barat',
                'slug' => 'barat',
                'description' => '',
                'created_at' => '2023-09-27 13:50:36',
                'updated_at' => '2023-09-27 13:50:36',
            ),
            330 => 
            array (
                'id' => 374,
                'uuid' => 'a8e12be1-cd6e-40aa-a687-adc3f80edf6e',
                'name' => 'Cina',
                'slug' => 'cina',
                'description' => '',
                'created_at' => '2023-09-27 13:50:38',
                'updated_at' => '2023-09-27 13:50:38',
            ),
            331 => 
            array (
                'id' => 375,
                'uuid' => '32407674-abb0-46e2-a240-7bf9e828c53d',
                'name' => 'Mega-Best-Seller',
                'slug' => 'mega-best-seller',
                'description' => '',
                'created_at' => '2023-09-27 13:50:38',
                'updated_at' => '2023-09-27 13:50:38',
            ),
            332 => 
            array (
                'id' => 376,
                'uuid' => '215f8e6b-1b7c-4e43-8327-dc7ece20237a',
                'name' => 'Pernikahan',
                'slug' => 'pernikahan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:38',
                'updated_at' => '2023-09-27 13:50:38',
            ),
            333 => 
            array (
                'id' => 377,
                'uuid' => 'ae77e371-8089-42ed-9ef9-9405bd40cdda',
                'name' => 'Hubungan',
                'slug' => 'hubungan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            334 => 
            array (
                'id' => 378,
                'uuid' => '24c8d0b7-0634-4739-9a74-1fa9add4ee8a',
                'name' => 'Hukum Keluarga',
                'slug' => 'hukum-keluarga',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            335 => 
            array (
                'id' => 379,
                'uuid' => 'd5cd2129-057b-4295-9dea-59d7a3e669bb',
                'name' => 'Korea',
                'slug' => 'korea',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            336 => 
            array (
                'id' => 380,
                'uuid' => 'ece18adc-2fb0-49b4-b83b-3b547eafffec',
                'name' => 'Kursus & Hidangan',
                'slug' => 'kursus-hidangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            337 => 
            array (
                'id' => 381,
                'uuid' => '88501271-324b-4e26-aa10-96fa91a42c8d',
                'name' => 'Kue',
                'slug' => 'kue',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            338 => 
            array (
                'id' => 382,
                'uuid' => '00cf34e7-3165-48de-b652-a90f431b29d1',
                'name' => 'Bisnis Kuliner',
                'slug' => 'bisnis-kuliner',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            339 => 
            array (
                'id' => 383,
                'uuid' => '3cc44048-82ec-49db-a8de-a2fb66e442d8',
                'name' => 'Pajangan-Dekorasi',
                'slug' => 'pajangan-dekorasi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            340 => 
            array (
                'id' => 384,
                'uuid' => 'fd9cae3b-ff50-47a2-8520-6fcdf4e9c4fb',
                'name' => 'Bahasa Daerah Indonesia',
                'slug' => 'bahasa-daerah-indonesia',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            341 => 
            array (
                'id' => 385,
                'uuid' => '35256a5c-881e-4a24-bb64-149820ae7395',
                'name' => 'Mandarin',
                'slug' => 'mandarin',
                'description' => '',
                'created_at' => '2023-09-27 13:50:39',
                'updated_at' => '2023-09-27 13:50:39',
            ),
            342 => 
            array (
                'id' => 386,
                'uuid' => 'd94a5499-dbbd-406f-b8d8-4ab33c2fd609',
                'name' => 'Perhotelan, Perjalanan & Pariwisata',
                'slug' => 'perhotelan-perjalanan-pariwisata',
                'description' => '',
                'created_at' => '2023-09-27 13:50:40',
                'updated_at' => '2023-09-27 13:50:40',
            ),
            343 => 
            array (
                'id' => 387,
                'uuid' => 'b71ebabc-d762-4474-a0e7-67dcdcf39780',
                'name' => 'Psikotes',
                'slug' => 'psikotes',
                'description' => '',
                'created_at' => '2023-09-27 13:50:40',
                'updated_at' => '2023-09-27 13:50:40',
            ),
            344 => 
            array (
                'id' => 388,
                'uuid' => 'b99dd1cd-495c-4403-a885-3dfe3076ffb1',
                'name' => 'Perkembangan',
                'slug' => 'perkembangan',
                'description' => '',
                'created_at' => '2023-09-27 13:50:40',
                'updated_at' => '2023-09-27 13:50:40',
            ),
            345 => 
            array (
                'id' => 389,
                'uuid' => 'a9e85e0e-1066-4473-8728-7971a473763d',
                'name' => 'Prancis',
                'slug' => 'prancis',
                'description' => '',
                'created_at' => '2023-09-27 13:50:40',
                'updated_at' => '2023-09-27 13:50:40',
            ),
            346 => 
            array (
                'id' => 390,
                'uuid' => '1909f579-99d2-465c-b8ce-7d3209a33e03',
                'name' => 'Non-Buku',
                'slug' => 'non-buku',
                'description' => '',
                'created_at' => '2023-09-27 13:50:40',
                'updated_at' => '2023-09-27 13:50:40',
            ),
            347 => 
            array (
                'id' => 391,
                'uuid' => '7a583674-2f25-494a-8f29-a0f86a067b92',
                'name' => 'Novel-Lokal-1',
                'slug' => 'novel-lokal-1',
                'description' => '',
                'created_at' => '2023-09-27 13:50:43',
                'updated_at' => '2023-09-27 13:50:43',
            ),
            348 => 
            array (
                'id' => 392,
                'uuid' => 'beed72de-e937-4e04-af61-d8af36c592dc',
                'name' => 'Legenda, Mitos, Dongeng',
                'slug' => 'legenda-mitos-dongeng',
                'description' => '',
                'created_at' => '2023-09-27 13:50:43',
                'updated_at' => '2023-09-27 13:50:43',
            ),
            349 => 
            array (
                'id' => 393,
                'uuid' => '9d2bed7e-ec07-4049-ac53-84d7b66ce8f8',
                'name' => 'Antologi',
                'slug' => 'antologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:44',
                'updated_at' => '2023-09-27 13:50:44',
            ),
            350 => 
            array (
                'id' => 394,
                'uuid' => '96ada79a-813c-4391-acaf-e77c0daefb9a',
                'name' => 'Umur-2-5-Tahun',
                'slug' => 'umur-2-5-tahun',
                'description' => '',
                'created_at' => '2023-09-27 13:50:44',
                'updated_at' => '2023-09-27 13:50:44',
            ),
            351 => 
            array (
                'id' => 395,
                'uuid' => '9250b069-945d-4f9f-a0f4-8b3d47dc6c2f',
                'name' => 'Umur-5-12-Tahun',
                'slug' => 'umur-5-12-tahun',
                'description' => '',
                'created_at' => '2023-09-27 13:50:44',
                'updated_at' => '2023-09-27 13:50:44',
            ),
            352 => 
            array (
                'id' => 396,
                'uuid' => '6b6653f4-d203-454c-9a9e-ccad06be7d5a',
                'name' => 'Perang & Militer',
                'slug' => 'perang-militer',
                'description' => '',
                'created_at' => '2023-09-27 13:50:44',
                'updated_at' => '2023-09-27 13:50:44',
            ),
            353 => 
            array (
                'id' => 397,
                'uuid' => '0beda899-2471-4699-a1dd-bbccab9e1304',
                'name' => 'Esai',
                'slug' => 'esai',
                'description' => '',
                'created_at' => '2023-09-27 13:50:48',
                'updated_at' => '2023-09-27 13:50:48',
            ),
            354 => 
            array (
                'id' => 398,
                'uuid' => 'b446eb10-b991-40a8-9fe2-7b60eec5387b',
                'name' => 'Drama-Sastra',
                'slug' => 'drama-sastra',
                'description' => '',
                'created_at' => '2023-09-27 13:50:51',
                'updated_at' => '2023-09-27 13:50:51',
            ),
            355 => 
            array (
                'id' => 399,
                'uuid' => '7a4d9b2c-bd72-4511-b689-c528d0870bb0',
                'name' => 'Sepeda',
                'slug' => 'sepeda',
                'description' => '',
                'created_at' => '2023-09-27 13:50:54',
                'updated_at' => '2023-09-27 13:50:54',
            ),
            356 => 
            array (
                'id' => 400,
                'uuid' => '7a5cd887-5942-4e69-9934-4ae565a70de6',
                'name' => 'Yoga',
                'slug' => 'yoga',
                'description' => '',
                'created_at' => '2023-09-27 13:50:54',
                'updated_at' => '2023-09-27 13:50:54',
            ),
            357 => 
            array (
                'id' => 401,
                'uuid' => '92bbb1fc-1c98-4bf7-93e3-acbf71524f56',
                'name' => 'Aljabar',
                'slug' => 'aljabar',
                'description' => '',
                'created_at' => '2023-09-27 13:50:55',
                'updated_at' => '2023-09-27 13:50:55',
            ),
            358 => 
            array (
                'id' => 402,
                'uuid' => '3c56af81-72fd-4cc4-8e56-67d08f8a2e53',
                'name' => 'Matematika Murni',
                'slug' => 'matematika-murni',
                'description' => '',
                'created_at' => '2023-09-27 13:50:55',
                'updated_at' => '2023-09-27 13:50:55',
            ),
            359 => 
            array (
                'id' => 403,
                'uuid' => 'dc1967cb-c208-455b-83bf-15efd838e9d7',
                'name' => 'Buku-Khusus',
                'slug' => 'buku-khusus',
                'description' => '',
                'created_at' => '2023-09-27 13:50:55',
                'updated_at' => '2023-09-27 13:50:55',
            ),
            360 => 
            array (
                'id' => 404,
                'uuid' => '6e830873-e7b6-4cf2-9ab1-c88a50209cfd',
                'name' => 'Busana Muslim',
                'slug' => 'busana-muslim',
                'description' => '',
                'created_at' => '2023-09-27 13:50:56',
                'updated_at' => '2023-09-27 13:50:56',
            ),
            361 => 
            array (
                'id' => 405,
                'uuid' => '77a7899e-cfac-4e1a-8068-d72d693852a0',
                'name' => 'Arkeologi',
                'slug' => 'arkeologi',
                'description' => '',
                'created_at' => '2023-09-27 13:50:58',
                'updated_at' => '2023-09-27 13:50:58',
            ),
            362 => 
            array (
                'id' => 406,
                'uuid' => '90d2da0e-2616-4966-a1b8-b883f636d8e8',
                'name' => 'Aksesoris-Fashion',
                'slug' => 'aksesoris-fashion',
                'description' => '',
                'created_at' => '2023-09-27 13:51:00',
                'updated_at' => '2023-09-27 13:51:00',
            ),
            363 => 
            array (
                'id' => 407,
                'uuid' => '37b3520a-6d8d-4d2e-9823-845b93cf95a1',
                'name' => 'Etnis & Regional Asia',
                'slug' => 'etnis-regional-asia',
                'description' => '',
                'created_at' => '2023-09-27 13:51:01',
                'updated_at' => '2023-09-27 13:51:01',
            ),
            364 => 
            array (
                'id' => 408,
                'uuid' => '47f5d2ac-6a93-4fb6-b149-91f4ec81cbe9',
                'name' => 'Masakan Asia',
                'slug' => 'masakan-asia',
                'description' => '',
                'created_at' => '2023-09-27 13:51:01',
                'updated_at' => '2023-09-27 13:51:01',
            ),
            365 => 
            array (
                'id' => 409,
                'uuid' => 'bf7d5952-a613-4308-9b3d-0bc654d18d68',
                'name' => 'Zoologi',
                'slug' => 'zoologi',
                'description' => '',
                'created_at' => '2023-09-27 13:51:01',
                'updated_at' => '2023-09-27 13:51:01',
            ),
            366 => 
            array (
                'id' => 410,
                'uuid' => '4a664b2a-f2a7-4ddd-930f-8ae43f09305d',
                'name' => 'Hewan Peliharaan',
                'slug' => 'hewan-peliharaan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:01',
                'updated_at' => '2023-09-27 13:51:01',
            ),
            367 => 
            array (
                'id' => 411,
                'uuid' => '35f6d073-b4ab-4b9a-89f2-03181c0bede4',
                'name' => 'Makanan Penutup',
                'slug' => 'makanan-penutup',
                'description' => '',
                'created_at' => '2023-09-27 13:51:01',
                'updated_at' => '2023-09-27 13:51:01',
            ),
            368 => 
            array (
                'id' => 412,
                'uuid' => '4bacce8a-f9c2-4278-b0c3-743d1bc02a23',
                'name' => 'Makanan-1',
                'slug' => 'makanan-1',
                'description' => '',
                'created_at' => '2023-09-27 13:51:01',
                'updated_at' => '2023-09-27 13:51:01',
            ),
            369 => 
            array (
                'id' => 413,
                'uuid' => 'c13856b1-c859-4818-8b4b-c9cf8241bea5',
                'name' => 'Makanan',
                'slug' => 'makanan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:01',
                'updated_at' => '2023-09-27 13:51:01',
            ),
            370 => 
            array (
                'id' => 414,
                'uuid' => '68d3a295-bc57-42c6-8ef7-2b8589cd17cb',
                'name' => 'Tata Ruang Dan Pertamanan',
                'slug' => 'tata-ruang-dan-pertamanan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:02',
                'updated_at' => '2023-09-27 13:51:02',
            ),
            371 => 
            array (
                'id' => 415,
                'uuid' => '345ef830-0874-404a-b33c-471c903c0777',
                'name' => 'Buku Permainan & Aktivitas',
                'slug' => 'buku-permainan-aktivitas',
                'description' => '',
                'created_at' => '2023-09-27 13:51:04',
                'updated_at' => '2023-09-27 13:51:04',
            ),
            372 => 
            array (
                'id' => 416,
                'uuid' => 'c88113fd-f6cc-4bbc-a2f0-e8048fc5e66d',
                'name' => 'Umum',
                'slug' => 'umum',
                'description' => '',
                'created_at' => '2023-09-27 13:51:04',
                'updated_at' => '2023-09-27 13:51:04',
            ),
            373 => 
            array (
                'id' => 417,
                'uuid' => '784afb39-1693-4f07-9f60-11de8824c248',
                'name' => 'Serial',
                'slug' => 'serial',
                'description' => '',
                'created_at' => '2023-09-27 13:51:04',
                'updated_at' => '2023-09-27 13:51:04',
            ),
            374 => 
            array (
                'id' => 418,
                'uuid' => 'ff56d3d6-614a-4c09-8f05-e1a27fd27945',
                'name' => 'Cpns-Tps-Tni-Polri',
                'slug' => 'cpns-tps-tni-polri',
                'description' => '',
                'created_at' => '2023-09-27 13:51:06',
                'updated_at' => '2023-09-27 13:51:06',
            ),
            375 => 
            array (
                'id' => 419,
                'uuid' => '92bd3f90-301a-4610-ac70-3fbdae563669',
                'name' => 'Kurikulum-Internasional',
                'slug' => 'kurikulum-internasional',
                'description' => '',
                'created_at' => '2023-09-27 13:51:08',
                'updated_at' => '2023-09-27 13:51:08',
            ),
            376 => 
            array (
                'id' => 420,
                'uuid' => '8893da84-b687-4f75-990e-11d1db4a18c4',
                'name' => 'Sejarah-10',
                'slug' => 'sejarah-10',
                'description' => '',
                'created_at' => '2023-09-27 13:51:08',
                'updated_at' => '2023-09-27 13:51:08',
            ),
            377 => 
            array (
                'id' => 421,
                'uuid' => 'f4d4fb19-56ba-4d0a-82a7-ce69483cb248',
                'name' => 'Kepercayaan',
                'slug' => 'kepercayaan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:09',
                'updated_at' => '2023-09-27 13:51:09',
            ),
            378 => 
            array (
                'id' => 422,
                'uuid' => '5f8d9097-5667-4111-9f69-c981754439c8',
                'name' => 'Online Trading',
                'slug' => 'online-trading',
                'description' => '',
                'created_at' => '2023-09-27 13:51:11',
                'updated_at' => '2023-09-27 13:51:11',
            ),
            379 => 
            array (
                'id' => 423,
                'uuid' => '84eb615b-53ad-49d5-8d0a-8f109086ad5f',
                'name' => 'Dongeng',
                'slug' => 'dongeng',
                'description' => '',
                'created_at' => '2023-09-27 13:51:12',
                'updated_at' => '2023-09-27 13:51:12',
            ),
            380 => 
            array (
                'id' => 424,
                'uuid' => 'a9d3d586-a10e-4387-9e7c-93133432251b',
                'name' => 'Manajemen Risiko Keuangan',
                'slug' => 'manajemen-risiko-keuangan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:13',
                'updated_at' => '2023-09-27 13:51:13',
            ),
            381 => 
            array (
                'id' => 425,
                'uuid' => 'f7962e73-9530-4a87-8ad0-ed260d2d25e0',
                'name' => 'Tes Cfa',
                'slug' => 'tes-cfa',
                'description' => '',
                'created_at' => '2023-09-27 13:51:13',
                'updated_at' => '2023-09-27 13:51:13',
            ),
            382 => 
            array (
                'id' => 426,
                'uuid' => '30d140c9-4a04-4c6f-b0e4-992b84c45ea0',
                'name' => 'Organisasi & Struktur',
                'slug' => 'organisasi-struktur',
                'description' => '',
                'created_at' => '2023-09-27 13:51:18',
                'updated_at' => '2023-09-27 13:51:18',
            ),
            383 => 
            array (
                'id' => 427,
                'uuid' => '2bd07631-0fb7-461c-8040-5432c54f15e8',
                'name' => 'Hak & Hukum Buruh',
                'slug' => 'hak-hukum-buruh',
                'description' => '',
                'created_at' => '2023-09-27 13:51:18',
                'updated_at' => '2023-09-27 13:51:18',
            ),
            384 => 
            array (
                'id' => 428,
                'uuid' => 'da35ee35-65af-435a-8509-a2af2526210c',
                'name' => 'Journaling',
                'slug' => 'journaling',
                'description' => '',
                'created_at' => '2023-09-27 13:51:19',
                'updated_at' => '2023-09-27 13:51:19',
            ),
            385 => 
            array (
                'id' => 429,
                'uuid' => '68373a57-a7a5-4d1b-b273-0d71b57b75da',
                'name' => 'Kepribadian',
                'slug' => 'kepribadian',
                'description' => '',
                'created_at' => '2023-09-27 13:51:21',
                'updated_at' => '2023-09-27 13:51:21',
            ),
            386 => 
            array (
                'id' => 430,
                'uuid' => '820517cf-cf4d-4e1e-952b-ab55a601cc19',
                'name' => 'Motivation-Self-Help-Ebook',
                'slug' => 'motivation-self-help-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:51:21',
                'updated_at' => '2023-09-27 13:51:21',
            ),
            387 => 
            array (
                'id' => 431,
                'uuid' => 'd8a594fa-d083-4ec2-9bcc-3eb4d9c66e54',
                'name' => 'Berdasarkan Kisah Nyata',
                'slug' => 'berdasarkan-kisah-nyata',
                'description' => '',
                'created_at' => '2023-09-27 13:51:22',
                'updated_at' => '2023-09-27 13:51:22',
            ),
            388 => 
            array (
                'id' => 432,
                'uuid' => '8201f57b-a8c4-4842-b1ae-09437a6cb20c',
                'name' => 'Adult-Novels-Ebook',
                'slug' => 'adult-novels-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:51:23',
                'updated_at' => '2023-09-27 13:51:23',
            ),
            389 => 
            array (
                'id' => 433,
                'uuid' => '104c4186-62df-48f1-ab7c-794921bd1397',
                'name' => 'K-Pop',
                'slug' => 'k-pop',
                'description' => '',
                'created_at' => '2023-09-27 13:51:23',
                'updated_at' => '2023-09-27 13:51:23',
            ),
            390 => 
            array (
                'id' => 434,
                'uuid' => 'ebf942b4-041e-421e-99a9-baa09ad64e4a',
                'name' => 'Pendidikan & Pelatihan',
                'slug' => 'pendidikan-pelatihan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:23',
                'updated_at' => '2023-09-27 13:51:23',
            ),
            391 => 
            array (
                'id' => 435,
                'uuid' => '35de7595-0b26-40bb-b49b-cf128d740b7f',
                'name' => 'Konseling',
                'slug' => 'konseling',
                'description' => '',
                'created_at' => '2023-09-27 13:51:23',
                'updated_at' => '2023-09-27 13:51:23',
            ),
            392 => 
            array (
                'id' => 436,
                'uuid' => 'a77758cc-4550-4ed4-9b7e-43776d25cb04',
                'name' => 'Lowongan Kerja',
                'slug' => 'lowongan-kerja',
                'description' => '',
                'created_at' => '2023-09-27 13:51:23',
                'updated_at' => '2023-09-27 13:51:23',
            ),
            393 => 
            array (
                'id' => 437,
                'uuid' => '9f92d43b-f09e-4fd0-991c-c7e43c7850af',
                'name' => 'Interview',
                'slug' => 'interview',
                'description' => '',
                'created_at' => '2023-09-27 13:51:23',
                'updated_at' => '2023-09-27 13:51:23',
            ),
            394 => 
            array (
                'id' => 438,
                'uuid' => '18d73e29-9b0c-4a0d-a427-2d627cbab1ca',
                'name' => 'Referensi & Pedoman',
                'slug' => 'referensi-pedoman',
                'description' => '',
                'created_at' => '2023-09-27 13:51:23',
                'updated_at' => '2023-09-27 13:51:23',
            ),
            395 => 
            array (
                'id' => 439,
                'uuid' => '86702a8a-1da4-443c-9b4c-89f53f7baa95',
                'name' => 'Furniture-Sekolah',
                'slug' => 'furniture-sekolah',
                'description' => '',
                'created_at' => '2023-09-27 13:51:25',
                'updated_at' => '2023-09-27 13:51:25',
            ),
            396 => 
            array (
                'id' => 440,
                'uuid' => '2dae6dbc-65ee-4035-8607-9a37d1533efc',
                'name' => 'Furniture',
                'slug' => 'furniture',
                'description' => '',
                'created_at' => '2023-09-27 13:51:25',
                'updated_at' => '2023-09-27 13:51:25',
            ),
            397 => 
            array (
                'id' => 441,
                'uuid' => '46d4178b-69d7-40fb-a5bb-f720a98d5b56',
                'name' => 'Manajemen Industri',
                'slug' => 'manajemen-industri',
                'description' => '',
                'created_at' => '2023-09-27 13:51:29',
                'updated_at' => '2023-09-27 13:51:29',
            ),
            398 => 
            array (
                'id' => 442,
                'uuid' => '1376f552-b43a-4bb9-83f9-15c854233523',
                'name' => 'Cat',
                'slug' => 'cat',
                'description' => '',
                'created_at' => '2023-09-27 13:51:32',
                'updated_at' => '2023-09-27 13:51:32',
            ),
            399 => 
            array (
                'id' => 443,
                'uuid' => '1f084e6b-e60a-433b-b045-c076a6e2c1b5',
                'name' => 'Cat-Air',
                'slug' => 'cat-air',
                'description' => '',
                'created_at' => '2023-09-27 13:51:32',
                'updated_at' => '2023-09-27 13:51:32',
            ),
            400 => 
            array (
                'id' => 444,
                'uuid' => 'f34c122c-fc43-43ad-99dd-75493b3b924a',
                'name' => 'Alat-Lukis',
                'slug' => 'alat-lukis',
                'description' => '',
                'created_at' => '2023-09-27 13:51:32',
                'updated_at' => '2023-09-27 13:51:32',
            ),
            401 => 
            array (
                'id' => 445,
                'uuid' => '2df9236a-694c-4e52-a743-2e466f6f0cee',
                'name' => 'Laptop',
                'slug' => 'laptop',
                'description' => '',
                'created_at' => '2023-09-27 13:51:37',
                'updated_at' => '2023-09-27 13:51:37',
            ),
            402 => 
            array (
                'id' => 446,
                'uuid' => 'd4a2ea58-547c-4376-8fb6-c1bb70c7fb4c',
                'name' => 'Pemerintah & Bisnis',
                'slug' => 'pemerintah-bisnis',
                'description' => '',
                'created_at' => '2023-09-27 13:51:38',
                'updated_at' => '2023-09-27 13:51:38',
            ),
            403 => 
            array (
                'id' => 447,
                'uuid' => 'a9413fc7-2676-4842-85a3-86a34fd8e8ce',
                'name' => 'Layanan',
                'slug' => 'layanan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:39',
                'updated_at' => '2023-09-27 13:51:39',
            ),
            404 => 
            array (
                'id' => 448,
                'uuid' => 'f25e1520-66dc-4f96-89bb-8c9a8a416bba',
                'name' => 'Instruksi & Studi',
                'slug' => 'instruksi-studi',
                'description' => '',
                'created_at' => '2023-09-27 13:51:39',
                'updated_at' => '2023-09-27 13:51:39',
            ),
            405 => 
            array (
                'id' => 449,
                'uuid' => '657c5b37-399b-414d-9e09-9a02f380be5c',
                'name' => 'Jasa Keuangan',
                'slug' => 'jasa-keuangan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:40',
                'updated_at' => '2023-09-27 13:51:40',
            ),
            406 => 
            array (
                'id' => 450,
                'uuid' => '3791b5ed-1601-4c4e-8e27-30472ae2b07d',
                'name' => 'Industri Otomotif',
                'slug' => 'industri-otomotif',
                'description' => '',
                'created_at' => '2023-09-27 13:51:40',
                'updated_at' => '2023-09-27 13:51:40',
            ),
            407 => 
            array (
                'id' => 451,
                'uuid' => '57f756a3-017a-42b2-995e-2b8c6b0d5ee6',
                'name' => 'Aksesoris-Olahraga',
                'slug' => 'aksesoris-olahraga',
                'description' => '',
                'created_at' => '2023-09-27 13:51:40',
                'updated_at' => '2023-09-27 13:51:40',
            ),
            408 => 
            array (
                'id' => 452,
                'uuid' => '859631a4-7bc1-495b-844e-b96738c50c35',
                'name' => 'Toeic',
                'slug' => 'toeic',
                'description' => '',
                'created_at' => '2023-09-27 13:51:42',
                'updated_at' => '2023-09-27 13:51:42',
            ),
            409 => 
            array (
                'id' => 453,
                'uuid' => '5f1be041-9cbf-4cdc-a86f-e0e9948c9fc5',
                'name' => 'Australia',
                'slug' => 'australia',
                'description' => '',
                'created_at' => '2023-09-27 13:51:42',
                'updated_at' => '2023-09-27 13:51:42',
            ),
            410 => 
            array (
                'id' => 454,
                'uuid' => '167e926c-8f82-4738-8d4c-8afbb92872e1',
                'name' => 'Australia & Oceania',
                'slug' => 'australia-oceania',
                'description' => '',
                'created_at' => '2023-09-27 13:51:42',
                'updated_at' => '2023-09-27 13:51:42',
            ),
            411 => 
            array (
                'id' => 455,
                'uuid' => '9b622474-998f-47b4-a84f-2c57c577a837',
                'name' => 'Berkebun',
                'slug' => 'berkebun',
                'description' => '',
                'created_at' => '2023-09-27 13:51:44',
                'updated_at' => '2023-09-27 13:51:44',
            ),
            412 => 
            array (
                'id' => 456,
                'uuid' => '92604d8c-b927-426d-92a3-e0c01b5bc228',
                'name' => 'Etika Bisnis',
                'slug' => 'etika-bisnis',
                'description' => '',
                'created_at' => '2023-09-27 13:51:44',
                'updated_at' => '2023-09-27 13:51:44',
            ),
            413 => 
            array (
                'id' => 457,
                'uuid' => '18a8be0d-bb9c-4d9e-8ad0-c32289a83c4e',
                'name' => 'Pelatihan',
                'slug' => 'pelatihan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:44',
                'updated_at' => '2023-09-27 13:51:44',
            ),
            414 => 
            array (
                'id' => 458,
                'uuid' => 'f442f5cd-2694-4653-be24-fd04fe4daa2f',
                'name' => 'Hubungan Masyarakat',
                'slug' => 'hubungan-masyarakat',
                'description' => '',
                'created_at' => '2023-09-27 13:51:45',
                'updated_at' => '2023-09-27 13:51:45',
            ),
            415 => 
            array (
                'id' => 459,
                'uuid' => 'daf6e97e-0449-43a9-9517-b78d7545b583',
                'name' => 'Hewan',
                'slug' => 'hewan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:46',
                'updated_at' => '2023-09-27 13:51:46',
            ),
            416 => 
            array (
                'id' => 460,
                'uuid' => 'f136b8d4-2670-43b9-90d1-91702ef8bde5',
                'name' => 'Unggas',
                'slug' => 'unggas',
                'description' => '',
                'created_at' => '2023-09-27 13:51:46',
                'updated_at' => '2023-09-27 13:51:46',
            ),
            417 => 
            array (
                'id' => 461,
                'uuid' => '588d483a-ef8e-44dc-946b-65e4cf6e5af8',
                'name' => 'Fiction-Literature-Ebook',
                'slug' => 'fiction-literature-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:51:46',
                'updated_at' => '2023-09-27 13:51:46',
            ),
            418 => 
            array (
                'id' => 462,
                'uuid' => '86726116-bcbb-4e76-8ace-c38f5215bb33',
                'name' => 'Internet',
                'slug' => 'internet',
                'description' => '',
                'created_at' => '2023-09-27 13:51:48',
                'updated_at' => '2023-09-27 13:51:48',
            ),
            419 => 
            array (
                'id' => 463,
                'uuid' => 'e42ca389-0e1e-4c09-87d6-c30cd10d2610',
                'name' => 'Desain, Grafik & Media',
                'slug' => 'desain-grafik-media',
                'description' => '',
                'created_at' => '2023-09-27 13:51:48',
                'updated_at' => '2023-09-27 13:51:48',
            ),
            420 => 
            array (
                'id' => 464,
                'uuid' => '71a7db3f-4b73-4d2d-9b25-4e29fcf807f8',
                'name' => 'Agronomi',
                'slug' => 'agronomi',
                'description' => '',
                'created_at' => '2023-09-27 13:51:49',
                'updated_at' => '2023-09-27 13:51:49',
            ),
            421 => 
            array (
                'id' => 465,
                'uuid' => '77877b8d-67a5-4f92-afab-382cf22b3d8e',
                'name' => 'Aksesoris-Komputer-Elektronik',
                'slug' => 'aksesoris-komputer-elektronik',
                'description' => '',
                'created_at' => '2023-09-27 13:51:49',
                'updated_at' => '2023-09-27 13:51:49',
            ),
            422 => 
            array (
                'id' => 466,
                'uuid' => '5edcd3cd-4c5d-4457-b4a9-6ab1d38b4f9a',
                'name' => 'Kabel-Jaringan',
                'slug' => 'kabel-jaringan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:49',
                'updated_at' => '2023-09-27 13:51:49',
            ),
            423 => 
            array (
                'id' => 467,
                'uuid' => '952b9091-64da-4413-a646-470092e02dc1',
                'name' => 'Hacking',
                'slug' => 'hacking',
                'description' => '',
                'created_at' => '2023-09-27 13:51:49',
                'updated_at' => '2023-09-27 13:51:49',
            ),
            424 => 
            array (
                'id' => 468,
                'uuid' => '9d9c3bcc-2d81-41fd-a4b8-8784dfbbf4bf',
                'name' => 'Pemodelan Komputasi & Molekuler',
                'slug' => 'pemodelan-komputasi-molekuler',
                'description' => '',
                'created_at' => '2023-09-27 13:51:49',
                'updated_at' => '2023-09-27 13:51:49',
            ),
            425 => 
            array (
                'id' => 469,
                'uuid' => '391ba865-c313-4e3c-b2ed-1975150afee6',
                'name' => 'Digital Marketing',
                'slug' => 'digital-marketing',
                'description' => '',
                'created_at' => '2023-09-27 13:51:49',
                'updated_at' => '2023-09-27 13:51:49',
            ),
            426 => 
            array (
                'id' => 470,
                'uuid' => '272783f8-7333-4f32-828a-54e45a733b6d',
                'name' => 'Lain-Lain-5',
                'slug' => 'lain-lain-5',
                'description' => '',
                'created_at' => '2023-09-27 13:51:50',
                'updated_at' => '2023-09-27 13:51:50',
            ),
            427 => 
            array (
                'id' => 471,
                'uuid' => '6638f558-c2eb-45f3-a746-613983781f72',
                'name' => 'Esai-Kritik',
                'slug' => 'esai-kritik',
                'description' => '',
                'created_at' => '2023-09-27 13:51:50',
                'updated_at' => '2023-09-27 13:51:50',
            ),
            428 => 
            array (
                'id' => 472,
                'uuid' => '51c40ef8-bf66-4a6e-a622-6dbbc8c3fd95',
                'name' => 'Notebook',
                'slug' => 'notebook',
                'description' => '',
                'created_at' => '2023-09-27 13:51:51',
                'updated_at' => '2023-09-27 13:51:51',
            ),
            429 => 
            array (
                'id' => 473,
                'uuid' => '426cd805-0c24-4c34-aeb4-c7acd55f61ef',
                'name' => 'Notebook-Organizer',
                'slug' => 'notebook-organizer',
                'description' => '',
                'created_at' => '2023-09-27 13:51:51',
                'updated_at' => '2023-09-27 13:51:51',
            ),
            430 => 
            array (
                'id' => 474,
                'uuid' => '14e346b0-89bb-4b80-b0ad-fa85f162480c',
                'name' => 'Filsafat Hukum',
                'slug' => 'filsafat-hukum',
                'description' => '',
                'created_at' => '2023-09-27 13:51:52',
                'updated_at' => '2023-09-27 13:51:52',
            ),
            431 => 
            array (
                'id' => 475,
                'uuid' => 'f237c03d-575f-45a7-b035-e3233bde8c93',
                'name' => 'Paham-Paham-Filsafat',
                'slug' => 'paham-paham-filsafat',
                'description' => '',
                'created_at' => '2023-09-27 13:51:53',
                'updated_at' => '2023-09-27 13:51:53',
            ),
            432 => 
            array (
                'id' => 476,
                'uuid' => 'cc1a242e-e808-4e5a-a657-0871661ac52f',
                'name' => 'Geologi',
                'slug' => 'geologi',
                'description' => '',
                'created_at' => '2023-09-27 13:51:53',
                'updated_at' => '2023-09-27 13:51:53',
            ),
            433 => 
            array (
                'id' => 477,
                'uuid' => '8e87161b-f323-45d3-9839-16a8103886e8',
                'name' => 'Kekayaan Intelektual',
                'slug' => 'kekayaan-intelektual',
                'description' => '',
                'created_at' => '2023-09-27 13:51:54',
                'updated_at' => '2023-09-27 13:51:54',
            ),
            434 => 
            array (
                'id' => 478,
                'uuid' => 'a9eb646b-a373-492a-b228-43f0f1d60ef5',
                'name' => 'Ilmu Militer',
                'slug' => 'ilmu-militer',
                'description' => '',
                'created_at' => '2023-09-27 13:51:54',
                'updated_at' => '2023-09-27 13:51:54',
            ),
            435 => 
            array (
                'id' => 479,
                'uuid' => '2f3a5967-5f11-4b45-bc25-4938533d1d88',
                'name' => 'Lingkungan',
                'slug' => 'lingkungan',
                'description' => '',
                'created_at' => '2023-09-27 13:51:56',
                'updated_at' => '2023-09-27 13:51:56',
            ),
            436 => 
            array (
                'id' => 480,
                'uuid' => '96d1a56d-5d14-438d-8721-9eafc3e8cd49',
                'name' => 'Panduan Praktis',
                'slug' => 'panduan-praktis',
                'description' => '',
                'created_at' => '2023-09-27 13:51:56',
                'updated_at' => '2023-09-27 13:51:56',
            ),
            437 => 
            array (
                'id' => 481,
                'uuid' => '1024a752-d8fc-46f2-8dcc-310c5a8cf4ba',
                'name' => 'Layanan Hukum',
                'slug' => 'layanan-hukum',
                'description' => '',
                'created_at' => '2023-09-27 13:51:57',
                'updated_at' => '2023-09-27 13:51:57',
            ),
            438 => 
            array (
                'id' => 482,
                'uuid' => '2176a2e4-ac8a-44ad-9e5c-a3e3dd27561a',
                'name' => 'Sejarah Hukum',
                'slug' => 'sejarah-hukum',
                'description' => '',
                'created_at' => '2023-09-27 13:51:57',
                'updated_at' => '2023-09-27 13:51:57',
            ),
            439 => 
            array (
                'id' => 483,
                'uuid' => 'cb2d5a0b-1ff0-4a8d-bf7c-a28712cda95a',
                'name' => 'Jerman',
                'slug' => 'jerman',
                'description' => '',
                'created_at' => '2023-09-27 13:52:00',
                'updated_at' => '2023-09-27 13:52:00',
            ),
            440 => 
            array (
                'id' => 484,
                'uuid' => '5ab4265d-8f7f-4cae-b25d-53c504436c69',
                'name' => 'Kehamilan & Persalinan',
                'slug' => 'kehamilan-persalinan',
                'description' => '',
                'created_at' => '2023-09-27 13:52:01',
                'updated_at' => '2023-09-27 13:52:01',
            ),
            441 => 
            array (
                'id' => 485,
                'uuid' => '02693fc9-4310-477c-9541-d7aa07aca40c',
                'name' => 'Terapi Fisik',
                'slug' => 'terapi-fisik',
                'description' => '',
                'created_at' => '2023-09-27 13:52:02',
                'updated_at' => '2023-09-27 13:52:02',
            ),
            442 => 
            array (
                'id' => 486,
                'uuid' => '415fb336-9053-4542-ac57-c2b2ca690f6b',
                'name' => 'Lansia',
                'slug' => 'lansia',
                'description' => '',
                'created_at' => '2023-09-27 13:52:02',
                'updated_at' => '2023-09-27 13:52:02',
            ),
            443 => 
            array (
                'id' => 487,
                'uuid' => '2cca7bf4-2e81-42ad-94a3-4e10d512325f',
                'name' => 'Aksesoris-Musik',
                'slug' => 'aksesoris-musik',
                'description' => '',
                'created_at' => '2023-09-27 13:52:06',
                'updated_at' => '2023-09-27 13:52:06',
            ),
            444 => 
            array (
                'id' => 488,
                'uuid' => 'dc5b670b-6d5f-4640-9bbd-492ecdbff9bc',
                'name' => 'Stik-Drum',
                'slug' => 'stik-drum',
                'description' => '',
                'created_at' => '2023-09-27 13:52:06',
                'updated_at' => '2023-09-27 13:52:06',
            ),
            445 => 
            array (
                'id' => 489,
                'uuid' => 'e0e8b792-ac51-4c72-a5c5-93f244050533',
                'name' => 'Senar',
                'slug' => 'senar',
                'description' => '',
                'created_at' => '2023-09-27 13:52:06',
                'updated_at' => '2023-09-27 13:52:06',
            ),
            446 => 
            array (
                'id' => 490,
                'uuid' => '5d178249-2e45-4177-b90e-22e49359cf4a',
                'name' => 'Alat-Musik-Tiup',
                'slug' => 'alat-musik-tiup',
                'description' => '',
                'created_at' => '2023-09-27 13:52:06',
                'updated_at' => '2023-09-27 13:52:06',
            ),
            447 => 
            array (
                'id' => 491,
                'uuid' => '6a3b2c49-d017-4a0b-8ec5-13cd93998be6',
                'name' => 'Harmonika',
                'slug' => 'harmonika',
                'description' => '',
                'created_at' => '2023-09-27 13:52:06',
                'updated_at' => '2023-09-27 13:52:06',
            ),
            448 => 
            array (
                'id' => 492,
                'uuid' => '09608da0-a9f7-4292-9c18-818ae2190ab5',
                'name' => 'Piano-Keyboard',
                'slug' => 'piano-keyboard',
                'description' => '',
                'created_at' => '2023-09-27 13:52:06',
                'updated_at' => '2023-09-27 13:52:06',
            ),
            449 => 
            array (
                'id' => 493,
                'uuid' => '1204ddbc-1a69-4a64-934e-4b4f28fd5f55',
                'name' => 'Kesehatan-Populer',
                'slug' => 'kesehatan-populer',
                'description' => '',
                'created_at' => '2023-09-27 13:52:06',
                'updated_at' => '2023-09-27 13:52:06',
            ),
            450 => 
            array (
                'id' => 494,
                'uuid' => '8c242d78-a9e4-4a58-bccd-4bee6a8850f4',
                'name' => 'Obat-Obatan',
                'slug' => 'obat-obatan',
                'description' => '',
                'created_at' => '2023-09-27 13:52:07',
                'updated_at' => '2023-09-27 13:52:07',
            ),
            451 => 
            array (
                'id' => 495,
                'uuid' => 'ffbd2d63-1bb6-46f3-bd6d-9a5af6912398',
                'name' => 'Ortopedi',
                'slug' => 'ortopedi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:07',
                'updated_at' => '2023-09-27 13:52:07',
            ),
            452 => 
            array (
                'id' => 496,
                'uuid' => '03c4d039-92dc-424b-be3a-6a74b22c6927',
                'name' => 'Ginekologi & Kebidanan',
                'slug' => 'ginekologi-kebidanan',
                'description' => '',
                'created_at' => '2023-09-27 13:52:07',
                'updated_at' => '2023-09-27 13:52:07',
            ),
            453 => 
            array (
                'id' => 497,
                'uuid' => 'd095130b-fbfd-46e3-ace5-651bcb3f6140',
                'name' => 'Farmakologi',
                'slug' => 'farmakologi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:07',
                'updated_at' => '2023-09-27 13:52:07',
            ),
            454 => 
            array (
                'id' => 498,
                'uuid' => 'edaedf27-c456-4218-875f-c6ea8f5ef684',
                'name' => 'Dermatologi',
                'slug' => 'dermatologi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:07',
                'updated_at' => '2023-09-27 13:52:07',
            ),
            455 => 
            array (
                'id' => 499,
                'uuid' => 'fca175d9-162e-4969-9c15-47e3ab2e9cf0',
                'name' => 'Bedah',
                'slug' => 'bedah',
                'description' => '',
                'created_at' => '2023-09-27 13:52:07',
                'updated_at' => '2023-09-27 13:52:07',
            ),
            456 => 
            array (
                'id' => 500,
                'uuid' => '193b57c0-38de-4642-8799-b3b39b397831',
                'name' => 'Pediatri',
                'slug' => 'pediatri',
                'description' => '',
                'created_at' => '2023-09-27 13:52:07',
                'updated_at' => '2023-09-27 13:52:07',
            ),
            457 => 
            array (
                'id' => 501,
                'uuid' => '0179fb34-152e-49c7-be42-d1b3345d5003',
                'name' => 'Kardiologi',
                'slug' => 'kardiologi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:08',
                'updated_at' => '2023-09-27 13:52:08',
            ),
            458 => 
            array (
                'id' => 502,
                'uuid' => '5b07e4de-c188-4546-a7c6-992238732943',
                'name' => 'Neurologi',
                'slug' => 'neurologi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:08',
                'updated_at' => '2023-09-27 13:52:08',
            ),
            459 => 
            array (
                'id' => 503,
                'uuid' => '80940da2-6806-46d2-983f-f54a5b8c6d20',
                'name' => 'Pengobatan Hewan',
                'slug' => 'pengobatan-hewan',
                'description' => '',
                'created_at' => '2023-09-27 13:52:08',
                'updated_at' => '2023-09-27 13:52:08',
            ),
            460 => 
            array (
                'id' => 504,
                'uuid' => '44142748-d4c9-46e6-8b27-50226a36c676',
                'name' => 'Listrik',
                'slug' => 'listrik',
                'description' => '',
                'created_at' => '2023-09-27 13:52:09',
                'updated_at' => '2023-09-27 13:52:09',
            ),
            461 => 
            array (
                'id' => 505,
                'uuid' => '29e3307b-a7f5-48a9-a576-1c2f95ceb62e',
                'name' => 'Telekomunikasi',
                'slug' => 'telekomunikasi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:10',
                'updated_at' => '2023-09-27 13:52:10',
            ),
            462 => 
            array (
                'id' => 506,
                'uuid' => '5fdc0bfa-915f-4ebb-bbc1-3b2f9fafec95',
                'name' => 'Kelautan & Angkatan Laut',
                'slug' => 'kelautan-angkatan-laut',
                'description' => '',
                'created_at' => '2023-09-27 13:52:10',
                'updated_at' => '2023-09-27 13:52:10',
            ),
            463 => 
            array (
                'id' => 507,
                'uuid' => 'c9c09499-e6bb-453e-bac9-141f2348f224',
                'name' => 'Kalkulator-1',
                'slug' => 'kalkulator-1',
                'description' => '',
                'created_at' => '2023-09-27 13:52:10',
                'updated_at' => '2023-09-27 13:52:10',
            ),
            464 => 
            array (
                'id' => 508,
                'uuid' => 'b842ba2e-1e84-47db-aa53-e3a60457eef2',
                'name' => 'Kedirgantaraan',
                'slug' => 'kedirgantaraan',
                'description' => '',
                'created_at' => '2023-09-27 13:52:10',
                'updated_at' => '2023-09-27 13:52:10',
            ),
            465 => 
            array (
                'id' => 509,
                'uuid' => '300bcf3a-1fb6-4f24-8ba7-4d0707773c28',
                'name' => 'School-Ebook',
                'slug' => 'school-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:10',
                'updated_at' => '2023-09-27 13:52:10',
            ),
            466 => 
            array (
                'id' => 510,
                'uuid' => 'ede29b8a-bfa9-45dd-bfc1-2e4437afa02d',
                'name' => 'Robotika',
                'slug' => 'robotika',
                'description' => '',
                'created_at' => '2023-09-27 13:52:10',
                'updated_at' => '2023-09-27 13:52:10',
            ),
            467 => 
            array (
                'id' => 511,
                'uuid' => 'da50d01c-7b0b-4e03-95d6-4bf0a45eaf5d',
                'name' => 'Bahari',
                'slug' => 'bahari',
                'description' => '',
                'created_at' => '2023-09-27 13:52:10',
                'updated_at' => '2023-09-27 13:52:10',
            ),
            468 => 
            array (
                'id' => 512,
                'uuid' => '96bfa626-d015-474e-9735-93c7f0a6f30b',
                'name' => 'Studi-Filsafat',
                'slug' => 'studi-filsafat',
                'description' => '',
                'created_at' => '2023-09-27 13:52:11',
                'updated_at' => '2023-09-27 13:52:11',
            ),
            469 => 
            array (
                'id' => 513,
                'uuid' => '86aa1f86-2bec-4e23-aa1d-e6e795027a38',
                'name' => 'Religius',
                'slug' => 'religius',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            470 => 
            array (
                'id' => 514,
                'uuid' => '71b18627-6b8e-4e81-9299-58713cd25835',
                'name' => 'Minat Khusus',
                'slug' => 'minat-khusus',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            471 => 
            array (
                'id' => 515,
                'uuid' => '40a1b7c6-fb70-4771-879a-b1dd5af1cc5d',
                'name' => 'Indonesia',
                'slug' => 'indonesia',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            472 => 
            array (
                'id' => 516,
                'uuid' => '00d3824d-bf7f-459a-9a27-d64c343ced60',
                'name' => 'Panduan-Wisata',
                'slug' => 'panduan-wisata',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            473 => 
            array (
                'id' => 517,
                'uuid' => 'f6532663-510e-4de1-a6c2-8b20d819c180',
                'name' => 'Panduan-Wisata-11',
                'slug' => 'panduan-wisata-11',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            474 => 
            array (
                'id' => 518,
                'uuid' => 'ee5ff0dd-a369-4e7d-a1ad-00f9dfbe12e8',
                'name' => 'Wisata Rohani',
                'slug' => 'wisata-rohani',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            475 => 
            array (
                'id' => 519,
                'uuid' => '96131625-50cd-45fd-828d-7d0986f5782c',
                'name' => 'India & Asia Selatan',
                'slug' => 'india-asia-selatan',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            476 => 
            array (
                'id' => 520,
                'uuid' => 'a47e9d6f-a8a9-4261-8f7b-d51b427c4008',
                'name' => 'India',
                'slug' => 'india',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            477 => 
            array (
                'id' => 521,
                'uuid' => '07892b4a-7f0f-4458-a0e5-ef40e27d49a5',
                'name' => 'Filsafat-Asia',
                'slug' => 'filsafat-asia',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            478 => 
            array (
                'id' => 522,
                'uuid' => '8fe0b89a-7426-4564-bd0c-be0f52a0083c',
                'name' => 'Filsafat-Eropa-Amerika-Serikat',
                'slug' => 'filsafat-eropa-amerika-serikat',
                'description' => '',
                'created_at' => '2023-09-27 13:52:12',
                'updated_at' => '2023-09-27 13:52:12',
            ),
            479 => 
            array (
                'id' => 523,
                'uuid' => 'ed7f4e0f-26b6-439b-bfa5-ee74ed768ceb',
                'name' => 'Life Sciences',
                'slug' => 'life-sciences',
                'description' => '',
                'created_at' => '2023-09-27 13:52:13',
                'updated_at' => '2023-09-27 13:52:13',
            ),
            480 => 
            array (
                'id' => 524,
                'uuid' => '863c5487-27fb-4863-8e57-20b29a2a5d7b',
                'name' => 'Hortikultura',
                'slug' => 'hortikultura',
                'description' => '',
                'created_at' => '2023-09-27 13:52:14',
                'updated_at' => '2023-09-27 13:52:14',
            ),
            481 => 
            array (
                'id' => 525,
                'uuid' => '26a043f7-796d-4bf3-a786-73043a7bbb26',
                'name' => 'Biografi-5',
                'slug' => 'biografi-5',
                'description' => '',
                'created_at' => '2023-09-27 13:52:14',
                'updated_at' => '2023-09-27 13:52:14',
            ),
            482 => 
            array (
                'id' => 526,
                'uuid' => 'd4fd4592-a508-44f9-b281-683b7d2ec688',
                'name' => 'Teknik',
                'slug' => 'teknik',
                'description' => '',
                'created_at' => '2023-09-27 13:52:14',
                'updated_at' => '2023-09-27 13:52:14',
            ),
            483 => 
            array (
                'id' => 527,
                'uuid' => '0f440f5c-c486-46a9-928c-d58cfbd35117',
                'name' => 'Subjek & Tema',
                'slug' => 'subjek-tema',
                'description' => '',
                'created_at' => '2023-09-27 13:52:15',
                'updated_at' => '2023-09-27 13:52:15',
            ),
            484 => 
            array (
                'id' => 528,
                'uuid' => 'd9f324e2-dd0e-4e91-995e-135596c9d270',
                'name' => 'Belanda',
                'slug' => 'belanda',
                'description' => '',
                'created_at' => '2023-09-27 13:52:16',
                'updated_at' => '2023-09-27 13:52:16',
            ),
            485 => 
            array (
                'id' => 529,
                'uuid' => '0f75cdff-70de-41ed-91ba-72fb8605c266',
                'name' => 'Sains-Untuk-Anak-Anak',
                'slug' => 'sains-untuk-anak-anak',
                'description' => '',
                'created_at' => '2023-09-27 13:52:20',
                'updated_at' => '2023-09-27 13:52:20',
            ),
            486 => 
            array (
                'id' => 530,
                'uuid' => '4c8d649e-54ab-457f-b392-559e6ab24817',
                'name' => 'Meteorologi & Klimatologi',
                'slug' => 'meteorologi-klimatologi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:26',
                'updated_at' => '2023-09-27 13:52:26',
            ),
            487 => 
            array (
                'id' => 531,
                'uuid' => '3495b874-2ffd-4baa-9b85-c3f0ba1a1d2c',
                'name' => 'Kids-Ebook',
                'slug' => 'kids-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:31',
                'updated_at' => '2023-09-27 13:52:31',
            ),
            488 => 
            array (
                'id' => 532,
                'uuid' => '3c13db1c-189b-406d-ab0d-d1d275555daf',
                'name' => 'Reference-Ebook',
                'slug' => 'reference-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:34',
                'updated_at' => '2023-09-27 13:52:34',
            ),
            489 => 
            array (
                'id' => 533,
                'uuid' => '37fbe686-b38d-4b66-94b1-095d24bf3786',
                'name' => 'Item-Koleksi',
                'slug' => 'item-koleksi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:36',
                'updated_at' => '2023-09-27 13:52:36',
            ),
            490 => 
            array (
                'id' => 534,
                'uuid' => 'f86298a2-086e-4bd0-9102-6abdb4cc3cf7',
                'name' => 'Barang Antik & Koleksi',
                'slug' => 'barang-antik-koleksi',
                'description' => '',
                'created_at' => '2023-09-27 13:52:36',
                'updated_at' => '2023-09-27 13:52:36',
            ),
            491 => 
            array (
                'id' => 535,
                'uuid' => '65f39f32-299f-4b9c-8003-e07a844e9332',
                'name' => 'Comics-Graphic-Novels-Ebook',
                'slug' => 'comics-graphic-novels-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:37',
                'updated_at' => '2023-09-27 13:52:37',
            ),
            492 => 
            array (
                'id' => 536,
                'uuid' => 'd625b8e7-b352-4d00-bd8a-fdc0a25eeca6',
                'name' => 'Romance-Ebook',
                'slug' => 'romance-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:38',
                'updated_at' => '2023-09-27 13:52:38',
            ),
            493 => 
            array (
                'id' => 537,
                'uuid' => '4668bae4-1f55-4d14-8c30-797063ad3f35',
                'name' => 'Art-Entertainment-Ebook',
                'slug' => 'art-entertainment-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:38',
                'updated_at' => '2023-09-27 13:52:38',
            ),
            494 => 
            array (
                'id' => 538,
                'uuid' => 'a6ffb47a-618d-4911-a6d3-c67412455d05',
                'name' => 'Science-Nature-Ebook',
                'slug' => 'science-nature-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            495 => 
            array (
                'id' => 539,
                'uuid' => '2e4878e8-2945-4aaa-bfe6-243271bf0015',
                'name' => 'Childrens-Ebook',
                'slug' => 'childrens-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            496 => 
            array (
                'id' => 540,
                'uuid' => '97a3396c-6d52-4e36-a0e4-5f26985ecbf3',
                'name' => 'Poem-Short-Story-Ebook',
                'slug' => 'poem-short-story-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            497 => 
            array (
                'id' => 541,
                'uuid' => '3b066d97-cb3b-4cc7-891d-18f8d108fffe',
                'name' => 'Humour-Ebook',
                'slug' => 'humour-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            498 => 
            array (
                'id' => 542,
                'uuid' => 'f8182181-fb77-487b-8ac0-11045cac54d1',
                'name' => 'Biography-Ebook',
                'slug' => 'biography-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            499 => 
            array (
                'id' => 543,
                'uuid' => '134968d2-bee5-431c-ba4e-1115ed1ecbce',
                'name' => 'Parenting-Ebook',
                'slug' => 'parenting-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
        ));
        \DB::table('kategoris')->insert(array (
            0 => 
            array (
                'id' => 544,
                'uuid' => '909ba9c9-ef3b-40eb-aba0-620b2af39321',
                'name' => 'Travel-Ebook',
                'slug' => 'travel-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            1 => 
            array (
                'id' => 545,
                'uuid' => '3415ef29-29f1-4519-ac44-6ca617705f78',
                'name' => 'Arts-Design-Ebook',
                'slug' => 'arts-design-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            2 => 
            array (
                'id' => 546,
                'uuid' => '8f7cfbae-df7e-4dfb-b820-0c1fe6bad17d',
                'name' => 'Computing-Internet-Ebook',
                'slug' => 'computing-internet-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            3 => 
            array (
                'id' => 547,
                'uuid' => '75c53865-099e-476a-a21c-d81da7573f70',
                'name' => 'Children-Age-4-7-Ebook',
                'slug' => 'children-age-4-7-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            4 => 
            array (
                'id' => 548,
                'uuid' => 'a50d8e54-896d-4968-ba35-974509f7a0c3',
                'name' => 'Chrime-Thrillers-Ebook',
                'slug' => 'chrime-thrillers-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            5 => 
            array (
                'id' => 549,
                'uuid' => '7df560aa-64c5-4d22-8a98-29f4710cebc9',
                'name' => 'Food-Drink-Ebook',
                'slug' => 'food-drink-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            6 => 
            array (
                'id' => 550,
                'uuid' => '0d6db7dd-93c1-42cd-8bcc-66c7ed6797f0',
                'name' => 'Professional-Technical-Ebook',
                'slug' => 'professional-technical-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            7 => 
            array (
                'id' => 551,
                'uuid' => 'a51fe150-dc8c-4387-8390-d9ed7015e8de',
                'name' => 'Home-Design-Ebook',
                'slug' => 'home-design-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            8 => 
            array (
                'id' => 552,
                'uuid' => '884791f2-4ad1-4802-872e-7039bd3a804f',
                'name' => 'Food-Cooking-Ebook',
                'slug' => 'food-cooking-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            9 => 
            array (
                'id' => 553,
                'uuid' => '46a38568-1f76-4d76-9a77-78b0a281f519',
                'name' => 'Business-Personal-Finance-Ebook',
                'slug' => 'business-personal-finance-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            10 => 
            array (
                'id' => 554,
                'uuid' => '7c38802d-d32e-4409-887b-4b228198c23d',
                'name' => 'Fashion-Style-Ebook',
                'slug' => 'fashion-style-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            11 => 
            array (
                'id' => 555,
                'uuid' => '0e2598ee-7f47-409e-8c4f-d058e7281699',
                'name' => 'Manga-Ebook',
                'slug' => 'manga-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            12 => 
            array (
                'id' => 556,
                'uuid' => 'bcc5ca21-8fe5-46e0-b085-f1fee170668f',
                'name' => 'Science-Fiction-Fantasy-Ebook',
                'slug' => 'science-fiction-fantasy-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            13 => 
            array (
                'id' => 557,
                'uuid' => '3b3b2ea5-0e2f-4434-82e0-c1279cc02ef7',
                'name' => 'Entertainment-Ebook',
                'slug' => 'entertainment-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            14 => 
            array (
                'id' => 558,
                'uuid' => 'fb001b62-8799-4d4f-b985-3f58a3dc0c9c',
                'name' => 'Law-Tax-Ebook',
                'slug' => 'law-tax-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            15 => 
            array (
                'id' => 559,
                'uuid' => 'aaf27089-a869-4717-9600-c3a7cc0147fe',
                'name' => 'Psychology-Ebook',
                'slug' => 'psychology-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            16 => 
            array (
                'id' => 560,
                'uuid' => '56bd29be-4871-4408-af1f-0fa832b415bd',
                'name' => 'Christian-Books-Ebook',
                'slug' => 'christian-books-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:39',
                'updated_at' => '2023-09-27 13:52:39',
            ),
            17 => 
            array (
                'id' => 561,
                'uuid' => 'f7ba8df0-7fd0-44bf-b060-0697c0a8b88d',
                'name' => 'Tali-Sepatu',
                'slug' => 'tali-sepatu',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            18 => 
            array (
                'id' => 562,
                'uuid' => '8340bd91-c119-40cb-9bd0-f21c580a4d89',
                'name' => 'Sports-Outdoors-Ebook',
                'slug' => 'sports-outdoors-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            19 => 
            array (
                'id' => 563,
                'uuid' => 'd94f50c5-258a-44c8-ad33-fbde85b49432',
                'name' => 'History-Ebook',
                'slug' => 'history-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            20 => 
            array (
                'id' => 564,
                'uuid' => 'd62bdadf-a700-4211-ac81-7fc8a4bd7503',
                'name' => 'Teen-Young-Adult-Fiction-Ebook',
                'slug' => 'teen-young-adult-fiction-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            21 => 
            array (
                'id' => 565,
                'uuid' => '90f6e97b-affe-49b0-9f91-29688573598d',
                'name' => 'Historical-Fiction-Ebook',
                'slug' => 'historical-fiction-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            22 => 
            array (
                'id' => 566,
                'uuid' => '9fcf2571-59de-4fff-bba0-402d619beb10',
                'name' => 'Health-Beauty-Ebook',
                'slug' => 'health-beauty-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            23 => 
            array (
                'id' => 567,
                'uuid' => 'd10bd348-4988-4d7b-aac5-6202143ecdef',
                'name' => 'Non-Fiction-Ebook',
                'slug' => 'non-fiction-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            24 => 
            array (
                'id' => 568,
                'uuid' => '90495d0c-bc07-410d-87f1-073b235e0bf5',
                'name' => 'Health-Well-Being-Ebook',
                'slug' => 'health-well-being-ebook',
                'description' => '',
                'created_at' => '2023-09-27 13:52:40',
                'updated_at' => '2023-09-27 13:52:40',
            ),
            25 => 
            array (
                'id' => 569,
                'uuid' => '8acd6577-bea5-4ba8-a496-0732ab235111',
                'name' => 'Ielts',
                'slug' => 'ielts',
                'description' => '',
                'created_at' => '2023-09-27 13:52:43',
                'updated_at' => '2023-09-27 13:52:43',
            ),
            26 => 
            array (
                'id' => 570,
                'uuid' => '70a9dd5a-4f95-4d0e-9178-5a7102f3401a',
                'name' => 'Soal-Ulangan-3',
                'slug' => 'soal-ulangan-3',
                'description' => '',
                'created_at' => '2023-09-27 13:52:43',
                'updated_at' => '2023-09-27 13:52:43',
            ),
        ));
        
        
    }
}