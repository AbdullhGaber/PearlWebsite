const circularContactImage = document.getElementById('circular-contact-image');
const callStatusText = document.getElementById('call-status-text');
const audioCallTimer = document.getElementById('call-timer');

function showWelcomeScreen() {
  document.getElementById('chat-container').style.display = 'none';
  document.getElementById('welcome-screen').style.display = 'flex';
  document.getElementById('chat-messages').innerHTML = '';

  document.getElementById('call-header').style.display = 'none';
  document.getElementById('call-status').style.display = 'none';
  document.getElementById('call-controls').style.display = 'none';

  document.getElementById('chat-header').style.display = 'flex';
  document.getElementById('chat-messages').style.display = 'flex';
  document.getElementById('chat-input').style.display = 'flex';
}

const contacts = [
  { id: 1, name: 'John Doe', lastMessage: 'Hello there!' },
  { id: 2, name: 'Jane Smith', lastMessage: 'Hey! How are you?' },
  { id: 3, name: 'Alice', lastMessage: 'Hi, nice to meet you.' },
  { id: 4, name: 'Bob', lastMessage: 'What\'s up?' },
  { id: 5, name: 'Charlie', lastMessage: 'Long time no see!' },
  { id: 6, name: 'Emily', lastMessage: 'How have you been?' },
  { id: 7, name: 'David', lastMessage: 'Let\'s catch up soon!' },
  { id: 8, name: 'Sarah', lastMessage: 'Sure, sounds good!' },
];

let selectedContactId = null;

function createContactElement(contact) {
  const contactElement = document.createElement('li');
  contactElement.classList.add('contact');
  contactElement.dataset.userId = contact.id;

  const contactContent = document.createElement('div');
  contactContent.classList.add('contact-content');

  const contactImage = document.createElement('img');
  contactImage.src = `https://source.unsplash.com/random/${contact.id}`;
  contactImage.alt = `${contact.name} avatar`;

  const contactDetails = document.createElement('div');
  contactDetails.classList.add('contact-details');

  const contactName = document.createElement('h6');
  contactName.textContent = contact.name;

  const lastMessage = document.createElement('p');
  lastMessage.textContent = contact.lastMessage;

  contactDetails.appendChild(contactName);
  contactDetails.appendChild(lastMessage);

  contactContent.appendChild(contactImage);
  contactContent.appendChild(contactDetails);

  contactElement.appendChild(contactContent);
  return contactElement;
}

function updateChat(contactId) {
  const contact = contacts.find(contact => contact.id === contactId);
  const chatHeader = document.getElementById('chat-header');
  const userAvatar = chatHeader.querySelector('.default-avatar img');

  chatHeader.querySelector('h2').textContent = contact.name;
  userAvatar.src = `https://source.unsplash.com/random/${contactId}`;
  document.getElementById('chat-container').style.display = 'flex';
  document.getElementById('welcome-screen').style.display = 'none';
  document.getElementById('chat-messages').innerHTML = '';
  displayLastMessage(contact);
}

function displayLastMessage(contact) {
  const contactElement = document.querySelector(`.contact[data-user-id="${contact.id}"]`);
  const lastMessageElement = contactElement.querySelector('p');
  lastMessageElement.textContent = contact.lastMessage;
}

document.getElementById('contacts-list').addEventListener('click', (event) => {
  const clickedContact = event.target.closest('.contact');
  if (clickedContact) {
    const contactId = parseInt(clickedContact.dataset.userId, 10);
    selectedContactId = contactId;

    document.querySelectorAll('.contact').forEach(contact => contact.classList.remove('active'));
    clickedContact.classList.add('active');

    updateChat(selectedContactId);
  }
});

document.getElementById('search-bar').addEventListener('input', () => {
  const searchTerm = document.getElementById('search-bar').value.toLowerCase();
  const filteredContacts = contacts.filter(contact => contact.name.toLowerCase().includes(searchTerm));
  document.getElementById('contacts-list').innerHTML = '';
  filteredContacts.forEach(contact => {
    const contactElement = createContactElement(contact);
    document.getElementById('contacts-list').appendChild(contactElement);
  });
});

