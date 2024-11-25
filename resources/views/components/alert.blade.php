@if (session('success') || $errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('success'))
                swal({
                    title: "Éxito",
                    text: "{{ session('success') }}",
                    icon: "success",
                    button: "Aceptar",
                });
            @endif

            @if ($errors->any())
                swal({
                    title: "Error",
                    text: "{!! implode('<br>', $errors->all()) !!}",
                    icon: "error",
                    button: "Aceptar",
                });
            @endif
        });
    </script>
@endif
