// Toggle Mobile Menu
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('active');
}

// Hamburger Menu Event Listener
document.getElementById('hamburger').addEventListener('click', toggleMobileMenu);

// Animate elements on page load
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.animate-slide-in').forEach((el, index) => {
        setTimeout(() => {
            el.classList.add('active');
        }, index * 100);
    });
});

// Form Submissions
const loginForm = document.getElementById('loginForm');
if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Login successful!');
        window.location.href = 'profile.html';
    });
}

const signupForm = document.getElementById('signupForm');
if (signupForm) {
    signupForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Signup successful! Please login.');
        window.location.href = 'login.html';
    });
}

const rechargeForm = document.getElementById('rechargeForm');
if (rechargeForm) {
    rechargeForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const amount = document.getElementById('rechargeAmount').value;
        alert(`Recharged $${amount} successfully!`);
    });
}

const editProfileForm = document.getElementById('editProfileForm');
if (editProfileForm) {
    editProfileForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Profile updated successfully!');
        window.location.href = 'profile.html';
    });
}

// Join Tournament
function joinTournament(type) {
    alert(`Joined ${type} Tournament!`);
    window.location.href = 'live.html';
}

// Progress bar function
function updateProgressBar(current, total) {
    const progressBars = document.querySelectorAll('.progress-bar');
    progressBars.forEach(progressBar => {
        if (current <= total) {
            const percentage = (current / total) * 100;
            progressBar.style.width = `${percentage}%`;
        } else {
            console.log("Current value exceeds total!");
            progressBar.style.width = '100%'; // Cap at 100% if invalid
        }
    });
}

// Initialize progress bar on page load based on initial joinedCount values
function initializeProgressBar() {
    const joinedElements = document.querySelectorAll('.joined');
    joinedElements.forEach(joinedElement => {
        const [current, total] = joinedElement.textContent.split('/').map(Number);
        updateProgressBar(current, total);
    });
}

window.onload = () => {
    initializeProgressBar();
};