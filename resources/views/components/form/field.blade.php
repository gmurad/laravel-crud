@props([
    'type'=>'text', 'name'=>'', 'placeholder'=>'', 'value'=>'', 'step'=>'1'
])
<input
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $value }}"
    placeholder="{{ $placeholder }}"
    step="{{ $step }}"
    {{ $attributes->merge(['class'=> 'form-control'])}}
/>