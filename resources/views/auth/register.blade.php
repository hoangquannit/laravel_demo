<html lang="en">
  <head>
      <title>Laravel demo</title>
      <meta charset="utf-8">
  </head>
  <body>
      <h2> Signup form :</h2>
      <form method="POST" action={{url('/auth/register')}}>
           {!! csrf_field() !!}}
              @if ($errors->any())
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              @endif
      </form>
  </body>
</html>