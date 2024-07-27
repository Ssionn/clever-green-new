<div>
    <h1 class="font-bold text-lg">
        Verification
    </h1>
</div>

<div class="mt-4 flex justify-center flex-col">
    @if(auth()->user()->hasVerifiedEmail())
        <div class="inline-flex items-center justify-center space-x-2">
            <x-icon-verified class="h-6 w-6 sm:h-10 sm:w-10"/>
            <span class="text-sm sm:text-lg font-medium pt-1">Email has already been verified</span>
        </div>
    @else
        <div class="inline-flex items-center justify-center space-x-2">
            <x-icon-shield class="h-6 w-6 sm:h-10 sm:w-10"/>
            <span class="text-sm sm:text-lg font-medium pt-1">Email has not yet been verified</span>
        </div>
        <span class="text-xs text-center block">Some features might not be available...</span>
    @endif
</div>