function sendMessage() {
  const messageInput = document.getElementById('message-input');
  const message = messageInput.value.trim();
  let messageType;
  let messageContent;

  if (message.startsWith('<img') && message.endsWith('>')) {
    messageType = 'image';
    messageContent = message;
  } else if (message) {
    messageType = 'text';
    messageContent = `<p>${message}</p>`;
  }

  messageInput.value = '';

  if (messageType === 'image') {
    const imgMessage = document.createElement('div');
    imgMessage.classList.add('message', 'you');
    imgMessage.innerHTML = messageContent;
    document.getElementById('chat-messages').appendChild(imgMessage);
  } else if (messageType === 'text') {
    const textMessage = document.createElement('div');
    textMessage.classList.add('message', 'you');
    textMessage.innerHTML = messageContent;
    document.getElementById('chat-messages').appendChild(textMessage);
  }

  setTimeout(() => {
    const contact = contacts.find(c => c.id === selectedContactId);

    const otherMessage = document.createElement('div');
    otherMessage.classList.add('message', 'other');
    otherMessage.innerHTML = `<p>This is a response from ${contact.name}!</p>`;
    document.getElementById('chat-messages').appendChild(otherMessage);
    contact.lastMessage = `This is a response from ${contact.name}!`;
    displayLastMessage(contact);

    if (messageType === 'image') {
      setTimeout(() => {
        const imgResponse = document.createElement('div');
        imgResponse.classList.add('message', 'other');
        imgResponse.innerHTML = `<p>This is a response from ${contact.name} to your image!</p>`;
        document.getElementById('chat-messages').appendChild(imgResponse);
        contact.lastMessage = `This is a response from ${contact.name} to your image!`;
        displayLastMessage(contact);
      }, 1000);
    }
  }, 1000);
}


document.getElementById('send-button').addEventListener('click', sendMessage);

document.getElementById('message-input').addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    event.preventDefault();
    sendMessage();
  }
});

contacts.forEach(contact => {
  const contactElement = createContactElement(contact);
  document.getElementById('contacts-list').appendChild(contactElement);
});

showWelcomeScreen();

function handleEmojiClick() {
  console.log("Emoji icon clicked");

  const messageInput = document.getElementById('message-input');
  messageInput.value += '😊';
}

function handleRecordClick() {
  console.log("Record icon clicked");

  const messageInput = document.getElementById('message-input');
  messageInput.placeholder = 'Recording...';
  messageInput.disabled = true;

  setTimeout(() => {
    messageInput.placeholder = 'Type your message...';
    messageInput.disabled = false;
  }, 5000);
}

function handleImageClick() {
  console.log("Image icon clicked");

  const input = document.createElement("input");
  input.type = "file";
  input.accept = "image/*";

  let selectedImageFile = null;

  input.addEventListener("change", (event) => {
    selectedImageFile = event.target.files[0];

    if (selectedImageFile) {
      const imagePreviewContainer = document.getElementById('image-preview-container');

      const imgPreview = document.createElement('img');
      imgPreview.src = URL.createObjectURL(selectedImageFile);
      imgPreview.alt = 'Selected Image';
      imgPreview.style.maxWidth = '60px';

      imagePreviewContainer.innerHTML = '';
      imagePreviewContainer.appendChild(imgPreview);
    }
  });

  input.click();

  document.getElementById('send-button').addEventListener('click', () => {
    if (selectedImageFile) {
      console.log("Selected image:", selectedImageFile);

      const youMessage = document.createElement('div');
      youMessage.classList.add('message', 'you');
      youMessage.innerHTML = `<img src="${URL.createObjectURL(selectedImageFile)}" alt="Selected Image" style="max-width: 30px;" />`;
      document.getElementById('chat-messages').appendChild(youMessage);

      selectedImageFile = null;

      const imagePreviewContainer = document.getElementById('image-preview-container');
      imagePreviewContainer.innerHTML = '';
    }
  });
}



