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
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
    ],

    'backend' => [
        'articles' => [
            'news' => [
                'create' => 'Create News',
                'edit' => 'Edit News',
                'management' => 'News Management',

                'table' => [
                    'total' => 'news total|news total'
                ]
            ]
        ],
        'faqs' => [
            'create' => 'Create Faq',
            'edit' => 'Edit Faq',

            'table' => [
                'total' => 'faq total|faqs total'
            ]
        ],
        'products' => [
            'create' => 'Create Product',
            'edit' => 'Edit Product',
            'table' => [
                'total' => 'product total|products total'
            ],

        ],
        'category' => [
            'edit' => 'Edit Category',
            'table' => [
                'total' => 'category total|categories total'
            ],
        ],
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'contact' => [
            'title' => 'Contact Us',
            'box_title' => 'CONTACT US',
            'faq' => 'FAQs',
            'button' => 'Submit',
            'form' => [
                'full_name' => 'Full Name',
                'comp' => 'Company/Organitation',
                'country' => 'Country',
                'select_country' => 'Select Country',
                'contact_reason' => 'Contact Reason',
                'choose_contact_reason' => 'Choose Contact Reason',
                'subject' => 'Subject',
                'question_comment' => 'Question or Comments',
                'placeholder' => [
                    'full_name' => 'Your Full Name',
                    'comp' => 'Your Company/Organitation',
                    'phone' => 'Your Phone Number',
                    'email' => 'Your Active Email',
                    'subject' => 'Your Subject',
                    'question_comment' => 'Your questions or comments Minimum 20 characters, Maximum 1000 characters',
                ]
            ],
        ],

        'leading-lubs' => [
            'title' => 'THE LEADING LUBRICANT',
            'sub-title' => 'FROM JAPAN',
        ],

        'our-value' => [
            'title' => 'OUR VALUE'
        ],

        'our-customers' => [
            'title' => 'OUR CUSTOMERS',
            'subs' => [
                'cust' => 'CUSTOMERS',
                'quality' => 'QUALITY SERVICE',
                'high' => 'HIGH',
            ],
        ],

        'news-galery' => [
            'title' => 'NEWS & GALERY',
        ],

        'online-store' => [
            'title' => 'Online Store'
        ],

        'company' => [
            'vision' => 'VISION',
            'mission' => 'MISSION',
            'our-brand' => 'OUR BRAND',
            'our-team' => 'OUR TEAM',
            'where-we-work' => 'WHERE WE WORK',
            'distribution-point' => 'DISTRIBUTION POINT'
        ],

        'career' => [
            'box_title' => 'CAREER OPPORTUNITIES',
            'job_desk' => 'JOB DESC',
            'reqs' => 'REQUIREMENTS',
            'form' => [
                'name' => 'Name',
                'gender' => 'Gender',
                'email' => 'Email',
                'phone' => 'Phone',
                'upload-cv' => 'Upload your CV here',
                'message' => 'Message',
                'terms' => 'I have read and agree to the Terms and Conditions'
            ]
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],
    ],
];
