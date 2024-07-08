document.addEventListener('DOMContentLoaded', () => {
    const profiles = document.querySelectorAll('.profile');
    const modal = document.getElementById('pet-modal');
    const modalImage = document.getElementById('modal-image');
    const modalName = document.getElementById('modal-name');
    const modalAge = document.getElementById('modal-age');
    const modalGender = document.getElementById('modal-gender');
    const modalDescription = document.getElementById('modal-description');
    const span = document.getElementsByClassName('close')[0];


    profiles.forEach(profile => {
        profile.addEventListener('click', () => {
            modal.style.display = 'block';
            modalImage.src = profile.getAttribute('data-image-url');
            modalName.textContent = profile.getAttribute('data-name');
            modalAge.textContent = profile.getAttribute('data-age');
            modalGender.textContent = profile.getAttribute('data-gender');
            modalDescription.textContent = profile.getAttribute('data-description');
        });
    });

    // close the modal
    span.onclick = () => {
        modal.style.display = 'none';
    };

    // Close the modal when clicking outside of the modal content
    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };

    
    const joinButton = document.querySelector('.join-button');
    joinButton.addEventListener('click', () => {
        document.getElementById('join').scrollIntoView({ behavior: 'smooth' });
    });
});
