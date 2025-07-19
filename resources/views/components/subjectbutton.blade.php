
@props(['label', 'url' => '#'])
<div class="subject-container">
    <a href="{{ $url ?? '#' }}"  style="text-decoration: none;">
        <button {{ $attributes->merge(['class' => 'subject-main-btn']) }}>
            {{ $label }}
        </button>
    </a>
</div>
