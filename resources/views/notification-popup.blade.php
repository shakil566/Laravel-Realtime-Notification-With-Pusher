
    <!-- Notification with pusher start here -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('3f13c0fa3b23f760f9d5', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('notification-channel');
        channel.bind('new-user-event', function(data) {

            // Popup with new user name
            var userName = data.userName;
            toastr.info(userName + ' joined now !')
            toastr.options.timeOut = 60; // How long the toast will display without user interaction
            toastr.options.extendedTimeOut = 60; // How long the toast will display after a user hovers over it
            
            // alert(JSON.stringify(data));
        });
    </script>
    <!-- Notification with pusher end here -->