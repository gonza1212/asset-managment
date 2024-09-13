@props([
    'attribute',
    'data',
])

<div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
    <p class="mb-2 text-sm dark:text-gray-400">{{ $attribute }}</p>
    <h3 class="text-md dark:text-gray-100">{{ $data }}</h3>
</div>