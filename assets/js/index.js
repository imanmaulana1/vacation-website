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
});
