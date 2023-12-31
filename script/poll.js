document.getElementById('voteForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission behavior

    const clickedButton = event.submitter.id; // Get the ID of the clicked button

    // Disable both buttons after one is clicked
    document.getElementById('yesBtn').disabled = true;
    document.getElementById('noBtn').disabled = true;
    document.getElementById('yesBtn').style.backgroundColor = '#cccccc';
    document.getElementById('noBtn').style.backgroundColor = '#cccccc';

    const url = '../php/send_data.php'; // Replace with your server endpoint

    const formData = new FormData(); // Create FormData object to send data
    formData.append('ip_address', ''); // Function to get user's IP address
    formData.append('vote', clickedButton === 'yesBtn' ? 'yes' : 'no'); // Vote type based on the clicked button

    fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Check the response message
            if (data.message === "Invalid vote") {
                // Display the message in your HTML
                document.getElementById('voteMessage').innerText = data.message;
                document.getElementById('voteMessage').style.color = 'red';
                fetchVotesFromServer();
            } else {

                document.getElementById('voteMessage').innerText = data.message;
                document.getElementById('voteMessage').style.color = 'green';
                fetchVotesFromServer();
                // Handle other responses or actions here
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});

function fetchVotesFromServer() {
    // alert("here")
    fetch('../php/getVotes.php') // Replace with your server endpoint
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // alert("here")
            return response.json();
        })
        .then(data => {
            // console.log(data.yesVotes, data.noVotes);
            let yesVotes = data.yesVotes || 0;
            let noVotes = data.noVotes || 0;

            updateVoteCounts(parseInt(yesVotes), parseInt(noVotes));

        })
        .catch(error => {
            console.error('There was a problem fetching the votes:', error);
            // Handle errors or inform the user of the failure
        });
}



function updateVoteCounts(yesVotes, noVotes) {
    // console.log(yesVotes, noVotes);
    let totalVotes = yesVotes + noVotes;
    let yesPercentage = totalVotes !== 0 ? (yesVotes / totalVotes) * 100 : 0;
    let noPercentage = totalVotes !== 0 ? (noVotes / totalVotes) * 100 : 0;
    // console.log(yesVotes, noVotes, totalVotes)
    const yesBar = document.querySelector('.bar[data-choice="1"]');
    const noBar = document.querySelector('.bar[data-choice="2"]');

    yesBar.style.width = `${yesPercentage}%`;
    noBar.style.width = `${noPercentage}%`;
    console.log(yesPercentage, noPercentage, "here also");

    document.getElementById('label1').innerHTML = `<span>${yesPercentage.toFixed(2)}%</span>`;
    document.getElementById('label2').innerHTML = `<span>${noPercentage.toFixed(2)}%</span>`;
    document.getElementById("total-votes").innerHTML = `<span>${totalVotes}</span>`;
}


// Initial fetch to get and update vote counts when the page loads
fetchVotesFromServer();