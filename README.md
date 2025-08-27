# Laravel Livewire Contact Form Package

A reusable, customizable contact form component for Laravel applications using Livewire.

## Features

- 🚀 Easy installation and setup
- 🎨 Multiple themes (Default, Dark, Minimal, Bootstrap)
- 📧 Multiple submission handlers (Log, Email, Database, Webhook, Custom)
- ✅ Built-in validation
- 🔧 Highly customizable
- 📱 Responsive design
- 🎭 Event-driven architecture

## Installation

### Step 1: Install via Composer

```bash
composer require yourvendor/livewire-contact-form
```

### Step 2: Publish Configuration (Optional)

```bash
php artisan vendor:publish --provider="YourVendor\LivewireContactForm\LivewireContactFormServiceProvider" --tag="config"
```

### Step 3: Publish Views (Optional)

```bash
php artisan vendor:publish --provider="YourVendor\LivewireContactForm\LivewireContactFormServiceProvider" --tag="views"
```

## Quick Start

### Basic Usage

Add the component to any Blade template:

```blade
@livewire('contact-form')
```

### With Custom Options

```blade
@livewire('contact-form', [
    'theme' => 'dark',
    'titleText' => 'Get In Touch',
    'submitText' => 'Send Now',
    'showTitle' => true,
    'redirectAfterSubmit' => '/thank-you'
])
```

## Configuration

### Environment Variables

Add these to your `.env` file:

```env
CONTACT_FORM_HANDLER=email
CONTACT_FORM_EMAIL=admin@example.com
CONTACT_FORM_SUBJECT="New Contact Form Submission"
CONTACT_FORM_WEBHOOK_URL=https://your-webhook.com/endpoint
```

### Available Themes

- `default` - Clean design with Tailwind CSS
- `dark` - Dark theme variant
- `minimal` - Minimalist design
- `bootstrap` - Bootstrap-styled form

### Submission Handlers

1. **Log Handler** (default)
   ```env
   CONTACT_FORM_HANDLER=log
   ```

2. **Email Handler**
   ```env
   CONTACT_FORM_HANDLER=email
   CONTACT_FORM_EMAIL=admin@example.com
   ```

3. **Database Handler**
   ```env
   CONTACT_FORM_HANDLER=database
   ```

4. **Webhook Handler**
   ```env
   CONTACT_FORM_HANDLER=webhook
   CONTACT_FORM_WEBHOOK_URL=https://your-webhook.com/endpoint
   ```

5. **Custom Handler**
   ```env
   CONTACT_FORM_HANDLER=custom
   ```

## Advanced Usage

### Custom Event Handling

Listen for form submissions in your components:

```php
protected $listeners = ['contactFormSubmitted' => 'handleContactForm'];

public function handleContactForm($formData)
{
    // Custom logic here
}
```

### Custom Styling

Publish the views and modify the Blade template:

```bash
php artisan vendor:publish --provider="YourVendor\LivewireContactForm\LivewireContactFormServiceProvider" --tag="views"
```

Then edit: `resources/views/vendor/livewire-contact-form/contact-form.blade.php`

## Requirements

- PHP ^8.2
- Laravel ^9.0|^10.0|^11.0
- Livewire ^2.0|^3.0

## License

MIT License