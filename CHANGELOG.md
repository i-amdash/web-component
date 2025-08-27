# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2025-08-27

### Added
- Initial release of the Landmark Web Component package
- Laravel Livewire contact form component
- Service provider for automatic Laravel integration
- Configuration file for customizing component behavior
- Multiple themes support (default, bootstrap, tailwind)
- Multiple submission handlers (log, email, database, webhook, custom)
- Real-time form validation
- Event-driven architecture with `contactFormSubmitted` event
- Responsive design with BEM CSS methodology
- Comprehensive documentation

### Features
- **ContactForm Livewire Component**: Reusable contact form with validation
- **LandmarkWebComponentServiceProvider**: Auto-discovery service provider
- **Configuration System**: Highly customizable via config file
- **Theme Support**: Multiple built-in themes
- **Submission Handlers**: Flexible form submission processing
- **Publishing Support**: Config, views, and assets can be published
- **Event System**: Custom event handling for form submissions

### Components
- `src/Http/Livewire/ContactForm.php` - Main Livewire component
- `src/LandmarkWebComponentServiceProvider.php` - Service provider
- `config/landmark-web-component.php` - Configuration file
- `resources/views/contact-form.blade.php` - Component view template

### Usage
```blade
<livewire:landmark-contact-form />
```

### Installation
```bash
composer require landmark/landmark-web-component
```
