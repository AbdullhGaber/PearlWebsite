@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <h2>Your Branches</h2>
            <table>
                <thead>
                    <tr>
                        <th>Branch Type</th>
                        <th>Branch Name</th>
                        <th>Government</th>
                        <th>City</th>
                        <th>Phone Number</th>
                        <th>Commercial Registration Number</th>
                        <th>Tax ID Number</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($branches)
                        @foreach($branches as $branch)
                            <tr>
                                <td>{{ $branch['branch_type'] }}</td>
                                <td>{{ $branch['branch_name'] }}</td>
                                <td>{{ $branch['government'] ?? 'N/A' }}</td>
                                <td>{{ $branch['city'] ?? 'N/A' }}</td>
                                <td>{{ $branch['phone_number'] }}</td>
                                <td>{{ $branch['commercial_registration_number'] }}</td>
                                <td>{{ $branch['tax_id_number'] }}</td>
                                <td>
                                    <a href="{{ route('branches.editBranch', ['branchId' => $branch['id']]) }}">
                                        <i class="fa-solid fa-pen-to-square text-primary"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('branches.delete_branch') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="branch_id" value="{{ $branch['id'] }}">
                                        <button type="submit" class="btn-delete" style="border: none; background: none; padding: 0;">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">No branches found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
