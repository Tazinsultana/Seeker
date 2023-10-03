<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).ready(function() {

        $(document).on('click', '.add_product', function(e) {
            e.preventDefault();

            let name = $('#name').val();
            let price = $('#price').val();
            // console.log(name + price);
            $.ajax({
                Url: " {{ route('add.product') }}",
                method: 'post',
                data: {name:name, price:price},

                success: function(res) {
                    if(res.status==success){

                        $('#addModal').modal('hide');
                        $('#addproduct')[0].reset();
                    }

                },
                error: function(err) {
                    let error = err.resposeJSON;
                    $.each(error.errors, function(index, value) {
                        $.('.errMsgContainer').append(
                            '<span class="text-danger"> ' + value + '</span>' +
                            '<br>');


                    })

                }



            });
        })
    });
</script>
