<x-layout>
  <section>
    <div class="max-w-xl mx-auto my-8 space-y-6 mb-14">

      <h1 class="text-4xl font-bold text-center">Let's Find Your Next Job</h1>
      <form action="/" method="POST" class="relative flex">
        <input type="text" class="w-full px-4 py-3 pr-10 outline-none rounded-xl bg-white/10 placeholder:text-white/50"
          placeholder="Search Your job">
        <button class="absolute w-4 h-4 my-4 bg-white right-3" type='submit'>
        </button>
      </form>
    </div>
  </section>
  <sction>
    <x-section-name>Top Job</x-secti-name>
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <x-job-card> </x-job-card>
        <x-job-card> </x-job-card>
        <x-job-card> </x-job-card>
      </div>
  </sction>
  <section>
    <x-section-name>Tages</x-section-name>
    <div class="flex flex-wrap justify-between gap-2">
      <x-tag>Remote</x-tag>
      <x-tag>Backend</x-tag>
      <x-tag>API</x-tag>
      <x-tag>Frontend</x-tag>
      <x-tag>Frontend</x-tag>
      <x-tag>Remote</x-tag>
      <x-tag>Backend</x-tag>
      <x-tag>Backend</x-tag>
      <x-tag>API</x-tag>
      <x-tag>Remote</x-tag>
      <x-tag>Remote</x-tag>
      <x-tag>Frontend</x-tag>
      <x-tag>Backend</x-tag>
      <x-tag>API</x-tag>
      <x-tag>API</x-tag>
      <x-tag>Remote</x-tag>
      <x-tag>Frontend</x-tag>
      <x-tag>Frontend</x-tag>
      <x-tag>Backend</x-tag>
      <x-tag>Remote</x-tag>
      <x-tag>API</x-tag>
      <x-tag>Frontend</x-tag>
      <x-tag>API</x-tag>
      <x-tag>Backend</x-tag>
    </div>
  </section>
  <section>
    <x-section-name>Find Jobs</x-section-name>
    <div class="space-y-3">
      <x-job-card-expand></x-job-card-expand>
      <x-job-card-expand></x-job-card-expand>
      <x-job-card-expand></x-job-card-expand>
      <x-job-card-expand></x-job-card-expand>
    </div>
  </section>
</x-layout>
