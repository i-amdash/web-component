{{-- Contact Form Component View --}}
<div class="livewire-contact-form livewire-contact-form--{{ $theme }}">
    @if($theme === 'dark')
    <style>
        .livewire-contact-form--dark {
            background: #1f2937;
            color: #f9fafb;
        }

        .livewire-contact-form--dark input,
        .livewire-contact-form--dark textarea {
            background: #374151;
            color: #f9fafb;
            border-color: #4b5563;
        }

        .livewire-contact-form--dark input:focus,
        .livewire-contact-form--dark textarea:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
    </style>
    @elseif($theme === 'minimal')
    <style>
        .livewire-contact-form--minimal {
            border: none;
            box-shadow: none;
            background: transparent;
        }

        .livewire-contact-form--minimal input,
        .livewire-contact-form--minimal textarea {
            border: none;
            border-bottom: 1px solid #d1d5db;
            border-radius: 0;
            background: transparent;
        }
    </style>
    @elseif($theme === 'bootstrap')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif

    <div class="{{ $theme === 'bootstrap' ? 'card' : 'max-w-md mx-auto bg-white p-6 rounded-lg shadow-md' }}">
        @if($theme === 'bootstrap')
        <div class="card-body">
            @endif

            @if($showTitle)
            <h2 class="{{ $theme === 'bootstrap' ? 'card-title h4' : 'text-2xl font-bold mb-6 text-gray-800' }}">
                {{ $titleText }}
            </h2>
            @endif

            @if ($successMessage)
            <div class="{{ $theme === 'bootstrap' ? 'alert alert-success' : 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4' }}">
                {{ $successMessage }}
            </div>
            @endif

            <form wire:submit.prevent="submit">
                <div class="{{ $theme === 'bootstrap' ? 'mb-3' : 'mb-4' }}">
                    <label for="name" class="{{ $theme === 'bootstrap' ? 'form-label' : 'block text-sm font-medium text-gray-700 mb-2' }}">
                        Name
                    </label>
                    <input
                        type="text"
                        id="name"
                        wire:model="name"
                        class="{{ $theme === 'bootstrap' ? 'form-control' : 'w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500' }} @error('name') {{ $theme === 'bootstrap' ? 'is-invalid' : 'border-red-500' }} @enderror"
                        placeholder="Enter your name">
                    @error('name')
                    <div class="{{ $theme === 'bootstrap' ? 'invalid-feedback' : 'text-red-500 text-sm mt-1' }}">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="{{ $theme === 'bootstrap' ? 'mb-3' : 'mb-4' }}">
                    <label for="email" class="{{ $theme === 'bootstrap' ? 'form-label' : 'block text-sm font-medium text-gray-700 mb-2' }}">
                        Email
                    </label>
                    <input
                        type="email"
                        id="email"
                        wire:model="email"
                        class="{{ $theme === 'bootstrap' ? 'form-control' : 'w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500' }} @error('email') {{ $theme === 'bootstrap' ? 'is-invalid' : 'border-red-500' }} @enderror"
                        placeholder="Enter your email">
                    @error('email')
                    <div class="{{ $theme === 'bootstrap' ? 'invalid-feedback' : 'text-red-500 text-sm mt-1' }}">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="{{ $theme === 'bootstrap' ? 'mb-3' : 'mb-6' }}">
                    <label for="message" class="{{ $theme === 'bootstrap' ? 'form-label' : 'block text-sm font-medium text-gray-700 mb-2' }}">
                        Message
                    </label>
                    <textarea
                        id="message"
                        wire:model="message"
                        rows="4"
                        class="{{ $theme === 'bootstrap' ? 'form-control' : 'w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500' }} @error('message') {{ $theme === 'bootstrap' ? 'is-invalid' : 'border-red-500' }} @enderror"
                        placeholder="Enter your message"></textarea>
                    @error('message')
                    <div class="{{ $theme === 'bootstrap' ? 'invalid-feedback' : 'text-red-500 text-sm mt-1' }}">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="{{ $theme === 'bootstrap' ? 'btn btn-primary w-100' : 'w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2' }}">
                    {{ $submitText }}
                </button>
            </form>

            @if($theme === 'bootstrap')
        </div>
        @endif
    </div>

    @if($theme === 'default')
    <script src="https://cdn.tailwindcss.com"></script>
    @endif
</div>