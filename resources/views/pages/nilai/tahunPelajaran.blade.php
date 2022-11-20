<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('select[name="tahun_pelajaran"]').on('change',function(){
        var tahun = $(this).val();
        $.ajax({
            type:"POST",
            url: "nilai/" +tahun,
            data: {data: 'data'},
            success: function(data){
                console.log(data);
                for(var i = 0; i < data.length; i++){
                    var kelas = data[i][nama_kelas];
                    var no = 0;
                    $('select[name="data"]').empty();
                    $('select[name="data"]').append(
                        "<td>"+no+"</td><td>"+kelas+"</td>"
                    );
                }
            }
        });
    });

    // $('select[name="tahun"]').on('change', function(){
    //     var = proviceId = $(this).val();

    //     $.ajax({
    //         type: "POST",
    //         url:"",
    //         data:{}
    //         success::function(data){
    //             $('select[name="city"]').prop("disabled", false);
    //             $('select[name="city"]').html(data.response);
    //         }
    //     });
    // });

    // $('#myForm').submit(function(){
    //     $ajax({
    //         type:"POST",
    //         url:"",
    //         data: $('#myForm').serialize(),
    //         success: function(data) {

    //         }
    //     });
    // });


</script>
