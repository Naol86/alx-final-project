@props(['size' => 'base'])

@php
  $sizes = [
      'xs' => 'text-2xs',
      'sm' => 'text-xs',
      'base' => 'text-sm',
      'lg' => 'text-base',
      'xl' => 'text-lg',
      '2xl' => 'text-xl',
      '3xl' => 'text-2xl',
      '4xl' => 'text-3xl',
      '5xl' => 'text-4xl',
      '6xl' => 'text-5xl',
      '7xl' => 'text-6xl',
      '8xl' => 'text-7xl',
      '9xl' => 'text-8xl',
  ];
  $size = $sizes[$size];
@endphp

<button
  class="hover:bg-white/15 {{ $size }} m-0.5 rounded-lg bg-white/5 px-2 py-1 transition-all duration-300 active:scale-95">
  <a href="#">
    {{ $slot }}
  </a>
</button>
