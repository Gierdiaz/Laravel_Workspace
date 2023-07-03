<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Employee</title>
    </head>
    <body>
        <form action="{{ route('employee.index') }}" method="post">
            @csrf
            @foreach ($user as $users)
            <select name="" id="">     
                <option value=""> {{ $users->position->name }}</option>
            </select>
            @endforeach
        </form>
    </body>
</html>