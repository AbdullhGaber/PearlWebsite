@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Good morning Dr/ Osama</h2>
            <table>
                <thead>
                    <tr>
                        <th>Branch Type</th>
                        <th>Branch Name in Arabic</th>
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
                    <tr>
                        <td>Clinic</td>
                        <td>عيادة</td>
                        <td>Dakhlia</td>
                        <td>Mansoura</td>
                        <td>+201001234567</td>
                        <td>123-456-789</td>
                        <td>324-753-286</td>
                        <td><a href="branch.html">
                                <i class="fa-solid fa-pen-to-square text-primary"></i></i>
                            </a></td>
                        <td><i class="fa-solid fa-trash text-danger" onclick="confirmDelete()"></i></td>
                    </tr>
                    <tr>
                        <td>Clinic</td>
                        <td>عيادة</td>
                        <td>Dakhlia</td>
                        <td>Mansoura</td>
                        <td>+201001234567</td>
                        <td>123-456-789</td>
                        <td>324-753-286</td>
                        <td><a href="branch.html">
                                <i class="fa-solid fa-pen-to-square text-primary"></i></i>
                            </a></td>
                        <td><i class="fa-solid fa-trash text-danger" onclick="confirmDelete()"></i></td>
                    </tr>
                    <tr>
                        <td>Clinic</td>
                        <td>عيادة</td>
                        <td>Dakhlia</td>
                        <td>Mansoura</td>
                        <td>+201001234567</td>
                        <td>123-456-789</td>
                        <td>324-753-286</td>
                        <td><a href="branch.html">
                                <i class="fa-solid fa-pen-to-square text-primary"></i></i>
                            </a></td>
                        <td><i class="fa-solid fa-trash text-danger" onclick="confirmDelete()"></i></td>
                    </tr>
                    <tr>
                        <td>Clinic</td>
                        <td>عيادة</td>
                        <td>Dakhlia</td>
                        <td>Mansoura</td>
                        <td>+201001234567</td>
                        <td>123-456-789</td>
                        <td>324-753-286</td>
                        <td><a href="branch.html">
                                <i class="fa-solid fa-pen-to-square text-primary"></i></i>
                            </a></td>
                        <td><i class="fa-solid fa-trash text-danger" onclick="confirmDelete()"></i></td>
                    </tr>
                    <tr>
                        <td>Clinic</td>
                        <td>عيادة</td>
                        <td>Dakhlia</td>
                        <td>Mansoura</td>
                        <td>+201001234567</td>
                        <td>123-456-789</td>
                        <td>324-753-286</td>
                        <td><a href="branch.html">
                                <i class="fa-solid fa-pen-to-square text-primary"></i></i>
                            </a></td>
                        <td><i class="fa-solid fa-trash text-danger" onclick="confirmDelete()"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
@endsection
