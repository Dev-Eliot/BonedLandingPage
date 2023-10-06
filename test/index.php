<style>
    /* Basic styles for the header */
.sticky-header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transition: background-color 0.3s ease-in-out;
}

/* Style the content to create space for the sticky header */
body {
    margin-top: 80px; /* Adjust this value to match the header height */
}

/* Change header background color on scroll */
.sticky-header.scrolled {
    background-color: #555;
}

</style>

<header class="sticky-header">
        <h1>My Sticky Header</h1>
    </header>

    <!-- Content goes here -->

    <script>
        // JavaScript to add a 'scrolled' class to the header when the user scrolls down
const header = document.querySelector('.sticky-header');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

</script>