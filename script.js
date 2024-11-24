// Slideshow Functionality
let slideIndex = 0;
const slides = document.querySelectorAll(".slide");
const slideshowWrapper = document.querySelector(".slideshow-wrapper");

// Clone the first slide to create a loop effect
if (slides.length > 0) {
    const firstClone = slides[0].cloneNode(true);
    slideshowWrapper.appendChild(firstClone);
}

function showSlides() {
    slideIndex++;
    slideshowWrapper.style.transition = "transform 0.5s ease";
    slideshowWrapper.style.transform = `translateX(${-slideIndex * 100}%)`;

    if (slideIndex >= slides.length) {
        setTimeout(() => {
            slideshowWrapper.style.transition = "none";
            slideshowWrapper.style.transform = `translateX(0)`;
            slideIndex = 0;
        }, 500); // Matches the transition duration
    }

    setTimeout(showSlides, 3000); // Change slide every 3 seconds
}
if (slides.length > 0) {
    showSlides();
}

// Scroll Visibility Animation
window.addEventListener('scroll', function () {
    const content = document.getElementById('scrollingContent');
    if (content) {
        const contentPosition = content.getBoundingClientRect().top;
        const screenPosition = window.innerHeight;

        if (contentPosition < screenPosition) {
            content.classList.add('visible');
        }
    }
});

// Menu Toggle for Mobile View
const menuIcon = document.getElementById('menu-icon');
const navLinks = document.querySelector('.nav-links');

if (menuIcon && navLinks) {
    menuIcon.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// Search Bar Functionality
document.querySelector('.search-bar button').addEventListener('click', function () {
    const searchQuery = document.querySelector('#search').value.toLowerCase();
    const results = document.querySelectorAll('.searchable'); // Add "searchable" class to target elements

    if (searchQuery.trim()) {
        results.forEach((result) => {
            if (result.textContent.toLowerCase().includes(searchQuery)) {
                result.style.backgroundColor = 'yellow'; // Highlight result
            } else {
                result.style.backgroundColor = ''; // Reset highlight
            }
        });
        alert(`Searching for: ${searchQuery}`);
    } else {
        alert('Please enter a search term!');
    }
});

// Discussion and Threads System
document.addEventListener('DOMContentLoaded', function () {
    const discussionForm = document.getElementById('discussion-form');
    const threadForm = document.getElementById('thread-form');
    const threadList = document.querySelector('.thread-list');
    const discussionList = document.querySelector('.discussion-list');

    // Function to fetch and display threads
    function loadThreads() {
        fetch('fetch_threads.php')
            .then((response) => response.json())
            .then((threads) => {
                threadList.innerHTML = '';
                threads.forEach((thread) => {
                    const threadDiv = document.createElement('div');
                    threadDiv.classList.add('thread');
                    threadDiv.innerHTML = `
                        <h4>${thread.username}</h4>
                        <p>${thread.content}</p>
                        <small>${new Date(thread.created_at).toLocaleString()}</small>
                    `;
                    threadList.appendChild(threadDiv);
                });
            })
            .catch((error) => console.error('Error loading threads:', error));
    }

    // Function to fetch and display discussions
    function loadDiscussions() {
        fetch('fetch_threads.php')
            .then((response) => response.json())
            .then((data) => {
                discussionList.innerHTML = ''; // Clear previous comments
                data.forEach((comment) => {
                    const commentDiv = document.createElement('div');
                    commentDiv.classList.add('discussion-message');
                    commentDiv.innerHTML = `
                        <h4>${comment.username}</h4>
                        <p>${comment.message}</p>
                        <span>${new Date(comment.created_at).toLocaleString()}</span>
                    `;
                    discussionList.appendChild(commentDiv);
                });
            })
            .catch((error) => console.error('Error fetching discussions:', error));
    }

    // Submit thread form
    if (threadForm) {
        threadForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const content = document.getElementById('new-thread-content').value.trim();

            if (!content) {
                alert('Please enter content!');
                return;
            }

            fetch('post_thread.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `content=${encodeURIComponent(content)}`,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        threadForm.reset(); // Clear the form
                        loadThreads(); // Reload threads
                    } else {
                        alert(data.message || 'An error occurred.');
                    }
                })
                .catch((error) => console.error('Error posting thread:', error));
        });
    }

    // Submit discussion form
    if (discussionForm) {
        discussionForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData();
            const messageInput = document.getElementById('message').value;

            if (!messageInput.trim()) {
                alert('Please write a message before posting.');
                return;
            }

            formData.append('message', messageInput);

            fetch('post_thread.php', {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        document.getElementById('message').value = ''; // Clear input
                        loadDiscussions(); // Reload discussions
                    } else {
                        alert(data.message);
                    }
                })
                .catch((error) => console.error('Error posting comment:', error));
        });
    }

    // Initial load of threads and discussions
    loadThreads();
    loadDiscussions();

    // Refresh threads and discussions periodically
    setInterval(loadThreads, 10000); // Refresh every 10 seconds
    setInterval(loadDiscussions, 10000); // Refresh every 10 seconds
});
