$(document).ready(()=>{
    const flashdata = $(".flashdata").data("flashdata");
    const type = $(".flashdata").data("type");
    if(flashdata){
        Swal.fire({
            text: flashdata,
            icon: type,
            showCancelButton: false,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })
    }

    function deleteQuestion(url, text){
        Swal.fire({
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin'
          }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = url;
                }
          })
        }
    
    $(".delete-family").on("click", function(){
        var id  = $(this).data("id");
        var url = `${base_url}profile/family/delete/${id}`;
        deleteQuestion(url,'Yakin akan menghapus data ini !');
    })

    $('.get-regency').select2({
        placeholder:'Cari nama kabupaten',
        minimumInputLength:3,
        ajax:{
            url:`${base_url}profile/getregency`,
            dataType:'JSON',
            type:'POST',
            data:function(params){
                return{
                    search:params.term
                }
            },
            processResults:function(data){
                return{
                    results:data
                }
            },
            cache:true
        },
    });
})