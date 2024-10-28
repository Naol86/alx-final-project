@props(['job'])

<div
  class="group flex flex-col rounded-lg border-2 border-transparent bg-white/5 p-3 text-center transition-all duration-300 hover:border-blue-800/50">
  <p class="text-start text-sm">{{ $job->employer->name }}</p>
  <div class="my-4 transition-all duration-300 group-hover:text-blue-800">
    <p class="text-lg font-semibold">{{ $job->title }}</p>
    <p class="mt-2 text-sm font-normal">{{ $job->schedule }} - {{ $job->salary }} </p>
  </div>
  <div class="mt-auto flex items-center justify-between">
    <div class="truncate">
      @foreach ($job->tags as $tag)
        <x-tag size='sm' :$tag />
      @endforeach

    </div>
    <x-employer-logo width='40' />
  </div>
</div>
