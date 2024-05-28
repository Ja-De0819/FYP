document.getElementById('pay-button').addEventListener('click', function() {
    const contentToReplace1 = document.getElementById('content-to-replace1');
    const contentToReplace2 = document.getElementById('content-to-replace2');
    const replacementContent = document.getElementById('replacement-content');

    contentToReplace1.style.display = 'none'; // Hide the initial content
    contentToReplace2.style.display = 'none'; // Hide the initial content
    replacementContent.style.display = 'block'; // Display the replacement content
});
