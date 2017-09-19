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
        <link href="/css/myapp.css" rel="stylesheet">
    </head>
    <body>     

        <div>
            <div class="blog-header">
                <h1>My App</h1> 
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
