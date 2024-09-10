@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-warning mt-5">
                <div class="card-body">
                    <h1 class="text-center">Edit Vehicle</h1>

                    <div id="successMessage" class="alert alert-success" style="display: none;"></div>
                    <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

                    <form id="updateVehicleForm" method="POST" action="{{ url('/api/vehicles/'.$vehicle->id) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $vehicle->id }}">

                        <div class="form-group mb-3">
                            <label for="brand">Brand</label>
                            <input type="text" class="form-control" name="brand" id="brand" value="{{ $vehicle->brand }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" name="model" id="model" value="{{ $vehicle->model }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="plate_number">Plate Number</label>
                            <input type="text" class="form-control" name="plate_number" id="plate_number" value="{{ $vehicle->plate_number }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="insurance_date">Insurance Date</label>
                            <input type="date" class="form-control" name="insurance_date" id="insurance_date" value="{{ $vehicle->insurance_date }}">
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Update Vehicle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('updateVehicleForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);
        let vehicleId = document.querySelector('input[name="id"]').value;


        document.getElementById('successMessage').style.display = 'none';
        document.getElementById('errorMessage').style.display = 'none';

        fetch(`/api/vehicles/${vehicleId}`, {
                method: 'PUT',
                body: new URLSearchParams(formData),
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => {
                        throw new Error(`Server returned status ${response.status}: ${text}`);
                    });
                }
                return response.json();
            })
            .then(data => {
                document.getElementById('successMessage').textContent = 'Vehicle updated successfully!';
                document.getElementById('successMessage').style.display = 'block';


                window.location.href = '/';
            })
            .catch(error => {
                document.getElementById('errorMessage').textContent = 'Error: ' + error.message;
                document.getElementById('errorMessage').style.display = 'block';
            });
    });
</script>
@endsection