<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Report</title>
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
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td:last-child {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Report</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">Report ID</th>
                <th scope="col">Pelapor</th>
                <th scope="col">Tipe</th>
                <th scope="col">Longitude</th>
                <th scope="col">Latitude</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->report_id }}</td>
                    <td>{{ $report->user->name }}</td>
                    <td>{{ $report->type->name }}</td>
                    <td>{{ $report->longitude }}</td>
                    <td>{{ $report->latitude }}</td>
                    <td>{{$report->status}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
