
<button href= "{{ route('admin.rent.return', $model) }}" class="btn btn-info" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();

        var href=$(this).attr('href');

        Swal.fire({
        title: 'Are you sure  this the data?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, i am Sure!'
        }).then((result) => {
        if (result.value) {
            document.getElementById('returnForm').action = href;
            document.getElementById('returnForm').submit();

            Swal.fire(
            'Deleted!',
            'Your Data has been deleted.',
            'success'
            )
        }
        })
    })
</script>