
@props(['label', 'url' => '#'])
<div class="subject-container">
    <a href="{{ $url ?? '#' }}" target="_blank" style="text-decoration: none;">
        <button {{ $attributes->merge(['class' => 'subject-main-btn']) }}>
            {{ $label }}
        </button>
    </a>
</div>
