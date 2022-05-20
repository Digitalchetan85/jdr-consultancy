function sendContact() {
    var valid;
    valid = validateContact();
  
    // $("#mail-status").html(
    //   '<div class="d-flex justify-content-center m-2"><div class="spinner-border text-success text-center" role="status"><span class="visually-hidden">Loading...</span></div></div><span class="alert alert-danger">Fill and submit again</span>'
    // );
  
    if (valid) {
      jQuery.ajax({
        url: "mail.php",
        type: "POST",
        data:
          "name=" +
          $("#name").val() +
          "&email=" +
          $("#email").val() +
          "&phone=" +
          $("#phone").val() +
          "&selectvisa=" +
          $("#selectvisa").val() +
          "&message=" +
          $("#message").val(),
  
        success: function (data) {
          $("#mail-status").html(data);
          dataclear();
        },
        error: function (data) {
          $("#mail-status").html(data);
        },
      });
    }
  }
  
  function dataclear() {
    $("#name").val("");
    $("#email").val("");
    $("#phone").val("");
    $("#message").val("");
  }
  
  function validateContact() {
    var valid = true;
    //alert("HI");
  
    if (!$("#name").val()) {
      $("#name-info").html("Enter Your Name");
      $("#name").css("border-color", "#dc3545");
      valid = false;
    }
    if (!$("#email").val()) {
      $("#email-info").html("Email ID required");
      $("#email").css("border-color", "#dc3545");
      valid = false;
    }
    if (
      !$("#email")
        .val()
        .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    ) {
      $("#email-info").html("Please enter valid Email ID.");
      $("#email").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#phone").val()) {
      $("#phone-info").html("Provide Contact No.");
      $("#phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (
      !$("#phone")
        .val()
        .match(/^[0-9]{10}$/)
    ) {
      $("#phone-info").html("Provide valid contact No.");
      $("#phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#message").val()) {
      $("#message-info").html("Enter Your message");
      $("#message").css("border-color", "#dc3545");
      valid = false;
    }
  
    return valid;
  }


  function sendPopContact() {
    var valid;
    valid = validatePopContact();
  
    // $("#mail-status").html(
    //   '<div class="d-flex justify-content-center m-2"><div class="spinner-border text-success text-center" role="status"><span class="visually-hidden">Loading...</span></div></div><span class="alert alert-danger">Fill and submit again</span>'
    // );
  
    if (valid) {
      jQuery.ajax({
        url: "pop-mail.php",
        type: "POST",
        data:
          "pop-name=" +
          $("#pop-name").val() +
          "&pop-email=" +
          $("#pop-email").val() +
          "&pop-phone=" +
          $("#pop-phone").val() +
          "&pop-selectvisa=" +
          $("#pop-selectvisa").val() +
          "&pop-message=" +
          $("#pop-message").val(),
  
        success: function (data) {
          $("#pop-mail-status").html(data);
          dataclear();
        },
        error: function (data) {
          $("#pop-mail-status").html(data);
        },
      });
    }
  }
  
  function dataclear() {
    $("#pop-name").val("");
    $("#pop-email").val("");
    $("#pop-phone").val("");
    $("#pop-message").val("");
  }
  
  function validatePopContact() {
    var valid = true;
    //alert("HI");
  
    if (!$("#pop-name").val()) {
      $("#pop-name-info").html("Enter Your Name");
      $("#pop-name").css("border-color", "#dc3545");
      valid = false;
    }
    if (!$("#pop-email").val()) {
      $("#pop-email-info").html("Email ID required");
      $("#pop-email").css("border-color", "#dc3545");
      valid = false;
    }
    if (
      !$("#pop-email")
        .val()
        .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    ) {
      $("#pop-email-info").html("Please enter valid Email ID.");
      $("#pop-email").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#pop-phone").val()) {
      $("#pop-phone-info").html("Provide Contact No.");
      $("#pop-phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (
      !$("#pop-phone")
        .val()
        .match(/^[0-9]{10}$/)
    ) {
      $("#pop-phone-info").html("Provide valid contact No.");
      $("#pop-phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#pop-message").val()) {
      $("#pop-message-info").html("Enter Your message");
      $("#pop-message").css("border-color", "#dc3545");
      valid = false;
    }
  
    return valid;
  }


  function sendStudyUsaContact() {
    var valid;
    valid = validatestusyContact();
  
    // $("#mail-status").html(
    //   '<div class="d-flex justify-content-center m-2"><div class="spinner-border text-success text-center" role="status"><span class="visually-hidden">Loading...</span></div></div><span class="alert alert-danger">Fill and submit again</span>'
    // );
  
    if (valid) {
      jQuery.ajax({
        url: "study-usa.php",
        type: "POST",
        data:
          "study-usa-name=" +
          $("#study-usa-name").val() +
          "&study-usa-email=" +
          $("#study-usa-email").val() +
          "&study-usa-phone=" +
          $("#study-usa-phone").val() +
          "&study-usa-selectvisa=" +
          $("#study-usa-selectvisa").val() +
          "&study-usa-message=" +
          $("#study-usa-message").val(),
  
        success: function (data) {
          $("#study-usa-mail-status").html(data);
          dataclear();
        },
        error: function (data) {
          $("#study-usa-mail-status").html(data);
        },
      });
    }
  }
  
  function dataclear() {
    $("#study-usa-name").val("");
    $("#study-usa-email").val("");
    $("#study-usa-phone").val("");
    $("#study-usa-message").val("");
  }
  
  function validatestusyContact() {
    var valid = true;
    //alert("HI");
  
    if (!$("#study-usa-name").val()) {
      $("#study-usa-name-info").html("Enter Your Name");
      $("#study-usa-name").css("border-color", "#dc3545");
      valid = false;
    }
    if (!$("#study-usa-email").val()) {
      $("#study-usa-email-info").html("Email ID required");
      $("#study-usa-email").css("border-color", "#dc3545");
      valid = false;
    }
    if (
      !$("#study-usa-email")
        .val()
        .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    ) {
      $("#study-usa-email-info").html("Please enter valid Email ID.");
      $("#study-usa-email").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#study-usa-phone").val()) {
      $("#study-usa-phone-info").html("Provide Contact No.");
      $("#study-usa-phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (
      !$("#study-usa-phone")
        .val()
        .match(/^[0-9]{10}$/)
    ) {
      $("#study-usa-phone-info").html("Provide valid contact No.");
      $("#study-usa-phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#study-usa-message").val()) {
      $("#study-usa-message-info").html("Enter Your message");
      $("#study-usa-message").css("border-color", "#dc3545");
      valid = false;
    }
  
    return valid;
  }


  function sendContactMail() {
    var valid;
    valid = validateContactMail();
  
    // $("#mail-status").html(
    //   '<div class="d-flex justify-content-center m-2"><div class="spinner-border text-success text-center" role="status"><span class="visually-hidden">Loading...</span></div></div><span class="alert alert-danger">Fill and submit again</span>'
    // );
  
    if (valid) {
      jQuery.ajax({
        url: "contact-mail.php",
        type: "POST",
        data:
          "contact-name=" +
          $("#contact-name").val() +
          "&contact-email=" +
          $("#contact-email").val() +
          "&contact-phone=" +
          $("#contact-phone").val() +
          "&contact-subject=" +
          $("#contact-subject").val() +
          "&contact-message=" +
          $("#contact-message").val(),
  
        success: function (data) {
          $("#contact-mail-status").html(data);
          dataclear();
        },
        error: function (data) {
          $("#contact-mail-status").html(data);
        },
      });
    }
  }
  
  function dataclear() {
    $("#contact-name").val("");
    $("#contact-email").val("");
    $("#contact-phone").val("");
    $("#contact-message").val("");
    $("#contact-subject").val("");
  }
  
  function validateContactMail() {
    var valid = true;
    //alert("HI");
  
    if (!$("#contact-name").val()) {
      $("#contact-name-info").html("Enter Your Name");
      $("#contact-name").css("border-color", "#dc3545");
      valid = false;
    }
    if (!$("#contact-email").val()) {
      $("#contact-email-info").html("Email ID required");
      $("#contact-email").css("border-color", "#dc3545");
      valid = false;
    }
    if (
      !$("#contact-email")
        .val()
        .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    ) {
      $("#contact-email-info").html("Please enter valid Email ID.");
      $("#contact-email").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#contact-phone").val()) {
      $("#contact-phone-info").html("Provide Contact No.");
      $("#contact-phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (
      !$("#contact-phone")
        .val()
        .match(/^[0-9]{10}$/)
    ) {
      $("#contact-phone-info").html("Provide valid contact No.");
      $("#contact-phone").css("border-color", "#dc3545");
      valid = false;
    }
  
    if (!$("#contact-message").val()) {
      $("#contact-message-info").html("Enter Your message");
      $("#contact-message").css("border-color", "#dc3545");
      valid = false;
    }

    if (!$("#contact-subject").val()) {
      $("#contact-subject-info").html("Enter Your subject");
      $("#contact-subject").css("border-color", "#dc3545");
      valid = false;
    }
  
    return valid;
  }