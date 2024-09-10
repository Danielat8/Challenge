<td>
    <form class="deleteForm" data-id="{{ $vehicle->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</td>
<script>
    document.querySelectorAll('.deleteForm').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let vehicleId = this.dataset.id;

            fetch(`/api/vehicles/${vehicleId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (response.status === 204) {
                        alert('Vehicle deleted successfully!');
                        window.location.reload();
                    } else {
                        alert('Error deleting vehicle');
                    }
                });
        });
    });
</script>