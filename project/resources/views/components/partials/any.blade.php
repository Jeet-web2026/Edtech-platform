@if($errors->any())
<script>
    $(document).ready(function() {
        Swal.fire({
            icon: 'error',
            title: 'An Unexpected Error Occurred!',
            text: "{{ $errors->first() }}",
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            draggable: true
        });
    });
</script>
@endif