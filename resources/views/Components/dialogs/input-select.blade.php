<div class="mb-3 custom-input">
    <label for="{{ $id }}" class="custom-label">{{ $label }}</label>
    <select class="custom-input-field" id="{{ $id }}" name="{{ $id }}" required>
        <option value="" disabled selected>Select an option</option>
        {{ $slot }}
    </select>
</div>