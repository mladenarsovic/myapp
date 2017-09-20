@extends('layout.master')

@section('content')
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
        </tbody>
    </table>
@endsection