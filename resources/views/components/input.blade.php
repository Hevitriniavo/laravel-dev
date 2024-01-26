<div class="form-group col-{{ $colSize }} mb-3">
    <label for="{{ $name }}">{{ $label }}:</label>
    @if($type !== "textarea")
        <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
    @else
        <textarea class="form-control" id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }}</textarea>
    @endif
    <span class="text-danger">
        @error($name)
        {{ $message }}
        @enderror
    </span>
</div>
