<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
        <title>Policies</title>
    </header>

    <body>
        <h2>Policies</h2>
        
        <form action="{{ route('invoices.store') }}" method="post">
            @csrf
            <button type="submit">Create Invoice</button>
        </form>
    </body>
</html>