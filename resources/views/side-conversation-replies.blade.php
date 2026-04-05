<div class="space-y-4 p-4">
    @forelse ($replies as $reply)
        <div class="rounded-lg border border-gray-200 p-4 dark:border-gray-700">
            <div class="mb-2 flex items-center justify-between">
                <span class="text-sm font-medium text-gray-900 dark:text-gray-100">
                    {{ $reply->author?->name ?? 'System' }}
                </span>
                <span class="text-xs text-gray-500 dark:text-gray-400">
                    {{ $reply->created_at->diffForHumans() }}
                </span>
            </div>
            <div class="prose dark:prose-invert max-w-none text-sm">
                {!! $reply->body !!}
            </div>
        </div>
    @empty
        <p class="text-center text-sm text-gray-500 dark:text-gray-400">
            No replies yet.
        </p>
    @endforelse
</div>
