<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8  mt-5">
                <div class="card">
                    <div class="card-header">Form</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('orders.store') }}" id="myForm">
                            @csrf
                            <div class="mb-3">
                                <label for="inputField" class="form-label">Input Field</label>
                                <input type="text" class="form-control" id="inputField" name="inputField" placeholder="Enter something">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(event) {
                // Prevent default form submission
                event.preventDefault();
    
                // Get form data
                var formData = $(this).serialize();
    
                // AJAX request
                $.ajax({
                    type: 'POST',
                    url: '{{ route("orders.store") }}',
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        // Example: Show success message or redirect
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</x-app-layout>
