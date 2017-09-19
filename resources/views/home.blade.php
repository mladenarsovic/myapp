<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="/css/myapp.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/home"><img src="https://logo-design.zone/wp-content/uploads/2016/04/logo-icon-2.png" height="60" width="80"/> My App</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container">
      <div class="jumbotron">
        <h1>My App</h1>

                @lang('messages.wellcome')<br><br>
            
            <table> 
                <thead>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Country</th>
                    <th>Delete User</th>
                </thead>
                <tbody>

                @foreach($users as $user)

                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->company }}</td>
                        <td>{{ $user->country }}</td>
                        <td>
                            <form>
                                <!-- {{ Form::hidden('userId', false) }} -->
                                <!-- {{ Form::checkbox('userId', true) }} -->
                                <input tabindex="1" type="checkbox" name="userIds[]" value="{{ $user->id }}" id="{{ $user }}">
                            </form>
                        </td>                        
                    </tr>                   
                    
                @endforeach
                <tr>
                    <td style="border-bottom: none;"></td>
                    <td style="border-bottom: none;"></td>
                    <td style="border-bottom: none;"></td>
                    <td style="border-bottom: none;"></td>
                    <td style="border-bottom: none;"></td>
                    <td style="border-bottom: none;"><a class="button" href="delete-users">Delete</a></td>
                </tr>              

                </tbody>
            </table>
      </div>
    </div>    
  </body>   
</html>
