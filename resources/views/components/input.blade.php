<div class="form-group col-{{ $colSize }} mb-3">
    <label for="{{ $name }}">{{ $label }}:</label>
    @if($type !== "textarea" && $type !== "file")
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" aria-describedby="{{ $name }}Error">
    @elseif($type === "textarea")
        <textarea class="form-control" id="{{ $name }}" name="{{ $name }}" aria-describedby="{{ $name }}Error">{{ old($name, $value) }}</textarea>
    @else
        <input type="file" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" aria-describedby="{{ $name }}Error">
    @endif
    <span class="text-danger" id="{{ $name }}Error">
        @error($name)
        {{ $message }}
        @enderror
    </span>
</div>