document.querySelector('.input-icons i.fa-smile').addEventListener('click', handleEmojiClick);
document.querySelector('.input-icons i.fa-microphone').addEventListener('click', handleRecordClick);
document.querySelector('.input-icons i.fa-camera').addEventListener('click', handleImageClick);
document.getElementById('back-icon').addEventListener('click', showWelcomeScreen);

function startCallTimer() {
  let seconds = 0;

  const timerInterval = setInterval(() => {
    seconds++;
    const minutes = Math.floor(seconds / 60);
    const secondsDisplay = seconds % 60;
    audioCallTimer.textContent = `${minutes < 10 ? '0' : ''}${minutes}:${secondsDisplay < 10 ? '0' : ''}${secondsDisplay}`;
  }, 1000);

  audioCallTimer.timerInterval = timerInterval;

  setTimeout(() => {
    clearInterval(timerInterval);
  }, 3600000);
}

function backToChat() {
  document.getElementById('chat-container').style.display = 'flex';
  document.getElementById('welcome-screen').style.display = 'none';

  document.getElementById('chat-header').style.display = 'flex';
  document.getElementById('chat-messages').style.display = 'flex';
  document.getElementById('chat-input').style.display = 'flex';

  document.getElementById('call-header').style.display = 'none';
  document.getElementById('call-status').style.display = 'none';
  document.getElementById('call-controls').style.display = 'none';
}


document.getElementById('back-from-call').addEventListener('click', backToChat);

function startVideoCallTimer() {
  let seconds = 0;
  const timerElement = document.getElementById('video-call-timer');

  const timerInterval = setInterval(() => {
    seconds++;
    const minutes = Math.floor(seconds / 60);
    const secondsDisplay = seconds % 60;
    timerElement.textContent = `${minutes < 10 ? '0' : ''}${minutes}:${secondsDisplay < 10 ? '0' : ''}${secondsDisplay}`;
  }, 1000);

  timerElement.timerInterval = timerInterval;

  setTimeout(() => {
    clearInterval(timerInterval);
  }, 3600000);
}

document.querySelector('.callIcons i.fa-video-camera').addEventListener('click', startVideoCall);

function startAudioCall() {
  startCallCommon();

  document.getElementById('end-audio-call').style.display = 'flex';
  document.getElementById('end-video-call').style.display = 'none'

  audioCallTimer.style.display = 'none';

  setTimeout(() => {
    callStatusText.textContent = '';
    audioCallTimer.style.display = 'block';

    startCallTimer();
  }, 5000);
}

function startVideoCall() {
  startCallCommon();

  document.getElementById('video-call-timer').style.display = 'none';
  document.getElementById('video-call-timer').style.zIndex = '1';

  document.getElementById('open-video').style.color = '#6F6FAF';


  document.getElementById('end-video-call').style.display = 'flex';
  document.getElementById('end-audio-call').style.display = 'none'
  setTimeout(() => {
    callStatusText.textContent = '';

    const callStatus = document.getElementById('call-status');
    callStatus.innerHTML = '';
    const fullSizeImageContainer = document.createElement('div');
    fullSizeImageContainer.classList.add('full-size-image-container');
    const fullSizeImage = document.createElement('img');
    fullSizeImage.src = `https://source.unsplash.com/random/${selectedContactId}`;
    fullSizeImage.alt = 'Full Size Image';
    fullSizeImageContainer.appendChild(fullSizeImage);
    callStatus.appendChild(fullSizeImageContainer);

    fullSizeImage.style.animation = 'scaleAnimation 0.5s forwards';

    fullSizeImage.addEventListener('animationend', () => {
      const topRightImage = document.createElement('div');
      topRightImage.classList.add('top-right-image');
      const randomImage = document.createElement('img');
      randomImage.src = 'https://source.unsplash.com/random';
      randomImage.alt = 'Random Image';
      topRightImage.appendChild(randomImage);
      callStatus.appendChild(topRightImage);

      if (document.getElementById('video-call-timer').style.display === 'none') {
        document.getElementById('video-call-timer').style.display = 'block';
        startVideoCallTimer();
      }
    });
  }, 5000);
}

