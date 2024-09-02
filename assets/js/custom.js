// JavaScript to fuel our frontend

// Wait till jQuery loads
$(function() {

  // Add page active at header link
  if (window.activeLink) {
    $(`.${window.activeLink}`).addClass('current');
  }

  // Hide loader
  $('.loader').fadeOut();

  // Init AoS lib
  AOS.init({
    easing: 'ease-out-back',
    duration: 1000
  });
  
  // PopUp Lead Form
  var author_registration_form = '#785554226d8390fcf00af2c7ade1f911';
  $(author_registration_form).appFormValidator({

    onSubmit: function(form) {

      $("input[type=file]").each(function() {
        if ($(this).val() === "") {
          $(this).prop('disabled', true);
        }
      });

      var formURL = $(form).attr("action");
      var formData = new FormData($(form)[0]);

      $.ajax({
        type: $(form).attr('method'),
        data: formData,
        mimeType: $(form).attr('enctype'),
        contentType: false,
        cache: false,
        processData: false,
        url: formURL
      }).always(function() {
        $('#form_submit3').prop('disabled', false);
      }).done(function(response) {
        response = JSON.parse(response);

        // In case action hook is used to redirect
        if (response.redirect_url) {
          window.top.location.href = response.redirect_url;
          return;
        }
        if (response.success == false) {
          $('#recaptcha_response_field').html(response.message);

          // error message
        } else if (response.success == true) {
          $(author_registration_form).remove();
          $('#response').html('<div class="alert alert-success">' + response.message + '</div>');
        } else {
          $('#response').html('Something went wrong...');
        }
        if (typeof(grecaptcha) != 'undefined') {
          grecaptcha.reset();
        }
      }).fail(function(data) {
        if (typeof(grecaptcha) != 'undefined') {
          grecaptcha.reset();
        }
        if (data.status == 422) {
          $('#response').html('<div class="alert alert-danger">Some fields that are required are not filled properly.</div>');
        } else {
          $('#response').html(data.responseText);
        }
      });
      return false;
    }
  });

  // Mini Lead Form
  var publish_enquiry_form = '#94e631fa1a33e904646295d4fb2e8080';
  $(publish_enquiry_form).appFormValidator({
    onSubmit: function(form) {
      $("input[type=file]").each(function() {
        if ($(this).val() === "") {
          $(this).prop('disabled', true);
        }
      });
      var formURL = $(form).attr("action");
      var formData = new FormData($(form)[0]);
      $.ajax({
        type: $(form).attr('method'),
        data: formData,
        mimeType: $(form).attr('enctype'),
        contentType: false,
        cache: false,
        processData: false,
        url: formURL
      }).always(function() {
        $('#form_submit2').prop('disabled', false);
      }).done(function(response) {
        response = JSON.parse(response);
        // In case action hook is used to redirect
        if (response.redirect_url) {
          window.top.location.href = response.redirect_url;
          return;
        }
        if (response.success == false) {
          $('#recaptcha_response_field').html(response.message); // error message
        } else if (response.success == true) {
          $(publish_enquiry_form).remove();
          $('#response').html('<div class="alert alert-success">' + response.message + '</div>');
        } else {
          $('#response').html('Something went wrong...');
        }
        if (typeof(grecaptcha) != 'undefined') {
          grecaptcha.reset();
        }
      }).fail(function(data) {
        if (typeof(grecaptcha) != 'undefined') {
          grecaptcha.reset();
        }
        if (data.status == 422) {
          $('#response').html('<div class="alert alert-danger">Some fields that are required are not filled properly.</div>');
        } else {
          $('#response').html(data.responseText);
        }
      });
      return false;
    }
  });

  // New Author Registration Form
  var new_author_registration_form = '#26a447f97b1a7565911bc3f7eaac3998';
  $(new_author_registration_form).appFormValidator({
    onSubmit: function(form) {

      $("input[type=file]").each(function() {
        if ($(this).val() === "") {
          $(this).prop('disabled', true);
        }
      });

      var formURL = $(form).attr("action");
      var formData = new FormData($(form)[0]);

      $.ajax({
        type: $(form).attr('method'),
        data: formData,
        mimeType: $(form).attr('enctype'),
        contentType: false,
        cache: false,
        processData: false,
        url: formURL
      }).always(function() {
        $('#form_submit').prop('disabled', false);
      }).done(function(response) {
        response = JSON.parse(response);
        // In case action hook is used to redirect
        if (response.redirect_url) {
          window.top.location.href = response.redirect_url;
          return;
        }
        if (response.success == false) {
          $('#recaptcha_response_field').html(response.message); // error message
        } else if (response.success == true) {
          $(form_id).remove();
          $('#response').html('<div class="alert alert-success">' + response.message + '</div>');
        } else {
          $('#response').html('Something went wrong...');
        }
        if (typeof(grecaptcha) != 'undefined') {
          grecaptcha.reset();
        }
      }).fail(function(data) {
        if (typeof(grecaptcha) != 'undefined') {
          grecaptcha.reset();
        }
        if (data.status == 422) {
          $('#response').html('<div class="alert alert-danger">Some fields that are required are not filled properly.</div>');
        } else {
          $('#response').html(data.responseText);
        }
      });
      return false;
    }
  });
  
  // PoD Form
  $("#Review").change(function() {

    if ($(this).val() == "Approved") {
      $('#Div1').show();
      $('#Div2').hide();

      var requiredFields = ['#Name', '#Contact', '#Address', '#District', '#State', '#Country', '#Pincode'];
      var notRequiredFields = ['#Reason'];

    } 
    
    else if ($(this).val() == "Rejected") {
      $('#Div1').hide();
      $('#Div2').show();

      var requiredFields = ['#Reason'];
      var notRequiredFields = ['#Name', '#Contact', '#Address', '#District', '#State', '#Country', '#Pincode'];
    } 
    
    else {
      $('#Div1').hide();
      $('#Div2').hide();

      var requiredFields = [];
      var notRequiredFields = ['#Name', '#Contact', '#Address', '#District', '#State', '#Country', '#Pincode', '#Reason'];
    }

    //
    requiredFields.forEach(fieldId => {
      $(fieldId).removeAttr('required').attr('required','');
    });

    //
    notRequiredFields.forEach(fieldId => {
      $(fieldId).attr('required','').removeAttr('required');
    });

  });
  $("#Review").trigger("change");

  // After Payment Form 
  $("#Payment_Reason").change(function() {
    if ($(this).val() == "Other") {
      $('#Div1').show();
      $('#Other_Reason').attr('required','');
      $('#Other_Reason').focus();
    } else {
      $('#Div1').hide();
    }
  });
  $("#Payment_Reason").trigger("change");

  // Cover-confirmation Form
  $("#Front_Cover").change(function() {
    if ($(this).val() == "Front_Rejected") {
      $('#Div1').show();
    $('#Front_Reject').attr('required','');
    } else {
      $('#Div1').hide();
    }
  });
  $("#Front_Cover").trigger("change");

  $("#Back_Cover").change(function() {
    if ($(this).val() == "Back_Rejected") {
      $('#Div2').show();
    $('#Back_Reject').attr('required','');
    } else {
      $('#Div2').hide();
    }
  });
  $("#Back_Cover").trigger("change");

  // Interior Confirmation
  $("#interior").change(function() {
    if ($(this).val() == "Interior Rejected") {
      $('#Div1').show();
    $('#Interior_Reject').attr('required','');
    } else {
      $('#Div1').hide();
    }
  });
  $("#Front_Cover").trigger("change");

  // Publishing Input Form
  $("#Language").change(function() {
    if ($(this).val() == "English") {
      $('#Div3').hide();
      var requiredFields = [];
      var notRequiredFields = ['#Title_eng'];
    } else {
      $('#Div3').show();
      var requiredFields = ['#Title_eng'];
      var notRequiredFields = [];
    }

    //
    requiredFields.forEach(fieldId => {
      $(fieldId).removeAttr('required').attr('required','');
    });

    //
    notRequiredFields.forEach(fieldId => {
      $(fieldId).attr('required','').removeAttr('required');
    });
  });
  $("#Language").trigger("change");
  
  $("#Cover_Image").change(function() {
    if ($(this).val() == "Pixa_Link") {
      $('#Div1').show();
      $('#Div2').hide();
      $('#Cover_Link').attr('required','');
      var requiredFields = ['#Cover_Link'];
      var notRequiredFields = ['#Uploaded_Cover'];
    } 
    
    else if ($(this).val() == "Author_Cover") {
      $('#Div1').hide();
      $('#Div2').show();
      var requiredFields = ['#Uploaded_Cover'];
      var notRequiredFields = ['#Cover_Link'];
    } 
    
    else {
      $('#Div1').hide();
      $('#Div2').hide();

      var requiredFields = [];
      var notRequiredFields = ['#Uploaded_Cover', '#Cover_Link'];
    }

    //
    requiredFields.forEach(fieldId => {
      $(fieldId).removeAttr('required').attr('required','');
    });

    //
    notRequiredFields.forEach(fieldId => {
      $(fieldId).attr('required','').removeAttr('required');
    });
  });
  $("#Cover_Image").trigger("change");

  // File Check
  function fileChk(fileid) {
    var ValidFileExtension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'pdf', 'PDF',  ];
    var file = $('#' + fileid).val();
    var ext = file.split('.').pop();
    if ($.inArray(ext.toLowerCase(), ValidFileExtension) == -1) {
        alert("Sorry! Allowed File  formats are '.jpg', '.png', '.jpeg', and '.pdf' file");
        $('#' + fileid).val('');
    }
    var uploadControl = document.getElementById(fileid);
    if (uploadControl.files[0].size > 3145728) {
        alert("Sorry! Max filesize < 3MB  is allowed.");
        $('#' + fileid).val('');
        return false;
    }
  }

  // File Check (PDF)
  function fileChkPdf(fileid) {
    var ValidFileExtension = ['pdf', 'PDF'];
    var file = $('#' + fileid).val();
    var ext = file.split('.').pop();
    if ($.inArray(ext.toLowerCase(), ValidFileExtension) == -1) {
        alert("Sorry! Allowed File formats is '.pdf'");
        $('#' + fileid).val('');
    }
    var uploadControl = document.getElementById(fileid);
    if (uploadControl.files[0].size > 10485760) {
        alert("Sorry! Max filesize < 10MB  is allowed.");
        $('#' + fileid).val('');
        return false;
    }
  }

  // File Check (Word Document)
  function fileChkWord(fileid) {
    var ValidFileExtension = ['doc', 'DOC', 'docx', 'DOCX'];
    var file = $('#' + fileid).val();
    var ext = file.split('.').pop();
    if ($.inArray(ext.toLowerCase(), ValidFileExtension) == -1) {
        alert("Sorry! Allowed File  formats are '.doc' and '.docx'");
        $('#' + fileid).val('');
    }
    var uploadControl = document.getElementById(fileid);
    if (uploadControl.files[0].size > 10485760) {
        alert("Sorry! Max filesize < 10MB  is allowed.");
        $('#' + fileid).val('');
        return false;
    }
  }

  //
  if (false) {  
    new PerformanceObserver((entryList) => {
      for (const entry of entryList.getEntries()) {
        console.log('LCP candidate:', entry.startTime, entry);
      }
    }).observe({type: 'largest-contentful-paint', buffered: true});
  }

  //
  $('#pageloader').hide().removeClass('d-none');
  
  //
  let thankyouPage = window.thankyouPage;
  $('body').on('submit', '#FormTools', function(e) {
    $('#pageloader').show();
    $("<input />").attr("type", "hidden").attr("name", "RedirectCallback").attr("value", thankyouPage).appendTo("#FormTools");
    return true;
  });

  // Free Consultation Modal
  window.freeConsultationModal = false;

  // Ready form after load
  $('#free-consultation-form').hide().removeClass('d-none');

  // Function to show Modal
  function toggleFreeConsultationModal(visibleBool) {
    //
    if (visibleBool) {
      //
      let showNextPopupOn = localStorage.getItem('showNextPopupOn');

      if (showNextPopupOn) {
        let now = Date.now();
        let diffFromNow = showNextPopupOn - now;
        
        //
        if (diffFromNow > 0) {
          return false;
        }
        
      }

      if (!window.freeConsultationModal) {
        //
        $('#focus-name').focus();
        $('#free-consultation-form').hide().fadeIn();
      }

    } else {
      if (window.freeConsultationModal) {
        $('#free-consultation-form').show().fadeOut();
      }
    }
    window.freeConsultationModal = visibleBool;
  }

  // Show Modal After 30 Sec
  setTimeout(function() {
    // Not allow from certain pages (By 30 seconds delay)
    if ( window.notAllowFooterModal != undefined && window.notAllowFooterModal ) {
      return;
    }
    toggleFreeConsultationModal(true);
  }, 1000 * 30);

  //Prevent Modal From Showing Again (if closed)
  $('body').on('click', '#close-free-consultation-form', function(ev) {
    ev.preventDefault();

    //Show Modal Next in 1 Hour (if closed)
    let hourAheadMs = 60 * 60 * 1 * 1000;
    let now = Date.now();
    localStorage.setItem('showNextPopupOn', now+hourAheadMs);

    //
    toggleFreeConsultationModal(false);
  });

  //
  function handler(entries, observer) {
    for (entry of entries) {
      if (entry.isIntersecting) {
        toggleFreeConsultationModal(true);
      }
    }
  }

  // Show Modal When Reached Footer
  // Not allow from certain pages (Intersection by Footer)
  if ( window.notAllowFooterModal != undefined && window.notAllowFooterModal ) {
    return;
  } else {
    let observer = new IntersectionObserver(handler);
    observer.observe(document.getElementById("footer"));
  }

});