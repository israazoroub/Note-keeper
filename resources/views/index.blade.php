<!doctype html>
<html >
    <head>

        <title>SIMPLE BLOGGER</title>

    </head>
    <body>
    <!-- section show the title of site -->
      @section('QUICKBLOGGER')
          QUICKBLOGGER
      @show

    <div class="container">
        @yield('NoteContent')
    </div>

    </body>
</html>
