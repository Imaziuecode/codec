const fetch = require('node-fetch');
const { atob } = require('base-64'); // Make sure to install the 'base-64' package

async function follow(accessToken, id) {
    const cors = ['cors_url1', 'cors_url2']; // Replace with actual CORS URLs or array
    const randomBinary = getRandomBinary(); // Replace this with your implementation

    const url = atob(cors[randomBinary]) + atob("aHR0cHM6Ly9hcGkyLnNvbG9sZWFybi5jb20vdjIvdXNlcmluZm8vdjMvcHJvZmlsZS9mb2xsb3cv") + id;

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Accept": "application/json, text/plain, */*",
                "SL-Time-Zone": "+5.5",
                "Authorization": `Bearer ${accessToken}`,
                "Content-Type": "application/json; charset=utf-8",
                "Custom-Header": "Your Custom Value"
            },
            body: JSON.stringify({}) // Add your request body here
        });

        const responseData = await response.json();
        console.log("Response:", responseData);
        return responseData;
    } catch (error) {
        console.error("Error:", error);
        throw error;
    }
}

// Example usage
follow("yourAccessToken", "yourId");
