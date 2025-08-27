<div class="landmark-contact-form landmark-contact-form--{{ $theme }}">
    @if($showTitle)
    <h2 class="landmark-contact-form__title">{{ $titleText }}</h2>
    @endif

    @if($successMessage)
    <div class="landmark-contact-form__success">
        {{ $successMessage }}
    </div>
    @endif

    <form wire:submit.prevent="submit" class="landmark-contact-form__form">
        <div class="landmark-contact-form__field">
            <label for="name" class="landmark-contact-form__label">Name *</label>
            <input
                type="text"
                id="name"
                wire:model="name"
                class="landmark-contact-form__input @error('name') landmark-contact-form__input--error @enderror"
                placeholder="Your full name">
            @error('name')
            <span class="landmark-contact-form__error">{{ $message }}</span>
            @enderror
        </div>

        <div class="landmark-contact-form__field">
            <label for="email" class="landmark-contact-form__label">Email *</label>
            <input
                type="email"
                id="email"
                wire:model="email"
                class="landmark-contact-form__input @error('email') landmark-contact-form__input--error @enderror"
                placeholder="your.email@example.com">
            @error('email')
            <span class="landmark-contact-form__error">{{ $message }}</span>
            @enderror
        </div>

        <div class="landmark-contact-form__field">
            <label for="message" class="landmark-contact-form__label">Message *</label>
            <textarea
                id="message"
                wire:model="message"
                rows="5"
                class="landmark-contact-form__textarea @error('message') landmark-contact-form__input--error @enderror"
                placeholder="Your message here..."></textarea>
            @error('message')
            <span class="landmark-contact-form__error">{{ $message }}</span>
            @enderror
        </div>

        <div class="landmark-contact-form__actions">
            <button
                type="submit"
                class="landmark-contact-form__submit"
                wire:loading.attr="disabled"
                wire:loading.class="landmark-contact-form__submit--loading">
                <span wire:loading.remove>{{ $submitText }}</span>
                <span wire:loading>Sending...</span>
            </button>
        </div>
    </form>
    <style>
        .landmark-contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .landmark-contact-form__title {
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #1f2937;
        }

        .landmark-contact-form__success {
            background-color: #10b981;
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .landmark-contact-form__field {
            margin-bottom: 1.5rem;
        }

        .landmark-contact-form__label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #374151;
        }

        .landmark-contact-form__input,
        .landmark-contact-form__textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .landmark-contact-form__input:focus,
        .landmark-contact-form__textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .landmark-contact-form__input--error {
            border-color: #ef4444;
        }

        .landmark-contact-form__error {
            display: block;
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .landmark-contact-form__actions {
            text-align: center;
        }

        .landmark-contact-form__submit {
            background-color: #3b82f6;
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }

        .landmark-contact-form__submit:hover {
            background-color: #2563eb;
        }

        .landmark-contact-form__submit:disabled,
        .landmark-contact-form__submit--loading {
            background-color: #9ca3af;
            cursor: not-allowed;
        }

        /* Bootstrap Theme */
        .landmark-contact-form--bootstrap .landmark-contact-form__input,
        .landmark-contact-form--bootstrap .landmark-contact-form__textarea {
            border-radius: 0.25rem;
        }

        .landmark-contact-form--bootstrap .landmark-contact-form__submit {
            border-radius: 0.25rem;
        }

        /* Tailwind Theme (uses default styles) */
    </style>

</div>