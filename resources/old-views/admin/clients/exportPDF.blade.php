<!DOCTYPE html>
<html>
<head>
    <title>Client Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Client Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $client->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $client->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $client->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $client->phone }}</td>
        </tr>
        <tr>
            <th>Service</th>
            <td>{{ $client->service }}</td>
        </tr>
        <tr>
            <th>Subject</th>
            <td>{{ $client->subject }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $client->message }}</td>
        </tr>
        <tr>
            <th>Document</th>
            <td>{{ $client->document_path }}</td>
        </tr>
    </table>
</body>
</html>
