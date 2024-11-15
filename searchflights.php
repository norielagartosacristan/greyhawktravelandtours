<script>
    document.getElementById("flight-form").addEventListener("submit", async function (e) {
        e.preventDefault();
        
        const origin = document.getElementById("origin").value;
        const destination = document.getElementById("depart").value;
        const departureDate = document.getElementById("departure-date").value;
        const returnDate = document.getElementById("return-date").value || undefined;
        const adults = document.getElementById("adults").value;
        const children = document.getElementById("children").value;
        const infants = document.getElementById("infants").value;
        const travelClass = document.getElementById("cabin").value;
        const directFlights = document.getElementById("directFlights").checked;
        
        // Authorization (you might already have a token saved for your session)
        const token = await getAuthToken();

        // Constructing the query
        let query = `https://api.amadeus.com/v2/shopping/flight-offers?originLocationCode=${origin}&destinationLocationCode=${destination}&departureDate=${departureDate}&adults=${adults}&travelClass=${travelClass}`;
        
        if (returnDate) query += `&returnDate=${returnDate}`;
        if (children > 0) query += `&children=${children}`;
        if (infants > 0) query += `&infants=${infants}`;
        if (directFlights) query += `&nonStop=true`;

        try {
            const response = await fetch(query, {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            });
            
            if (response.ok) {
                const data = await response.json();
                displayResults(data);
            } else {
                alert("Error: " + response.status + " - " + response.statusText);
            }
        } catch (error) {
            console.error("Error:", error);
        }
    });

    // Function to get an auth token from Amadeus
    async function getAuthToken() {
        const authResponse = await fetch("https://api.amadeus.com/v1/security/oauth2/token", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `grant_type=client_credentials&client_id=AnOTl9EWBXqe8CVpOlGJcGo5FMpmEa7N&client_secret=AxhVAhZMNQlwCI5z`
        });

        const authData = await authResponse.json();
        return authData.access_token;
    }

    // Function to display the results
    function displayResults(data) {
        const resultsContainer = document.createElement("div");
        resultsContainer.className = "results";
        resultsContainer.innerHTML = "<h3>Flight Search Results</h3>";
        
        data.data.forEach(offer => {
            const offerElement = document.createElement("div");
            offerElement.className = "offer";
            
            const segments = offer.itineraries.map(itinerary => {
                return itinerary.segments.map(segment => `
                    <p><strong>Flight:</strong> ${segment.carrierCode} ${segment.number}</p>
                    <p><strong>From:</strong> ${segment.departure.iataCode} at ${segment.departure.at}</p>
                    <p><strong>To:</strong> ${segment.arrival.iataCode} at ${segment.arrival.at}</p>
                `).join("");
            }).join("<hr>");

            offerElement.innerHTML = `
                <div><strong>Price:</strong> ${offer.price.total} ${offer.price.currency}</div>
                ${segments}
                <hr>
            `;
            resultsContainer.appendChild(offerElement);
        });
        
        document.body.appendChild(resultsContainer);
    }
</script>
