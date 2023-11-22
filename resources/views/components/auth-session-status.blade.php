@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 dark:bg-gray-700']) }}>
        {{ $status }}
    </div>
@endif
