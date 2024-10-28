<x-layout>
  <section>
    <div class="mx-auto my-8 mb-14 max-w-xl space-y-6">

      <h1 class="text-center text-4xl font-bold">Let's Find Your Next Job</h1>
      <form action="#" method="POST" class="relative flex">
        <input type="text" class="w-full rounded-xl bg-white/10 px-4 py-3 pr-10 outline-none placeholder:text-white/50"
          placeholder="Search Your job">
        <button class="absolute right-3 my-4 h-4 w-4 bg-white" type='submit'>
        </button>
      </form>
    </div>
  </section>
  <sction>
    <x-section-name>Featured Job</x-secti-name>
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($featuredJobs as $job)
          <x-job-card :$job />
        @endforeach
      </div>
  </sction>
  <section>
    <x-section-name>Tages</x-section-name>
    <div class="flex flex-wrap justify-between gap-2">
      @foreach ($tags as $tag)
        <x-tag :$tag />
      @endforeach
    </div>
  </section>
  <section>
    <x-section-name>Find Jobs</x-section-name>
    <div class="space-y-3">
      @foreach ($jobs as $job)
        <x-job-card-expand :$job />
      @endforeach
    </div>
  </section>
</x-layout>
