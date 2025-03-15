<?php

namespace Database\Seeders;

use App\Models\Template;
use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $template = Template::first();
        $user = User::first();
        Portofolio::create([
            "template_id" => $template->id,
            "user_id" => $user->id,
            "name" => "ilham sidik saksena",
            "position" => "backend developer",
            "photo" => "/arsip/me.png",
            "description" => "Backend Developer dengan keahlian dalam pemrograman PHP, Framework Laravel, dan konsep Rest API/Restful API. Berpengalaman menggunakan Docker dan GitHub serta memahami database, relasi dan query MySQL, dan PostgreSQL. Mampu membuat tampilan website dengan HTML, CSS, JavaScript, Bootstrap, dan TailwindCSS, serta menggunakan framework Flutter untuk pengembangan aplikasi mobile.",
            "slug" => "ilham-sidik-saksena",
            "contact" => "6281225378954",
            "data" => json_encode([
                "color" => "teal", // blue, indigo, violet
                "social_media"=> [
                    [
                        "name"=> "instagram",
                        "username"=> "hammm.70",
                        "link"=> "https://instagram.com/hammm.70"
                    ],
                    [
                        "name"=> "linkedin",
                        "username"=> "ilham sidik saksena",
                        "link"=> "https://www.linkedin.com/in/ilham-sidik-saksena-776409299/"
                    ],
                    [
                        "name"=> "github",
                        "username"=> "ilham-s-saksena",
                        "link"=> "https://github.com/ilham-s-saksena"
                    ],
                    [
                        "name"=> "email",
                        "username"=> "ilhamsidikc@gmail.com",
                        "link"=> "mailto:ilhamsidikc@gmail.com"
                    ]
                ],
                "education"=> [
                    [
                        "name"=> "universitas harapan bangsa",
                        "logo"=> "/arsip/education/uhb.png",
                        "year"=> "2021-2025",
                        "major"=> "S1 Teknologi Informasi",
                        "description"=> "Mahasiswa Jurusan S1 Teknologi Informasi di Perguruan Tinggi Swasta Universitas Harapan Bangsa",
                        "link"=> "https://uhb.ac.id"
                    ]
                ],
                "organization"=> [
                    [
                        "name"=> "teater kanvas",
                        "logo"=> "/arsip/organization/teater.png",
                        "year"=> "2018-2021",
                        "position"=> "Ketua Organisasi",
                        "description"=> "Ketua Organisasi Teater Kanvas dan pernah meraih Prestasi di tingkat Provinsi: Juara 3 Monolog dan Juara 1 Film Pendek",
                        "link"=> null
                    ],
                    [
                        "name"=> "himatifor",
                        "logo"=> "/arsip/organization/hima.png",
                        "year"=> "2022-2024",
                        "position"=> "Ketua Organisasi",
                        "description"=> "Menjadi Pembentuk sekaligus Ketua Pertama di Himpunan Mahasiswa Teknologi Informasi Universitas Harapan Bangsa",
                        "link"=> null
                    ]
                ],
                "hard_skill"=> [
                    [
                        "name"=> "Docker",
                        "logo"=> "/arsip/logos/Docker.png",
                        "level"=> "amateur",
                        "description"=> "Mampu menggunakan Docker dalam proses pengembangan aplikasi yang terisolasi"
                    ],
                    [
                        "name"=> "Laravel",
                        "logo"=> "/arsip/logos/Laravel.png",
                        "level"=> "Intermediate",
                        "description"=> "Expert dalam pemrograman PHP dan memahami dengan baik ekosistem Framework Laravel"
                    ],
                    [
                        "name"=> "MySql",
                        "logo"=> "/arsip/logos/Mysql.png",
                        "level"=> "Intermediate",
                        "description"=> "Memahami dengan baik mengenai Query, Relasi, Struktur pada sebuah Database MySQL"
                    ],
                    [
                        "name"=> "PostgreSql",
                        "logo"=> "/arsip/logos/Postgresql.png",
                        "level"=> "Intermediate",
                        "description"=> "Memahami dengan baik mengenai Query, Relasi, Struktur pada sebuah Database PostgreSQL"
                    ],
                    [
                        "name"=> "Tailwind",
                        "logo"=> "/arsip/logos/Tailwind.png",
                        "level"=> "Intermediate",
                        "description"=> "Dengan baik memahami kelas kelas yang ada di TailwindCSS dan mengimplementasikan dalam pembuatan tampilan website yang dinamis"
                    ],
                    [
                        "name"=> "Flutter",
                        "logo"=> "/arsip/logos/Flutter.png",
                        "level"=> "Amateur",
                        "description"=> "Dapat Membuat Aplikasi sederhana dengan Flutter yang dapat Berkomunikasi dan Bertukar data melalui API"
                    ]
                    
                ],
                "experience"=> [
                    [
                        "company"=> "CV Anugerah Wijaya",
                        "name"=> "Computer Network Technician",
                        "year"=> "December 2019 - April 2020",
                        "description"=> "Menjadi teknisi Komputer dan Jaringan di perusahaan Internet Provider, Melakukan Instalasi WiFi, Perbaikan Jaringan dan Komputer, Merakit PC, Membangun tower segitiga untuk antena jaringan internet, "

                    ],
                    [
                        "company"=> "PKBM Harapan Bangsa",
                        "name"=> "software engineer",
                        "year"=> "May 2022 - June 2024 ",
                        "description"=> "Sebagai lulusan Teknologi Informasi, saya juga mulai mendalami peran guru komputer di lembaga pendidikan nonformal."

                    ],
                    [
                        "company"=> "PT Pilih Jurusan",
                        "name"=> " Backend Web Developer",
                        "year"=> "August 2023 - June 2024",
                        "description"=> "Berkolaborasi dengan tim untuk mengembangkan aplikasi berbasis website yang fokus pada Tes IQ layanan, minat Bakat, dan banyak lagi. Mengkhususkan diri dalam pengembangan backend, memastikan kelancaran fungsi dan kinerja aplikasi web. Menerapkan solusi backend yang kuat untuk menangani pemrosesan data, otentikasi pengguna, dan integrasi API. Berkontribusi pada proses pengembangan dengan merancang struktur database yang efisien dan mengoptimalkan fungsionalitas sisi server."

                    ]
                ],
                "data"=> [
                    [
                        "name"=> "Harapan Bangsa PKBM school information system",
                        "date"=> "November 2023",
                        "detail"=> "Membangunan dari awal sebuah Sistem Informasi Sekolah yang komprehensif seorang diri. Sistem ini mencakup beberapa fitur utama, yaitu absensi siswa yang menggunakan QR Code, jurnal mengajar untuk para tutor, pembayaran SPP siswa, serta sistem penggajian karyawan. Untuk pengembangan backend, saya menggunakan framework Laravel, sementara tampilan antarmuka dibangun menggunakan framework TailwindCSS. Selain itu, sistem ini juga dilengkapi dengan layanan web yang dapat mengirim dan menerima API pada aplikasi Android yang digunakan oleh para tutor.",
                        "image"=> "/arsip/portofolio/1.png",
                        "link"=> "https://pkbmharbang.com"
                    ],
                    [
                        "name"=> "PKBM Harapan Bangsa teacher attendance android application",
                        "date"=> "December 2023",
                        "detail"=> "Saya membangun aplikasi ini menggunakan framework Flutter, yang mencakup berbagai fungsi untuk mencatat jurnal mengajar para tutor secara otomatis dan mencatat absensi kehadiran siswa dengan memindai QR code yang terdapat pada kartu siswa. Semua fungsi tersebut terhubung langsung ke situs web PKBM Harapan Bangsa melalui komunikasi API. Setiap aksi yang dilakukan di aplikasi ini dicatat dan disimpan di dalam database, dan rekapannya dapat dilihat melalui dashboard admin yang tersedia di situs web tersebut.",
                        "image"=> "/arsip/portofolio/2.png",
                        "link"=> "https://pkbmharbang.com"
                    ],
                    [
                        "name"=> "Aplikasi Tes Psikologi (Backend) ",
                        "date"=> "March 2024",
                        "detail"=> "Selama magang di PT Pilihanmu Indonesia Jaya, saya berperan dalam mengembangkan aplikasi tes psikologi pada sisi backend dengan menggunakan framework Laravel. Magang ini merupakan bagian dari program MSIB Kampus Merdeka Batch 6 dan berlangsung selama lima bulan. Solusi Tepat memilih jurusan dan Karier, Bimbingan intensif untuk membantu memilih jurusan dan karier sesuai dengan minat dan bakatmu!",
                        "image"=> "/arsip/portofolio/3.png",
                        "link"=> "https://pilihjurusan.id"
                    ],
                    [
                        "name"=> "Integrated Attendances with IoT, Mobile App and Website",
                        "date"=> "June 2024",
                        "detail"=> "Klinik Watumas Attendances adalah sebuah aplikasi yang dirancang untuk mempermudah proses absensi karyawan di Klinik Watumas. Aplikasi ini terintegrasi secara menyeluruh dengan Website Klinik Watumas dan Perangkat IoT (RFID), menciptakan sistem yang efisien dan terhubung. Aplikasi ini bertujuan untuk memfasilitasi absensi karyawan dengan cara yang lebih terstruktur dan terintegrasi. Semua data absensi yang dihasilkan akan dikirim ke Website Klinik dan hanya dapat diakses oleh Admin Klinik, menjaga keamanan dan kerahasiaan informasi. Aplikasi ini tidak hanya berfungsi sebagai alat untuk mencatat absensi, tetapi juga terintegrasi dengan perangkat IoT Klinik Watumas. Data absensi dari aplikasi ini dan perangkat IoT akan disimpan di Website Klinik, memberikan laporan absensi yang komprehensif dan mudah diakses oleh Admin.",
                        "image"=> "/arsip/portofolio/4.png",
                        "link"=> "https://klinikwatumas.com"
                    ],
                    [
                        "name"=> "Guest House Landing Page",
                        "date"=> "February 2025",
                        "detail"=> "Sebuah Website Landing Page statis untuk Ardisan Guest House Purwokerto, dibangun menggunakan Framework/Utility Class dari TailwindCss.",
                        "image"=> "/arsip/portofolio/5.png",
                        "link"=> "https://guesthousepurwokerto.com"
                    ]
                ]
            ])
        ]);
    }
}