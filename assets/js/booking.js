$(document).ready(function () {
  let res = 0;

  // Configure liblary datepicker
  $('input[name="daterange"]').daterangepicker(
    {
      startDate: moment(),
      minDate: moment(),
      opens: 'right',
      drops: 'up',
      locale: {
        format: 'MM/DD/YYYY',
      },
    },
    function (start, end) {
      $('#startDate-hidden').val(start.format('YYYY-MM-DD'));

      $('#startDate').text(start.format('DD MMM YYYY'));
      $('#end-date').text(end.format('DD MMM YYYY'));

      duration = end.diff(start, 'days');

      res = getSubTotal(
        duration,
        $('#cb-packages-1').prop('checked'),
        $('#cb-packages-2').prop('checked'),
        $('#cb-packages-3').prop('checked')
      );

      $('#duration').val(duration);
      $('#duration-text').text(`${duration} days`);
    }
  );

  // Calculate and update subtotal and total when 'Count' button is clicked
  $('#count').on('click', (e) => {
    e.preventDefault();

    if (!validateCheckboxes()) {
      e.preventDefault();
      alert('Please select at least one package.');
    }

    $('#subTotal').val(res);

    let total = getTotal($('#guestCount').val(), $('#subTotal').val());
    $('#total').val(total);
  });

  // Reset subtotal and total values when reset button is clicked
  $('#resetButton').on('click', () => {
    $('#subTotal, #hiddenSubTotal, #total, #hiddenTotal').val(0);
  });

  //  Remove attribut required from class .package-checkbox if user pick one of packages
  $('.package-checkbox').on('change', function () {
    if (validateCheckboxes()) {
      $('.package-checkbox').removeAttr('required');
    } else {
      $('.package-checkbox').attr('required', 'required');
    }
    updateSubTotal();
  });

  $('#guestCount').on('change', updateTotal);

  // Calculate Subtotal
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

  // Calculate Total
  function getTotal(guest, subTotal) {
    return guest * subTotal;
  }

  // Event listener form
  $('#reservationForm').on('submit', function (e) {
    if (!validateCheckboxes()) {
      alert('Please select at least one package.');
      e.preventDefault(); // Prevent form submission
      return;
    }

    if (!validateSelectOption() === '') {
      alert('Please choose a destination.');
      e.preventDefault(); // Prevent form submission
      return;
    }
  });

  // Validate select option
  function validateSelectOption() {
    let select = $('#package');

    return select.val();
  }

  // Validate checkbox packages
  function validateCheckboxes() {
    return $('.package-checkbox:checked').length > 0;
  }

  function updateSubTotal() {
    let duration = parseInt($('#duration').val()) || 0;
    let res = getSubTotal(
      duration,
      $('#cb-packages-1').prop('checked'),
      $('#cb-packages-2').prop('checked'),
      $('#cb-packages-3').prop('checked')
    );
    $('#subTotal, #hiddenSubTotal').val(res);
    updateTotal();
  }

  function updateTotal() {
    let subTotal = parseInt($('#subTotal').val()) || 0;
    let guestCount = parseInt($('#guestCount').val()) || 1;
    let total = subTotal * guestCount;
    $('#total, #hiddenTotal').val(total);
  }

  //  Set disabled button decrement when value equals 1
  function updateGuestCountButtons() {
    let currentValue = parseInt($('#guestCount').val());
    if (currentValue <= 1) {
      $('#btn-down').attr('disabled', true);
    } else {
      $('#btn-down').removeAttr('disabled');
    }
  }

  window.incrementGuestCount = function () {
    let currentValue = parseInt($('#guestCount').val());
    $('#guestCount').val(currentValue + 1);
    updateGuestCountButtons();
  };

  window.decrementGuestCount = function () {
    let currentValue = parseInt($('#guestCount').val());
    if (currentValue > 1) {
      $('#guestCount').val(currentValue - 1);
      updateGuestCountButtons();
    }
  };

  updateGuestCountButtons();
});
