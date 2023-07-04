let selectedRating = 0;

function setRating(rating) {
  selectedRating = rating;
  
  // Remove the "selected" class from all emoji icons
  const emojis = document.querySelectorAll('.emoji');
  emojis.forEach(emoji => emoji.classList.remove('selected'));
  
  // Add the "selected" class to the clicked emoji icon
  const selectedEmoji = document.querySelector(`.emoji:nth-child(${rating})`);
  selectedEmoji.classList.add('selected');
}

function submitFeedback() {
  if (selectedRating === 0) {
    alert('Please select a rating!');
    return;
  }
  
  // Perform your feedback submission logic here
  alert(`Submitted feedback with rating: ${selectedRating}`);
}
