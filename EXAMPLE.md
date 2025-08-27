{{-- Example usage in a Laravel application --}}

{{-- Basic usage --}}
@livewire('contact-form')

{{-- With custom theme --}}
@livewire('contact-form', ['theme' => 'dark'])

{{-- Fully customized --}}
@livewire('contact-form', [
    'theme' => 'bootstrap',
    'titleText' => 'Get In Touch',
    'submitText' => 'Send Message Now',
    'showTitle' => true,
    'redirectAfterSubmit' => '/thank-you'
])

{{-- In a layout file --}}
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    @livewireStyles
</head>
<body>
    <div class="container">
        <h1>Contact Us Page</h1>
        
        @livewire('contact-form', [
            'theme' => 'minimal',
            'titleText' => 'Send us a message'
        ])
    </div>
    
    @livewireScripts
</body>
</html>

{{-- Multiple forms on same page --}}
<div class="row">
    <div class="col-md-6">
        <h3>General Inquiry</h3>
        @livewire('contact-form', [
            'theme' => 'default',
            'titleText' => 'General Questions',
            'showTitle' => false
        ])
    </div>
    <div class="col-md-6">
        <h3>Sales Inquiry</h3>
        @livewire('contact-form', [
            'theme' => 'dark',
            'titleText' => 'Sales Questions', 
            'showTitle' => false,
            'submitText' => 'Contact Sales'
        ])
    </div>
</div>