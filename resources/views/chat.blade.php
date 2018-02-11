<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat App</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <div class="container" id="app">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 offset-sm-4 offset-md-4 offset-lg-4 offset-xl-4">
                <div class="chat-window">
                    <li class="list-group-item active">Chat Room</li>
                    <ul class="list-group" v-chat-scroll='{always: false}'>
                        <message
                                v-for='value,index in chat.messages'
                                :key=value.index
                                color='success'
                                :user=chat.user[index]
                        >
                            @{{ value }}
                        </message>
                    </ul>
                    <input type="text" class="form-control" placeholder="Write your message here..." v-model='message' @keyup.enter='sendMessage'>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>