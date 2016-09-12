@extends($layout)
@section('content')
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <form method="POST" action={{url('/auth/register')}}>
                    {!! csrf_field() !!}
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control input-sm floatlabel" placeholder="First Name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="pass_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Register" class="btn btn-info btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection