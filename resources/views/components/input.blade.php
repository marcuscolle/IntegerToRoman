@props(['id', 'type', 'placeholder', 'label', 'floatingLabel' => true, 'required' => false, 'disabled' => false, 'slugValue' => '', 'value' => '', 'class' => '' ])

<div class="{{ $floatingLabel ? 'form-floating' : 'from-group' }} mb-3">
    <input
        type="{{ $type }}"
        class="form-control{{ $errors->has($id) ? ' is-invalid' : '' }} {{ $floatingLabel ? ' mb-3' : '' }} {{ isset($class) ? $class : '' }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        name="{{ $name ?? $id }}"
        value="{{ old($id, $value) }}"
        autocomplete="{{ $name ?? $id }}"
        @if($required) required @endif
        @if($disabled) disabled @endif
    >
    @if($floatingLabel)
        <label for="{{ $id }}">{{ $label }}</label>
    @endif

    @if($errors->has($id))
        <div class="invalid-feedback">
            {{ $errors->first($id) }}
        </div>
    @endif
</div>
