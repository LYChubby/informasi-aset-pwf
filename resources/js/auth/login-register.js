// Import SweetAlert2 properly
import Swal from "sweetalert2";
window.Swal = Swal;

document.addEventListener("DOMContentLoaded", function () {
    const signupForm = document.getElementById("signup-form");
    const loginForm = document.getElementById("login-form");

    if (signupForm) {
        signupForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const data = {
                name: document.getElementById("signup-username").value,
                email: document.getElementById("signup-email").value,
                password: document.getElementById("signup-password").value,
                password_confirmation:
                    document.getElementById("password-confirm").value,
                _token: document.querySelector('meta[name="csrf-token"]')
                    .content,
            };

            fetch("/register", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                },
                body: JSON.stringify(data),
            })
                .then(async (response) => {
                    const contentType = response.headers.get("content-type");
                    if (
                        contentType &&
                        contentType.includes("application/json")
                    ) {
                        return response.json();
                    }
                    throw new Error("Invalid response format");
                })
                .then((result) => {
                    if (result.success) {
                        Swal.fire({
                            title: "Registration Successful!",
                            text: "You have been registered and logged in",
                            icon: "success",
                        }).then(() => {
                            window.location.href =
                                result.redirect || "/dashboard";
                        });
                    } else {
                        throw new Error(result.message);
                    }
                })
                .catch((error) => {
                    Swal.fire({
                        title: "Registration Failed",
                        text:
                            error.message ||
                            "Please check your input and try again",
                        icon: "error",
                    });

                    // Tampilkan error validasi jika ada
                    if (error.errors) {
                        for (const [field, messages] of Object.entries(
                            error.errors
                        )) {
                            const input = document.getElementById(
                                `signup-${field}`
                            );
                            if (input) {
                                input.style.borderColor = "#f56565";
                                const errorElement =
                                    document.createElement("p");
                                errorElement.className =
                                    "text-red-500 text-xs mt-1";
                                errorElement.textContent = messages[0];
                                input.parentNode.appendChild(errorElement);
                            }
                        }
                    }
                });
        });
    }

    if (loginForm) {
        loginForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const data = {
                email: document.getElementById("login-email").value,
                password: document.getElementById("login-password").value,
                _token: document.querySelector('meta[name="csrf-token"]')
                    .content,
            };

            fetch("/login", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                },
                body: JSON.stringify(data),
            })
                .then(async (response) => {
                    const contentType = response.headers.get("content-type");
                    if (
                        contentType &&
                        contentType.includes("application/json")
                    ) {
                        return response.json();
                    }
                    throw new Error("Invalid response format");
                })
                .then((result) => {
                    if (result.success) {
                        Swal.fire({
                            title: "Welcome back!",
                            icon: "success",
                        }).then(() => {
                            window.location.href =
                                result.redirect || "/dashboard";
                        });
                    } else {
                        throw new Error(result.message);
                    }
                })
                .catch((error) => {
                    Swal.fire({
                        title: "Login Failed",
                        text: error.message || "Email atau Password Salah",
                        icon: "error",
                    });
                });
        });
    }

    // Panel toggle functionality
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");

    if (signUpButton && signInButton && container) {
        signUpButton.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });
    }
});
