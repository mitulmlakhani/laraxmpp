<!DOCTYPE html>
<html>

<head>
    <style>
        .mytext {
            border: 0;
            padding: 10px;
            background: #333;
        }

        .text {
            width: 75%;
            display: flex;
            flex-direction: column;
        }

        .text>p:first-of-type {
            width: 100%;
            margin-top: 0;
            margin-bottom: auto;
            line-height: 13px;
            font-size: 12px;
        }

        .text>p:last-of-type {
            width: 100%;
            text-align: right;
            color: silver;
            margin-bottom: -7px;
            margin-top: auto;
        }

        .text-l {
            float: left;
            padding-right: 10px;
        }

        .text-r {
            float: right;
            padding-left: 10px;
        }

        .avatar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 25%;
            float: left;
            padding-right: 10px;
        }

        .macro {
            margin-top: 5px;
            width: 85%;
            border-radius: 5px;
            padding: 5px;
            display: flex;
        }

        .msj-rta {
            float: right;
            background: whitesmoke;
        }

        .msj {
            float: left;
            background: white;
        }

        .frame {
            background: #e0e0de;
            height: 450px;
            overflow: hidden;
            padding: 0;
        }

        .frame>div:last-of-type {
            position: absolute;
            bottom: 5px;
            width: 100%;
            display: flex;
        }

        ul {
            width: 100%;
            list-style-type: none;
            padding: 18px;
            position: absolute;
            bottom: 32px;
            display: flex;
            flex-direction: column;

        }

        .msj:before {
            width: 0;
            height: 0;
            content: "";
            top: -5px;
            left: -14px;
            position: relative;
            border-style: solid;
            border-width: 0 13px 13px 0;
            border-color: transparent #ffffff transparent transparent;
        }

        .msj-rta:after {
            width: 0;
            height: 0;
            content: "";
            top: -5px;
            left: 14px;
            position: relative;
            border-style: solid;
            border-width: 13px 13px 0 0;
            border-color: whitesmoke transparent transparent transparent;
        }

        input:focus {
            outline: none;
        }

        ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #d4d4d4;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: #d4d4d4;
        }

        :-ms-input-placeholder {
            /* IE 10+ */
            color: #d4d4d4;
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: #d4d4d4;
        }
    </style>
</head>

<body>
    <div class="col-sm-3 col-sm-offset-4 frame">
        <ul></ul>
        <div>
            <div class="msj-rta macro" style="margin:auto">
                <div class="text text-r" style="background:whitesmoke !important">
                <input class="mytext" placeholder="Type a message" />
                </div>
            </div>
        </div>
    </div>
    <script src="js/strophejs/dist/strophe.js"></script>
    <script>
        const JID = "{{ session('jid') }}";
        const SID = "{{ session('sid') }}";
        var RID = "{{ session('rid') }}";
        const BOSH_URI = "http://192.168.0.32:7070/http-bind/";
    </script>
    <script src="js/xampp.js"></script>
    <script>
        XamppChat.connect();

        XamppChat.getRosters();
        // XamppChat.sendMessage('aa@192.168.0.32', 'test22');
    </script>
</body>

</html>