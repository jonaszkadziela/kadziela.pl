@props(['align' => 'right', 'width' => 'w-48', 'alignmentClasses' => '', 'contentClasses' => 'py-1 bg-white'])

@php
switch ($align) {
    case 'left':
        $defaultAlignmentClasses = 'ltr:origin-top-left rtl:origin-top-right start-0';
        break;
    case 'top':
        $defaultAlignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $defaultAlignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0';
        break;
}

$alignmentClasses = implode(' ', [$alignmentClasses, $defaultAlignmentClasses]);
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div x-show="open"
         x-transition:enter="ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute hover:shadow-xl mt-2 shadow-md transition z-50 {{ $width }} {{ $alignmentClasses }}"
         style="display: none;"
    >
        <div class="ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
