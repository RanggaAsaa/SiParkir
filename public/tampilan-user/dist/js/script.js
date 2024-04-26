const header = document.querySelector("nav");

window.addEventListener ("scroll", function(){
    header.classList.toggle ("sticky" ,window.scrollY > 0);
});


function confirmBooking() {
    Swal.fire({
      title: 'Yakin data sudah benar?',
      text: "Pastikan data yang anda masukan sudah benar!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Booking!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById('form-booking').submit();
      }
    })
  }