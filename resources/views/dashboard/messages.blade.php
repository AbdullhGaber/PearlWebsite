@extends('layouts.dashboard.dashboard_message.dashboard_message_main')
@section('content')
    <body>
        <div id="chat-app">
            <div id="sidebar">
                <h1>Messages</h1>
                <div id="search-container">
                    <div class="search-wrapper">
                        <input type="text" class="form-control" id="search-bar" placeholder="Search contacts..." />
                        <i class="fa fa-search messagesSearchIcon" aria-hidden="true"></i>
                    </div>
                </div>

                <ul id="contacts-list"></ul>
            </div>
            <div id="welcome-screen" class="welcome-screen">
                <img src="{{ asset('assets/Images/logo.svg') }}" alt="Welcome Image">
                <h1>Welcome to Pearl chat</h1>
            </div>
            <div id="chat-container" class="hidden">
                <div id="call-header" class="hidden">
                    <div class="back-icon" id="back-from-call">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="call-info">
                        <span class="calling-text">Calling<span id="calling-contact-name"></span></span>
                    </div>
                </div>
                <div id="call-status" class="hidden">
                    <div id="circular-contact-image" class="circular-image">
                    </div>
                    <div id="call-status-text">Ringing...</div>
                    <div id="call-timer" class="hidden">00:00</div>
                </div>
                <div id="call-controls" class="hidden">
                    <div id="video-call-timer" class="hidden">00:00</div>
                    <div class="controls">
                        <i class="fas fa-microphone" id="mute-call"></i>
                        <i class="fas fa-video-camera" id="open-video"></i>
                        <div id="end-audio-call">
                            <i class="fas fa-phone-slash" id="end-call-icon"></i>
                        </div>
                        <div id="end-video-call">
                            <i class="fas fa-phone-slash" id="end-call-icon"></i>
                        </div>
                    </div>
                </div>
                <div id="chat-header">
                    <div class="back-icon" id="back-icon">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="default-avatar">
                        <img src="" alt="User Avatar">
                    </div>
                    <h2></h2>
                    <div class="callIcons">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                    </div>
                </div>
                <div id="chat-messages"></div>
                <div id="chat-input">
                    <div class="input-icons">
                        <i id="emoji-icon" class="fas fa-smile"></i>
                        <i id="record-icon" class="fas fa-microphone"></i>
                        <i id="image-icon" class="fas fa-camera"></i>
                    </div>
                    <div id="image-preview-container"></div>
                    <input type="text" id="message-input" placeholder="Type your message..." />
                    <i id="send-button" class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </body>

</html>

</body>
    <script src="{{ asset('assets/js/dashboard/messages.js') }}"></script>
</html>
@endsection
