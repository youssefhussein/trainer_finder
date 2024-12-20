<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard | Trainer Finder</title>
</head>
<body>

<div class="content">
    <h1 class="text-center mb-4">Admin Dashboard</h1>
    <div class="admin-section">
        <h2>Manage Trainer Applications</h2>
        <p>Review and approve or reject trainer applications.</p>

        <button onclick="window.location.href='{{route('admin.applications.index')}}'">Go to Applications</button>
    </div>

    <div class="admin-section">
        <h2>View All Users</h2>
        <p>View and manage the users registered on the platform.</p>
        <button onclick="window.location.href='{{route('admin.users.index')}}'">View Users</button>
    </div>

    <div class="admin-section">
        <h2>View All Trainers</h2>
        <p>View and manage the users registered on the platform.</p>
        <button onclick="window.location.href='{{route('admin.trainers.index')}}'  ">View Trainers</button>
    </div>
</div>

</body>
</html>
