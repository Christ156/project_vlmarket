@extends('layouts.app');

@section('content')
    <div class="container p-3 text-center">
        <div class="table-responsive">
            <table
                class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <caption>Table Name</caption>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Admin</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php $i=1 ?>
                    @foreach ($user as $u)
                        <tr class="table-primary">
                            <td scope="row">{{ $i++ }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>Admin</td>
                            <td><span class="badge bg-success">Active</span></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>

    </div>
@endsection
