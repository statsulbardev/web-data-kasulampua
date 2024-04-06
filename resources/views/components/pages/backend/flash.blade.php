@persist('notification_persist')
    <div wire:ignore x-cloak x-data="{ show: false, message: '' }"
        x-on:notify.window="show = true; message = $event.detail; setTimeout(() => { show = false }, 5000)" x-show="show"
        x-description="Notification panel, show/hide based on alert state."
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="px-4 py-5 z-999">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            <p x-text="message"></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endpersist
