@props(['job'])
<x-panel>
  <div>
    <x-employer-logo />
  </div>
  <div class="flex h-auto grow flex-col justify-between space-y-1">
    <div>
      <div class="flex w-auto items-center justify-between">
        <p class="text-xs text-gray-500">{{ $job->employer->name }}</p>
        <div class="space-x-1">
          <x-info-tag>{{ $job->schedule }}</x-info-tag>
          <x-info-tag>22</x-info-tag>
        </div>
      </div>
      <p class="text-lg font-bold transition-all duration-300 group-hover:text-blue-800">{{ $job->title }}</p>
    </div>
    <div class="mt-auto flex items-center justify-between">
      <p class="text-xs text-gray-500">{{ $job->salary }}</p>
      <div>
        @foreach ($job->tags as $tag)
          <x-tag size='sm' :$tag />
        @endforeach
      </div>
    </div>
  </div>
</x-panel>
