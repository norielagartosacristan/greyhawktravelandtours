<div id="results"></div>

<script>
async function fetchFlights() {
    const params = new URLSearchParams(window.location.search);
    const from = params.get('from');
    const to = params.get('to');
    const depart = params.get('depart');
    // ... (other parameters)

    // Amadeus token and flight search API setup
    const tokenUrl = 'https://test.api.amadeus.com/v1/security/oauth2/token';
    const flightSearchUrl = 'https://test.api.amadeus.com/v2/shopping/flight-offers';
    
    // Fetch access token
    const tokenResponse = await fetch(tokenUrl, { /* token request code */ });
    const tokenData = await tokenResponse.json();
    const accessToken = tokenData.access_token;

    // Build flight search query
    const queryParams = new URLSearchParams({
        originLocationCode: from,
        destinationLocationCode: to,
        departureDate: depart,
        // ... (other parameters as needed)
    });

    const flightResponse = await fetch(`${flightSearchUrl}?${queryParams.toString()}`, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${accessToken}`
        }
    });
    const flightData = await flightResponse.json();
    displayFlights(flightData);
}

function displayFlights(flightData) {
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = ''; // Clear previous results

    flightData.data.forEach(offer => {
        const flightInfo = document.createElement('div');
        flightInfo.classList.add('flight-offer');
        flightInfo.innerHTML = `
            <p>Price: ${offer.price.total} USD</p>
            <p>Departure: ${offer.itineraries[0].segments[0].departure.iataCode}</p>
            <p>Arrival: ${offer.itineraries[0].segments[0].arrival.iataCode}</p>
            <hr>
        `;
        resultsDiv.appendChild(flightInfo);
    });
}

// Call fetchFlights when the page loads
window.onload = fetchFlights;
</script>