function startCallCommon() {
  document.getElementById('chat-container').style.display = 'flex';
  document.getElementById('welcome-screen').style.display = 'none';

  document.getElementById('call-header').style.display = 'flex';
  document.getElementById('call-status').style.display = 'flex';
  document.getElementById('call-controls').style.display = 'flex';

  document.getElementById('chat-header').style.display = 'none';
  document.getElementById('chat-messages').style.display = 'none';
  document.getElementById('chat-input').style.display = 'none';

  const contact = contacts.find(c => c.id === selectedContactId);
  document.getElementById('calling-contact-name').textContent = contact.name;

  circularContactImage.innerHTML = '';
  const callingContactImage = document.createElement('img');
  callingContactImage.src = `https://source.unsplash.com/random/${selectedContactId}`;
  callingContactImage.alt = `${contact.name} avatar`;
  circularContactImage.appendChild(callingContactImage);

  audioCallTimer.style.display = 'none';
  document.getElementById('video-call-timer').style.display = 'none';

  callStatusText.textContent = 'Ringing...';

}

function endAudioCall() {
  clearInterval(audioCallTimer.timerInterval);

  audioCallTimer.style.display = 'none';
  callStatusText.textContent = 'Call Ended';

  setTimeout(() => {
    resetCallUI();

    audioCallTimer.textContent = '00:00';

    document.getElementById('chat-header').style.display = 'flex';
    document.getElementById('chat-messages').style.display = 'flex';
    document.getElementById('chat-input').style.display = 'flex';
    document.getElementById('chat-container').style.display = 'flex';

  }, 2000);
}

function endVideoCall() {
  clearInterval(document.getElementById('video-call-timer').timerInterval);

  document.getElementById('video-call-timer').textContent = 'Call Ended';
  document.getElementById('video-call-timer').style.marginLeft = '27%';


  setTimeout(() => {
    resetCallUI();

    document.querySelector('.full-size-image-container').style.display = 'none';
    document.querySelector('.top-right-image').style.display = 'none';

    document.getElementById('video-call-timer').textContent = '00:00';

    document.getElementById('chat-header').style.display = 'flex';
    document.getElementById('chat-messages').style.display = 'flex';
    document.getElementById('chat-input').style.display = 'flex';
    document.getElementById('chat-container').style.display = 'flex';

  }, 2000);
}

function resetCallUI() {
  console.log('Resetting call UI');

  document.getElementById('chat-container').style.display = 'flex';
  document.getElementById('welcome-screen').style.display = 'none';

  document.getElementById('chat-header').style.display = 'flex';
  document.getElementById('chat-messages').style.display = 'flex';
  document.getElementById('chat-input').style.display = 'flex';

  const callHeader = document.getElementById('call-header');
  const callStatus = document.getElementById('call-status');
  const callControls = document.getElementById('call-controls');

  if (callHeader && callStatus && callControls) {
    callHeader.style.display = 'none';
    callStatus.style.display = 'none';
    callControls.style.display = 'none';
  } else {
    console.error('Some of the call elements not found');
  }

  callStatusText.textContent = '';

  circularContactImage.innerHTML = '';
}

const muteButton = document.getElementById('mute-call');

function muteCall() {

  if (muteButton.style.color === 'black') {
    muteButton.style.color = '#6F6FAF';
  } else {
    muteButton.style.color = 'black';
  }
}

document.getElementById('end-audio-call').addEventListener('click', endAudioCall);

document.querySelector('.callIcons i.fa-phone').addEventListener('click', startAudioCall);

document.querySelector('.callIcons i.fa-video-camera').addEventListener('click', startVideoCall);

document.getElementById('end-video-call').addEventListener('click', endVideoCall);

document.getElementById('mute-call').addEventListener('click', muteCall);