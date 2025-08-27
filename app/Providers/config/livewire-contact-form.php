<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Submission Handler
    |--------------------------------------------------------------------------
    |
    | How to handle form submissions. Options: 'log', 'email', 'database', 'webhook', 'custom'
    |
    */
    'submission_handler' => env('CONTACT_FORM_HANDLER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Email Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for email submission handler
    |
    */
    'email_recipient' => env('CONTACT_FORM_EMAIL', config('mail.from.address')),
    'email_subject' => env('CONTACT_FORM_SUBJECT', 'New Contact Form Submission'),

    /*
    |--------------------------------------------------------------------------
    | Webhook Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for webhook submission handler
    |
    */
    'webhook_url' => env('CONTACT_FORM_WEBHOOK_URL'),
    'webhook_secret' => env('CONTACT_FORM_WEBHOOK_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Custom Handler
    |--------------------------------------------------------------------------
    |
    | Custom class to handle form submissions
    |
    */
    'custom_handler' => null,

    /*
    |--------------------------------------------------------------------------
    | Form Configuration
    |--------------------------------------------------------------------------
    |
    | Default form settings
    |
    */
    'success_message' => 'Thank you! Your message has been sent successfully.',
    'submit_text' => 'Send Message',
    'title_text' => 'Contact Us',
    'reset_form_after_submit' => true,

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Enable package routes (for API endpoints, etc.)
    |
    */
    'enable_routes' => false,

    /*
    |--------------------------------------------------------------------------
    | Themes
    |--------------------------------------------------------------------------
    |
    | Available themes for the contact form
    |
    */
    'themes' => [
        'default' => 'Default Theme',
        'dark' => 'Dark Theme',
        'minimal' => 'Minimal Theme',
        'bootstrap' => 'Bootstrap Theme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Validation Rules
    |--------------------------------------------------------------------------
    |
    | Customize validation rules
    |
    */
    'validation' => [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ],
];
