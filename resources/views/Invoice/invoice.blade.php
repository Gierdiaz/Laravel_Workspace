<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
        <title>Policies</title>
    </header>

    <body>
        <h2>Invoices</h2>
        @can('isAdmin', 'App\Models\Invoices')
            <a href="">Invoice Admin</a>
            <ul>
                @foreach ($invoice as $invoices)
                    @can('show', $invoice)
                        <li>
                            {{ $invoices->user->name }}
                        </li>
                    @endcan
                @endforeach
            </ul>
        @endcan
    </body>
</html>