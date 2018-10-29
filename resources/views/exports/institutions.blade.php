
<p style="color: #2E2E00"> NUMBER OF BOOKSHOPS : {{count($bookshops)}}</p>
<table>
    <thead>
    <tr>
        <th>Region</th>
        <th>Institution Name</th>
        <th>Type</th>
        <th>Activity</th>
        <th>Upcoming</th>
        <th>Outcome</th>
        <th>Orders</th>
        <th>County</th>
        <th>SubCounty</th>
        <th>Contact Name</th>
        <th>Contact Email</th>
        <th>Contact Designation</th>
        <th>Contact Number</th>
        <th>Sales representative</th>
        <th>Created at (Y-M-D)</th>

    </tr>
    </thead>
    <tbody>
    @foreach($institutions as $institution)
        <tr>
            <td>{{ $institution->region->region }}</td>
            <td>{{ $institution->institution_name }}</td>
            <td>{{ $institution->type }}</td>
            <td>{{ $institution->activity }}</td>
            <td>{{ $institution->upcoming }}</td>
            <td>{{ $institution->outcome }}</td>

            @if($institution->orders==null)
                <td> No orders taken</td>

            @else
            <td>{{ $institution->orders}}</td>
            @endif
            <td>{{ $institution->county->county }}</td>
            <td>{{ $institution->subcounty->subcounty }}</td>
            <td>{{ $institution->contactName }}</td>
            <td>{{ $institution->contactEmail }}</td>
            <td>{{ $institution->contactDesignation }}</td>
            <td>{{ $institution->contactNumber }}</td>
            <td>{{ $institution->user->name }}</td>
            <td>{{ $institution->created_at }}</td>

        </tr>
    @endforeach
    </tbody>
</table>