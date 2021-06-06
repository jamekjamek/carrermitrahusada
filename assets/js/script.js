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
    
    
    $('#apply-now').on('click',()=>{
        // e.preventDefault();
        let $this = $(this);
        let id = $this.attr('data-id'); // pake ini coba, kali aja bisa
        console.log(id);
        $.ajax({
            url: `${base_url}job/submitjob`,
            method:"POST",
            dataType: "JSON",
            data:{
                id:id
            },
            beforeSend:()=>{

            },
            success:()=>{

            }
        });
    });
})