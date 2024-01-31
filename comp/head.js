/*
//for header
document.addEventListener('DOMContentLoaded', function () {
  // Load Header
  fetch('/comp/header.html')
      .then(response => {
          if (!response.ok) {
              throw new Error(`Network response was not ok (${response.status} ${response.statusText})`);
          }
          return response.text();
      })
      .then(html => {
          document.getElementById('header-container').innerHTML = html;
      })
      .catch(error => {
          // Handle errors during the fetch
          console.error('Error fetching header:', error.message);
      });
});
*/
