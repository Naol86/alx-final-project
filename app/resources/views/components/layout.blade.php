<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Find Job</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
  </head>

  <body class="bg-black font-hanken-grotesk text-white">
    <div class="px-5 md:px-8">
      <nav class="mt-3 flex justify-between border-b border-white/20 px-5 py-3">
        <div>
          <a href="/">
            <img src="{{ Vite::asset('/resources/images/logo.svg') }}" alt="logo">
          </a>
        </div>
        <div class="hidden md:block">
          <ul class="flex space-x-3">
            <li>
              <a href="/">
                Jobs
              </a>
            </li>
            <li>
              <a href="/">
                Career
              </a>
            </li>
            <li>
              <a href="/">
                Salaries
              </a>
            </li>
            <li>
              <a href="/">
                Companies
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p>Post a Job</p>
        </div>
      </nav>
      <main class="mx-auto space-y-10 px-2 py-14 md:px-10 lg:px-20">
        {{ $slot }}
      </main>
    </div>
  </body>

</html>
