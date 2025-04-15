//#NOTE: VALIDATE FORM ĐĂNG NHẬP
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form-login");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const username = document.getElementById("username");
    const email = document.getElementById("mail");
    const password = document.getElementById("password");

    // Xóa tất cả lỗi cũ
    document
      .querySelectorAll("span.error-message")
      .forEach((el) => el.remove());

    const errors = {};

    // Validate username
    if (username.value.trim() === "") {
      errors.username = "Vui lòng nhập tên người dùng";
    }

    // Validate email
    if (email.value.trim() === "") {
      errors.email = "Vui lòng nhập email";
    } else {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email.value)) {
        errors.email = "Email không hợp lệ";
      }
    }

    // Validate mật khẩu mạnh
    const strongPasswordRegex =
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;

    if (password.value.trim() === "") {
      errors.password = "Vui lòng nhập mật khẩu";
    } else if (!strongPasswordRegex.test(password.value)) {
      errors.password =
        "Mật khẩu cần ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt";
    }

    // Hiển thị lỗi (nếu có)
    let hasError = false;

    if (errors.username) {
      showError(username, errors.username);
      username.focus();
      hasError = true;
    }
    if (errors.email) {
      showError(email, errors.email);
      if (!hasError) {
        email.focus();
        hasError = true;
      }
    }
    if (errors.password) {
      showError(password, errors.password);
      if (!hasError) {
        password.focus();
        hasError = true;
      }
    }

    // Nếu không có lỗi thì submit form
    if (!hasError) {
      form.submit();
    }
  });

  // ✅ Hàm showError: chèn lỗi sau div.input-group chứa input tương ứng
  const showError = (element, message) => {
    const inputGroup = element.closest(".input-group");

    // Kiểm tra đã có span lỗi chưa
    let errorSpan = inputGroup.nextElementSibling;
    if (errorSpan && errorSpan.classList.contains("error-message")) {
      errorSpan.textContent = message;
    } else {
      // Tạo mới nếu chưa có
      errorSpan = document.createElement("span");
      errorSpan.classList.add("error-message");
      errorSpan.style.color = "red";
      errorSpan.style.fontSize = "12px";
      errorSpan.textContent = message;

      // Chèn ngay sau input-group
      inputGroup.parentNode.insertBefore(errorSpan, inputGroup.nextSibling);
    }
  };
});

//#NOTE: VALIDATE FORM ĐĂNG KÝ
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form-signup");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("username");
    const email = document.getElementById("mail");
    const password = document.getElementById("password");
    const cfPassword = document.getElementById("cfPassword");

    // Xóa lỗi cũ
    document
      .querySelectorAll("span.error-message")
      .forEach((el) => el.remove());

    const errors = {};

    // Validate
    if (username.value.trim() === "") {
      errors.username = "Vui lòng nhập tên người dùng";
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.value.trim() === "") {
      errors.email = "Vui lòng nhập email";
    } else if (!emailRegex.test(email.value)) {
      errors.email = "Email không hợp lệ";
    }

    const strongPasswordRegex =
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;

    if (password.value.trim() === "") {
      errors.password = "Vui lòng nhập mật khẩu";
    } else if (!strongPasswordRegex.test(password.value)) {
      errors.password =
        "Mật khẩu cần ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt";
    }

    if (cfPassword.value.trim() === "") {
      errors.cfPassword = "Vui lòng nhập lại mật khẩu";
    } else if (password.value !== cfPassword.value) {
      errors.cfPassword = "Mật khẩu không khớp";
    }

    // Hiển thị lỗi
    let hasError = false;

    if (errors.username) {
      showError(username, errors.username);
      username.focus();
      hasError = true;
    }
    if (errors.email) {
      showError(email, errors.email);
      if (!hasError) {
        email.focus();
        hasError = true;
      }
    }
    if (errors.password) {
      showError(password, errors.password);
      if (!hasError) {
        password.focus();
        hasError = true;
      }
    }
    if (errors.cfPassword) {
      showError(cfPassword, errors.cfPassword);
      if (!hasError) {
        cfPassword.focus();
        hasError = true;
      }
    }
if (!hasError) {
//   Swal.fire({
//     title: "Đăng ký thành công!",
//     icon: "success",
//     confirmButtonText: "OK"
//   }).then((result) => {
//     if (result.isConfirmed) {
//       form.submit(); // Submit thật sự sau khi người dùng nhấn OK
//     }
    //   });
     form.submit(); // Submit thật sự sau khi người dùng nhấn OK

}

  });

  // ✅ Hàm showError: chèn lỗi sau div.input-group chứa input tương ứng
  const showError = (element, message) => {
    // Tìm div.input-group bao quanh
    const inputGroup = element.closest(".input-group");

    // Kiểm tra đã có span.error-message chưa
    let errorSpan = inputGroup.nextElementSibling;
    if (errorSpan && errorSpan.classList.contains("error-message")) {
      errorSpan.textContent = message;
    } else {
      // Tạo mới
      errorSpan = document.createElement("span");
      errorSpan.classList.add("error-message");
      errorSpan.style.color = "red";
      errorSpan.style.fontSize = "12px";
      errorSpan.textContent = message;

      // Chèn sau div.input-group
      inputGroup.parentNode.insertBefore(errorSpan, inputGroup.nextSibling);
    }
  };
});
