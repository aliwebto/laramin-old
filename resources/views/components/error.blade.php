@props(['for'])

@error($for)
<span {{ $attributes->merge(['class' => 'invalid-feedback']) }} >{{ $message }}</span>
@enderror
