<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'Semua',
        'yes' => 'Ya',
        'no' => 'Tidak',
        'custom' => 'Kustom',
        'actions' => 'Tindakan',
        'active' => 'Aktif',
        'buttons' => [
            'save' => 'Simpan',
            'update' => 'Perbarui',
        ],
        'create_new' => 'Buat Baru',
        'hide' => 'Sembunyi',
        'inactive' => 'Non-aktif',
        'none' => 'Tidak ada',
        'show' => 'Tunjukkan',
        'toggle_navigation' => 'Alihkan Navigasi',
    ],

    'backend' => [
        'articles' => [
            'news' => [
                'create' => 'Buat News',
                'edit' => 'Ubah News',
                'management' => 'Manajemen Berita',

                'table' => [
                    'total' => 'total berita|total berita'
                ]
            ]
        ],
        'faqs' => [
            'create' => 'Buat Faq',
            'edit' => 'Ubah Faq',

            'table' => [
                'total' => 'total faq|total faq'
            ]
        ],
        'products' => [
            'create' => 'Buat Produk',
            'edit' => 'Ubah Produk',
            'table' => [
                'total' => 'total produk | total produk'
            ],

        ],
        'category' => [
            'edit' => 'Ubah Kategori',
            'table' => [
                'total' => 'total kategori|total kategori'
            ],
        ],
        'access' => [
            'roles' => [
                'create' => 'Buat Peran',
                'edit' => 'Edit Peran',
                'management' => 'Manajemen Peran',

                'table' => [
                    'number_of_users' => 'Jumlah Pengguna',
                    'permissions' => 'Izin',
                    'role' => 'Peran',
                    'sort' => 'Sortir',
                    'total' => 'total peran|total peran',
                ],
            ],

            'users' => [
                'active' => 'Pengguna Aktif',
                'all_permissions' => 'Semua Izin',
                'change_password' => 'Ubah Sandi',
                'change_password_for' => 'Ubah Sandi untuk :user',
                'create' => 'Buat Pengguna',
                'deactivated' => 'Pengguna Dinonaktifkan',
                'deleted' => 'Pengguna Dihapus',
                'edit' => 'Edit Pengguna',
                'management' => 'Manajemen Pengguna',
                'no_permissions' => 'Tidak Ada Izin',
                'no_roles' => 'Tidak Ada Peran untuk Ditetapkan.',
                'permissions' => 'Izin',

                'table' => [
                    'confirmed' => 'Dikonfirmasi',
                    'created' => 'Dibuat',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Terakhir Diperbarui',
                    'name' => 'Nama',
                    'no_deactivated' => 'Tidak Ada Pengguna Dinonaktifkan',
                    'no_deleted' => 'Tidak Ada Pengguna Dihapus',
                    'roles' => 'Peran',
                    'social' => 'Social',
                    'total' => 'total pengguna|total pengguna',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Ikhtisar',
                        'history' => 'Riwayat',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Dikonfirmasi',
                            'created_at' => 'Dibuat Pada',
                            'deleted_at' => 'Dihapus Pada',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Terakhir Diperbarui',
                            'name' => 'Nama',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'Lihat Pengguna',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login dengan :social_media',
            'register_box_title' => 'Daftar',
            'register_button' => 'Daftar',
            'remember_me' => 'Ingat Saya',
        ],

        'contact' => [
            'title' => 'Hubungi Kami',
            'box_title' => 'HUBUNGI KAMI',
            'faq' => 'FAQ',
            'button' => 'Kirim',
            'form' => [
                'full_name' => 'Name Lengkap',
                'comp' => 'Perusahaan/Organisasi',
                'country' => 'Negara',
                'select_country' => 'Pilih Negara',
                'contact_reason' => 'Alasan Menghubungi',
                'choose_contact_reason' => 'Pilih Alasan Menghubungi',
                'subject' => 'Subyek',
                'question_comment' => 'Pertanyaan atau Komentar',
                'placeholder' => [
                    'full_name' => 'Nama Lengkap Anda',
                    'comp' => 'Perusahaan/Organisasi Anda',
                    'phone' => 'Nomor Telepon Anda',
                    'email' => 'Email Anda',
                    'subject' => 'Subyek Anda',
                    'question_comment' => 'Pertanyaan atau komentar Anda Minimal 20 karakter, Maksimum 1000 karakter',
                ]
            ],
        ],

        'leading-lubs' => [
            'title' => 'PELUMAS TERKEMUKA',
            'sub-title' => 'DARI JEPANG',
        ],

        'our-value' => [
            'title' => 'NILAI KAMI'
        ],

        'our-customers' => [
            'title' => 'PELANGGAN KAMI',
            'subs' => [
                'cust' => 'PELANGGAN',
                'quality' => 'KUALITAS LAYANAN',
                'high' => 'TINGGI',
            ],
        ],

        'news-galery' => [
            'title' => 'BERITA & GALERI',
        ],

        'online-store' => [
            'title' => 'Toko Online'
        ],

        'company' => [
            'vision' => 'VISI',
            'mission' => 'MISI',
            'our-brand' => 'MEREK KAMI',
            'our-team' => 'TIM KAMI',
            'where-we-work' => 'DIMANA KAMI BEKERJA',
            'distribution-point' => 'TITIK DISTRIBUSI'
        ],

        'career' => [
            'box_title' => 'KESEMPATAN BERKARIR',
            'job_desk' => 'DESKRIPSI PEKERJAAN',
            'reqs' => 'PERSYARATAN',
            'form' => [
                'name' => 'Name',
                'gender' => 'Jenis Kelamin',
                'email' => 'Email',
                'phone' => 'Telepon',
                'upload-cv' => 'Unggah CV anda disini',
                'message' => 'Pesan',
                'terms' => 'Saya telah membaca dan menyetujui Syarat dan Ketentuan'
            ]
        ],

        'passwords' => [
            'forgot_password' => 'Lupa Sandi Anda?',
            'reset_password_box_title' => 'Reset Sandi',
            'reset_password_button' => 'Reset Sandi',
            'send_password_reset_link_button' => 'Kirim Tautan Reset Sandi',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Ubah Sandi',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Dibuat Pada',
                'edit_information' => 'Edit Informasi',
                'email' => 'E-mail',
                'last_updated' => 'Terakhir diperbarui',
                'name' => 'Nama',
                'update_information' => 'Perbarui Informasi',
            ],
        ],
    ],
];
