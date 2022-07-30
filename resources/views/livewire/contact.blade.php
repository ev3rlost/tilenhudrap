<div class="w-full md:w-1/2">

    <form wire:submit.prevent="sendMessage">
        @csrf
        <div class="space-y-4">
            <!-- Name -->
            <div class="form-group">
                <label for="name">Your name:</label>
                <input wire:model.defer="name" type="text" id="name" class="@error('name') !border-red-500 @enderror">
                @error('name') <span class="text-xs text-red-500">* {{ $message }}</span> @enderror
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email">Your email:</label>
                <input wire:model.defer="email" type="email" id="email" class="@error('email') !border-red-500 @enderror">
                @error('email') <span class="text-xs text-red-500">* {{ $message }}</span> @enderror
            </div>
            <!-- Recipient -->
            <div class="form-group [&>div>label]:p-2">
                <div>
                    <input wire:model.defer="recipient" type="radio" name="recipient" id="press" value="press@tilenhudrap.com">
                    <label for="press">Press inquiries</label>
                </div>
                <div>
                    <input wire:model.defer="recipient" type="radio" name="recipient" id="studiosession" value="studiosession@tilenhudrap.com">
                    <label for="studiosession">Studio session inquiries / educational purposes</label>
                </div>
                <div>
                    <input wire:model.defer="recipient" type="radio" name="recipient" id="tilen" value="info@tilenhudrap.com">
                    <label for="tilen">Other inquiries</label>
                </div>
                <div>
                    <input wire:model.defer="recipient" type="radio" name="recipient" id="admin" value="admin@tilenhudrap.com">
                    <label for="admin">Website related issues</label>
                </div>
            </div>
            <!-- Subject -->
            <div class="form-group">
                <label for="name">Subject:</label>
                <input wire:model.defer="subject" type="text" id="subject" class="@error('subject') !border-red-500 @enderror">
                @error('subject') <span class="text-xs text-red-500">* {{ $message }}</span> @enderror
            </div>
            <!-- Message -->
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea wire:model.defer="message" name="message" id="message" class="@error('message') !border-red-500 @enderror"></textarea>
                @error('message') <span class="text-xs text-red-500">* {{ $message }}</span> @enderror
            </div>
            <!-- Button -->
            <div class="form-group">
                <button
                    wire:loading.class="opacity-20"
                    wire:loading.attr="disabled"
                    class="mx-auto w-fit shadow-md bg-none border-2 border-neutral-500 text-white font-semibold uppercase tracking-widest py-3 px-8 rounded hover:bg-brand/20 hover:ring-2 hover:ring-brand hover:border-transparent transition disabled:cursor-not-allowed disabled:transition-none"
                >
                    <div wire:loading.remove>Send <i class="bx bx-paper-plane"></i></div>
                    <div wire:loading>
                        <svg class="relative top-1 animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </button>
            </div>

        </div>

    </form>

    @if (session()->has('success'))
        <div
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 5000)"
            class="text-green-500 text-sm bg-green-500/10 border border-green-500 p-4 rounded mt-8 block md:flex items-center space-y-2 md:space-y-0 text-center md:text-left">
            <div class="w-full md:w-24 flex justify-center items-center text-4xl"><i class="bx bx-check-circle"></i></div>
            <div>Thank you for your message!<br>We will get back in touch with you as soon as possible.</div>
        </div>
    @endif

</div>
