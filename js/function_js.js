    
    // function test_alert(){
    //   alert("44444");
    // }
    // var img_loading = "../images/loading_a1.gif";
    $('.btn_refresh').click(function(){
        location.reload();
    })

    function sweet_del($v_durl){
        var data_url = $v_durl;
                 swal({
                    title: "ต้องการลบข้อมูลหรือไม่ ?",
                    text: "การลบข้อมูลจะทำให้ข้อมูลหายไปอย่างถาวร",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete'
          }).then((result) => {
            if (result.value) {
              // console.log(data_url);
                $.ajax({
                    type: "GET",
                    url: data_url,
                    error: function(){ error_sw();},
                    success: function(data) {
                        swal({
                            title: "ลบข้อมูลสำเร็จแล้ว!",
                            text: "",
                            type: "success",
                            timer: 1000,
                            showConfirmButton: false
                        }).then(() => {
                            location.reload();
                        })
                    }

                });
            }
        })
    }

  function error_sw(){
    swal({
          title: 'เกิดข้อผิดผลาด',
          text: 'ไม่สามารถลบข้อมูลได้กรุณาติดต่อแอดมิน',
          type: 'error',
          confirmButtonColor: '#999999',
          confirmButtonText: 'Close (X)'
        });
  }


  // function load_sw($url_img){
  //   swal({
  //     // title: "กรุณารอดำเนินการ!",
  //     text: "กรุณารอดำเนินการ",
  //     imageUrl: $url_img,
  //     showConfirmButton: false
  //   });
  // }