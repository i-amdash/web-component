<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Contact Form Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration options for the Landmark Web Component contact form.
    |
    */

    // Form text customization
    'submit_text' => 'Send Message',
    'title_text' => 'Contact Us',
    'success_message' => 'Thank you! Your message has been sent successfully.',

    // Form behavior
    'reset_form_after_submit' => true,

    // Submission handling: 'log', 'email', 'database', 'webhook', 'custom'
    'submission_handler' => 'log',

    // Email configuration (when using 'email' handler)
    'email_recipient' => env('CONTACT_FORM_EMAIL', null),

    // Webhook configuration (when using 'webhook' handler)
    'webhook_url' => env('CONTACT_FORM_WEBHOOK_URL', null),

    // Custom handler class (when using 'custom' handler)
    'custom_handler' => null,

    // Default theme
    'default_theme' => 'default',

    // Available themes
    'themes' => [
        'default' => 'Default Theme',
        'bootstrap' => 'Bootstrap Theme',
        'tailwind' => 'Tailwind Theme',
        'custom' => 'Custom Theme',
    ],

    // Form validation rules (can be customized)
    'validation_rules' => [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ],

    // Custom validation messages
    'validation_messages' => [
        'name.required' => 'Please enter your name.',
        'name.min' => 'Name must be at least 2 characters.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'message.required' => 'Please enter a message.',
        'message.min' => 'Message must be at least 10 characters.',
    ],
];
