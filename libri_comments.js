
function getDiscussions() {
    const storedDiscussions = localStorage.getItem('discussions');
    return storedDiscussions ? JSON.parse(storedDiscussions) : [];
}

function saveDiscussions(discussions) {
    localStorage.setItem('discussions', JSON.stringify(discussions));
}

function renderDiscussions() {
    const discussionsList = document.getElementById('discussions');
    discussionsList.innerHTML = '';

    const discussions = getDiscussions();
    discussions.forEach(discussionText => {
        const discussionDiv = document.createElement('div');
        discussionDiv.classList.add('discussion');
        discussionDiv.textContent = discussionText;
        discussionsList.appendChild(discussionDiv);
    });
}

function postDiscussion() {
    const discussionInput = document.getElementById('discussion-text');
    const discussionText = discussionInput.value.trim();

    if (discussionText !== '') {
        const discussions = getDiscussions();
        discussions.push(discussionText);
        saveDiscussions(discussions);
        renderDiscussions();
        discussionInput.value = '';
    }
}

renderDiscussions();
