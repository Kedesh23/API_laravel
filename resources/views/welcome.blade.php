<!DOCTYPE html>
<html>
    <head>
        <title>CRUD with Laravel</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Status</th>
            </tr>

            @foreach($task as $t)
                <tr>
                    <td>{{$t->title}}</td>
                    <td>{{$t->date}}</td>
                    <td>{{$t->status}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>