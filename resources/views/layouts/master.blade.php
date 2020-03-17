<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://img.icons8.com/ios-glyphs/96/000000/beach.png">
    <title>Tour-De-BD</title>
    @include('partials.links')
  </head>
  <body>

    <div class="wrapper">

      @include('partials.nav')
      @yield('content')




    </div>
      @include('partials.footer')



      @include('partials.scripts')
</body>
</html>
