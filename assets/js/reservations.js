$(document).ready(function () {
  if ($('#liveToast').length) {
    let toast = new bootstrap.Toast($('#liveToast')[0], {
      autohide: false,
    });
    toast.show();

    setTimeout(() => {
      toast.hide();
    }, 3000);
  }
  
  $('.btn-delete').on('click', function () {
    let reservationId = $(this).data('reservation-id');
    $('#reservationId').val(reservationId);

    let myModal = new bootstrap.Modal($('#deleteModal'));
    myModal.show();
  });
});
