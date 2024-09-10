@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-warning mt-5">
                <div class="card-body">
                    <h1 class="text-center">Create Vehicle</h1>

                    <div id="successMessage" class="alert alert-success" style="display: none;"></div>
                    <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

                    <form id="createVehicleForm" method="POST" action="{{ url('/api/vehicles') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="brand">Brand</label>
                            <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand" value="{{ old('brand') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" name="model" id="model" placeholder="Model" value="{{ old('model') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="plate_number">Plate Number</label>
                            <input type="text" class="form-control" name="plate_number" id="plate_number" placeholder="Plate Number" value="{{ old('plate_number') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="insurance_date">Insurance Date</label>
                            <input type="date" class="form-control" name="insurance_date" id="insurance_date" value="{{ old('insurance_date') }}">
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Create Vehicle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('createVehicleForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);

        document.getElementById('successMessage').style.display = 'none';
        document.getElementById('errorMessage').style.display = 'none';

        fetch('{{ url("/api/vehicles") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errors => {
                        let errorMessage = errors.message || ' error .';
                        throw new Error(errorMessage);
                    });
                }
                return response.json();
            })
            .then(data => {

                document.getElementById('successMessage').textContent = 'Vehicle created successfully!';
                document.getElementById('successMessage').style.display = 'block';
                document.getElementById('createVehicleForm').reset();

                window.location.href = '/';
            })
            .catch(error => {

                document.getElementById('errorMessage').textContent = 'Error: ' + error.message;
                document.getElementById('errorMessage').style.display = 'block';
            });
    });
</script>
@endsection