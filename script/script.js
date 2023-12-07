const mediaList = [
    { type: 'video', url: '../media/v2.mp4', duration: 12000 }, // 2 minutes in milliseconds
    { type: 'image', url: '../media/i1.jpg', duration: 4000 }, // 40 seconds in milliseconds
    { type: 'video', url: '../media/v1.mp4', duration: 12000 },
    { type: 'image', url: '../media/i2.jpg', duration: 4000 },
    { type: 'video', url: '../media/v3.mp4', duration: 12000 },
    { type: 'image', url: '../media/i3.jpg', duration: 4000 }
    // Add more media objects as needed
];

let currentIndex = 0;
const mediaContent = document.querySelector('.media-content');

function showMedia() {
    const currentMedia = mediaList[currentIndex];
    if (currentMedia.type === 'video') {
        mediaContent.innerHTML = `<video width="681" height="383" controls autoplay><source src="${currentMedia.url}" type="video/mp4"></video>`;
        setTimeout(showMedia, currentMedia.duration); // Set timeout for video duration
    } else if (currentMedia.type === 'image') {
        mediaContent.innerHTML = `<img src="${currentMedia.url}" alt="Achievement Image" style="width: 681px; height: 383px;">`;
        setTimeout(showMedia, currentMedia.duration); // Set timeout for image duration
    }
    currentIndex = (currentIndex + 1) % mediaList.length; // Loop through the array
}

// Initially load the first media
showMedia();







// document.getElementById('voteForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent default form submission behavior

//     const clickedButton = event.submitter.id; // Get the ID of the clicked button

//     // Disable both buttons after one is clicked
//     document.getElementById('yesBtn').disabled = true;
//     document.getElementById('noBtn').disabled = true;
//     document.getElementById('yesBtn').style.backgroundColor = '#cccccc';
//     document.getElementById('noBtn').style.backgroundColor = '#cccccc';

//     const url = '../php/send_data.php'; // Replace with your server endpoint

//     const formData = new FormData(); // Create FormData object to send data
//     formData.append('ip_address', "111111"); // Function to get user's IP address
//     formData.append('vote', clickedButton === 'yesBtn' ? 'yes' : 'no'); // Vote type based on the clicked button

//     fetch(url, {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             console.log('Vote sent successfully!');
//             fetchVotesFromServer(); // Fetch updated votes after sending new data
//         })
//         .catch(error => {
//             console.error('There was a problem sending the vote:', error);
//             // Handle errors or inform the user of the failure
//         });
// });



// function fetchVotesFromServer() {
//     fetch('../php/getVotes.php') // Replace with your server endpoint
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             return response.json();
//         })
//         .then(data => {
//             let yesVotes = data.yesVotes || 0;
//             let noVotes = data.noVotes || 0;

//             updateVoteCounts(yesVotes, noVotes);
//         })
//         .catch(error => {
//             console.error('There was a problem fetching the votes:', error);
//             // Handle errors or inform the user of the failure
//         });
// }


// function updateVoteCounts(yesVotes, noVotes) {
//     let totalVotes = yesVotes + noVotes;
//     let yesPercentage = totalVotes !== 0 ? (yesVotes / totalVotes) * 100 : 0;
//     let noPercentage = totalVotes !== 0 ? (noVotes / totalVotes) * 100 : 0;

//     document.getElementById('yVotes').innerHTML = `Yes: <span>${yesVotes}</span>`;
//     document.getElementById('nVotes').innerHTML = `No: <span>${noVotes}</span>`;

//     document.getElementById('yesProgress').value = yesPercentage;
//     document.getElementById('noProgress').value = noPercentage;
// }

// // Initial fetch to get and update vote counts when the page loads
// fetchVotesFromServer();