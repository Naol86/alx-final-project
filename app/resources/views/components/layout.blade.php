<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Job</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
  </head>

  <body class="text-white bg-black">
    <div class="px-5">
      <nav class="flex justify-between px-2 py-3 mt-3 border-b border-white/20">
        <div>
          <a href="/">
            <img src="{{ Vite::asset('/resources/images/logo.svg') }}" alt="logo">
          </a>
        </div>
        <div>
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
      <main class="py-10 mx-auto space-y-5">
        {{ $slot }}
      </main>
    </div>
  </body>

</html>
