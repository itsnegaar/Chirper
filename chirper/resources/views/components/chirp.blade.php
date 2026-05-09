@props(['chirp'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3">

            @if($chirp->user)
                <div class="avatar">
                    <div class="w-10 rounded-full">
                        <img
                            src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}"
                            alt="{{ $chirp->user->name }} avatar"
                            class="rounded-full"
                        />
                    </div>
                </div>
            @else
                <div class="avatar placeholder">
                    <div class="w-10 rounded-full">
                        <img
                            src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth"
                            alt="Anonymous User"
                            class="rounded-full"
                        />
                    </div>
                </div>
            @endif

            <div class="min-w-0 flex-1">
                <div class="flex items-center gap-2">
                    <span class="text-sm font-semibold">
                        {{ $chirp->user ? $chirp->user->name : 'Anonymous' }}
                    </span>

                    <span class="text-base-content/60">·</span>

                    <span class="text-sm text-base-content/60">
                        {{ $chirp->created_at->diffForHumans() }}
                    </span>
                </div>

                <p class="mt-2 break-words">
                    {{ $chirp->message }}
                </p>
            </div>

        </div>
    </div>
</div>
