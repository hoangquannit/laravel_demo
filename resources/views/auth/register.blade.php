<html lang="en">
  <head>
      <title>Laravel demo</title>
      <meta charset="utf-8">
  </head>
  <body>
      <h2> Signup form :</h2>
      <form method="POST" action={{url('/auth/register')}}>
           {!! csrf_field() !!}
              @if ($errors->any())
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              @endif
           <ul>
               <li>
                   <label for="name">Name: </label>
                   <input type="text" name="name" id="name" placeholder="name"/>
               </li>
               <li>
                   <label for="email">Email: </label>
                   <input type="email" name="email" id="email" placeholder="email"/>
               </li>
               <li>
                   <label for="password">Password: </label>
                   <input type="password" name="password" id="password" placeholder="password"/>
               </li>
               <li>
                   <label for="pass_confirmation">Confirm password:</label>
                   <input type="password" name="password_confirmation" id="pass_confirmation" placeholder="confirm password"/>
               </li>
               <li>
                   <button type="submit">Submit</button>
               </li>
           </ul>
      </form>
  </body>
</html>