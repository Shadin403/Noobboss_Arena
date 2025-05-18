function toggleMobileMenu() {
    const mobileMenu = document.getElementById("mobile-menu");
    if (mobileMenu) {
        mobileMenu.classList.toggle("active");
    }
}

function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("translate-x-[-100%]");
    sidebar.classList.toggle("translate-x-0");
}

function showEditUserForm(userId) {
    const form = document.getElementById("edit-user-form");
    if (form) {
        form.classList.remove("hidden");
        alert(`Editing user ID: ${userId}`);
    }
}

function hideEditUserForm() {
    const form = document.getElementById("edit-user-form");
    if (form) {
        form.classList.add("hidden");
    }
}

function deleteUser(userId) {
    if (confirm(`Are you sure you want to delete user ID ${userId}?`)) {
        alert(`User ID ${userId} deleted`);
    }
}

function approveTransaction(transactionId) {
    alert(`Transaction ID ${transactionId} approved`);
}

function rejectTransaction(transactionId) {
    alert(`Transaction ID ${transactionId} rejected`);
}

function showAddTournamentForm() {
    const form = document.getElementById("add-tournament-form");
    if (form) {
        form.classList.remove("hidden");
    }
}

function hideAddTournamentForm() {
    const form = document.getElementById("add-tournament-form");
    if (form) {
        form.classList.add("hidden");
    }
}

function showEditTournamentForm(tournamentId) {
    const form = document.getElementById("edit-tournament-form");
    if (form) {
        form.classList.remove("hidden");
        alert(`Editing tournament ID: ${tournamentId}`);
    }
}

function hideEditTournamentForm() {
    const form = document.getElementById("edit-tournament-form");
    if (form) {
        form.classList.add("hidden");
    }
}

function deleteTournament(tournamentId) {
    if (
        confirm(
            `Are you sure you want to delete tournament ID ${tournamentId}?`
        )
    ) {
        alert(`Tournament ID ${tournamentId} deleted`);
    }
}

function joinTournament(type) {
    alert(`Joined ${type} Tournament!`);
    window.location.href = "live.html";
}

function initAppScripts() {
    // Main site menu
    const hamburger = document.getElementById("hamburger");
    if (hamburger) {
        hamburger.addEventListener("click", toggleMobileMenu);
    }

    // Admin panel sidebar
    const sidebarToggle = document.getElementById("sidebar-toggle");
    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", toggleSidebar);
    }

    // Animate elements
    document.querySelectorAll(".animate-slide-in").forEach((el, index) => {
        setTimeout(() => {
            el.classList.add("active");
        }, index * 100);
    });

    // Main site forms
    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
        loginForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Login successful!");
            window.location.href = "profile.html";
        });
    }

    const signupForm = document.getElementById("signupForm");
    if (signupForm) {
        signupForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Signup successful! Please login.");
            window.location.href = "login.html";
        });
    }

    const rechargeForm = document.getElementById("rechargeForm");
    if (rechargeForm) {
        rechargeForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const amount = document.getElementById("rechargeAmount").value;
            const transactionId =
                document.getElementById("transactionId").value;
            const receiptFile = document.getElementById("receiptFile").files[0];
            const fileName = receiptFile
                ? receiptFile.name
                : "No file uploaded";
            alert(
                `Recharge submitted!\nAmount: $${amount}\nTransaction ID: ${transactionId}\nReceipt: ${fileName}`
            );
        });
    }

    const editProfileForm = document.getElementById("editProfileForm");
    if (editProfileForm) {
        editProfileForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Profile updated successfully!");
            window.location.href = "profile.html";
        });
    }

    // Admin forms
    const editUserForm = document.getElementById("editUserForm");
    if (editUserForm) {
        editUserForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("User updated successfully!");
            hideEditUserForm();
        });
    }

    const addTournamentForm = document.getElementById("addTournamentForm");
    if (addTournamentForm) {
        addTournamentForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Tournament added successfully!");
            hideAddTournamentForm();
        });
    }

    const editTournamentForm = document.getElementById("editTournamentForm");
    if (editTournamentForm) {
        editTournamentForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Tournament updated successfully!");
            hideEditTournamentForm();
        });
    }
}

// Run once on page load
document.addEventListener("DOMContentLoaded", initAppScripts);

// document.addEventListener("livewire:navigated", initAppScripts);
// Livewire রেডি হলে হুক অ্যাড করো
document.addEventListener("livewire:initialized", () => {
    Livewire.hook("element.init", ({ el, component }) => {
        initAppScripts();
    });
});
