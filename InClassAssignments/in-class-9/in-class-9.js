// Function to check if a string contains "pinecone"
const includesPinecone = (str) => str.includes("pinecone");

// Array of sentences
const sentences = [
    "The forest is full of tall trees and green leaves.",
    "I found a pinecone on the hiking trail.",
    "Birds chirp early in the morning.",
    "Pinecones fall from the trees in autumn.",
    "The sun sets beautifully over the mountains."
];

// Filtering sentences that contain "pinecone"
const pineconeSentences = sentences.filter(includesPinecone);

// Output the result
console.log(pineconeSentences);
