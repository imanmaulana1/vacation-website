$(document).ready(function () {
  function getSubTotal(
    duration,
    serviceTransportasi,
    servicePenginapan,
    serviceMakanan
  ) {
    let subTotal = 0;

    if (serviceMakanan) {
      subTotal += 500000;
    }
    if (serviceTransportasi) {
      subTotal += 1200000;
    }
    if (servicePenginapan) {
      subTotal += 1000000;
    }

    return subTotal * duration;
  }

  function getTotal(guest, subTotal) {
    return guest * subTotal;
  }

  function updateTotals() {
    let duration = parseInt($('#duration').val()) || 0;
    let transportasi = $('#transportasi').is(':checked');
    let makanan = $('#makanan').is(':checked');
    let penginapan = $('#penginapan').is(':checked');
    let guest = parseInt($('#guest').val()) || 0;

    let subTotal = getSubTotal(duration, transportasi, penginapan, makanan);
    let total = getTotal(guest, subTotal);

    $('#subTotal').val(subTotal);
    $('#total').val(total);
  }

  // Event listeners
  $('#duration, #transportasi, #makanan, #penginapan, #guest').on(
    'change',
    updateTotals
  );

  updateTotals();
});
