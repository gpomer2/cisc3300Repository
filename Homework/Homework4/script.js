const cats = [
    { name: 'Charlie', adoptionStatus: 'available' },
    { name: 'Lily', adoptionStatus: 'not-available' },
    { name: 'Coco', adoptionStatus: 'available' },
    { name: 'Oreo', adoptionStatus: 'not-available' },
    { name: 'Luna', adoptionStatus: 'available' },
    { name: 'Milo', adoptionStatus: 'available' },
    { name: 'Lola', adoptionStatus: 'not-available' },
    { name: 'Leo', adoptionStatus: 'available' },
    { name: 'Willow', adoptionStatus: 'available' },
    { name: 'Bella', adoptionStatus: 'not-available' },
    { name: 'Max', adoptionStatus: 'available' },
    { name: 'Cleo', adoptionStatus: 'available' },
    { name: 'Lucy', adoptionStatus: 'not-available' },
    { name: 'Daisy', adoptionStatus: 'available' }
];

const cat = { 
    name: "Pinecone", 
    age: 13, 
    type: 'Munchkin', 
    cuteness: 9001 
};

// Function to display adopted cats
function displayAdoptedCats() {
    const adoptedCats = cats
        .filter(cat => cat.adoptionStatus === 'available')
        .map(cat => cat.name);

    const message = adoptedCats.length > 0
        ? `Congratulations! You have adopted: ${adoptedCats.join(', ')}.`
        : "No cats are available for adoption at the moment.";

    document.getElementById("cat-message").textContent = message;
}

// Function to display properties of the `cat` object
function displayCatObjectDetails() {
    let details = "";
    for (const key in cat) {
        details += `${key}: ${cat[key]}<br>`;
        console.log(`${key}: ${cat[key]}`); // Logs values to the console
    }
    document.getElementById("cat-object-message").innerHTML = details;
}

// Function to generate a random number and set a message using a ternary operator
function generateRandomNumber() {
    const randomNumber = Math.floor(Math.random() * 10) + 1;
    const result = randomNumber > 5 ? "greater than five!" : "less than five!";

    document.getElementById("random-message").textContent = `Random number: ${randomNumber} - ${result}`;
}

// Function to compare an integer 1 and string '1'
function compareValues() {
    const num = 1;
    const str = '1';

    let results = "";

    // First if statement (evaluates as true)
    if (num == str) {  // == performs type coercion
        results += "The values are equal using == (loose equality).<br>";
        console.log("The values are equal using ==.");
    }

    // Second if statement (evaluates as false)
    if (num === str) {  // === checks both value and type
        results += "The values are strictly equal using ===.";
        console.log("The values are strictly equal using ===.");
    } else {
        results += "The values are NOT strictly equal using ===.";
        console.log("The values are NOT strictly equal using ===.");
    }

    document.getElementById("comparison-results").innerHTML = results;
}

// Function to create an array of cat names concatenated with " is cute!"
function createCuteCatsArray() {
    const cuteCats = cats.map(cat => `${cat.name} is cute!`);
    
    document.getElementById("cute-cats").innerHTML = cuteCats.join("<br>");
    console.log(cuteCats); // Logs the array to the console
}

// Run functions after the page loads
document.addEventListener("DOMContentLoaded", () => {
    displayAdoptedCats();
    displayCatObjectDetails();
    compareValues();
    createCuteCatsArray();
});
