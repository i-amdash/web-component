# Landmark Web Component - Laravel Livewire Contact Form

A reusable Laravel Livewire contact form component that can be easily integrated into any Laravel application.

## Features

- 🚀 Easy integration with Laravel/Livewire applications
- 🎨 Multiple themes (Default, Bootstrap, Tailwind)
- ⚡ Real-time validation
- 📧 Multiple submission handlers (email, database, webhook, custom)
- 🔧 Highly configurable
- � Event-driven architecture
- 📱 Responsive design

## Installation

Install the package via Composer:

```bash
composer require landmark/landmark-web-component
```

### Laravel Auto-Discovery

The package will automatically register itself. If you have auto-discovery disabled, add the service provider to your `config/app.php`:

```php
'providers' => [
    // ...
    Landmark\LandmarkWebComponent\LandmarkWebComponentServiceProvider::class,
],
```

### Publish Configuration (Optional)

Publish the configuration file to customize the component:

```bash
php artisan vendor:publish --tag=landmark-web-component-config
```

### Publish Views (Optional)

Publish the views if you want to customize the component appearance:

```bash
php artisan vendor:publish --tag=landmark-web-component-views
```

## Quick Start

### Basic Usage

Add the component to any Blade template:

```blade
<livewire:landmark-contact-form />
```

### With Custom Options

```blade
<livewire:landmark-contact-form 
    :theme="'bootstrap'"
    :submit-text="'Get In Touch'"
    :title-text="'Contact Our Team'"
    :show-title="true"
    :redirect-after-submit="'/thank-you'"
/>
```
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