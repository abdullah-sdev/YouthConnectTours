<div class="mb-3 custom-input flex flex-col font-sm">
    <label for="{{ $id }}" class="custom-label font-bold">{{ $label }}</label>
    <select class="custom-input-field rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500" id="{{ $id }}" name="{{ $id }}" required>
        <option value="" disabled selected>Select an option</option>
        {{ $slot }}
    </select>
</div>
