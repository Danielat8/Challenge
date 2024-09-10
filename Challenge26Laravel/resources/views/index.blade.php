@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Vehicle Dashboard</h1>
    <table id="vehiclesTable" class="table table-dark table-hover table-bordered border-primary">
        <thead>
            <tr>
                <th class="fw-bolder text-info">Brand</th>
                <th class="fw-bolder text-info">Model</th>
                <th class="fw-bolder text-info">Plate Number</th>
                <th class="fw-bolder text-info">Insurance Date</th>
                <th class="fw-bolder text-warning">Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    fetch('/api/vehicles')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch vehicles.');
            }
            return response.json();
        })
        .then(data => {
            let tableBody = '';
            data.forEach(vehicle => {
                tableBody += `
                    <tr>
                        <td class="text-danger fw-light">${vehicle.brand}</td>
                        <td class="text-danger fw-light">${vehicle.model}</td>
                        <td class="text-danger fw-light">${vehicle.plate_number}</td>
                        <td class="text-danger fw-light">${vehicle.insurance_date}</td>
                        <td>
                            <a href="/vehicles/edit/${vehicle.id}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="/vehicles/${vehicle.id}" style="display:inline;" id="delete-form-${vehicle.id}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>`;
            });
            document.querySelector('#vehiclesTable tbody').innerHTML = tableBody;
        })
        .catch(error => {
            console.error('Error fetching vehicles:', error);
            alert('Error loading vehicles. Please try again.');
        });

    document.addEventListener('click', function(event) {
        if (event.target && event.target.matches('button[type="submit"]')) {
            event.preventDefault();
            const form = event.target.closest('form');
            const formId = form.id;

            if (confirm('Are you sure you want to delete this vehicle?')) {
                fetch(form.action, {
                        method: 'POST',
                        body: new URLSearchParams(new FormData(form)),
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Content-Type': 'application/x-www-form-urlencoded'
                        }
                    })
                    .then(response => {
                        if (response.status === 204) {
                            document.querySelector(`#${formId}`).closest('tr').remove();
                            alert('Vehicle deleted successfully!');
                        } else {
                            return response.text().then(text => {
                                throw new Error(text || 'Unknown error.');
                            });
                        }
                    })
                    .catch(error => {
                        alert('An error while deleting the vehicle: ' + error.message);
                        console.error('Error:', error);
                    });
            }
        }
    });
</script>
@endsection