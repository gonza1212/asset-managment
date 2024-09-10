@props([
    'attribute',
    'data',
])

<div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
    <p class="mb-2 dark:text-gray-400">{{ $attribute }}</p>
    <h3 class="text-xl dark:text-gray-100">{{ $data }}</h3>
</div>