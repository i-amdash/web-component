<?php

namespace Landmark\LandmarkWebComponent\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $successMessage = '';
    public $theme = 'default';

    // Allow customization from parent component
    public $submitText = 'Send Message';
    public $titleText = 'Contact Us';
    public $showTitle = true;
    public $redirectAfterSubmit = null;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    protected $messages = [
        'name.required' => 'Please enter your name.',
        'name.min' => 'Name must be at least 2 characters.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'message.required' => 'Please enter a message.',
        'message.min' => 'Message must be at least 10 characters.',
    ];

    public function mount($theme = 'default', $submitText = null, $titleText = null, $showTitle = true, $redirectAfterSubmit = null)
    {
        $this->theme = $theme;
        $this->submitText = $submitText ?? config('landmark-web-component.submit_text', 'Send Message');
        $this->titleText = $titleText ?? config('landmark-web-component.title_text', 'Contact Us');
        $this->showTitle = $showTitle;
        $this->redirectAfterSubmit = $redirectAfterSubmit;
    }

    public function submit()
    {
        $this->validate();

        $formData = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'submitted_at' => now(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ];

        // Fire event for custom handling
        $this->emit('contactFormSubmitted', $formData);

        // Handle based on configuration
        $this->handleFormSubmission($formData);

        $this->successMessage = config('landmark-web-component.success_message', 'Thank you! Your message has been sent successfully.');

        // Reset form if configured to do so
        if (config('landmark-web-component.reset_form_after_submit', true)) {
            $this->reset(['name', 'email', 'message']);
        }

        // Redirect if specified
        if ($this->redirectAfterSubmit) {
            return redirect($this->redirectAfterSubmit);
        }
    }

    protected function handleFormSubmission($formData)
    {
        $handler = config('landmark-web-component.submission_handler', 'log');

        switch ($handler) {
            case 'email':
                $this->sendEmail($formData);
                break;
            case 'database':
                $this->saveToDatabase($formData);
                break;
            case 'webhook':
                $this->sendWebhook($formData);
                break;
            case 'custom':
                $this->handleCustomSubmission($formData);
                break;
            default:
                Log::info('Contact form submitted:', $formData);
        }
    }

    protected function sendEmail($formData)
    {
        $to = config('landmark-web-component.email_recipient', config('mail.from.address'));

        if ($to) {
            // You would create a Mailable class for this
            // Mail::to($to)->send(new ContactFormMail($formData));
            Log::info('Would send email to: ' . $to, $formData);
        }
    }

    protected function saveToDatabase($formData)
    {
        // You would create a model for this
        // ContactSubmission::create($formData);
        Log::info('Would save to database:', $formData);
    }

    protected function sendWebhook($formData)
    {
        $webhookUrl = config('landmark-web-component.webhook_url');

        if ($webhookUrl) {
            // Send HTTP POST to webhook URL
            Log::info('Would send webhook to: ' . $webhookUrl, $formData);
        }
    }

    protected function handleCustomSubmission($formData)
    {
        $customHandler = config('landmark-web-component.custom_handler');

        if ($customHandler && class_exists($customHandler)) {
            app($customHandler)->handle($formData);
        }
    }

    public function render()
    {
        return view('landmark-web-component::contact-form');
    }
}
