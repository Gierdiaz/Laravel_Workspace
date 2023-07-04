<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Employee</title>
    </head>
    <body>
        <form action="{{ route('employees.index') }}" method="post">
            @csrf
           
            <select name="" id="">    
                @foreach($employees as $employee) 
                <option value=""> {{ $employee->name }}</option>
                @endforeach
            </select>
            
        </form>
    </body>
</html>