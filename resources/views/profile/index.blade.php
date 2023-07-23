@extends('layouts.app');

@section('content')
    <div class="container p-3 text-center">

        {{-- Profile --}}
        <p class="p-3 f-red-secondary fw-bold fs-1">Profile</p>
        <div class="p-3 shadow rounded">
            <div class="form-floating mb-3">
                <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput"
                    value="{{ Auth::user()->name }}">
                <label for="floatingPlaintextInput">Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput"
                    value="{{ Auth::user()->email }}">
                <label for="floatingPlaintextInput">Email</label>
            </div>
        </div>

        {{-- Table User --}}
        @guest
        @else
            @if (Auth::user()->rank == '1')
                <div class="mt-5">
                    <p class="p-3 fw-bold f-red-secondary fs-1">List user</p>
                    <h1 class="f-red-secondary text-center"></h1>
                    <div class="table-responsive">
                        <table
                            class="table table-dark table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Admin</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php $i = 1; ?>
                                @foreach ($user as $u)
                                    <tr class="table-primary">
                                        <td scope="row">{{ $i++ }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>
                                            @if ($u->rank == '1')
                                                <span class="badge bg-warning">Administrator</span>
                                            @elseif ($u->rank == '0')
                                                <span class="badge bg-primary">User</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($u->status == '1')
                                                <span class="badge bg-success">actived</span>
                                            @elseif ($u->status == '0')
                                                <span class="badge bg-secondary">disabled</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($u->status == '1')
                                                <form action="{{ url('/profile/disable', [$u->id]) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-outline-secondary">Disable
                                                        user</button>
                                                </form>
                                            @elseif ($u->status == '0')
                                                <form action="{{ url('/profile/enable', [$u->id]) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-outline-secondary">Activate user
                                                    </button>
                                                </form>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            @endif
        @endguest

    </div>
@endsection
